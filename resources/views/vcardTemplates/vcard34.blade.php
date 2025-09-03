<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    @if (checkFeature('seo'))
        @if ($vcard->meta_description)
            <meta name="description" content="{{ $vcard->meta_description }}">
        @endif
        @if ($vcard->meta_keyword)
            <meta name="keywords" content="{{ $vcard->meta_keyword }}">
        @endif
    @else
        <meta name="description" content="{{ $vcard->description }}">
        <meta name="keywords" content="">
    @endif
    <meta property="og:image" content="{{ $vcard->cover_url }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @if (checkFeature('seo') && $vcard->site_title && $vcard->home_title)
        <title>{{ $vcard->home_title }} | {{ $vcard->site_title }}</title>
    @else
        <title>{{ $vcard->name }} | {{ getAppName() }}</title>
    @endif  

    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">

    {{--css link--}}
    <link rel="stylesheet" href="{{ asset('assets/css/vcard34.css')}}">

    {{--slick slider--}}
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/new_vacrd/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/new_vcard/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/new_vcard/custom.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/third-party.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-vcard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
    <!-- Favicon -->
    <link rel="icon" href="{{ getFaviconUrl() }}" type="image/png">
    {{--google font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Syne:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @if (checkFeature('custom-fonts') && $vcard->font_family)
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family={{ $vcard->font_family }}">
    @endif
    @if ($vcard->font_family || $vcard->font_size || $vcard->custom_css)
        <style>
            @if (checkFeature('custom-fonts'))
                @if ($vcard->font_family)
                    body {
                        font-family: {{ $vcard->font_family }};
                    }
                @endif
                @if ($vcard->font_size)
                    div>h4 {
                        font-size: {{ $vcard->font_size }}px !important;
                    }
                @endif
            @endif
            @if (isset(checkFeature('advanced')->custom_css))
                {!! $vcard->custom_css !!}
            @endif
        </style>
    @endif
</head>

<body>
    <div class="container">
		{{-- qr code --}}
            @if (isset($vcard['show_qr_code']) && $vcard['show_qr_code'] == 1)
            <div class="vcard-two__qr-code d-none py-3 position-relative px-3">
                {{-- shape img --}}
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card qr-code-card p-3 border-0">
                                <h4 class="vcard-two-heading  text-center pb-4">{{ __('messages.vcard.qr_code') }}
                                </h4>
                            </div>
							<div class="qr-code-image d-flex justify-content-center">
								@if (isset($customQrCode['applySetting']) && $customQrCode['applySetting'] == 1)
								{!! QrCode::color(
								$qrcodeColor['qrcodeColor']->red(),
								$qrcodeColor['qrcodeColor']->green(),
								$qrcodeColor['qrcodeColor']->blue(),
								)->backgroundColor(
								$qrcodeColor['background_color']->red(),
								$qrcodeColor['background_color']->green(),
								$qrcodeColor['background_color']->blue(),
								)->style($customQrCode['style'])->eye($customQrCode['eye_style'])->size(130)->format('svg')->generate(Request::url()) !!}
								@else
								{!! QrCode::size(130)->format('svg')->generate(Request::url()) !!}
								@endif
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        <div class="vcard-one main-content w-100 mx-auto position-relative">
            {{--banner--}}
            <div class="vcard-one__banner w-100 position-relative">
            <img src="{{ $vcard->cover_url }}" class="position-absolute top-0 start-0 h-100 w-100" alt="background image" />
                {{--profile details--}}
                <div class="row position-relative z-2 px-0">
                    <div class="col-7">
                        <div class="vcard-one__profile-details text-white py-3 d-flex flex-column align-items-start justify-content-center h-100">
                            <h2 class="status">{{ ucwords($vcard->occupation) }}</h2>
                            <h3 class="profile-name">Hello! I’m <br /> <span class="text-orange">{{ ucwords($vcard->first_name . ' ' . $vcard->last_name) }}</span></h3>
                            <p class="profile-detail mb-2">@if ($vcard->job_title || $vcard->company)({{ ucwords($vcard->job_title) }} {{ ucwords($vcard->company) }})@endif</p>
                            <p class="profile-detail mb-2" style="font-size:12px;"><?= strip_tags($vcard->description)?></p>
                            @if (checkFeature('social_links') && getSocialLink($vcard))
                        <div class="social-icons d-flex justify-content-center gap-3 flex-wrap">
                            @foreach (getSocialLink($vcard) as $value)
                                {!! $value !!}
                            @endforeach
                        </div>
                    @endif
                        </div>
                    </div>
                    <div class="col-5 ps-0 profile-img">
                        <img src="{{ $vcard->profile_url }}" alt="profile" class="img-fluid">
                    </div>
                </div>
				<div class="d-flex justify-content-end position-absolute top-0 end-0 me-3 z-2">
                @if ($vcard->language_enable == \App\Models\Vcard::LANGUAGE_ENABLE)
                            <div class="language pt-4 me-2">
                                <ul class="text-decoration-none">
                                    <li class="dropdown1 dropdown lang-list">
                                        <a class="dropdown-toggle lang-head text-decoration-none" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">
                                            <i
                                                class="fa-solid fa-language me-2"></i>{{ getLanguage($vcard->default_language) }}
                                        </a>
                                        <ul class="dropdown-menu start-0 top-dropdown lang-hover-list top-100 mt-0">
                                            @foreach (getAllLanguageWithFullData() as $language)
                                                <li
                                                    class="{{ getLanguageIsoCode($vcard->default_language) == $language->iso_code ? 'active' : '' }}">
                                                    <a href="javascript:void(0)" id="languageName"
                                                        data-name="{{ $language->iso_code }}">
                                                        @if (array_key_exists($language->iso_code, \App\Models\User::FLAG))
                                                            @foreach (\App\Models\User::FLAG as $imageKey => $imageValue)
                                                                @if ($imageKey == $language->iso_code)
                                                                    <img src="{{ asset($imageValue) }}"
                                                                        class="me-1" />
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            @if (count($language->media) != 0)
                                                                <img src="{{ $language->image_url }}" class="me-1" />
                                                            @else
                                                                <i class="fa fa-flag fa-xl me-3 text-danger"
                                                                    aria-hidden="true"></i>
                                                            @endif
                                                        @endif
                                                        {{ $language->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        @endif
                </div>
            </div>

            {{--contact--}}

            <section id="contact" class="py-4 bg-light">
                <div class="container">
                    <div class="row g-3">
                    @if ($vcard->email)
                        <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">{{ __('messages.vcard.email_address') }}</h6>
                                    <a href="mailto:{{ $vcard->email }}" class="contact-link text-black">{{ $vcard->email }}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($vcard->alternative_email)
                    <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">{{ __('messages.vcard.alter_email_address') }}</h6>
                                    <a href="mailto:{{ $vcard->alternative_email }}" class="contact-link text-black">{{ $vcard->alternative_email }}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($vcard->phone)
                        <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">{{ __('messages.vcard.mobile_number') }}</h6>
                                    <a href="tel:+{{ $vcard->region_code }}{{ $vcard->phone }}" class="contact-link text-black">+{{ $vcard->region_code }}{{ $vcard->phone }}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($vcard->alternative_phone)
                        <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">{{ __('messages.vcard.alter_mobile_number') }}</h6>
                                    <a href="tel:+{{ $vcard->alternative_region_code }}{{ $vcard->alternative_phone }}" class="contact-link text-black">+{{ $vcard->alternative_region_code }}{{ $vcard->alternative_phone }}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($vcard->dob)
                        <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                <svg style="margin-left: -3px; margin-right: -5px;" width="25" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_159_232)">
                                            <path d="M0.390592 26C0.264594 25.7615 0.0629984 25.5355 0.0251991 25.2844C-0.0377996 24.8324 0.0251991 24.3679 -3.51807e-07 23.916C-0.0126001 23.5017 0.163796 23.2883 0.592188 23.3008C0.718185 23.3008 0.844183 23.3008 0.97018 23.3008C10.3318 23.3008 19.6808 23.3008 29.0424 23.3134C29.3574 23.3134 29.6724 23.4389 29.9874 23.5017C29.9874 24.3303 29.9874 25.1714 29.9874 26C20.1344 26 10.2562 26 0.390592 26Z" fill="url(#paint0_linear_159_232)"></path>
                                            <path d="M15.0315 10.6461C18.3957 10.6461 21.7598 10.6461 25.1365 10.6461C27.0391 10.6461 27.9715 11.5877 27.9841 13.4959C27.9841 13.521 27.9841 13.5336 27.9841 13.5587C28.2109 14.6635 27.6943 15.2912 26.7115 15.718C25.7161 16.1449 24.7585 16.2328 23.8892 15.492C23.4608 15.128 23.108 14.6886 22.7552 14.2492C22.289 13.6842 21.848 13.6717 21.3692 14.2241C21.0542 14.5881 20.7392 14.9522 20.3864 15.2661C19.391 16.1574 18.2949 16.2579 17.1735 15.5423C16.6695 15.2159 16.2159 14.8016 15.7749 14.3873C15.1701 13.8223 14.9055 13.8223 14.3133 14.4124C13.9731 14.7513 13.6204 15.0778 13.2298 15.354C11.9068 16.3081 10.7098 16.2453 9.47504 15.1907C9.28604 15.0275 9.10965 14.8518 8.94585 14.6635C8.10167 13.6968 7.92527 13.6968 7.08109 14.7011C5.93451 16.057 4.48554 16.3583 2.87277 15.6301C2.24278 15.3414 2.00339 14.902 2.06639 14.2492C2.10419 13.9353 2.14199 13.6215 2.10419 13.3201C1.88999 11.776 3.13737 10.621 4.75013 10.6335C8.16467 10.6712 11.5918 10.6461 15.0315 10.6461Z" fill="url(#paint1_linear_159_232)"></path>
                                            <path d="M27.7322 21.606C19.2526 21.606 10.8107 21.606 2.33112 21.606C2.33112 20.2878 2.33112 18.9696 2.33112 17.6012C4.43527 18.3042 6.27484 17.8522 7.78681 16.2327C10.3068 18.6432 12.6251 18.3168 15.0569 16.1574C18.0682 18.7687 20.2354 18.1661 22.2891 16.1198C22.9821 16.8605 23.7381 17.5384 24.7713 17.802C25.7918 18.0657 26.7494 17.8522 27.7574 17.4254C27.7322 18.8315 27.7322 20.1874 27.7322 21.606Z" fill="url(#paint2_linear_159_232)"></path>
                                            <path d="M13.2297 9.46596C13.2297 8.22308 13.2171 7.00531 13.2423 5.77499C13.2549 5.37325 13.5447 5.13472 13.9605 5.13472C14.6535 5.12217 15.3465 5.12217 16.0269 5.13472C16.5056 5.13472 16.7828 5.41092 16.7828 5.87542C16.808 7.05553 16.7954 8.24819 16.7954 9.46596C15.5985 9.46596 14.4393 9.46596 13.2297 9.46596Z" fill="url(#paint3_linear_159_232)"></path>
                                            <path d="M15.0189 0C15.3213 0.55239 15.6741 1.18011 16.0143 1.82038C16.1655 2.10913 16.3671 2.39788 16.4553 2.71173C16.6443 3.40222 16.3419 4.15548 15.8001 4.45678C15.2583 4.75809 14.4267 4.67021 13.9857 4.26847C13.5196 3.82907 13.3684 2.98793 13.6959 2.37277C14.1243 1.54418 14.5905 0.740705 15.0189 0Z" fill="url(#paint4_linear_159_232)"></path>
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_159_232" x1="-0.00384533" y1="24.6501" x2="29.9874" y2="24.6501" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#D68328"></stop>
                                                <stop offset="0.489583" stop-color="#FFC994"></stop>
                                                <stop offset="1" stop-color="#D68328"></stop>
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_159_232" x1="2.05664" y1="13.3389" x2="28.037" y2="13.3389" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#D68328"></stop>
                                                <stop offset="0.489583" stop-color="#FFC994"></stop>
                                                <stop offset="1" stop-color="#D68328"></stop>
                                            </linearGradient>
                                            <linearGradient id="paint2_linear_159_232" x1="2.33112" y1="18.8629" x2="27.7574" y2="18.8629" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#D68328"></stop>
                                                <stop offset="0.489583" stop-color="#FFC994"></stop>
                                                <stop offset="1" stop-color="#D68328"></stop>
                                            </linearGradient>
                                            <linearGradient id="paint3_linear_159_232" x1="13.2266" y1="7.29563" x2="16.7986" y2="7.29563" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#D68328"></stop>
                                                <stop offset="0.489583" stop-color="#FFC994"></stop>
                                                <stop offset="1" stop-color="#D68328"></stop>
                                            </linearGradient>
                                            <linearGradient id="paint4_linear_159_232" x1="13.5206" y1="2.31819" x2="16.5118" y2="2.31819" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#D68328"></stop>
                                                <stop offset="0.489583" stop-color="#FFC994"></stop>
                                                <stop offset="1" stop-color="#D68328"></stop>
                                            </linearGradient>
                                            <clipPath id="clip0_159_232">
                                                <rect width="30" height="26" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">{{ __('messages.vcard.dob') }}</h6>
                                    <a href="#!" class="contact-link text-black">{{ $vcard->dob }}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($vcard->location)
                        <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">{{ __('messages.setting.address') }}</h6>
                                    <a href="#!" class="contact-link text-black">{!! ucwords($vcard->location) !!}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    </div>
                </div>
            </section>

            {{--services--}}

            <section id="services" class="py-5">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="services-left d-flex flex-column">
                                
                                <h3 class="services-title mb-3">About Me</h3>
                                <p class="services-detail mb-2">{!! $vcard->description !!}</p>
                            </div>
                        </div>
                        @if (checkFeature('services') && $vcard->services->count())
                        <div class="col-sm-6">
                            <div class="services-right">
                            <h2 class="status mb-2">{{ __('messages.vcard.our_service') }}</h2>
                                <div class="services-category">
                                @foreach ($vcard->services as $service)
                                <a href="{{ $service->service_url ?? 'javascript:void(0)' }}"
                                        class="text-decoration-none {{ $service->service_url ? 'pe-auto' : 'pe-none' }}"
                                        target="{{ $service->service_url ? '_blank' : '' }}">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="category-img">
                                            <img src="{{ $service->service_icon }}" class="img-fluid" alt="{{ $service->name }}">
                                        </div>
                                        <h4 class="category-text">{{ ucwords($service->name) }}</h4>
                                    </div>
                                    </a>
                                    <hr class="my-2" />
                                @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
            </section>

            {{--hours--}}
        @if ($vcard->businessHours->count())
        @php
            $todayWeekName = strtolower(\Carbon\Carbon::now()->rawFormat('D'));
        @endphp
            <section id="hours" class="bg-black py-5">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-12">
                            <h2 class="main-heading text-white">Business Hour</h2>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="d-flex flex-column align-items-center px-4 gap-3 bg-light rounded shadow py-4">
                            @foreach ($businessDaysTime as $key => $dayTime)
                        <div class="mb-10 d-flex align-items-center justify-content-between hours">
                            <span class="me-2">
                                {{ __('messages.business.' . \App\Models\BusinessHour::DAY_OF_WEEK[$key]) }} :</span>
                            <span>{{ $dayTime ?? __("messages.common.closed") }}</span>
                        </div>
                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

            {{--gallery--}}
            @if (checkFeature('gallery') && $vcard->gallery->count())
            <section id="gallery" class="py-5">
                <div class="container px-sm-4">
                    <div class="row g-2">
                        <div class="col-12 mb-4">
                            <h2 class="main-heading">{{ __('messages.plan.gallery') }}</h2>
                        </div>
                        @foreach ($vcard->gallery as $file)
                        @php
                            $infoPath = pathinfo(public_path($file->gallery_image));
                            $extension = $infoPath['extension'];
                        @endphp
                        @if ($file->type == App\Models\Gallery::TYPE_IMAGE)
                        <div class="col-sm-4 col-6">
                                <a href="{{ $file->gallery_image }}" data-lightbox="gallery-images">
                                <img src="{{ $file->gallery_image }}" class="img-fluid" alt="gallery"></a>
                        </div>
                        @endif
                        @endforeach
                    </div>
            </section>
            @endif
            {{--testimonial--}}
            @if (checkFeature('testimonials') && $vcard->testimonials->count())
            <section id="testimonial" class="testimonial bg-black py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <h2 class="status mb-1 text-orange text-center fw-light">What Client Says About My Service</h2>
                            <h2 class="main-heading text-white">{{ __('messages.plan.testimonials') }}</h2>
                        </div>
                        <div class="col-12">
                            <div class="testimonial-slider-2 mx-auto">
                                <!-- slider 1 -->
                                @foreach ($vcard->testimonials as $testimonial)
                                <div class="testimonial-slide">
                                    <div class="testimonial-card position-relative">
                                        <div class="d-flex flex-column gap-1">
                                            <img src="{{ $testimonial->image_url }}" class="testimonial-profile" alt="profile">
                                            <h4 class="profile-name">{{ ucwords($testimonial->name) }}</h4>
                                            <!--<span class="designation">CEO-lorem</span> -->
                                        </div>
                                        <div class="d-flex flex-column gap-3 px-2">
                                            <div class="qoute mt-3 mb-1">
                                                <img src="{{asset('assets/img/vcard34/qoute.svg')}}" alt="qoute">
                                            </div>
                                            <p class="testimonial-desc {{ \Illuminate\Support\Str::length($testimonial->description) > 80 ? 'more' : '' }}">
                                            {!! $testimonial->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif
            {{--blog--}}
            @if (checkFeature('blog') && $vcard->blogs->count())
            <section id="blog" class="blog">
                <div class="container">
                    <div class="row g-3">
                        <div class="col-12 mb-4">
                            <h2 class="status text-center fw-light">My Blogs</h2>
                            <h2 class="main-heading text-black">Latest Blogs & Articles</h2>
                        </div>
                        @foreach ($vcard->blogs as $blog)
                        <div class="col-6"> 
                        <a href="{{ route('vcard.show-blog', [$vcard->url_alias, $blog->id]) }}">
                            <div class="card flex-row">
                                <img src="{{ $blog->blog_icon }}" class="img-fluid rounded-start" alt="{{ $blog->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $blog->title }}</h5>
                                    <p class="card-text"><?php echo implode(' ', array_slice(explode(' ', $blog->description), 0, 15))."\n"; ?> </p>
                                </div>
                            </div>
                        </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            @endif
            @if (checkFeature('appointments') && $vcard->appointmentHours->count())
            {{--appointment--}}
            <section id="appointment" class="appointment-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h2 class="main-heading text-white">Make an Appointment</h2>
                        </div>
                        <div class="col-12">
                            <div class="appointment text-white text-center">
                                <div class="mb-4 position-relative">
                                    <img src="{{asset('assets/img/vcard19/calender.svg')}}" class="position-absolute end-0 top-50 translate-middle" alt="qoute">
                                    {{ Form::text('date', null, ['class' => 'appoint-input mb-2 form-control bg-transparent text-center text-white rounded-0 p-3 position-relative', 'placeholder' => __('messages.form.pick_date'), 'id' => 'myID']) }}
                                </div>
                                <div class="">
                                    <label for="myID" class="form-label">{{ __('messages.hour') }}</label>
                                    <div id="slotData" class="row">
                                    </div>
                                </div>
                                <button type="submit" class="appointmentAdd rounded-2 appoint-btn btn btn-primary w-100">
                                    {{ __('messages.make_appointments') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('vcardTemplates.appointment')
            @endif
            <div class="btn-section cursor-pointer">
                <div class="fixed-btn-section">
                    @if(empty($userSetting['hide_stickybar']))
                        <div class="bars-btn developer-bars-btn">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.4134 0.540771H22.489C23.572 0.540771 24.4601 1.42891 24.4601 2.51188V9.5875C24.4601 10.6776 23.5731 11.5586 22.489 11.5586H15.4134C14.3222 11.5586 13.4423 10.6787 13.4423 9.5875V2.51188C13.4423 1.42783 14.3233 0.540771 15.4134 0.540771Z"
                                    stroke="white" />
                                <path
                                    d="M2.97143 0.5H8.74589C10.1129 0.5 11.2173 1.6122 11.2173 2.97143V8.74589C11.2173 10.1139 10.1139 11.2173 8.74589 11.2173H2.97143C1.6122 11.2173 0.5 10.1129 0.5 8.74589V2.97143C0.5 1.61328 1.61328 0.5 2.97143 0.5Z"
                                    stroke="white" />
                                <path
                                    d="M2.97143 13.783H8.74589C10.1139 13.783 11.2173 14.8863 11.2173 16.2544V22.0289C11.2173 23.3881 10.1129 24.5003 8.74589 24.5003H2.97143C1.61328 24.5003 0.5 23.387 0.5 22.0289V16.2544C0.5 14.8874 1.6122 13.783 2.97143 13.783Z"
                                    stroke="white" />
                                <path
                                    d="M16.2537 13.783H22.0282C23.3874 13.783 24.4996 14.8874 24.4996 16.2544V22.0289C24.4996 23.387 23.3863 24.5003 22.0282 24.5003H16.2537C14.8867 24.5003 13.7823 23.3881 13.7823 22.0289V16.2544C13.7823 14.8863 14.8856 13.783 16.2537 13.783Z"
                                    stroke="white" />
                            </svg>
                        </div>
                    @endif
                    <div class="sub-btn d-none">
                        <div class="sub-btn-div">
                            @if (isset($userSetting['whatsapp_share']) && $userSetting['whatsapp_share'] == 1)
                                <div class="icon-search-container mb-3" data-ic-class="search-trigger">
                                    <div class="wp-btn">
                                        <i class="fab text-light  fa-whatsapp fa-2x" id="wpIcon"></i>
                                    </div>
                                    <input type="number" class="search-input" id="wpNumber"
                                        data-ic-class="search-input"
                                        placeholder="{{ __('messages.setting.wp_number') }}" />
                                    <div class="share-wp-btn-div">
                                        <a href="javascript:void(0)"
                                            class="vcard17-sticky-btn vcard17-btn-group d-flex justify-content-center text-dark align-items-center rounded-0 text-decoration-none py-1 rounded-pill justify-content share-wp-btn">
                                            <i class="fa-solid fa-paper-plane"></i> </a>
                                    </div>
                                </div>
                            @endif
                            @if (empty($userSetting['hide_stickybar']))
                                <div
                                    class="{{ isset($userSetting['whatsapp_share']) && $userSetting['whatsapp_share'] == 1 ? 'vcard17-btn-group' : 'stickyIcon' }}">
                                    <button type="button"
                                        class="vcard17-btn-group vcard17-share vcard17-sticky-btn mb-3 px-2 py-1"><i
                                            class="fas fa-share-alt fs-4"></i></button>
                                    <a type="button"
                                        class="vcard17-btn-group vcard17-sticky-btn d-flex justify-content-center text-white align-items-center  px-2 mb-3 py-2"
                                        id="qr-code-btn" download="qr_code.png"><i
                                            class="fa-solid fa-qrcode fs-4 text-dark"></i></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- share modal code --}}
    <div id="vcard17-shareModel" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('messages.vcard.share_my_vcard') }}</h5>
                    <button type="button" aria-label="Close" class="btn btn-sm btn-icon btn-active-color-danger"
                        data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                viewBox="0 0 24 24" version="1.1">
                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                    fill="#000000">
                                    <rect fill="#000000" x="0" y="7" width="16"
                                        height="2" rx="1" />
                                    <rect fill="#000000" opacity="0.5"
                                        transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                        x="0" y="7" width="16" height="2"
                                        rx="1" />
                                </g>
                            </svg>
                        </span>
                    </button>
                </div>
                @php
                    $shareUrl = route('vcard.show', ['alias' => $vcard->url_alias]);
                @endphp
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 justify-content-between social-link-modal">
                            <a href="http://www.facebook.com/sharer.php?u={{ $shareUrl }}" target="_blank"
                                class="mx-2 share9" title="Facebook">
                                <i class="fab fa-facebook fa-2x" style="color: #1B95E0"></i>
                            </a>
                            <a href="http://twitter.com/share?url={{ $shareUrl }}&text={{ $vcard->name }}&hashtags=sharebuttons"
                                target="_blank" class="mx-2 share9" title="Twitter">
                                <i class="fab fa-twitter fa-2x" style="color: #1DA1F3"></i>
                            </a>
                            <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ $shareUrl }}"
                                target="_blank" class="mx-2 share9" title="Linkedin">
                                <i class="fab fa-linkedin fa-2x" style="color: #1B95E0"></i>
                            </a>
                            <a href="mailto:?Subject=&Body={{ $shareUrl }}" target="_blank" class="mx-2 share9"
                                title="Email">
                                <i class="fas fa-envelope fa-2x" style="color: #191a19  "></i>
                            </a>
                            <a href="http://pinterest.com/pin/create/link/?url={{ $shareUrl }}" target="_blank"
                                class="mx-2 share9">
                                <i class="fab fa-pinterest fa-2x" style="color: #bd081c" title="Pinterest"></i>
                            </a>
                            <a href="http://reddit.com/submit?url={{ $shareUrl }}&title={{ $vcard->name }}"
                                target="_blank" class="mx-2 share9" title="Reddit">
                                <i class="fab fa-reddit fa-2x" style="color: #ff4500"></i>
                            </a>
                            <a href="https://wa.me/?text={{ $shareUrl }}" target="_blank" class="mx-2 share9"
                                title="Whatsapp">
                                <i class="fab fa-whatsapp fa-2x" style="color: limegreen"></i>
                            </a>
                            <span id="vcardUrlCopy{{ $vcard->id }}" class="d-none" target="_blank">
                                {{ route('vcard.show', ['alias' => $vcard->url_alias]) }} </span>
                            <a href="javascript:void(0)" class="mx-2 copy-vcard-clipboard" title="Copy Link"
                                data-id="{{ $vcard->id }}">
                                <i class="fa-regular fa-copy fa-2x" style="color: #0099fb"></i>
                            </a>
                        </div>
                    </div>
                    <div class="text-center">

                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Global Js -->
    <script>
    @if (isset(checkFeature('advanced')->custom_js) && $vcard->custom_js)
        {!! $vcard->custom_js !!}
    @endif
    </script>
    @include('vcardTemplates.template.templates')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/front-third-party.js') }}"></script>
        <script src="{{ asset('assets/js/slider/js/slick.min.js') }}" type="text/javascript"></script>
        @php
        $setting = \App\Models\UserSetting::where('user_id', $vcard->tenant->user->id)
            ->where('key', 'stripe_key')
            ->first();
        @endphp
        <script>
        let stripe = ''
            @if (!empty($setting) && !empty($setting->value))
                stripe = Stripe('{{ $setting->value }}');
            @endif
        </script>
        <!-- Global Js End-->

    <script>
        $('.testimonial-slider-2').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 1,
            autoplay: false,
            slidesToScroll: 1
        });

        $('.blog-slider-2').slick({
            dots: false,
            infinite: false,
            arrows: true,
            speed: 300,
            slidesToShow: 3,
            autoplay: false,
            slidesToScroll: 1,
            prevArrow: "<button type='button' class='slick-prev pull-left'><svg width='36' height='36' viewBox='0 0 36 36' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M35.2502 17.5627C35.2628 27.3702 27.3995 35.2394 17.5768 35.2506C8.00586 35.2619 0.0705644 27.3517 0.000539374 17.852C-0.0747706 8.08683 7.74557 0.0108246 17.6178 0.000254758C27.3341 -0.0103151 35.2377 7.87214 35.2502 17.5627ZM17.631 32.8063C26.0248 32.7971 32.8126 25.9954 32.8066 17.599C32.8013 9.25084 25.9864 2.43793 17.6455 2.44189C9.20884 2.44189 2.45142 9.25017 2.46 17.7331C2.46793 26.0192 9.30859 32.8189 17.6303 32.8063H17.631Z' fill='#ffffff'/><path d='M13.0218 18.9459L16.161 21.4642C16.3757 21.636 16.5957 21.8024 16.8012 21.9854C17.3026 22.432 17.3693 23.1851 16.9591 23.6799C16.8594 23.8056 16.7358 23.9103 16.5953 23.9877C16.4548 24.0652 16.3004 24.1139 16.1409 24.131C15.9814 24.1482 15.8201 24.1334 15.6663 24.0876C15.5126 24.0418 15.3695 23.9659 15.2454 23.8642C13.0526 22.1127 10.8638 20.3566 8.67893 18.5958C8.02823 18.0673 8.03087 17.1755 8.67893 16.6523C10.8479 14.9065 13.02 13.1645 15.1952 11.4262C15.7766 10.9637 16.5165 11.0298 16.9617 11.5728C17.3911 12.094 17.292 12.8716 16.7212 13.332C15.5665 14.2661 14.4084 15.1969 13.2471 16.1244C13.1523 16.1951 13.0774 16.2891 13.0297 16.3973H13.3917H25.5781C25.7209 16.3938 25.8637 16.4007 26.0055 16.4178C26.297 16.4586 26.5638 16.6036 26.7566 16.826C26.9494 17.0485 27.0551 17.3332 27.0541 17.6275C27.0532 17.9218 26.9456 18.2058 26.7514 18.427C26.5571 18.6481 26.2893 18.7914 25.9976 18.8303C25.8441 18.8476 25.6896 18.8542 25.5352 18.8501C21.4728 18.8501 17.4107 18.8501 13.3488 18.8501C13.2444 18.8501 13.1401 18.8594 13.0357 18.8647L13.0218 18.9459Z' fill='#ffffff'/></svg></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><svg width='36' height='36' viewBox='0 0 36 36' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0.344796 17.6003C0.372542 7.83243 8.28472 -0.0453855 18.0387 0.000196816C27.8851 0.0457792 35.7378 8.11783 35.5833 17.9134C35.434 27.4097 27.7015 35.2644 17.9237 35.2486C8.19422 35.2327 0.317711 27.3126 0.344796 17.6003ZM17.9112 32.8069C26.2349 32.8439 33.0901 26.0786 33.135 17.7872C33.1819 9.3241 26.4371 2.47024 18.036 2.44117C9.63501 2.4121 2.82408 9.17943 2.78708 17.5791C2.75075 25.9379 9.53657 32.77 17.9118 32.8069H17.9112Z' fill='white'/><path d='M22.5506 18.8515H22.1291C18.0773 18.8515 14.0278 18.8515 9.98041 18.8515C9.51798 18.8515 9.10377 18.7623 8.80385 18.3812C8.67081 18.2149 8.58372 18.0166 8.5513 17.8062C8.51887 17.5957 8.54225 17.3804 8.61908 17.1819C8.69591 16.9833 8.82351 16.8083 8.98913 16.6745C9.15475 16.5406 9.3526 16.4526 9.56289 16.4191C9.74844 16.3959 9.93555 16.3875 10.1224 16.3941C14.15 16.3941 18.1777 16.3941 22.2057 16.3941C22.3376 16.4032 22.4694 16.376 22.5869 16.3154L21.193 15.1924C20.3956 14.5509 19.5936 13.9161 18.8036 13.266C18.6092 13.1084 18.4695 12.8935 18.4044 12.6519C18.3393 12.4103 18.3521 12.1543 18.4409 11.9204C18.6219 11.4275 18.9905 11.1276 19.5084 11.1276C19.7951 11.1276 20.1373 11.2254 20.3586 11.3998C22.5525 13.1306 24.7286 14.8832 26.904 16.6372C27.5706 17.1742 27.5679 18.0628 26.9 18.6005C24.742 20.3406 22.5799 22.0758 20.4135 23.8061C19.813 24.2857 19.0764 24.217 18.6239 23.6601C18.1925 23.1317 18.3101 22.3614 18.906 21.8811C20.0449 20.9624 21.1857 20.0461 22.3286 19.1323C22.4118 19.0662 22.4918 18.9942 22.5737 18.9249L22.5506 18.8515Z' fill='white'/></svg></button>",
            responsive: [{
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }]
        });
    </script>
    <script>
        $("#myID").flatpickr();
    </script>

    <script>
        $('.gallery-slider-2').slick({
            dots: false,
            infinite: true,
            arrows: true,
            speed: 500,
            slidesToShow: 3,
            autoplay: false,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '40px',
            prevArrow: "<button type='button' class='slick-prev pull-left'><svg width='41' height='8' viewBox='0 0 41 8' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M41 3.26903L41 4.6892L7.43107 4.6892L8.25636 8L-3.40563e-07 4.10442L-3.58629e-07 3.89777L8.26989 -9.5334e-07L7.41641 3.26903L41 3.26903Z' fill='#FEEBDC'/></svg></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><svg width='41' height='8' viewBox='0 0 41 8' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 4.73097L0 3.3108L33.5689 3.3108L32.7436 0L41 3.89558V4.10223L32.7301 8L33.5836 4.73097L0 4.73097Z' fill='#FEEBDC'/></svg></button>",
            responsive: [{
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }]
        });
    </script>


    <script>
        $(document).ready(function() {
            $('.dropdown1').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
            });
        });
    </script>
    <!-- Global JS-->
    <script>
  let isEdit = false;
        let password = "{{ isset(checkFeature('advanced')->password) && !empty($vcard->password) }}";
        let passwordUrl = "{{ route('vcard.password', $vcard->id) }}";
        let enquiryUrl = "{{ route('enquiry.store', ['vcard' => $vcard->id, 'alias' => $vcard->url_alias]) }}";
        let appointmentUrl = "{{ route('appointment.store', ['vcard' => $vcard->id, 'alias' => $vcard->url_alias]) }}";
        let paypalUrl = "{{ route('paypal.init') }}";
        let slotUrl = "{{ route('appointment-session-time', $vcard->url_alias) }}";
        let appUrl = "{{ config('app.url') }}";
        let vcardId = {{ $vcard->id }};
        let vcardAlias = "{{ $vcard->url_alias }}";
        let languageChange = "{{ url('language') }}";
        let lang = "{{ checkLanguageSession($vcard->url_alias) }}";
        let userDateFormate = "{{ getSuperAdminSettingValue('datetime_method') ??  1 }}";
        let userlanguage = "{{ getLanguage($vcard->default_language) }}"
        // let oneSignalNotification = "{{ (isset($managesection) && $managesection['one_signal_notification']) || empty($managesection) ? 1 : 0 }}";
    </script>
    <script>
    const svg = document.getElementsByTagName('svg')[0];
    const blob = new Blob([svg.outerHTML], {
        type: 'image/svg+xml'
    });
    const url = URL.createObjectURL(blob);
    const image = document.createElement('img');
    image.src = url;
    image.addEventListener('load', () => {
        const canvas = document.createElement('canvas');
        canvas.width = canvas.height = {{ $vcard->qr_code_download_size }};
        const context = canvas.getContext('2d');
        context.drawImage(image, 0, 0, canvas.width, canvas.height);
        const link = document.getElementById('qr-code-btn');
        link.href = canvas.toDataURL();
        URL.revokeObjectURL(url);
    });
</script>
@routes
    <script src="{{ asset('messages.js') }}"></script>
<script src="{{ mix('assets/js/custom/helpers.js') }}"></script>
<script src="{{ mix('assets/js/custom/custom.js') }}"></script>
<script src="{{ mix('assets/js/vcards/vcard-view.js') }}"></script>
<script src="{{ mix('assets/js/lightbox.js') }}"></script>
</body>

</html>