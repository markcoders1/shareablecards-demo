<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
	{
		$this->ensureIsNotRateLimited();

		$recaptchaResponse = $this->input('g-recaptcha-response');
		if (!$this->verifyRecaptcha($recaptchaResponse)) {
			throw ValidationException::withMessages([
				'g-recaptcha-response' => [__('Recaptcha Not Verified')],
			]);
		}

		// Only attempt authentication if the reCAPTCHA check passes.
		if (!Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
			RateLimiter::hit($this->throttleKey());
			throw ValidationException::withMessages([
				'email' => __('auth.failed'),
			]);
		}

		// Clear the rate limiter for the successful attempt.
		RateLimiter::clear($this->throttleKey());
	}

    /**
     * Ensure the login request is not rate limited.
     *
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    protected function verifyRecaptcha($response)
	{
	    $secretKey = env('RECAPTCHA_SECRET_KEY');
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$response);
		$responseData = json_decode($verifyResponse);
		if($responseData->success)
		return true;
		else
			return false;
	}


    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(): string
    {
        return Str::lower($this->input('email')).'|'.$this->ip();
    }
}
