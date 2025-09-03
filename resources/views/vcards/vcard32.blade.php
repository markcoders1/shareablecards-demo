<html lang="en">

<head>
    <link>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Developer</title>

    {{--css link--}}
    <link rel="stylesheet" href="{{ asset('assets/css/vcard32.css')}}">

    {{--slick slider--}}
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">


    {{--google font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/new_vcard/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/third-party.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-vcard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
</head>

<body>
    <div class="container">
        <div class="vcard-one main-content w-100 mx-auto">
            {{--banner--}}
            <div class="vcard-one__banner w-100 position-relative">
                <img src="{{asset('assets/img/vcard32/hero-image.png')}}" class="img-fluid" alt="background image" />

                <div class="d-flex justify-content-end position-absolute top-0 end-0 me-3 z-2">
                    <div class="language pt-4 me-2">
                        <ul class="text-decoration-none">
                            <li class="dropdown1 dropdown lang-list">
                                <a class="dropdown-toggle lang-head text-decoration-none" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-language me-2"></i>Language</a>
                                <ul class="dropdown-menu start-0 lang-hover-list top-100 image-icon">
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/english.png')}}" width="25px" height="20px"
                                            class="me-3"><a href="#">English</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/spain.png')}}" width="25px" height="20px"
                                            class="me-3"><a href="#">Spanish</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/france.png')}}" width="25px" height="20px"
                                            class="me-3"><a href="#">Franch</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/arabic.svg')}}" width="25px" height="20px"
                                            class="me-3"><a href="#">Arabic</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/german.png')}}" width="25px" height="20px"
                                            class="me-3"><a href="#">German</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/russian.jpeg')}}" width="25px"
                                            height="20px" class="me-3"><a href="#">russian</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/turkish.png')}}" width="25px" height="20px"
                                            class="me-3"><a href="#">Turkish</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{--profile--}}
            <div class="vcard-one__profile position-relative z-2">
                <div class="avatar position-absolute start-50 translate-middle">
                    <img src="{{asset('assets/img/vcard32/vcard1-profile1.png')}}" alt="profile-img"
                        class="img-fluid" />
                </div>
            </div>
            {{--profile details--}}
            <div
                class="vcard-one__profile-details py-3 d-flex flex-column align-items-center justify-content-center bg-black">
                <div class="d-flex align-items-center gap-4 mt-4 w-100">
                    <div class="flex-grow-1">
                        <div class="divider border-white"></div>
                    </div>
                    <div class="main-heading text-center px-lg-3">
                        <h2 class="profile-name text-color-1">Total R.E. Brokerage</h2>
                        <h2 class="profile-designation text-white">William R.Moore <br>Property Manager</h2>
                    </div>
                    <div class="flex-grow-1">
                        <div class="divider border-white"></div>
                    </div>
                </div>
                <span class="mt-4 profile-description mx-auto">It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at its layout. The point of using Lorem
                    Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                    here, content here', making it look like readable English.</span>
                <div class="social-icons d-flex justify-content-center gap-3 pt-4">
                    <a href="#" class="social-icons-items"><i class="fa-brands fa-facebook-f icon"></i></a>
                    <a href="#" class="social-icons-items"><i class="fa-brands fa-instagram icon"></i></a>
                    <a href="#" class="social-icons-items"><i class="fa-brands fa-twitter icon"></i></a>
                    <a href="#" class="social-icons-items"><i class="fa-brands fa-dribbble icon"></i></a>
                    <a href="#" class="social-icons-items"><i class="fa-brands fa-pinterest-p icon"></i></a>
                </div>

            </div>
            {{--contect us--}}
            <section id="contact" class="contact-us pt-4 pb-5 bg-black">
                <div class="d-flex align-items-center gap-4 my-3 w-100">
                    <div class="flex-grow-1">
                        <div class="divider border-white"></div>
                    </div>
                    <h2 class="main-heading text-center px-lg-3 text-white">Contact</h2>
                    <div class="flex-grow-1">
                        <div class="divider border-white"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row align-items-center g-3">
                        <div class="col-sm-6 d-flex justify-content-center">
                            <div class="d-flex flex-column gap-4 text-white">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="contact-icon">
                                        <i class="fa-solid fa-envelope fs-5"></i>
                                    </div>
                                    <div class="d-flex flex-column gap-1">
                                        <h6 class="centact-name">Email Address</h6>
                                        <a href="#" class="contact-link text-white">say.hi @shareable.icu</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="contact-icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="d-flex flex-column gap-1">
                                        <h6 class="centact-name">Mobile Number</h6>
                                        <a href="#" class="contact-link text-white">+12 3456 7890</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="contact-icon">
                                        <i class="fa-solid fa-globe"></i>
                                    </div>
                                    <div class="d-flex flex-column gap-1">
                                        <h6 class="centact-name">Website</h6>
                                        <a href="#" class="contact-link text-white">www.shareable.icu</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="contact-icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="d-flex flex-column gap-1">
                                        <h6 class="centact-name">Location</h6>
                                        <a href="#" class="contact-link text-white">City, State, Country</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-img">
                                <img src="{{asset('assets/img/vcard32/contact-img.png')}}" alt="profile-img"
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--services--}}
            <section id="services" class="services bg-color-1 pb-5">
                <div class="divider-verical mx-auto"></div>
                <div class="d-flex align-items-center gap-4 my-3 w-100">
                    <div class="flex-grow-1">
                        <div class="divider border-black"></div>
                    </div>
                    <h2 class="main-heading text-center px-lg-3">Our Services</h2>
                    <div class="flex-grow-1">
                        <div class="divider border-black"></div>
                    </div>
                </div>
                <div class="divider-verical mx-auto"></div>
                <div class="container">
                    <div class="row align-items-top g-3">
                        <div class="col-sm-4">
                            <div class="service-card card bg-transparent border-0 shadow-0">
                                <div class="service-img position-relative">
                                    <img src="{{asset('assets/img/vcard32/service-card-1.png')}}" class="img-fluid"
                                        alt="service-card-1">
                                </div>
                                <div class="card-body text-center pt-0 position-relative">
                                    <div class="service-divider mx-auto"></div>
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted
                                        by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-card card bg-transparent border-0 shadow-0">
                                <div class="service-img position-relative">
                                    <img src="{{asset('assets/img/vcard32/service-card-2.png')}}" class="img-fluid"
                                        alt="service-card-1">
                                </div>
                                <div class="card-body text-center pt-0 position-relative">
                                    <div class="service-divider mx-auto"></div>
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted
                                        by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-card card bg-transparent border-0 shadow-0">
                                <div class="service-img position-relative">
                                    <img src="{{asset('assets/img/vcard32/service-card-3.png')}}" class="img-fluid"
                                        alt="service-card-1">
                                </div>
                                <div class="card-body text-center pt-0 position-relative">
                                    <div class="service-divider mx-auto"></div>
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted
                                        by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--gallery--}}
            <section id="gallery" class="gallery-wrapper bg-black">
                <div class="d-flex align-items-center gap-4 mb-3 pt-5 w-100">
                    <div class="flex-grow-1">
                        <div class="divider border-white"></div>
                    </div>
                    <h2 class="main-heading text-center px-lg-3 text-white">Gallery</h2>
                    <div class="flex-grow-1">
                        <div class="divider border-white"></div>
                    </div>
                </div>
                <div class="container py-5 overflow-hidden">
                    <div class="row">
                        <div class="col-12 px-0">
                            <div class="gallery-slider-2 position-relative">
                                <div class="gallery-image text-center">
                                    <a href="{{asset('assets/img/vcard32/gallery-1.png')}}"
                                        data-lightbox="gallery-images">
                                        <img src="{{asset('assets/img/vcard32/gallery-1.png')}}" alt="gallery-img"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="gallery-image text-center">
                                    <a href="{{asset('assets/img/vcard32/gallery-2.png')}}"
                                        data-lightbox="gallery-images">
                                        <img src="{{asset('assets/img/vcard32/gallery-2.png')}}" alt="gallery-img"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="gallery-image text-center">
                                    <a href="{{asset('assets/img/vcard32/gallery-3.png')}}"
                                        data-lightbox="gallery-images">
                                        <img src="{{asset('assets/img/vcard32/gallery-3.png')}}" alt="gallery-img"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="gallery-image text-center">
                                    <a href="{{asset('assets/img/vcard32/gallery-1.png')}}"
                                        data-lightbox="gallery-images">
                                        <img src="{{asset('assets/img/vcard32/gallery-1.png')}}" alt="gallery-img"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="gallery-image text-center">
                                    <a href="{{asset('assets/img/vcard32/gallery-2.png')}}"
                                        data-lightbox="gallery-images">
                                        <img src="{{asset('assets/img/vcard32/gallery-2.png')}}" alt="gallery-img"
                                            class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--testimonial--}}
            <section id="testimonial" class="testimonial bg-color-1 pb-5">
                <div class="d-flex align-items-center gap-4 my-5 w-100">
                    <div class="flex-grow-1">
                        <div class="divider border-black"></div>
                    </div>
                    <h2 class="main-heading text-center px-lg-3">Testimonials</h2>
                    <div class="flex-grow-1">
                        <div class="divider border-black"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider-2 mx-auto">

                                <!-- slider 1 -->
                                <div class="testimonial-slide">
                                    <div class="testimonial-card card bg-transparent border-0 shadow-0">
                                        <div class="card-body text-center">
                                            <img src="{{asset('assets/img/vcard32/testimonial-profile.png')}}"
                                                class="img-fluid rounded-circle testimonial-profile mx-auto"
                                                alt="testimonial">
                                            <div class="card-icon text-end">
                                                <img src="{{asset('assets/img/vcard32/blockquote.svg')}}"
                                                    alt="blockquote" class="img-fluid d-inline-block">
                                            </div>
                                            <h4 class="card-title">Adiana Lora</h4>
                                            <p class="card-text">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider 2 -->
                                <div class="testimonial-slide">
                                    <div class="testimonial-card card bg-transparent border-0 shadow-0">
                                        <div class="card-body text-center">
                                            <img src="{{asset('assets/img/vcard32/testimonial-profile.png')}}"
                                                class="img-fluid rounded-circle testimonial-profile mx-auto"
                                                alt="testimonial">
                                            <div class="card-icon text-end">
                                                <img src="{{asset('assets/img/vcard32/blockquote.svg')}}"
                                                    alt="blockquote" class="img-fluid d-inline-block">
                                            </div>
                                            <h4 class="card-title">Adiana Lora</h4>
                                            <p class="card-text">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider 3 -->
                                <div class="testimonial-slide">
                                    <div class="testimonial-card card bg-transparent border-0 shadow-0">
                                        <div class="card-body text-center">
                                            <img src="{{asset('assets/img/vcard32/testimonial-profile.png')}}"
                                                class="img-fluid rounded-circle testimonial-profile mx-auto"
                                                alt="testimonial">
                                            <div class="card-icon text-end">
                                                <img src="{{asset('assets/img/vcard32/blockquote.svg')}}"
                                                    alt="blockquote" class="img-fluid d-inline-block">
                                            </div>
                                            <h4 class="card-title">Adiana Lora</h4>
                                            <p class="card-text">It is a long established fact that a reader will be
                                                distracted by the readable content of a page when looking at its layout.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--blog--}}
            <section id="blog" class="blog bg-color-1 pb-5">
                <div class="d-flex align-items-center gap-4 my-5 w-100">
                    <div class="flex-grow-1">
                        <div class="divider border-black"></div>
                    </div>
                    <h2 class="main-heading text-center px-lg-3">Blogs</h2>
                    <div class="flex-grow-1">
                        <div class="divider border-black"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-slider-2 mx-auto mb-4">
                                <div class="blog-slide">
                                    <div class="card text-bg-dark">
                                        <img src="{{asset('assets/img/vcard32/blog.png')}}" class="card-img rounded-0"
                                            alt="blog-img">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title">Loremipsum</h5>
                                            <p class="card-text">It is a long established fact that a reader will be
                                                distracted by the readable content </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-slide">
                                    <div class="card text-bg-dark">
                                        <img src="{{asset('assets/img/vcard32/blog.png')}}" class="card-img rounded-0"
                                            alt="blog-img">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title">Loremipsum</h5>
                                            <p class="card-text">It is a long established fact that a reader will be
                                                distracted by the readable content </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-slide">
                                    <div class="card text-bg-dark">
                                        <img src="{{asset('assets/img/vcard32/blog.png')}}" class="card-img rounded-0"
                                            alt="blog-img">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title">Loremipsum</h5>
                                            <p class="card-text">It is a long established fact that a reader will be
                                                distracted by the readable content </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--appointment--}}
            <section id="appointment" class="appointment-wrapper bg-black">
                <div class="d-flex align-items-center gap-4 py-5 w-100">
                    <h2 class="main-heading text-center pe-lg-3 ps-30 text-white">Make an Appointment</h2>
                    <div class="flex-grow-1">
                        <div class="divider border-white"></div>
                    </div>
                </div>
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-12">
                            <form class="appointment text-white">
                                <div class="mb-4">
                                    <label for="myID" class="form-label">Date</label>
                                    <input id="myID" type="text"
                                        class="appoint-input mb-2 form-control bg-black rounded-0 p-3"
                                        placeholder="Pick a Date" />
                                </div>
                                <div class="mb-5">
                                    <label for="myID" class="form-label">Hours</label>
                                    <div class="d-flex flex-wrap gap-3">
                                        <p class="appoint-date">
                                            12:00 - 10:00
                                        </p>
                                        <p class="appoint-date">
                                            12:00 - 10:00
                                        </p>
                                        <p class="appoint-date">
                                            12:00 - 10:00
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <script type="text/javascript" src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/front-third-party.js') }}"></script>
    <script src="{{ asset('assets/js/slider/js/slick.min.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


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
            infinite: true,
            arrows: true,
            speed: 300,
            slidesToShow: 1,
            autoplay: false,
            slidesToScroll: 1,
            prevArrow: "<button type='button' class='slick-prev pull-left'><svg width='41' height='8' viewBox='0 0 41 8' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M41 3.26903L41 4.6892L7.43107 4.6892L8.25636 8L-3.40563e-07 4.10442L-3.58629e-07 3.89777L8.26989 -9.5334e-07L7.41641 3.26903L41 3.26903Z' fill='#000000'/></svg></button>",
            nextArrow: "<button type='button' class='slick-next pull-right'><svg width='41' height='8' viewBox='0 0 41 8' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M0 4.73097L0 3.3108L33.5689 3.3108L32.7436 0L41 3.89558V4.10223L32.7301 8L33.5836 4.73097L0 4.73097Z' fill='#000000'/></svg></button>",
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
        $(document).ready(function () {
            $('.dropdown1').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
            });
        });
    </script>
    <script src="{{ asset('messages.js') }}"></script>
    <script src="{{ mix('assets/js/custom/helpers.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom.js') }}"></script>
    <script src="{{ mix('assets/js/vcards/vcard-view.js') }}"></script>
    <script src="{{ mix('assets/js/lightbox.js') }}"></script>
</body>

</html>