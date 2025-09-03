<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>vcard</title>

    {{--css link--}}
    <link rel="stylesheet" href="{{ asset('assets/css/vcard43.css')}}">

    {{--slick slider--}}
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">


    {{--google font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css"> -->
</head>

<body>

    <main class="container">
        <section class="vcard-one main-content w-100 mx-auto">
            <!-- {{--banner--}} -->
            <div class="vcard-one__banner w-100 position-relative">
                <img src="{{asset('assets/img/vcard43/banner-img.png')}}" class="img-fluid" alt="background image" />

                <div class="d-flex justify-content-end position-absolute top-0 end-0 me-3 z-2">
                    <div class="language pt-4 me-2">
                        <ul class="text-decoration-none">
                            <li class="dropdown1 dropdown lang-list">
                                <a class="dropdown-toggle lang-head text-decoration-none" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-language me-2"></i>Language</a>
                                <ul class="dropdown-menu start-0 lang-hover-list top-100 image-icon">
                                    <li>
                                        <img src="{{asset('assets/img/LanguageImage/english.png')}}" width="25px" height="20px" class="me-3"><a href="#">English</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/LanguageImage/spain.png')}}" width="25px" height="20px" class="me-3"><a href="#">Spanish</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/LanguageImage/france.png')}}" width="25px" height="20px" class="me-3"><a href="#">Franch</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/LanguageImage/arabic.svg')}}" width="25px" height="20px" class="me-3"><a href="#">Arabic</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/LanguageImage/german.png')}}" width="25px" height="20px" class="me-3"><a href="#">German</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/LanguageImage/russian.jpeg')}}" width="25px" height="20px" class="me-3"><a href="#">russian</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/LanguageImage/turkish.png')}}" width="25px" height="20px" class="me-3"><a href="#">Turkish</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- {{--profile--}} -->
            <div class="vcard-one__profile position-relative z-2">
                <div class="avatar position-absolute start-50 translate-middle">
                    <img src="{{asset('assets/img/vcard43/profile-img.png')}}" alt="profile-img" class="img-fluid" />
                </div>
            </div>
            <!-- {{--profile details--}} -->
            <div class="vcard-one__profile-details py-3 d-flex flex-column align-items-center justify-content-center">
                <div class="d-flex align-items-center gap-4 mt-4 w-100">
                    <div class="flex-grow-1">
                        <!-- <div class="divider border-white"></div> -->
                    </div>
                    <div class="main-heading text-center px-lg-3">
                        <h2 class="profile-name">Empire Manufacturing</h2>
                        <h2 class="profile-designation">Sr. Director of New Business Development</h2>
                        <h2 class="profile-designation-2">Victor Promes</h2>
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

            <!-- contact -->
            <section id="contact" class="contact py-4 p-3">
                <div class="container px-sm-2">
                    <div class="row g-3 text-white">
                        <div class="col-sm-6 col-12 flex-column justify-content-center align-items-center">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Email Address</h6>
                                    <a href="#" class="contact-link text-white">say.hi @shareable.icu</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 flex-column justify-content-center align-items-center">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-globe"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Website</h6>
                                    <a href="#" class="contact-link text-white">www.sportscard.icu</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 flex-column justify-content-center align-items-center">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Mobile Number</h6>
                                    <a href="#" class="contact-link text-white">(123) 456-7890</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12 flex-column justify-content-center align-items-center">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Location</h6>
                                    <a href="#" class="contact-link text-white">City, State, Country</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- {{-- services--}} -->

            <section class="my-services py-5">
                <div class="container">
                    <h2 class="service-heading mb-5">MY SERVICES</h2>
                    <div class="row gy-5 px-4">
                        <div class="col-sm-6">
                            <div class="services-card d-flex align-items-center">
                                <img src="{{asset('assets/img/vcard43/services-img1.png')}}" class="img-fluid" alt="">
                                <div class="content">
                                    <h6 class="service-title">Loremipsum</h6>
                                    <p class="service-desc">It is a long established fact that a reader will be
                                        distracted by the readable content of
                                        a page when looking at its layout.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="services-card d-flex align-items-center">
                                <img src="{{asset('assets/img/vcard43/services-img2.png')}}" class="img-fluid" alt="">
                                <div class="content">
                                    <h6 class="service-title">Loremipsum</h6>
                                    <p class="service-desc">It is a long established fact that a reader will be
                                        distracted by the readable content of
                                        a page when looking at its layout.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="services-card d-flex align-items-center">
                                <img src="{{asset('assets/img/vcard43/services-img3.png')}}" class="img-fluid" alt="">
                                <div class="content">
                                    <h6 class="service-title">Loremipsum</h6>
                                    <p class="service-desc">It is a long established fact that a reader will be
                                        distracted by the readable content of
                                        a page when looking at its layout.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="services-card d-flex align-items-center">
                                <img src="{{asset('assets/img/vcard43/services-img4.png')}}" class="img-fluid" alt="">
                                <div class="content">
                                    <h6 class="service-title">Loremipsum</h6>
                                    <p class="service-desc">It is a long established fact that a reader will be
                                        distracted by the readable content of
                                        a page when looking at its layout.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- {{-- SUCCESS GRAPHS---}} -->
            <section class="success">
                <div class="container">
                    <h2 class="success-heading text-center mb-4">SUCCESS GRAPHS</h2>
                    <div class="row g-0 px-4 pb-5">
                        <div class="col-sm-4 col-6">
                            <img src="{{asset('assets/img/vcard43/success-img1.png')}}" class="img-fluid w-100" alt="blogs-card-1">
                        </div>                        <div class="col-sm-4 col-6">
                            <img src="{{asset('assets/img/vcard43/success-img2.png')}}" class="img-fluid w-100" alt="blogs-card-1">
                        </div>                        <div class="col-sm-4 col-6">
                            <img src="{{asset('assets/img/vcard43/success-img3.png')}}" class="img-fluid w-100" alt="blogs-card-1">
                        </div>                        <div class="col-sm-4 col-6">
                            <img src="{{asset('assets/img/vcard43/success-img4.png')}}" class="img-fluid w-100" alt="blogs-card-1">
                        </div>                        <div class="col-sm-4 col-6">
                            <img src="{{asset('assets/img/vcard43/success-img5.png')}}" class="img-fluid w-100" alt="blogs-card-1">
                        </div>                        <div class="col-sm-4 col-6">
                            <img src="{{asset('assets/img/vcard43/success-img6.png')}}" class="img-fluid w-100" alt="blogs-card-1">
                        </div>
                    </div>
                    
                </div>
            </section>

            <!-- {{-- blogs---}} -->
            <section id="blogs" class="blogs bg-color-1 py-5">
                <div class="container">
                    <h2 class="main-heading text-center">MY BLOGS</h2>
                    <div class="blogs-slider row align-items-top g-3 mt-4">
                        <div class="col-sm-4">
                            <div class="d-flex justify-content-center align-item-center blogs-card card bg-transparent border-0 shadow-0">
                                <div class="d-flex justify-content-center blogs-img position-relative">
                                    <img src="{{asset('assets/img/vcard43/blogs-img1.png')}}" class="img-fluid" alt="blogs-card-1">
                                </div>
                                <div class="card-body px-2 text-center pt-0">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex justify-content-center align-item-center blogs-card card bg-transparent border-0 shadow-0">
                                <div class="d-flex justify-content-center align-item-center service-img position-relative">
                                    <img src="{{asset('assets/img/vcard43/blogs-img2.png')}}" class="img-fluid" alt="blogs-card-1">
                                </div>
                                <div class="card-body px-2 text-center pt-0">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex justify-content-center align-item-center blogs-card card bg-transparent border-0 shadow-0">
                                <div class="d-flex justify-content-center align-item-center service-img position-relative">
                                    <img src="{{asset('assets/img/vcard43/blogs-img3.png')}}" class="img-fluid" alt="blogs-card-1">
                                </div>
                                <div class="card-body px-2 text-center pt-0">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex justify-content-center align-item-center blogs-card card bg-transparent border-0 shadow-0">
                                <div class="d-flex justify-content-center align-item-center service-img position-relative">
                                    <img src="{{asset('assets/img/vcard43/blogs-img1.png')}}" class="img-fluid" alt="blogs-card-1">
                                </div>
                                <div class="card-body px-2 text-center pt-0">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- testimonial -->
            <section class="testimonial py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="testimonial-heading text-center mb-4">TESTIMONIALS</h4>
                        </div>
                        <div class="col-12">
                            <div class="testimonial-slider row">
                                <div class="col-sm-6">
                                    <div class="testimonial-card align-item-center mx-2" style="background-image: url('{{ asset('assets/img/vcard43/testimonial-background-img.png') }}')">
                                        <img src="{{asset('assets/img/vcard43/testimonial-img.png')}}" alt="Image">
                                        <p class="mt-3">It is a long established fact that a reader will be distracted
                                            by the
                                            readable content of a page when looking at its layout. </p>
                                        <h3 class="mt-3">LOUIS WILSON</h3>
                                        <p class="mt-3">Student</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial-card align-item-center mx-2" style="background-image: url({{ asset('assets/img/vcard43/testimonial-background-img.png') }})">
                                        <img src="{{asset('assets/img/vcard43/testimonial-img.png')}}" alt="Image">
                                        <p class="mt-3">It is a long established fact that a reader will be distracted
                                            by the
                                            readable content of a page when looking at its layout. </p>
                                        <h3 class="mt-3">LOUIS WILSON</h3>
                                        <p class="mt-3">Student</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial-card align-item-center mx-2" style="background-image: url({{ asset('assets/img/vcard43/testimonial-background-img.png') }})">
                                        <img src="{{asset('assets/img/vcard43/testimonial-img.png')}}" alt="Image">
                                        <p class="mt-3">It is a long established fact that a reader will be distracted
                                            by the
                                            readable content of a page when looking at its layout. </p>
                                        <h3 class="mt-3">LOUIS WILSON</h3>
                                        <p class="mt-3">Student</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            {{--appointment--}}
            <section id="appointment" class="appointment-wrapper py-5">
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h2 class="main-heading">Make an Appointment</h2>
                        </div>
                        <div class="col-12">
                            <form class="appointment text-white">
                                <div class="mb-4 position-relative">
                                    <img src="{{asset('assets/img/vcard43/calender.svg')}}" class="position-absolute end-0 top-50 translate-middle" alt="qoute">
                                    <input id="myID" type="text" class="appoint-input mb-2 form-control rounded text-white p-3 bg-transparent" placeholder="Pick a Date" />
                                </div>
                                <div class="text-center">
                                    <label for="myID" class="form-label mb-3">Hours</label>
                                    <div class="d-flex flex-wrap justify-content-sm-between justify-content-center gap-3">
                                        <p class="appoint-date rounded">
                                            12:00 - 10:00
                                        </p>
                                        <p class="appoint-date rounded">
                                            12:00 - 10:00
                                        </p>
                                        <p class="appoint-date rounded">
                                            12:00 - 10:00
                                        </p>
                                    </div>
                                </div>
                                <button class="btn btn-appointment mt-4">MAKE AN APPOINTMENT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>


        </section>
    </main>


    <!-- script -->
    <script type="text/javascript" src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/front-third-party.js') }}"></script>
    <script src="{{ asset('assets/js/slider/js/slick.min.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        // achievements-slider
        $('.achievements-slider').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 3,
            autoplay: false,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                },
            }, ],
        });

        $('.blogs-slider').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 3,
            autoplay: false,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                },
            }, ],
        });

        $('.testimonial-slider').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 2,
            centerMode: true,
            autoplay: false,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                },
            }, ],

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
        $(document).ready(function() {
            $('.dropdown1').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
            });
        });
    </script>
</body>

</html>