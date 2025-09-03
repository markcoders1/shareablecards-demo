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
    <link rel="stylesheet" href="{{ asset('assets/css/vcard42.css')}}">

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
    <main class="container">
        <section class="vcard-one main-content w-100 mx-auto">
            <!-- {{--banner--}} -->

            
            <div class="vcard-one__banner w-100 position-relative">
                <img src="{{asset('assets/img/vcard42/main-img.png')}}" class="img-fluid" alt="background image" />

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
            <!-- profile -->
            <section class="profile py-5">
                <div class="container">
                    <div class="row px-5">
                        <div class="col-sm-5 ps-sm-0">
                            <div class="profile-img">
                                <img src="{{asset('assets/img/vcard42/profile-img.png')}}"
                                    class='h-100 w-100 object-fit-cover' alt="">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="profile-content">
                                <h5>Landscaper</h5>
                                <h2>Francis Cruz</h2>
                                <h6>(Beautiful Landings)</h6>
                                <p class='mb-2'>It is a long established fact that a reader will be distracted by the
                                    readable
                                    content of a page when looking at its layout. </p>
                                <div class="social-icons d-flex gap-3 pt-2">
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
            </section>

            {{--contact--}}
            <section id="contact-us" class="contact-us pb-5" class="my-5">
                <div class="container px-sm-5">
                    <div class="row g-3 text-white">
                        <div class="col-sm-6 col-12">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <img src="{{asset('assets/img/vcard42/envelop.svg')}}">
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Email Address</h6>
                                    <a href="#" class="contact-link text-white">say.hi @shareable.icu</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <img src="{{asset('assets/img/vcard42/phone.svg')}}">
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Mobile Number</h6>
                                    <a href="#" class="contact-link text-white">+12 3456 7890</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <img src="{{asset('assets/img/vcard42/globe.svg')}}">
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Website</h6>
                                    <a href="#" class="contact-link text-white">www.shareable.icu</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <img src="{{asset('assets/img/vcard42/location.svg')}}">
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

            <!-- galleries -->


            <section class="galleries pb-5">
                <div class="container p-sm-4">
                    <div class="row">
                        <div class="justify-content-center pt-4 pb-4">
                            <h2 class="main-heading text-center">Galleries</h2>
                        </div>
                    </div>
                    <div class="row g-2 px-sm-5">
                        <div class="col-sm-6 col-6">
                            <a href="#!" data-lightbox="gallery-images">
                                <img src="{{asset('assets/img/vcard42/gallery-1.png')}}" alt="" class="gallery-img">
                            </a>
                        </div>
                        <div class="col-sm-6 col-6">
                            <a href="#!" data-lightbox="gallery-images">
                                <img src="{{asset('assets/img/vcard42/gallery-2.png')}}" alt="" class="gallery-img">
                            </a>
                        </div>
                        <div class="col-sm-6 col-6">
                            <a href="#!" data-lightbox="gallery-images">
                                <img src="{{asset('assets/img/vcard42/gallery-3.png')}}" alt="" class="gallery-img">
                            </a>
                        </div>
                        <div class="col-sm-6 col-6">
                            <a href="#!" data-lightbox="gallery-images">
                                <img src="{{asset('assets/img/vcard42/gallery-4.png')}}" alt="" class="gallery-img">
                            </a>
                        </div>
                        <div class="col-sm-6 col-6">
                            <a href="#!" data-lightbox="gallery-images">
                                <img src="{{asset('assets/img/vcard42/gallery-5.png')}}" alt="" class="gallery-img">
                            </a>
                        </div>
                        <div class="col-sm-6 col-6">
                            <a href="#!" data-lightbox="gallery-images">
                                <img src="{{asset('assets/img/vcard42/gallery-6.png')}}" alt="" class="gallery-img">
                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <!-- services -->

            <section class="services">
                <div class="container services-section">
                    <h2 class="services-section-heading">My Services</h2>

                    <div class="row box-container">
                        <div class="col-md-4">
                            <div class="services-box">
                                <div class="circle">
                                    <!-- <img src="{{asset('assets/img/vcard42/services-icon.png')}}" alt=""> -->
                                </div>
                                <a href="#"></a>
                                <h3 class="services-box-heading">loremipsum</h3></a>
                                <p class="services-box-text">It is a long established fact that a reader</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-box">
                                <div class="circle">
                                    <!-- <img src="{{asset('assets/img/vcard42/services-icon.png')}}" alt=""> -->
                                </div>
                                <a href="#"></a>
                                <h3 class="services-box-heading">loremipsum</h3></a>
                                <p class="services-box-text">It is a long established fact that a reader</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-box">
                                <div class="circle">
                                    <!-- <img src="{{asset('assets/img/vcard42/services-icon.png')}}" alt=""> -->
                                </div>
                                <a href="#"></a>
                                <h3 class="services-box-heading">loremipsum</h3></a>
                                <p class="services-box-text">It is a long established fact that a reader</p>
                            </div>
                        </div>

                        <!-- Bottom Three Boxes -->
                        <div class="col-md-4">
                            <div class="services-box">
                                <div class="circle">
                                    <!-- <img src="{{asset('assets/img/vcard42/services-icon.png')}}" alt=""> -->
                                </div>
                                <a href="#"></a>
                                <h3 class="services-box-heading">loremipsum</h3></a>
                                <p class="services-box-text">It is a long established fact that a reader</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-box">
                                <div class="circle">
                                    <!-- <img src="{{asset('assets/img/vcard42/services-icon.png')}}" alt=""> -->
                                </div>
                                <a href="#"></a>
                                <h3 class="services-box-heading">loremipsum</h3></a>
                                <p class="services-box-text">It is a long established fact that a reader</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="services-box">
                                <div class="circle">
                                    <!-- <img src="{{asset('assets/img/vcard42/services-icon.png')}}" alt=""> -->
                                </div>
                                <a href="#"></a>
                                <h3 class="services-box-heading">loremipsum</h3></a>
                                <p class="services-box-text">It is a long established fact that a reader</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--blog--}}
            <section id="blog" class="blog py-5">
                <div class="container">
                    <div class="row g-3">
                        <div class="col-12 mb-3">
                            <h2 class="main-heading text-center">My Blogs</h2>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-card card shadow-0">
                                <div class="blog-img position-relative">
                                    <img src="{{asset('assets/img/vcard42/blog-1.png')}}" class="img-fluid rounded-top"
                                        alt="service-card-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted
                                        by the readable content of a </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-card card shadow-0">
                                <div class="blog-img position-relative">
                                    <img src="{{asset('assets/img/vcard42/blog-2.png')}}" class="img-fluid"
                                        alt="service-card-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted
                                        by the readable content of a </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-card card shadow-0">
                                <div class="blog-img position-relative">
                                    <img src="{{asset('assets/img/vcard42/blog-3.png')}}" class="img-fluid"
                                        alt="service-card-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted
                                        by the readable content of a </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            {{--testimonial--}}
            <section id="testimonial" class="testimonial position-relative pt-5">
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h2 class="main-heading2 text-center mb-3">Testimonials</h2>
                        </div>
                        <div class="col-12 position-relative px-0">
                            <div class="testimonial-slider">
                                <div class="slide">
                                    <div class="card testimonial-card bg-transparent shadow-0 border-0">
                                        <div class="row align-items-center g-0">
                                            <div class="offset-sm-2 col-sm-3">
                                                <img src="{{ asset('assets/img/vcard42/testimonial-img.png') }}"
                                                    class="testimonial-img ms-sm-auto" alt="...">
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="card-body px-sm-4">
                                                    <p class="testimonial-desc mb-3">It is a long established fact that
                                                        a reader will be distracted by the readable content of a page
                                                        when looking at its layout. The point of using Lorem Ipsum is
                                                        that it has a more-or-less normal distribution of letters,</p>
                                                    <div
                                                        class="d-flex flex-column align-items-lg-end align-items-center">
                                                        <div>
                                                            <h6 class="testimonial-name">Lorem Ipsum</h6>
                                                            <p class="testimonial-designation">Mitchell Odson</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="card testimonial-card bg-transparent shadow-0 border-0">
                                        <div class="row align-items-center g-0">
                                            <div class="offset-sm-2 col-sm-3">
                                                <img src="{{ asset('assets/img/vcard42/testimonial-img.png') }}"
                                                    class="testimonial-img ms-sm-auto" alt="...">
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="card-body px-sm-4">
                                                    <p class="testimonial-desc mb-3">It is a long established fact that
                                                        a reader will be distracted by the readable content of a page
                                                        when looking at its layout. The point of using Lorem Ipsum is
                                                        that it has a more-or-less normal distribution of letters,</p>
                                                    <div
                                                        class="d-flex flex-column align-items-lg-end align-items-center">
                                                        <div>
                                                            <h6 class="testimonial-name">Lorem Ipsum</h6>
                                                            <p class="testimonial-designation">Mitchell Odson</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="card testimonial-card bg-transparent shadow-0 border-0">
                                        <div class="row align-items-center g-0">
                                            <div class="offset-sm-2 col-sm-3">
                                                <img src="{{ asset('assets/img/vcard42/testimonial-img.png') }}"
                                                    class="testimonial-img ms-sm-auto" alt="...">
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="card-body   px-sm-4">
                                                    <p class="testimonial-desc mb-3">It is a long established fact that
                                                        a reader will be distracted by the readable content of a page
                                                        when looking at its layout. The point of using Lorem Ipsum is
                                                        that it has a more-or-less normal distribution of letters,</p>
                                                    <div
                                                        class="d-flex flex-column align-items-lg-end align-items-center">
                                                        <div>
                                                            <h6 class="testimonial-name">Lorem Ipsum</h6>
                                                            <p class="testimonial-designation">Mitchell Odson</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                            <h2 class="main-heading2 text-center">Make an Appointment</h2>
                        </div>
                        <div class="col-12">
                            <form class="appointment text-white">
                                <div class="mb-4">
                                    <input id="myID" type="text"
                                        class="appoint-input mb-2 form-control rounded text-white p-3"
                                        placeholder="Pick a Date" />
                                </div>
                                <div class="text-center">
                                    <label for="myID" class="form-label text-white mb-3">Hours</label>
                                    <div
                                        class="d-flex flex-wrap justify-content-sm-between justify-content-center gap-3">
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
                                <button class="btn btn-appointment mt-4">Make An Appointment</button>
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

        $('.testimonial-slider').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 1,
            autoplay: false,
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
</body>

</html>