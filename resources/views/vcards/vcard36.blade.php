<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>vcard</title>

    {{--css link--}}
    <link rel="stylesheet" href="{{ asset('assets/css/vcard36.css')}}">

    {{--slick slider--}}
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">


    {{--google font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
    <div class="container">
        <div class="vcard-one main-content w-100 mx-auto">
            {{--banner--}}
            <div class="vcard-one__banner w-100 position-relative">
                <img src="{{asset('assets/img/vcard36/hero-image.png')}}" class="position-absolute top-0 start-0 h-100 w-100" alt="background image" />

                {{--profile--}}
                <div class="vcard-one__profile position-relative z-2 px-sm-5 px-4 py-5">
                    <div class="row gy-4 align-items-center">
                        
                        <div class="col-sm-5">
                            <div class="avatar">
                                <img src="{{asset('assets/img/vcard36/vcard1-profile1.png')}}" alt="profile-img" class="img-fluid" />
                            </div>
                        </div>

                        <div class="col-sm-7 order-sm-first">
                            <div class="d-flex flex-column align-items-sm-start  gap-3">
                                <p class="top-position-profile">Straight Financial Services</p>
                                <h2 class="profile-name text-white">Benjamin Straight </br><span class="text-skyblue profile-position">Professional Financial Advisor</span></h2>
                                <p class="profile-desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <div class="social-icons d-flex  gap-3 pt-1">
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

                <!-- languages -->
                <div class="d-flex justify-content-end position-absolute top-0 end-0 me-3 z-2">
                    <div class="language pt-4 me-2">
                        <ul class="text-decoration-none">
                            <li class="dropdown1 dropdown lang-list">
                                <a class="dropdown-toggle lang-head text-decoration-none" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-language me-2"></i>Language</a>
                                <ul class="dropdown-menu start-0 lang-hover-list top-100 image-icon">
                                    <li>
                                        <img src="{{asset('assets/img/vcard36/english.png')}}" width="25px" height="20px" class="me-3"><a href="#">English</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard36/spain.png')}}" width="25px" height="20px" class="me-3"><a href="#">Spanish</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard36/france.png')}}" width="25px" height="20px" class="me-3"><a href="#">Franch</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard36/arabic.svg')}}" width="25px" height="20px" class="me-3"><a href="#">Arabic</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard36/german.png')}}" width="25px" height="20px" class="me-3"><a href="#">German</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard36/russian.jpeg')}}" width="25px" height="20px" class="me-3"><a href="#">russian</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard36/turkish.png')}}" width="25px" height="20px" class="me-3"><a href="#">Turkish</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end -->
            </div>


            {{--About--}}

            <scrtion id="about">
                <div class="container py-5 px-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-column align-items-center gap-3 px-sm-5 px-4">
                                <h3 class="main-heading">About Me</h3>
                                <p class="about-desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <p class="about-desc">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </scrtion>

            {{--contact--}}
            <section id="contact-us" class="py-5 bg-skyblue">
                <div class="container px-sm-5 ">
                    <div class="row g-3 text-white">
                        <div class="col-6">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Email Address</h6>
                                    <a href="#" class="contact-link text-white">say.hi @shareable.icu</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-globe"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Website</h6>
                                    <a href="#" class="contact-link text-white">www.shareable.icu</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="contact-box d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Mobile Number</h6>
                                    <a href="#" class="contact-link text-white">+12 3456 7890</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="contact-box d-flex align-items-center gap-3">
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



            {{--services--}}
            <section id="services" class="services py-5">
                <div class="container">
                    <div class="services-cards">
                        <h2 class="main-heading mb-5">Courses and Training</h2>
                        <div class="row service-card align-items-center g-3 gy-4 mb-5">
                            <div class="col-sm-6">
                                <div class="card-body">
                                    <h5 class="card-title">It is a long established fact that a reader will be distracted</h5>
                                    <p class="card-text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="service-img position-relative">
                                    <img src="{{asset('assets/img/vcard36/service-1.png')}}" class="img-fluid position-relative" alt="service-card-1">
                                </div>
                            </div>
                        </div>
                        <div class="row service-card align-items-center g-3 gy-4 mb-5">
                            <div class="col-sm-6">
                                <div class="card-body">
                                    <h5 class="card-title">It is a long established fact that a reader will be distracted</h5>
                                    <p class="card-text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="service-img position-relative">
                                    <img src="{{asset('assets/img/vcard36/service-2.png')}}" class="img-fluid position-relative" alt="service-card-1">
                                </div>
                            </div>
                        </div>
                        <div class="row service-card align-items-center g-3 gy-4 mb-5">
                            <div class="col-sm-6">
                                <div class="card-body">
                                    <h5 class="card-title">It is a long established fact that a reader will be distracted</h5>
                                    <p class="card-text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="service-img position-relative">
                                    <img src="{{asset('assets/img/vcard36/service-3.png')}}" class="img-fluid position-relative" alt="service-card-1">
                                </div>
                            </div>
                        </div>
                        <div class="row service-card align-items-center g-3 gy-4 mb-5">
                            <div class="col-sm-6">
                                <div class="card-body">
                                    <h5 class="card-title">It is a long established fact that a reader will be distracted</h5>
                                    <p class="card-text">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="service-img position-relative">
                                    <img src="{{asset('assets/img/vcard36/service-4.png')}}" class="img-fluid position-relative" alt="service-card-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--Blog--}}
            <section id="gallery" class="py-5">
                <div class="container px-sm-4">
                    <div class="blogs-cards2">
                        <h2 class="main-heading mb-4 text-center">Get The Latest From The Blog</h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="blog-img-1 main-blog position-relative">
                                    <img src="{{asset('assets/img/vcard36/b-1.png')}}"
                                        class="img-fluid position-relative" alt="blog-card-1">
                                    <div class="overlay-black">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 ps-sm-0">
                                <div class="row space-top">
                                    <div class="col-sm-12">
                                        <div class="blog-img2 position-relative">
                                            <img src="{{asset('assets/img/vcard36/b-2.png')}}"
                                                class="img-fluid position-relative" alt="blog-card-1">
                                            <div class="overlay-black">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="blog-img2 position-relative">
                                            <img src="{{asset('assets/img/vcard36/b-3.png')}}"
                                                class="img-fluid position-relative" alt="blog-card-1">
                                            <div class="overlay-black">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="blog-img2 position-relative">
                                            <img src="{{asset('assets/img/vcard36/b-4.png')}}"
                                                class="img-fluid position-relative" alt="blog-card-1">
                                            <div class="overlay-black">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--testimonial--}}
            <section id="testimonial" class="testimonial bg-navy-blue pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 bg-navy-blue left py-4">
                                <div class="d-flex flex-column justify-content-center align-items-center gap-4 h-100">
                                <img src="{{asset('assets/img/vcard36/qoute.svg')}}" class="img-fluid qoute" alt="qoute">
                                <h3 class="testimonial-heading">What People <br/>Says About<br/> Me</h3>
                                </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="testimonial-slider mx-auto pt-5">
                                <!-- slider 1 -->
                                <div class="testimonial-slide">
                                    <div class="testimonial-card g-3 position-relative">
                                        <div class="card-body text-center">
                                            <p class="testimonial-desc mb-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                            <img src="{{asset('assets/img/vcard36/profile.png')}}" alt="profile" class="img-fluid testimonial-profile mb-3">
                                            <h4 class="card-title text-skyblue mb-1">MARK HENRY</h4>
                                            <p class="card-text">CEO Founder</p>
                                        </div>
                                    </div>
                                </div> 
                                <!-- slider 1 -->
                                <div class="testimonial-slide">
                                    <div class="testimonial-card g-3 position-relative">
                                        <div class="card-body text-center">
                                            <p class="testimonial-desc mb-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                            <img src="{{asset('assets/img/vcard36/profile.png')}}" alt="profile" class="img-fluid testimonial-profile mb-3">
                                            <h4 class="card-title text-skyblue mb-1">MARK HENRY</h4>
                                            <p class="card-text">CEO Founder</p>
                                        </div>
                                    </div>
                                </div> 
                                <!-- slider 1 -->
                                <div class="testimonial-slide">
                                    <div class="testimonial-card g-3 position-relative">
                                        <div class="card-body text-center">
                                            <p class="testimonial-desc mb-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                            <img src="{{asset('assets/img/vcard36/profile.png')}}" alt="profile" class="img-fluid testimonial-profile mb-3">
                                            <h4 class="card-title text-skyblue mb-1">MARK HENRY</h4>
                                            <p class="card-text">CEO Founder</p>
                                        </div>
                                    </div>
                                </div> 
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
                            <h2 class="main-heading">Meet the brands that <br>are really on</h2>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-card card border-0">
                                <div class="blog-img position-relative">
                                    <!-- <img src="{{asset('assets/img/vcard21/blog-1.png')}}" class="img-fluid" alt="service-card-1"> -->
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-card card border-0">
                                <div class="blog-img position-relative">
                                    <!-- <img src="{{asset('assets/img/vcard21/blog-2.png')}}" class="img-fluid" alt="service-card-1"> -->
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Loremipsum</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="blog-card card border-0">
                                <div class="blog-img position-relative">
                                    <!-- <img src="{{asset('assets/img/vcard21/blog-3.png')}}" class="img-fluid" alt="service-card-1"> -->
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


            {{--appointment--}}
            <section id="appointment" class="appointment-wrapper bg-navy-blue py-5">
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h2 class="main-heading text-white">Make an Appointment</h2>
                        </div>
                        <div class="col-12">
                            <form class="appointment text-white">
                                <div class="mb-4">
                                    <input id="myID" type="text" class="appoint-input mb-2 form-control rounded text-white p-3" placeholder="Pick a Date" />
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
            dots: false,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 1,
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