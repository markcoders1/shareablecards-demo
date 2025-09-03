<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>vcard</title>

    {{--css link--}}
    <link rel="stylesheet" href="{{ asset('assets/css/vcard39.css')}}">

    {{--slick slider--}}
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">


    {{--google font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Syne&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
    <div class="container">
        <div class="vcard-one main-content w-100 mx-auto">
            {{--banner--}}
            <div class="vcard-one__banner w-100 position-relative">
                <img src="{{asset('assets/img/vcard39/hero-image.png')}}" class="img-fluid" alt="background image" />

                <div class="d-flex justify-content-end position-absolute top-0 end-0 me-3 z-2">
                    <div class="language pt-4 me-2">
                        <ul class="text-decoration-none">
                            <li class="dropdown1 dropdown lang-list">
                                <a class="dropdown-toggle lang-head text-decoration-none" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-language me-2"></i>Language</a>
                                <ul class="dropdown-menu start-0 lang-hover-list top-100 image-icon">
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/english.png')}}" width="25px" height="20px" class="me-3"><a href="#">English</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/spain.png')}}" width="25px" height="20px" class="me-3"><a href="#">Spanish</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/france.png')}}" width="25px" height="20px" class="me-3"><a href="#">Franch</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/arabic.svg')}}" width="25px" height="20px" class="me-3"><a href="#">Arabic</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/german.png')}}" width="25px" height="20px" class="me-3"><a href="#">German</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/russian.jpeg')}}" width="25px" height="20px" class="me-3"><a href="#">russian</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard21/turkish.png')}}" width="25px" height="20px" class="me-3"><a href="#">Turkish</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{--profile--}}
            <div class="vcard-one__profile position-relative z-2 px-4">
                <div class="d-flex flex-sm-row flex-column align-items-center gap-4">
                    <div class="avatar">
                        <img src="{{asset('assets/img/vcard39/vcard24-profile1.png')}}" alt="profile-img" class="img-fluid" />
                    </div>
                    <div class="d-flex flex-column align-items-sm-start align-items-center  gap-1">
                        <h2 class="profile-meta">Meda Salon</h2>
                        <h2 class="profile-name text-pink">Darryl Davidson</h2>
                        <h2 class="profile-designation text-white">Salon Owner</h2>
                        <div class="social-icons d-flex justify-content-center gap-3 pt-1">
                            <a href="#" class="social-icons-items"><i class="fa-brands fa-facebook-f icon"></i></a>
                            <a href="#" class="social-icons-items"><i class="fa-brands fa-instagram icon"></i></a>
                            <a href="#" class="social-icons-items"><i class="fa-brands fa-twitter icon"></i></a>
                            <a href="#" class="social-icons-items"><i class="fa-brands fa-dribbble icon"></i></a>
                            <a href="#" class="social-icons-items"><i class="fa-brands fa-pinterest-p icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{--contact--}}
            <section id="contact-us" class="my-5">
                <div class="container px-sm-4">
                    <div class="row g-3 text-white">
                        <div class="col-sm-6 col-12">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <img src="{{asset('assets/img/vcard39/envelop.svg')}}">
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
                                    <img src="{{asset('assets/img/vcard39/phone.svg')}}">
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
                                    <img src="{{asset('assets/img/vcard39/globe.svg')}}">
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
                                    <img src="{{asset('assets/img/vcard39/location.svg')}}">
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

            {{--About--}}

            <scrtion id="about">
                <div class="container py-5 bg-white px-4">
                    <div class="row align-items-center g-3 gy-4">
                        <div class="col-sm-6 col-12 text-center">
                            <div class="about-img">
                                <img src="{{asset('assets/img/vcard39/about-img.png')}}" class="img-fluid" alt="about-img">
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="d-flex flex-column gap-3 pe-sm-3">
                                <h3 class="main-heading">About Me</h3>
                                <p class="about-desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <p class="about-desc">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </scrtion>

            {{--services--}}
            <section id="services" class="services py-5">
                <div class="container">
                    <div class="row align-items-top g-3">
                        <div class="col-12 mb-3">
                            <h2 class="main-heading2 text-center">My Services</h2>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-card card shadow-0">
                                <div class="service-img position-relative">
                                    <img src="{{asset('assets/img/vcard21/blog-1.png')}}" class="img-fluid rounded-top" alt="service-card-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-card card shadow-0">
                                <div class="service-img position-relative">
                                    <img src="{{asset('assets/img/vcard21/blog-2.png')}}" class="img-fluid" alt="service-card-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-card card shadow-0">
                                <div class="service-img position-relative">
                                    <img src="{{asset('assets/img/vcard21/blog-3.png')}}" class="img-fluid" alt="service-card-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-top g-3">
                        <div class="col-12 mb-3">
                        </div>
                        <div class="col-sm-4">
                            <div class="service-card card shadow-0">
                                <div class="service-img position-relative">
                                    <img src="{{asset('assets/img/vcard21/blog-1.png')}}" class="img-fluid rounded-top" alt="service-card-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-card card shadow-0">
                                <div class="service-img position-relative">
                                    <img src="{{asset('assets/img/vcard21/blog-2.png')}}" class="img-fluid" alt="service-card-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-card card shadow-0">
                                <div class="service-img position-relative">
                                    <img src="{{asset('assets/img/vcard21/blog-3.png')}}" class="img-fluid" alt="service-card-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            {{--gallery--}}
            <section id="gallery" class="gallery bg-white py-5">
                <div class="container p-0">
                    <div class="row g-3">
                        <div class="col-12 mb-3">
                        <h2 class="main-heading text-center">Gallery</h2>
                        </div>
                        <div class="gallery-slider mx-auto p-0 pt-3 pb-4">
                            <div class="gallery-card border-0">
                                <div class="gallery-img position-relative">
                                    <img src="{{asset('assets/img/vcard39/gallery1.png')}}" class="img-fluid" alt="gallery-1">
                                </div>
                            </div>
                            <div class="gallery-card border-0">
                                <div class="gallery-img position-relative">
                                    <img src="{{asset('assets/img/vcard39/gallery2.png')}}" class="img-fluid" alt="gallery-2">
                                </div>
                            </div>
                            <div class="gallery-card border-0">
                                <div class="gallery-img position-relative">
                                    <img src="{{asset('assets/img/vcard39/gallery3.png')}}" class="img-fluid" alt="gallery-3">
                                </div>
                            </div>
                            <div class="gallery-card border-0">
                                <div class="gallery-img position-relative">
                                    <img src="{{asset('assets/img/vcard39/gallery4.png')}}" class="img-fluid" alt="gallery-4">
                                </div>
                            </div>
                            <div class="gallery-card border-0">
                                <div class="gallery-img position-relative">
                                    <img src="{{asset('assets/img/vcard39/gallery1.png')}}" class="img-fluid" alt="gallery-1">
                                </div>
                            </div>
                            <div class="gallery-card border-0">
                                <div class="gallery-img position-relative">
                                    <img src="{{asset('assets/img/vcard39/gallery2.png')}}" class="img-fluid" alt="gallery-2">
                                </div>
                            </div>
                            <div class="gallery-card border-0">
                                <div class="gallery-img position-relative">
                                    <img src="{{asset('assets/img/vcard39/gallery3.png')}}" class="img-fluid" alt="gallery-3">
                                </div>
                            </div>
                            <div class="gallery-card border-0">
                                <div class="gallery-img position-relative">
                                    <img src="{{asset('assets/img/vcard39/gallery4.png')}}" class="img-fluid" alt="gallery-4">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>

            {{--hours--}}
            <!-- <section id="hours" class="hours py-5 bg-navy-blue">
                <div class="container">
                    <div class="row g-3 justify-content-center">
                        <div class="col-12 mb-3">
                            <h2 class="main-heading text-center">Business Hours</h2>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="hours-box bg-navy-blue-2">
                                <h6 class="hours-title text-center">Sunday : 08:10 - 20:00</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="hours-box bg-navy-blue-2">
                                <h6 class="hours-title text-center">Monday : 08:10 - 20:00</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="hours-box bg-navy-blue-2">
                                <h6 class="hours-title text-center">Tuesday : 08:10 - 20:00</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="hours-box bg-navy-blue-2">
                                <h6 class="hours-title text-center">Wednesday : 08:10 - 20:00</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="hours-box bg-navy-blue-2">
                                <h6 class="hours-title text-center">Thursday : 08:10 - 20:00</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="hours-box bg-navy-blue-2">
                                <h6 class="hours-title text-center">Friday : 08:10 - 20:00</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="hours-box bg-navy-blue-2">
                                <h6 class="hours-title text-center">Saturday : 08:10 - 20:00</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            {{--blog--}}
            <section id="blog" class="blog py-5">
                <div class="container">
                    <div class="row g-3">
                        <div class="col-12 mb-3">
                            <h2 class="main-heading2 text-center">My Blogs</h2>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-card card shadow-0">
                                <div class="blog-img position-relative">
                                    <img src="{{asset('assets/img/vcard39/blog1.png')}}" class="img-fluid rounded-top" alt="service-card-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-card card shadow-0">
                                <div class="blog-img position-relative">
                                    <img src="{{asset('assets/img/vcard39/blog2.png')}}" class="img-fluid" alt="service-card-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-card card shadow-0">
                                <div class="blog-img position-relative">
                                    <img src="{{asset('assets/img/vcard39/blog3.png')}}" class="img-fluid" alt="service-card-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--testimonial--}}
            <section id="testimonial" class="testimonial bg-white py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h2 class="main-heading text-center">Testimonials</h2>
                        </div>
                        <div class="col-12">
                            <div class="testimonial-slider mx-auto">
                                <!-- slider 1 -->
                                <div class="testimonial-slide">
                                    <div class="testimonial-card row g-3 position-relative">
                                        <img src="{{asset('assets/img/vcard39/quotes.png')}}" class="img-fluid qoute" alt="qoute">
                                        <div class="card-body">
                                            <p class="testimonial-desc mb-3">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{asset('assets/img/vcard21/profile.png')}}" alt="profile" class="img-fluid testimonial-profile">
                                                <div class="d-flex flex-column">
                                                    <h4 class="card-title text-white">MARK HENRY</h4>
                                                    <p class="card-text">CEO Founder</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider 1 -->
                                <div class="testimonial-slide">
                                    <div class="testimonial-card row g-3 position-relative">
                                        <img src="{{asset('assets/img/vcard39/quotes.png')}}" class="img-fluid qoute" alt="qoute">
                                        <div class="card-body">
                                            <p class="testimonial-desc mb-3">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{asset('assets/img/vcard21/profile.png')}}" alt="profile" class="img-fluid testimonial-profile">
                                                <div class="d-flex flex-column">
                                                    <h4 class="card-title text-white">MARK HENRY</h4>
                                                    <p class="card-text">CEO Founder</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider 1 -->
                                <div class="testimonial-slide">
                                    <div class="testimonial-card row g-3 position-relative">
                                        <img src="{{asset('assets/img/vcard39/quotes.png')}}" class="img-fluid qoute" alt="qoute">
                                        <div class="card-body">
                                            <p class="testimonial-desc mb-3">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{asset('assets/img/vcard21/profile.png')}}" alt="profile" class="img-fluid testimonial-profile">
                                                <div class="d-flex flex-column">
                                                    <h4 class="card-title text-white">MARK HENRY</h4>
                                                    <p class="card-text">CEO Founder</p>
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
                                    <input id="myID" type="text" class="appoint-input mb-2 form-control rounded text-white p-3" placeholder="Pick a Date" />
                                </div>
                                <div class="text-center">
                                    <label for="myID" class="form-label text-white mb-3">Hours</label>
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
                                <button class="btn btn-appointment mt-4">Make An Appointment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <!-- script -->
    <script type="text/javascript" src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/front-third-party.js') }}"></script>
    <script src="{{ asset('assets/js/slider/js/slick.min.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


    <script>
        // testimonial Slider
        
        $('.testimonial-slider').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 1,
            autoplay: false,
            slidesToScroll: 1
        });
        $('.gallery-slider').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 4,
            autoplay: true,
            slidesToScroll: 1
        });

        $('.gallery-slider').slick({
            dots: true,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 4,
            autoplay: false,
            slidesToScroll: 1
        });

        // datePicker
        $("#myID").flatpickr();

        // language dropdown
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