<!DOCTYPE html>
<html lang="en">

<head>
    <link>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>vcard</title>

    {{--css link--}}
    <link rel="stylesheet" href="{{ asset('assets/css/vcard41.css')}}">

    {{--slick slider--}}
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">


    {{--google font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alata&family=Syne&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>

    <!-- hero Section -->

    <!-- <section id="hero">
        <div class="hero-image">
            <img src="./assets/images/hero-image.png" class="img-fluid w-100" alt="hero-image">
        </div>
        <div class="hero">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-0">
                        <div class="profile-img text-center">
                            <img src="./assets/images/owner-image.png" class="img-fluid" alt="image">
                        </div>
                        <div class="d-flex align-items-center gap-5 mt-5">
                            <div class="flex-grow-1">
                                <div class="divider"></div>
                            </div>
                            <div class="main-heading text-center px-lg-3">
                                <h2 class="font-2 text-color-1">Loremipsum</h2>
                                <h2 class="font-2 text-white">Real State Agency</h2>
                            </div>
                            <div class="flex-grow-1">
                                <div class="divider"></div>
                            </div>
                        </div>
                        <div class="hero-desc max-w-800 mx-auto mt-5">
                            <p class="font-3 text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <main class="container">
        <section class="vcard-one main-content w-100 mx-auto">
            <!-- {{--banner--}} -->
            <div class="vcard-one__banner w-100 position-relative">
                <img src="{{asset('assets/img/vcard41/hero-image.png')}}" class="img-fluid" alt="background image" />

                <div class="d-flex justify-content-end position-absolute top-0 end-0 me-3 z-2">
                    <div class="language pt-4 me-2">
                        <ul class="text-decoration-none">
                            <li class="dropdown1 dropdown lang-list">
                                <a class="dropdown-toggle lang-head text-decoration-none" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-language me-2"></i>Language</a>
                                <ul class="dropdown-menu start-0 lang-hover-list top-100 image-icon">
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/english.png')}}" width="25px"
                                            height="20px" class="me-3"><a href="#">English</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/spain.png')}}" width="25px" height="20px"
                                            class="me-3"><a href="#">Spanish</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/france.png')}}" width="25px" height="20px"
                                            class="me-3"><a href="#">Franch</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/arabic.svg')}}" width="25px" height="20px"
                                            class="me-3"><a href="#">Arabic</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/german.png')}}" width="25px" height="20px"
                                            class="me-3"><a href="#">German</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/russian.jpeg')}}" width="25px"
                                            height="20px" class="me-3"><a href="#">russian</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/turkish.png')}}" width="25px"
                                            height="20px" class="me-3"><a href="#">Turkish</a>
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
                    <!-- <img src="./assets/images/vcard1-profile1.png')}}" alt="profile-img" class="img-fluid" /> -->
                </div>
            </div>
            <!-- {{--profile details--}} -->
            <div
                class="vcard-one__profile-details py-5 d-flex flex-column align-items-center justify-content-center bg-black">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex gap-3 align-items-center mb-3">
                                <img src="{{asset('assets/img/vcard41/profile-img.png')}}" alt="profile-img"
                                    class="img-fluid profile-img" />
                                <div class="main-heading text-center">
                                    <h1 class="profile-heading ">Rupali Patel</h1>
                                    <h2 class="profile-name text-color-1">General Manager</h2>
                                    <h2 class="profile-designation text-white">(Affirming Hotel Group)</h2>
                                </div>
                            </div>
                            <p class='profile-description'>It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at its layout. The point of
                                using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                opposed to using 'Content here, content here', making it look like readable English.</p>
                            <div class="social-icons d-flex justify-content-start gap-2 pt-4 ">
                                <a href="#" class="social-icons-items"><i class="fa-brands fa-facebook-f icon"></i></a>
                                <a href="#" class="social-icons-items"><i class="fa-brands fa-instagram icon"></i></a>
                                <a href="#" class="social-icons-items"><i class="fa-brands fa-twitter icon"></i></a>
                                <a href="#" class="social-icons-items"><i class="fa-brands fa-dribbble icon"></i></a>
                                <a href="#" class="social-icons-items"><i class="fa-brands fa-pinterest-p icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact us -->

            <section class="contact">
                <!-- <img src="{{asset('assets/img/vcard41/hero-image.png')}}" class="img-fluid" alt="background image" /> -->
                <div class="container main-section5 py-3"
                    style="background:url({{asset('assets/img/vcard41/contact-img.png')}});">
                    <div class="row contact-row">

                        <div class="col-md-6 d-flex flex-column justify-content-center">
                            <div class="icon-container gap-3">
                                <i class="fa-solid fa-message"></i>
                                <div>
                                    <h4 class="contact-heading1">Email Address</h4>
                                    <p class="contact-heading2">say.hi @sportscard.icu</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-center">
                            <div class="icon-container gap-3">
                                <i class="fa-solid fa-phone"></i>
                                <div>
                                    <h4 class="contact-heading1">Mobile Number</h4>
                                    <p class="contact-heading2">(123) 45675756-7890</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-center">
                            <div class="icon-container gap-3">
                                <i class="fa-solid fa-globe"></i>
                                <div>
                                    <h4 class="contact-heading1">Website</h4>
                                    <p class="contact-heading2">www.sportscard.icu</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-center">
                            <div class="icon-container gap-3">
                                <i class="fa-solid fa-location-dot"></i>
                                <div>
                                    <h4 class="contact-heading1">Location</h4>
                                    <p class="contact-heading2">City, State, Country</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- gallery -->
            <section class="gallery">
                <div class="container">
                    <div class="row">
                        <div class="gallery-heading text-center">
                            <h4>Gallery</h4>
                        </div>
                        <div class="col-sm-4 px-lg-4">
                            <div class="image-1-2">
                                <img src="{{asset('assets/img/vcard41/gallery-1.png')}}" alt=""
                                    class="mb-2 image-setting">
                                <img src="{{asset('assets/img/vcard41/gallery-2.png')}}" alt="" class="mb-2">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="image-3-4-5">
                                <img src="{{asset('assets/img/vcard41/gallery-3.png')}}" alt="" class="mb-2">
                                <img src="{{asset('assets/img/vcard41/gallery-4.png')}}" alt="" class="mb-2">
                                <img src="{{asset('assets/img/vcard41/gallery-5.png')}}" alt="" class="mb-2">
                            </div>
                        </div>
                        <div class="col-sm-4 px-lg-0">
                            <div class="image-6-7">
                                <img src="{{asset('assets/img/vcard41/gallery-6.png')}}" alt="" class="mb-2">
                                <img src="{{asset('assets/img/vcard41/gallery-7.png')}}" alt="" class="mb-2 ">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- services -->
            <section class="services">
                <div class="contaier ">
                    <div class="service-heading text-center">
                        <h2>My Services</h2>
                    </div>
                    <div class="service-slider px-4">
                        <div class="card border-0 rounded-0 shadow-0">
                            <img src="{{asset('assets/img/vcard41/services-1.png')}}" class="card-img rounded-0"
                                alt="...">
                            <div class="card-img-overlay flex-column justify-content-end">
                                <h5 class="card-title">loremipsum</h5>
                                <p class="card-text">It is a long established fact that a reader will be distracted by
                                    the readable</p>
                            </div>
                        </div>
                        <div class="card border-0 rounded-0 shadow-0">
                            <img src="{{asset('assets/img/vcard41/services-2.png')}}" class="card-img rounded-0"
                                alt="...">
                            <div class="card-img-overlay flex-column justify-content-end">
                                <h5 class="card-title">loremipsum</h5>
                                <p class="card-text">It is a long established fact that a reader will be distracted by
                                    the readable</p>
                            </div>
                        </div>
                        <div class="card border-0 rounded-0 shadow-0">
                            <img src="{{asset('assets/img/vcard41/services-3.png')}}" class="card-img rounded-0"
                                alt="...">
                            <div class="card-img-overlay flex-column justify-content-end">
                                <h5 class="card-title">loremipsum</h5>
                                <p class="card-text">It is a long established fact that a reader will be distracted by
                                    the readable</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- {{--blogs--}} -->
            <section id="blogs" class="blogs bg-color-1 pb-5">
                <div class="divider-verical mx-auto"></div>
                <div class="d-flex align-items-center gap-4 w-100">
                    <div class="flex-grow-1">
                        <!-- <div class="divider border-black"></div> -->
                    </div>
                    <h2 class="main-heading2 text-center px-lg-3">BLOGS</h2>
                    <div class="flex-grow-1">
                        <!-- <div class="divider border-black"></div> -->
                    </div>
                </div>
                <div class="divider-verical mx-auto"></div>
                <div class="container">
                    <div class="blog-slider-2 row align-items-top g-1">
                        <div class="col-sm-4 p-2">
                            <div
                                class="d-flex justify-content-center align-item-center blogs-card card bg-transparent border-0 shadow-0">
                                <div class="d-flex justify-content-center blogs-img position-relative">
                                    <img src="{{asset('assets/img/vcard41/blogs-1.png')}}" class="img-fluid"
                                        alt="blogs-card-1">
                                </div>
                                <div class="card-body text-center pt-0 position-relative">
                                    <!-- <div class="blogs-divider mx-auto"></div> -->
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted
                                        by the</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 p-2">
                            <div
                                class="d-flex justify-content-center align-item-center blogs-card card bg-transparent border-0 shadow-0">
                                <div
                                    class="d-flex justify-content-center align-item-center service-img position-relative">
                                    <img src="{{asset('assets/img/vcard41/blogs-2.png')}}" class="img-fluid"
                                        alt="blogs-card-1">
                                </div>
                                <div class="card-body text-center pt-0 position-relative">
                                    <!-- <div class="blogs-divider mx-auto"></div> -->
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted
                                        by the</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 p-2">
                            <div
                                class="d-flex justify-content-center align-item-center blogs-card card bg-transparent border-0 shadow-0">
                                <div
                                    class="d-flex justify-content-center align-item-center service-img position-relative">
                                    <img src="{{asset('assets/img/vcard41/blogs-3.png')}}" class="img-fluid"
                                        alt="blogs-card-1">
                                </div>
                                <div class="card-body text-center pt-0 position-relative">
                                    <!-- <div class="blogs-divider mx-auto"></div> -->
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted
                                        by the</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 p-2">
                            <div
                                class="d-flex justify-content-center align-item-center blogs-card card bg-transparent border-0 shadow-0">
                                <div class="d-flex justify-content-center blogs-img position-relative">
                                    <img src="{{asset('assets/img/vcard41/blogs-1.png')}}" class="img-fluid"
                                        alt="blogs-card-1">
                                </div>
                                <div class="card-body text-center pt-0 position-relative">
                                    <!-- <div class="blogs-divider mx-auto"></div> -->
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted
                                        by the</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- client -->
            <!-- testimonial -->
            <section class="testimonial">
                <div class="container">
                    <div class="testimonial-slider row">
                        <div class="col-12">
                            <div class="card testimonial-card bg-transparent img-overlay shadow-0 border-0">
                                <div class="row g-0">
                                    <div class="col-sm-4">
                                        <img src="{{ asset('assets/img/vcard41/client-image.png') }}"
                                            class="img-fluid h-100 w-100 object-fit-cover" alt="...">
                                    </div>
                                    <div class="col-sm-8 overlay-white"
                                        style="background: url({{ asset('assets/img/vcard41/testimonials-bg.png') }});">
                                        <div class="card-body px-lg-5 py-5">
                                            <h3 class="testimonial-title mb-3"><span class="quote">“</span>CLIENTS ABOUT
                                                US</h3>
                                            <p class="testimonial-desc mb-3">The point of using Lorem Ipsum is that it
                                                has a more-or-less normal distribution of letters, as opposed to using
                                                'Content here, content here', making it look like readable English.</p>
                                            <h6 class="testimonial-name">Christifer Joseph</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card testimonial-card bg-transparent shadow-0 border-0">
                                <div class="row g-0">
                                    <div class="col-sm-4">
                                        <img src="{{ asset('assets/img/vcard41/client-image.png') }}"
                                            class="img-fluid h-100 w-100 object-fit-cover" alt="...">
                                    </div>
                                    <div class="col-sm-8 overlay-white"
                                        style="background: url({{ asset('assets/img/vcard41/testimonials-bg.png') }});">
                                        <div class="card-body px-lg-5 py-5">
                                            <h3 class="testimonial-title mb-3"><span class="quote">“</span>CLIENTS ABOUT
                                                US</h3>
                                            <p class="testimonial-desc mb-3">The point of using Lorem Ipsum is that it
                                                has a more-or-less normal distribution of letters, as opposed to using
                                                'Content here, content here', making it look like readable English.</p>
                                            <h6 class="testimonial-name">Christifer Joseph</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card testimonial-card bg-transparent shadow-0 border-0">
                                <div class="row g-0">
                                    <div class="col-sm-4">
                                        <img src="{{ asset('assets/img/vcard41/client-image.png') }}"
                                            class="img-fluid h-100 w-100 object-fit-cover" alt="...">
                                    </div>
                                    <div class="col-sm-8 overlay-white"
                                        style="background: url({{ asset('assets/img/vcard41/testimonials-bg.png') }});">
                                        <div class="card-body px-lg-5 py-5">
                                            <h3 class="testimonial-title mb-3"><span class="quote">“</span>CLIENTS ABOUT
                                                US</h3>
                                            <p class="testimonial-desc mb-3">The point of using Lorem Ipsum is that it
                                                has a more-or-less normal distribution of letters, as opposed to using
                                                'Content here, content here', making it look like readable English.</p>
                                            <h6 class="testimonial-name">Christifer Joseph</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- {{--appointment--}} -->
            <section id="appointment" class="appointment-wrapper bg-black">
                <div class="d-flex align-items-center py-5 w-100">
                    <h2 class="main-heading text-center pe-lg-3 ps-30 text-white">Make an Appointment</h2>
                    <div class="flex-grow-1">
                        <div class="divider border-white"></div>
                    </div>
                </div>
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-12">
                            <form class="appointment text-center text-white position-relative">
                                <div class="mb-4">
                                    <label for="myID" class="form-label">Date</label>
                                    <input id="myID" type="text"
                                        class="appoint-input mb-2 form-control bg-black rounded-0 p-3"
                                        placeholder="Pick a Date" />
                                    <img src="{{ asset('assets/img/vcard41/appoinment-after.png') }}"
                                        class="appoinment-after">
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">Hours</label>
                                    <div class="d-flex flex-wrap gap-3">
                                        <p class="appoint-date activeSlot">
                                            12:00 - 10:00
                                        </p>
                                        <p class="appoint-date activeSlot">
                                            12:00 - 10:00
                                        </p>
                                        <p class="appoint-date activeSlot">
                                            12:00 - 10:00
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>

    <!-- scripts -->
    <script type="text/javascript" src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/front-third-party.js') }}"></script>
    <script src="{{ asset('assets/js/slider/js/slick.min.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>

        $(".service-slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            arrows: false,
            dots: true,
            speed: 300,
            centerPadding: "115px",
            infinite: true,
            autoplaySpeed: 5000,
            autoplay: false,
            responsive: [{
                breakpoint: 575,
                settings: {
                    centerPadding: "115px",
                    dots: true,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    centerPadding: "50px",
                    dots: true,
                },
            },
            ],
        });

        // datePicker
        $("#myID").flatpickr();

        $('.testimonial-slider').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 1,
            autoplay: false,
            slidesToScroll: 1
        });
        $('.blog-slider-2').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 3,
            autoplay: true,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                },
            }, {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                },
            }
            ],
        });
        $(document).ready(function () {
            $('.dropdown1').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
            });
        });
    </script>
</body>

</html>