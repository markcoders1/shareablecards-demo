<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>vcard</title>

    {{--css link--}}
    <link rel="stylesheet" href="{{ asset('assets/css/vcard37.css')}}">

    {{--slick slider--}}
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">


    {{--google font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Syne&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>

    <!-- hero Section -->

    <!-- <section id="hero">
        <div class="hero-image">
            <img src="./assets/images/hero-image.png')}}" class="img-fluid w-100" alt="hero-image">
        </div>
        <div class="hero">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-0">
                        <div class="profile-img text-center">
                            <img src="./assets/images/owner-image.png')}}" class="img-fluid" alt="image">
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
        <img src="{{asset('assets/img/vcard37/main-img.png')}}" class="img-fluid" alt="background image" />

        <div class="d-flex justify-content-end position-absolute top-0 end-0 me-3 z-2">
            <div class="language pt-4 me-2">
                <ul class="text-decoration-none">
                    <li class="dropdown1 dropdown lang-list">
                        <a class="dropdown-toggle lang-head text-decoration-none" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-language me-2"></i>Language</a>
                        <ul class="dropdown-menu start-0 lang-hover-list top-100 image-icon">
                            <li>
                                <img src="{{asset('assets/img/vcard37/english.png')}}" width="25px" height="20px" class="me-3"><a href="#">English</a>
                            </li>
                            <li>
                                <img src="{{asset('assets/img/vcard37/spain.png')}}" width="25px" height="20px" class="me-3"><a href="#">Spanish</a>
                            </li>
                            <li>
                                <img src="{{asset('assets/img/vcard37/france.png')}}" width="25px" height="20px" class="me-3"><a href="#">Franch</a>
                            </li>
                            <li>
                                <img src="{{asset('assets/img/vcard37/arabic.svg')}}" width="25px" height="20px" class="me-3"><a href="#">Arabic</a>
                            </li>
                            <li>
                                <img src="{{asset('assets/img/vcard37/german.png')}}" width="25px" height="20px" class="me-3"><a href="#">German</a>
                            </li>
                            <li>
                                <img src="{{asset('assets/img/vcard37/russian.jpeg')}}" width="25px" height="20px" class="me-3"><a href="#">russian</a>
                            </li>
                            <li>
                                <img src="{{asset('assets/img/vcard37/turkish.png')}}" width="25px" height="20px" class="me-3"><a href="#">Turkish</a>
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
            <img src="{{asset('assets/img/vcard37/profile img.png')}}" alt="profile-img" class="img-fluid" />
        </div>
    </div>
    <!-- {{--profile details--}} -->
    <div class="vcard-one__profile-details py-3 d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex align-items-center gap-4 mt-4 w-100">
            <div class="flex-grow-1">
                <div class="divider border-white"></div>
            </div>
            <div class="main-heading text-center px-lg-3">
                <h2 class="profile-name text-white">Denise Callahan</h2>
                <h2 class="profile-designation">Memorable Moments</h2>
                <h2 class="profile-post">Event Planner</h2>
            </div>
            <div class="flex-grow-1">
                <div class="divider border-white"></div>
            </div>
        </div>
        <span class="mt-4 profile-description mx-auto">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</span>
        <div class="social-icons d-flex justify-content-center gap-3 pt-4">
            <a href="#" class="social-icons-items"><i class="fa-brands fa-facebook-f icon"></i></a>
            <a href="#" class="social-icons-items"><i class="fa-brands fa-instagram icon"></i></a>
            <a href="#" class="social-icons-items"><i class="fa-brands fa-twitter icon"></i></a>
            <a href="#" class="social-icons-items"><i class="fa-brands fa-dribbble icon"></i></a>
            <a href="#" class="social-icons-items"><i class="fa-brands fa-pinterest-p icon"></i></a>
        </div>

    </div>
    <!-- {{--contect us--}} -->
    <section id="contact" class="contact-us pt-4 pb-5">
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
                        <img src="{{asset('assets/img/vcard37/contact img.png')}}" alt="profile-img" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- {{--services--}} -->
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
                            <img src="{{asset('assets/img/vcard37/services img 1.png')}}" class="img-fluid" alt="service-card-1">
                        </div>
                        <div class="card-body text-center pt-0 position-relative">
                            <div class="service-divider mx-auto"></div>
                            <h5 class="card-title">Loremipsum</h5>
                            <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service-card card bg-transparent border-0 shadow-0">
                        <div class="service-img position-relative">
                            <img src="{{asset('assets/img/vcard37/services img 2.png')}}" class="img-fluid" alt="service-card-1">
                        </div>
                        <div class="card-body text-center pt-0 position-relative">
                            <div class="service-divider mx-auto"></div>
                            <h5 class="card-title">Loremipsum</h5>
                            <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service-card card bg-transparent border-0 shadow-0">
                        <div class="service-img position-relative">
                            <img src="{{asset('assets/img/vcard37/services img 3.png')}}" class="img-fluid" alt="service-card-1">
                        </div>
                        <div class="card-body text-center pt-0 position-relative">
                            <div class="service-divider mx-auto"></div>
                            <h5 class="card-title">Loremipsum</h5>
                            <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- {{--gallery--}} -->
    <section id="gallery" class="gallery-wrapper">
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
                            <img src="{{asset('assets/img/vcard37/gallery img 1.png')}}" alt="gallery-img" class="img-fluid">
                        </div>
                        <div class="gallery-image text-center">
                            <img src="{{asset('assets/img/vcard37/gallery img 2.png')}}" alt="gallery-img" class="img-fluid">
                        </div>
                        <div class="gallery-image text-center">
                            <img src="{{asset('assets/img/vcard37/gallery img 3.png')}}" alt="gallery-img" class="img-fluid">
                        </div>
                        <div class="gallery-image text-center">
                            <img src="{{asset('assets/img/vcard37/gallery img 1.png')}}" alt="gallery-img" class="img-fluid">
                        </div>
                        <div class="gallery-image text-center">
                            <img src="{{asset('assets/img/vcard37/gallery img 2.png')}}" alt="gallery-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- {{--testimonial--}} -->
    <section id="testimonial" class="testimonial pb-5">
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
                            <div class="testimonial-card row g-3 position-relative">
                                <div class="col-12">
                                    <!-- <img src="./assets/images/testimonial-profile.png')}}" class="img-fluid rounded-circle testimonial-profile" alt="testimonial"> -->
                                </div>
                                <div class="col-sm-5 d-flex flex-column gap-3 flex-grow-1">
                                    <!-- <img src="./assets/images/testimonial-1.png')}}" class="img-fluid" alt="testimonial"> -->
                                    <img src="{{asset('assets/img/vcard37/testimonial-img.png')}}" class="img-fluid" alt="testimonial">
                                </div>
                                <div class="col-sm-7 d-flex flex-column gap-4 flex-grow-1">
                                    <div class="card bg-transparent border-0 shadow-0">
                                        <div class="card-body2 px-2 pb-0">
                                            <div class="card-icon text-end">
                                                <img src="{{asset('assets/img/vcard37/testimonial-quote-img.png')}}" alt="blockquote" class="img-fluid d-inline-block">
                                            </div>
                                            <h4 class="card-title">Adiana Lora</h4>
                                            <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                            <br>
                                            <p class="card-text2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </div>
                                    </div>
                                    <!-- <img src="./assets/images/testimonial-3.png')}}" class="img-fluid" alt="testimonial"> -->
                                </div>
                            </div>
                        </div>
                        <!-- slider 2 -->
                        <div class="testimonial-slide">
                            <div class="testimonial-card row g-3 position-relative">
                                <div class="col-12">
                                    <!-- <img src="./assets/images/testimonial-profile.png')}}" class="img-fluid rounded-circle testimonial-profile" alt="testimonial"> -->
                                </div>
                                <div class="col-sm-5 d-flex flex-column gap-3 flex-grow-1">
                                    <!-- <img src="./assets/images/testimonial-1.png')}}" class="img-fluid" alt="testimonial"> -->
                                    <img src="{{asset('assets/img/vcard37/testimonial-img.png')}}" class="img-fluid" alt="testimonial">
                                </div>
                                <div class="col-sm-7 d-flex flex-column gap-4 flex-grow-1">
                                    <div class="card bg-transparent border-0 shadow-0">
                                        <div class="card-body2 px-2 pb-0">
                                            <div class="card-icon text-end">
                                                <img src="{{asset('assets/img/vcard37/testimonial-quote-img.png')}}" alt="blockquote" class="img-fluid d-inline-block">
                                            </div>
                                            <h4 class="card-title">Adiana Lora</h4>
                                            <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                            <br>
                                            <p class="card-text2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </div>
                                    </div>
                                    <!-- <img src="./assets/images/testimonial-3.png')}}" class="img-fluid" alt="testimonial"> -->
                                </div>
                            </div>
                        </div>
                        <!-- slider 3 -->
                        <div class="testimonial-slide">
                            <div class="testimonial-card row g-3 position-relative">
                                <div class="col-12">
                                    <!-- <img src="./assets/images/testimonial-profile.png')}}" class="img-fluid rounded-circle testimonial-profile" alt="testimonial"> -->
                                </div>
                                <div class="col-sm-5 d-flex flex-column gap-3 flex-grow-1">
                                    <!-- <img src="./assets/images/testimonial-1.png')}}" class="img-fluid" alt="testimonial"> -->
                                    <img src="{{asset('assets/img/vcard37/testimonial-img.png')}}" class="img-fluid" alt="testimonial">
                                </div>
                                <div class="col-sm-7 d-flex flex-column gap-4 flex-grow-1">
                                    <div class="card bg-transparent border-0 shadow-0">
                                        <div class="card-body2 px-2 pb-0">
                                            <div class="card-icon text-end">
                                                <img src="{{asset('assets/img/vcard37/testimonial-quote-img.png')}}" alt="blockquote" class="img-fluid d-inline-block">
                                            </div>
                                            <h4 class="card-title">Adiana Lora</h4>
                                            <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                            <br>
                                            <p class="card-text2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </div>
                                    </div>
                                    <!-- <img src="./assets/images/testimonial-3.png')}}" class="img-fluid" alt="testimonial"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- {{--blog--}} -->
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
                                <img src="{{asset('assets/img/vcard37/blog img.png')}}" class="card-img rounded-0" alt="blog-img">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-slide">
                            <div class="card text-bg-dark">
                                <img src="{{asset('assets/img/vcard37/blog img.png')}}" class="card-img rounded-0" alt="blog-img">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-slide">
                            <div class="card text-bg-dark">
                                <img src="{{asset('assets/img/vcard37/blog img.png')}}" class="card-img rounded-0" alt="blog-img">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- {{--appointment--}} -->
    <section id="appointment" class="appointment-wrapper ">
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
                        <div class=" mb-4">
                            <label for="myID" class="form-label">Date</label>
                            <input id="myID" type="text" class="appoint-input mb-2 form-control rounded-0 p-3" placeholder="Pick a Date"  />
                        </div>
                        <div class="mb-5">
                            <label class="form-label">Hours</label>
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
        </section>
    </main>
   

    <!-- scripts -->
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