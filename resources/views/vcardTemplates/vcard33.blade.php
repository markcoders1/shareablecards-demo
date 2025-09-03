<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @if (checkFeature('seo') && $vcard->site_title && $vcard->home_title)
    <title>{{ $vcard->home_title }} | {{ $vcard->site_title }}</title>
@else
    <title>{{ $vcard->name }} | {{ getAppName() }}</title>
@endif

    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">

    {{--css link--}}
    <link rel="stylesheet" href="{{ asset('assets/css/vcard33.css')}}">

    {{--slick slider--}}
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">
<!-- Favicon -->
<link rel="icon" href="{{ getFaviconUrl() }}" type="image/png">

    {{--google font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/new_vcard/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/third-party.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-vcard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
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
    @include('vcards.password')
        <div class="vcard-one main-content w-100 mx-auto position-relative">
            {{--banner--}}
            <div class="vcard-one__banner w-100 position-relative">
                <img src="{{ $vcard->cover_url }}" class="img-fluid" alt="background image" />
                <div class="banner-overlay"></div>
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
                {{--profile details--}}
                <div class="vcard-one__profile-details text-white py-3 d-flex flex-column align-items-start">
                    <p class="profile-oc">{{ ucwords($vcard->occupation) }}</p>
                    <h3 class="profile-name-first">MY NAME IS</h3>
                    <h2 class="profile-name-last">{{ ucwords($vcard->first_name . ' ' . $vcard->last_name) }}</h2>
                    <h2 class="profile-designation">{{ ucwords($vcard->job_title) }} {{ ucwords($vcard->company) }}</h2>
                </div>
            </div>

            {{--About--}}

            <section id="about" class="py-5 bg-light">
                <div class="container px-sm-4">
                    <div class="row gy-5">
                        <div class="col-sm-6 col-12">
                            <div class="about-img-wrapper d-flex justify-content-center pt-4">
                                <div class="about-img">
                                    <img src="{{ $vcard->profile_url }}" class="img-fluid" alt="about" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="d-flex flex-column gap-2">
                                <h2 class="about-title">About Me</h2>
                                <p class="about-desc">{!! $vcard->description !!}</p>
                                <hr>
                                <div class="d-flex justify-content-sm-start justify-content-center">
                                <div class="d-flex flex-column gap-3 text-navy-blue">
                                @if ($vcard->email)
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="contact-icon">
                                            <i class="fa-solid fa-envelope fs-5"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="centact-name">{{ __('messages.vcard.email_address') }}</h6>
                                            <a href="mailto:{{ $vcard->email }}" class="contact-link text-navy-blue">{{ $vcard->email }}</a>
                                        </div>
                                    </div>
                                @endif
                                @if ($vcard->alternative_email)
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="contact-icon">
                                            <i class="fa-solid fa-envelope fs-5"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="centact-name">{{ __('messages.vcard.alter_email_address') }}</h6>
                                            <a href="mailto:{{ $vcard->alternative_email }}" class="contact-link text-navy-blue">{{ $vcard->alternative_email }}</a>
                                        </div>
                                    </div>
                                @endif
                                @if ($vcard->phone)
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="contact-icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="centact-name">{{ __('messages.vcard.mobile_number') }}</h6>
                                            <a href="tel:+{{ $vcard->region_code }}{{ $vcard->phone }}" class="contact-link text-navy-blue">+{{ $vcard->region_code }}{{ $vcard->phone }}</a>
                                        </div>
                                    </div>
                                @endif
                                @if ($vcard->alternative_phone)
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="contact-icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="centact-name">{{ __('messages.vcard.alter_mobile_number') }}</h6>
                                            <a href="tel:+{{ $vcard->alternative_region_code }}{{ $vcard->alternative_phone }}" class="contact-link text-navy-blue">+{{ $vcard->alternative_region_code }}{{ $vcard->alternative_phone }}</a>
                                        </div>
                                    </div>
                                @endif
                                @if ($vcard->dob)
                                <div class="d-flex align-items-center gap-3">
                                        <div class="contact-icon">
                                        <svg width="25" height="22" viewBox="0 0 25 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" style="filter: brightness(0);">
                                            <g clip-path="url(#clip0_224_569)">
                                                <path
                                                    d="M0.325524 22C0.220526 21.7982 0.0525292 21.607 0.0210298 21.3945C-0.0314691 21.0121 0.0210298 20.619 3.02244e-05 20.2366C-0.0104696 19.886 0.136527 19.7055 0.49352 19.7161C0.598518 19.7161 0.703516 19.7161 0.808514 19.7161C8.60986 19.7161 16.4007 19.7161 24.202 19.7267C24.4645 19.7267 24.727 19.8329 24.9895 19.886C24.9895 20.5872 24.9895 21.2989 24.9895 22C16.7787 22 8.54686 22 0.325524 22Z"
                                                    fill="white" />
                                                <path
                                                    d="M12.5263 9.00821C15.3297 9.00821 18.1332 9.00821 20.9471 9.00821C22.5326 9.00821 23.3096 9.80492 23.3201 11.4196C23.3201 11.4408 23.3201 11.4515 23.3201 11.4727C23.5091 12.4075 23.0786 12.9387 22.2596 13.2999C21.4301 13.661 20.6321 13.7354 19.9076 13.1086C19.5506 12.8006 19.2566 12.4288 18.9626 12.057C18.5742 11.5789 18.2067 11.5683 17.8077 12.0357C17.5452 12.3438 17.2827 12.6519 16.9887 12.9174C16.1592 13.6717 15.2457 13.7566 14.3112 13.1511C13.8912 12.8749 13.5133 12.5244 13.1458 12.1738C12.6418 11.6958 12.4213 11.6958 11.9278 12.1951C11.6443 12.4819 11.3503 12.7581 11.0248 12.9918C9.92233 13.7991 8.92484 13.746 7.89586 12.8537C7.73837 12.7156 7.59137 12.5669 7.45487 12.4075C6.75139 11.5896 6.60439 11.5896 5.90091 12.4394C4.94542 13.5867 3.73795 13.8416 2.39398 13.2255C1.86899 12.9812 1.66949 12.6094 1.72199 12.057C1.75349 11.7914 1.78499 11.5258 1.75349 11.2709C1.57499 9.96427 2.61447 8.98696 3.95844 8.99758C6.80389 9.02945 9.65983 9.00821 12.5263 9.00821Z"
                                                    fill="white" />
                                                <path
                                                    d="M23.1102 18.282C16.0438 18.282 9.00899 18.282 1.94263 18.282C1.94263 17.1666 1.94263 16.0512 1.94263 14.8933C3.69609 15.4882 5.22906 15.1057 6.48904 13.7354C8.58899 15.775 10.521 15.4988 12.5474 13.6716C15.0569 15.8812 16.8628 15.3713 18.5743 13.6398C19.1518 14.2665 19.7818 14.8402 20.6428 15.0632C21.4932 15.2863 22.2912 15.1057 23.1312 14.7446C23.1102 15.9343 23.1102 17.0816 23.1102 18.282Z"
                                                    fill="white" />
                                                <path
                                                    d="M11.0248 8.00965C11.0248 6.95799 11.0143 5.92757 11.0353 4.88653C11.0458 4.54659 11.2873 4.34476 11.6338 4.34476C12.2113 4.33414 12.7888 4.33414 13.3558 4.34476C13.7548 4.34476 13.9858 4.57846 13.9858 4.97151C14.0068 5.97006 13.9963 6.97923 13.9963 8.00965C12.9988 8.00965 12.0328 8.00965 11.0248 8.00965Z"
                                                    fill="white" />
                                                <path
                                                    d="M12.5157 0C12.7677 0.467407 13.0617 0.998551 13.3451 1.54032C13.4711 1.78465 13.6391 2.02897 13.7126 2.29454C13.8701 2.8788 13.6181 3.51618 13.1667 3.77113C12.7152 4.02607 12.0222 3.95171 11.6547 3.61178C11.2662 3.23998 11.1402 2.52825 11.4132 2.00773C11.7702 1.30662 12.1587 0.62675 12.5157 0Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_224_569">
                                                    <rect width="25" height="22" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="centact-name">{{ __('messages.vcard.dob') }}</h6>
                                            <a href="#!" class="contact-link text-navy-blue">{{ $vcard->dob }}</a>
                                        </div>
                                </div>
                                @endif
                                @if ($vcard->location)
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="contact-icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="centact-name">{{ __('messages.setting.address') }}</h6>
                                            <a href="#!" class="contact-link text-navy-blue">{!! ucwords($vcard->location) !!}</a>
                                        </div>
                                    </div>
                                @endif
                                </div>
                                </div>
                                <div class="social-icons d-flex justify-content-sm-start justify-content-center gap-3 pt-4">
                                @if (checkFeature('social_links') && getSocialLink($vcard))
                                    <div class="social-icons d-flex justify-content-center gap-3 pt-4 flex-wrap">
                                        @foreach (getSocialLink($vcard) as $value)
                                                {!! $value !!}
                                        @endforeach
                                    </div>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--Qualifications--}}

            <section id="qualification" class="py-5">
                <div class="container px-sm-4">
                    <div class="row gy-4">
                        <div class="col-12 mb-3">
                            <h2 class="main-heading">{{ __('messages.vcard.our_service') }}</h2>
                        </div>
                        @foreach ($vcard->services as $service)
                        <div class="col-sm-6">
                        <a target="{{ $service->service_url ? '_blank' : '' }}" class="{{ $service->service_url ? 'pe-auto' : 'pe-none' }}" href="{{ $service->service_url ?? 'javascript:void(0)' }}">
                            <div class="d-flex flex-column gap-4">
                                <div class="qualification-card position-relative">
                                    <div class="card-arrow"></div>
                                    <div class="card-body px-4">
                                        <h3 class="card-title">{{ ucwords($service->name) }}</h3>
                                        <p class="card-text {{ \Illuminate\Support\Str::length($service->description) > 80 ? 'more' : '' }}">{!! $service->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

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
                                        <img src="{{ $file->gallery_image }}" class="img-fluid" alt="gallery">
                                    </a>
                                    </div>
                        @endif
                        @endforeach
                        
                    </div>
            </section>
            @endif

            @if (checkFeature('blog') && $vcard->blogs->count())
            {{--blog--}}
            <section id="blog" class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h2 class="main-heading text-white">{{ __('messages.feature.blog') }}</h2>
                        </div>
                        <div class="col-12">
                            <div class="blog-slider-2 mx-auto mb-4">
                            @foreach ($vcard->blogs as $blog)
                                <div class="blog-slide">
                                <a href="{{ route('vcard.show-blog', [$vcard->url_alias, $blog->id]) }}">
                                    <div class="card text-bg-dark">
                                        <img src="{{ $blog->blog_icon }}" class="card-img rounded-0 blog-img" alt="{{ $blog->title }}">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title">{{ $blog->title }}</h5>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif
            {{--testimonial--}}
            @if (checkFeature('testimonials') && $vcard->testimonials->count())
            <section id="testimonial" class="testimonial bg-color-1 py-5 mb-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h2 class="main-heading">{{ __('messages.plan.testimonials') }}</h2>
                        </div>
                        <div class="col-12">
                            <div class="testimonial-slider-2 mx-auto">
                                <!-- slider 1 -->
                                @foreach ($vcard->testimonials as $testimonial)
                                <div class="testimonial-slide">
                                    <div class="testimonial-card position-relative">
                                        <div class="qoute">
                                            <img src="{{asset('assets/img/vcard33/qoutes.svg')}}" alt="qoute">
                                        </div>
                                        <div class="testimonial-desc d-flex flex-column gap-3">
                                            <p class="{{ \Illuminate\Support\Str::length($testimonial->description) > 80 ? 'more' : '' }}">{!! $testimonial->description !!}</p>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <img src="{{ $testimonial->image_url }}" class="testimonial-profile" alt="profile">
                                            <h4 class="profile-name lh-sm">{{ ucwords($testimonial->name) }}</h4>
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
            <section id="appointment" class="appointment-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h2 class="main-heading text-white">{{ __('messages.make_appointments') }}</h2>
                        </div>
                        <div class="col-12">
                            <div class="appointment text-white text-center">
                                <div class="mb-4 position-relative">
                                    <img src="{{asset('assets/img/vcard33/calender.svg')}}" class="position-absolute end-0 top-50 translate-middle" alt="qoute">
                                    {{ Form::text('date', null, ['class' => 'appoint-input mb-2 form-control bg-transparent text-center text-white rounded-0 p-3 position-relative', 'placeholder' => __('messages.form.pick_date'), 'id' => 'myID']) }}
                                </div>
                                <div class="">
                                    <label for="myID" class="form-label">{{ __('messages.hour') }}</label>
                                    <div id="slotData" class="row">
                                    </div>
                                </div>
                                <button type="submit"
                                    class="appointmentAdd rounded-2 appoint-btn btn btn-primary w-100">
                                    {{ __('messages.make_appointments') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('vcardTemplates.appointment')
            @endif
            {{-- sticky btn --}}
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