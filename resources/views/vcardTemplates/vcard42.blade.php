<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
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
    <link rel="stylesheet" href="{{ asset('assets/css/vcard42.css')}}">

    {{--slick slider--}}
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">
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
    <link
        href="https://fonts.googleapis.com/css2?family=Alata&family=Syne&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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

    <main class="container">
        <section class="vcard-one main-content w-100 mx-auto position-relative">
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
            <!-- {{--banner--}} -->
            <div class="vcard-one__banner w-100 position-relative">
                <img src="{{ $vcard->cover_url }}" class="img-fluid" alt="background image" />

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
            <!-- profile -->
            <section class="profile py-5">
                <div class="container">
                    <div class="row px-5">
                        <div class="col-sm-5 ps-sm-0">
                            <div class="profile-img">
                                <img src="{{ $vcard->profile_url }}"
                                    class='h-100 w-100 object-fit-cover' alt="Profile">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="profile-content">
                                <h5>{{ ucwords($vcard->job_title) }} {{ ucwords($vcard->company) }}</h5>
                                <h2>{{ ucwords($vcard->first_name . ' ' . $vcard->last_name) }}</h2>
                                <h6>@if ($vcard->occupation) ({{ ucwords($vcard->occupation) }})@endif</h6>
                                <p class='mb-2'>{!! $vcard->description !!}</p>
                                <div class="social-icons d-flex gap-3 pt-2 flex-wrap">
                                @foreach (getSocialLink($vcard) as $value)
                                {!! $value !!}
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--contact--}}
            <section id="contact-us" class="contact-us pb-5" class="my-5">
                <div class="container px-sm-5">
                    <div class="row g-3 text-white">
                    @if ($vcard->email)
                        <div class="col-sm-6 col-12">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <img src="{{asset('assets/img/vcard42/envelop.svg')}}">
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">{{ __('messages.vcard.email_address') }}</h6>
                                    <a href="mailto:{{ $vcard->email }}" class="contact-link text-white">{{ $vcard->email }}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($vcard->alternative_email)
                        <div class="col-sm-6 col-12">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <img src="{{asset('assets/img/vcard42/envelop.svg')}}">
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">{{ __('messages.vcard.alter_email_address') }}</h6>
                                    <a href="mailto:{{ $vcard->alternative_email }}" class="contact-link text-white">{{ $vcard->alternative_email }}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($vcard->phone)
                        <div class="col-sm-6 col-12">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <img src="{{asset('assets/img/vcard42/phone.svg')}}">
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">{{ __('messages.vcard.mobile_number') }}</h6>
                                    <a href="tel:+{{ $vcard->region_code }}{{ $vcard->phone }}" class="contact-link text-white">+{{ $vcard->region_code }}{{ $vcard->phone }}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($vcard->alternative_phone)
                        <div class="col-sm-6 col-12">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <img src="{{asset('assets/img/vcard42/phone.svg')}}">
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">{{ __('messages.vcard.alter_mobile_number') }}</h6>
                                    <a href="tel:+{{ $vcard->alternative_region_code }}{{ $vcard->alternative_phone }}" class="contact-link text-white">+{{ $vcard->alternative_region_code }}{{ $vcard->alternative_phone }}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($vcard->dob)
                        <div class="col-sm-6 col-12">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon" style="margin-left: -7px;">
                                <svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_224_569)">
                                                <path d="M0.325524 22C0.220526 21.7982 0.0525292 21.607 0.0210298 21.3945C-0.0314691 21.0121 0.0210298 20.619 3.02244e-05 20.2366C-0.0104696 19.886 0.136527 19.7055 0.49352 19.7161C0.598518 19.7161 0.703516 19.7161 0.808514 19.7161C8.60986 19.7161 16.4007 19.7161 24.202 19.7267C24.4645 19.7267 24.727 19.8329 24.9895 19.886C24.9895 20.5872 24.9895 21.2989 24.9895 22C16.7787 22 8.54686 22 0.325524 22Z" fill="white"></path>
                                                <path d="M12.5263 9.00821C15.3297 9.00821 18.1332 9.00821 20.9471 9.00821C22.5326 9.00821 23.3096 9.80492 23.3201 11.4196C23.3201 11.4408 23.3201 11.4515 23.3201 11.4727C23.5091 12.4075 23.0786 12.9387 22.2596 13.2999C21.4301 13.661 20.6321 13.7354 19.9076 13.1086C19.5506 12.8006 19.2566 12.4288 18.9626 12.057C18.5742 11.5789 18.2067 11.5683 17.8077 12.0357C17.5452 12.3438 17.2827 12.6519 16.9887 12.9174C16.1592 13.6717 15.2457 13.7566 14.3112 13.1511C13.8912 12.8749 13.5133 12.5244 13.1458 12.1738C12.6418 11.6958 12.4213 11.6958 11.9278 12.1951C11.6443 12.4819 11.3503 12.7581 11.0248 12.9918C9.92233 13.7991 8.92484 13.746 7.89586 12.8537C7.73837 12.7156 7.59137 12.5669 7.45487 12.4075C6.75139 11.5896 6.60439 11.5896 5.90091 12.4394C4.94542 13.5867 3.73795 13.8416 2.39398 13.2255C1.86899 12.9812 1.66949 12.6094 1.72199 12.057C1.75349 11.7914 1.78499 11.5258 1.75349 11.2709C1.57499 9.96427 2.61447 8.98696 3.95844 8.99758C6.80389 9.02945 9.65983 9.00821 12.5263 9.00821Z" fill="white"></path>
                                                <path d="M23.1102 18.282C16.0438 18.282 9.00899 18.282 1.94263 18.282C1.94263 17.1666 1.94263 16.0512 1.94263 14.8933C3.69609 15.4882 5.22906 15.1057 6.48904 13.7354C8.58899 15.775 10.521 15.4988 12.5474 13.6716C15.0569 15.8812 16.8628 15.3713 18.5743 13.6398C19.1518 14.2665 19.7818 14.8402 20.6428 15.0632C21.4932 15.2863 22.2912 15.1057 23.1312 14.7446C23.1102 15.9343 23.1102 17.0816 23.1102 18.282Z" fill="white"></path>
                                                <path d="M11.0248 8.00965C11.0248 6.95799 11.0143 5.92757 11.0353 4.88653C11.0458 4.54659 11.2873 4.34476 11.6338 4.34476C12.2113 4.33414 12.7888 4.33414 13.3558 4.34476C13.7548 4.34476 13.9858 4.57846 13.9858 4.97151C14.0068 5.97006 13.9963 6.97923 13.9963 8.00965C12.9988 8.00965 12.0328 8.00965 11.0248 8.00965Z" fill="white"></path>
                                                <path d="M12.5157 0C12.7677 0.467407 13.0617 0.998551 13.3451 1.54032C13.4711 1.78465 13.6391 2.02897 13.7126 2.29454C13.8701 2.8788 13.6181 3.51618 13.1667 3.77113C12.7152 4.02607 12.0222 3.95171 11.6547 3.61178C11.2662 3.23998 11.1402 2.52825 11.4132 2.00773C11.7702 1.30662 12.1587 0.62675 12.5157 0Z" fill="white"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_224_569">
                                                    <rect width="25" height="22" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">{{ __('messages.vcard.dob') }}</h6>
                                    <a href="#!" class="contact-link text-white">{{ $vcard->dob }}</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if ($vcard->location)
                        <div class="col-sm-6 col-12">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <img src="{{asset('assets/img/vcard42/location.svg')}}">
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">{{ __('messages.setting.address') }}</h6>
                                    <a href="#!" class="contact-link text-white">{!! ucwords($vcard->location) !!}</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </section>
            @if (checkFeature('gallery') && $vcard->gallery->count())
            <!-- galleries -->
            <section class="galleries pb-5">
                <div class="container p-sm-4">
                    <div class="row">
                        <div class="justify-content-center pt-4 pb-4">
                            <h2 class="main-heading text-center">{{ __('messages.plan.gallery') }}</h2>
                        </div>
                    </div>
                    <div class="row g-2 px-sm-5">
                    @foreach ($vcard->gallery as $file)
                        @php
                                    $infoPath = pathinfo(public_path($file->gallery_image));
                                    $extension = $infoPath['extension'];
                                @endphp
                                @if ($file->type == App\Models\Gallery::TYPE_IMAGE)
                        <div class="col-sm-6 col-6">
                        <a href="{{ $file->gallery_image }}" data-lightbox="gallery-images">
                                <img src="{{ $file->gallery_image }}" alt="" class="gallery-img">
                            </a>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </section>
            @endif
            @if (checkFeature('services') && $vcard->services->count())
            <!-- services -->
            <section class="services">
                <div class="container services-section">
                    <h2 class="services-section-heading">{{ __('messages.vcard.our_service') }}</h2>

                    <div class="row box-container">
                    @foreach ($vcard->services as $service)
                        <div class="col-md-4">
                        <a href="{{ $service->service_url ?? 'javascript:void(0)' }}"
                                        class="text-decoration-none {{ $service->service_url ? 'pe-auto' : 'pe-none' }}"
                                        target="{{ $service->service_url ? '_blank' : '' }}">
                            <div class="services-box">
                                <div class="circle">
                                    <img src="{{ $service->service_icon }}" alt="{{ $service->name }}">
                                </div>
                                <h3 class="services-box-heading">{{ $service->name }}</h3>
                                <p class="services-box-text {{ \Illuminate\Support\Str::length($service->description) > 80 ? 'more' : '' }}">{!! $service->description !!}</p>
                            </div>
                        </a>
                        </div>
                    @endforeach
                    </div>
                </div>
            </section>
            @endif
            @if (checkFeature('blog') && $vcard->blogs->count())
            {{--blog--}}
            <section id="blog" class="blog py-5">
                <div class="container">
                    <div class="row g-3">
                        <div class="col-12 mb-3">
                            <h2 class="main-heading text-center">{{ __('messages.feature.blog') }}</h2>
                        </div>
                        @foreach ($vcard->blogs as $blog)
                        <div class="col-sm-4">
                        <a href="{{ route('vcard.show-blog', [$vcard->url_alias, $blog->id]) }}">
                            <div class="blog-card card shadow-0">
                                <div class="blog-img position-relative">
                                    <img src="{{ $blog->blog_icon }}" class="img-fluid rounded-top"
                                        alt="{{ $blog->title }}">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $blog->title }}</h5>
                                    <p class="card-text"><?php echo implode(' ', array_slice(explode(' ', $blog->description), 0, 13))."\n"; ?></p>
                                </div>
                            </div>
                        </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            @endif
            @if (checkFeature('testimonials') && $vcard->testimonials->count())
            {{--testimonial--}}
            <section id="testimonial" class="testimonial position-relative pt-5">
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h2 class="main-heading2 text-center mb-3">{{ __('messages.plan.testimonials') }}</h2>
                        </div>
                        <div class="col-12 position-relative px-0">
                            <div class="testimonial-slider">
                            @foreach ($vcard->testimonials as $testimonial)
                                <div class="slide">
                                    <div class="card testimonial-card bg-transparent shadow-0 border-0">
                                        <div class="row align-items-center g-0">
                                            <div class="offset-sm-2 col-sm-3">
                                                <img src="{{ $testimonial->image_url }}"
                                                    class="testimonial-img ms-sm-auto lh-sm" alt="{{ ucwords($testimonial->name) }}">
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="card-body px-sm-4">
                                                    <p class="testimonial-desc mb-3 {{ \Illuminate\Support\Str::length($testimonial->description) > 80 ? 'more' : '' }}">{!! $testimonial->description !!}</p>
                                                    <div
                                                        class="d-flex flex-column align-items-lg-end align-items-center">
                                                        <div>
                                                            <h6 class="testimonial-name">{{ ucwords($testimonial->name) }}</h6>
                                                            <!-- <p class="testimonial-designation">Mitchell Odson</p> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
            @if (checkFeature('appointments') && $vcard->appointmentHours->count())
            {{--appointment--}}
            <section id="appointment" class="appointment-wrapper py-5">
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h2 class="main-heading2 text-center">{{ __('messages.make_appointments') }}</h2>
                        </div>
                        <div class="col-12">
                            <div class="appointment text-white">
                                <div class="mb-4">
                                        {{ Form::text('date', null, ['class' => 'appoint-input mb-2 form-control rounded text-white p-3', 'placeholder' => __('messages.form.pick_date'), 'id' => 'myID']) }}
                                </div>
                                <div class="text-center">
                                    <label for="myID" class="form-label text-white mb-3">{{ __('messages.hour') }}</label>
                                    <div class="d-flex flex-wrap justify-content-sm-between justify-content-center gap-3">
                                        <div id="slotData" class="row">
                                        </div>
                                    </div>
                                </div>
                                <button class="appointmentAdd btn btn-appointment mt-4">{{ __('messages.make_appointments') }}</button>
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
        </section>
    </main>
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
    <!-- scripts -->
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

        $('.testimonial-slider').slick({
            dots: false,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 1,
            autoplay: true,
            slidesToScroll: 1
        });

        $("#myID").flatpickr();

        $(document).ready(function () {
            $('.dropdown1').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
            }, function () {
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