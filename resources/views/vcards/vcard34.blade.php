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
    <link rel="stylesheet" href="{{ asset('assets/css/vcard34.css')}}">

    {{--slick slider--}}
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">


    {{--google font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Syne:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
    <div class="container">
        <div class="vcard-one main-content w-100 mx-auto">
            {{--banner--}}
            <div class="vcard-one__banner w-100 position-relative">
            <img src="{{asset('assets/img/vcard34/cover.png')}}" class="position-absolute top-0 start-0 h-100 w-100" alt="background image" />
                <div class="d-flex justify-content-end position-absolute top-0 end-0 me-3 z-2">
                    <div class="language pt-4 me-2">
                        <ul class="text-decoration-none">
                            <li class="dropdown1 dropdown lang-list">
                                <a class="dropdown-toggle lang-head text-decoration-none" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-language me-2"></i>Language</a>
                                <ul class="dropdown-menu start-0 lang-hover-list top-100 image-icon">
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/english.png')}}" width="25px" height="20px" class="me-3"><a href="#">English</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/spain.png')}}" width="25px" height="20px" class="me-3"><a href="#">Spanish</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/france.png')}}" width="25px" height="20px" class="me-3"><a href="#">Franch</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/arabic.svg')}}" width="25px" height="20px" class="me-3"><a href="#">Arabic</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/german.png')}}" width="25px" height="20px" class="me-3"><a href="#">German</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/russian.jpeg')}}" width="25px" height="20px" class="me-3"><a href="#">russian</a>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/vcard1/turkish.png')}}" width="25px" height="20px" class="me-3"><a href="#">Turkish</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                {{--profile details--}}
                <div class="row position-relative z-2 px-0">
                    <div class="col-7">
                        <div class="vcard-one__profile-details text-white py-3 d-flex flex-column align-items-start justify-content-center h-100">
                            <h2 class="status">Moore Designs</h2>
                            <h3 class="profile-name">Hello! I’m <br /> <span class="text-orange">Thomas Grandfield</span></h3>
                            <p class="profile-detail mb-2">(Creative Director)</p>
                            <p class="profile-detail mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="social-icons d-flex justify-content-center gap-3">
                                <a href="#" class="social-icons-items"><i class="fa-brands fa-facebook-f icon"></i></a>
                                <a href="#" class="social-icons-items"><i class="fa-brands fa-instagram icon"></i></a>
                                <a href="#" class="social-icons-items"><i class="fa-brands fa-twitter icon"></i></a>
                                <a href="#" class="social-icons-items"><i class="fa-brands fa-dribbble icon"></i></a>
                                <a href="#" class="social-icons-items"><i class="fa-brands fa-pinterest-p icon"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 ps-0 profile-img">
                        <img src="{{asset('assets/img/vcard34/profile.png')}}" alt="profile" class="img-fluid">
                    </div>
                </div>
            </div>

            {{--contact--}}

            <section id="contact" class="py-4 bg-light">
                <div class="container px-sm-4">
                    <div class="row g-3">
                        <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Email Address</h6>
                                    <a href="#" class="contact-link text-black">say.hi @shareable.icu</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-globe"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Website</h6>
                                    <a href="#" class="contact-link text-black">www.shareable.icu</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Mobile Number</h6>
                                    <a href="#" class="contact-link text-black">+12 3456 7890</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center gap-3">
                                <div class="contact-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="contact-name">Location</h6>
                                    <a href="#" class="contact-link text-black">City, State, Country</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--services--}}

            <section id="services" class="py-5">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="services-left d-flex flex-column">
                                <h2 class="status mb-2">My Services</h2>
                                <h3 class="services-title mb-3">What Can I Do For You</h3>
                                <p class="services-detail mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="services-right">
                                <div class="services-category">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="category-img">
                                            <img src="{{asset('assets/img/vcard34/category-1.png')}}" class="img-fluid" alt="category">
                                        </div>
                                        <h4 class="category-text">UI/UX Design</h4>
                                    </div>
                                    <hr class="my-2" />
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="category-img">
                                            <img src="{{asset('assets/img/vcard34/category-2.png')}}" class="img-fluid" alt="category">
                                        </div>
                                        <h4 class="category-text">Product Design</h4>
                                    </div>
                                    <hr class="my-2" />
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="category-img">
                                            <img src="{{asset('assets/img/vcard34/category-1.png')}}" class="img-fluid" alt="category">
                                        </div>
                                        <h4 class="category-text">Branding Design</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>

            {{--hours--}}

            <section id="hours" class="bg-black py-5">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-12">
                            <h2 class="main-heading text-white">Business Hour</h2>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="d-flex flex-column align-items-center px-4 gap-3 bg-light rounded shadow py-4">
                                <h5 class="hours-text"><span class="orange">Sunday</span> : 08:10 - 20:00</h5>
                                <h5 class="hours-text"><span class="orange">Monday</span> : 08:10 - 20:00</h5>
                                <h5 class="hours-text"><span class="orange">Tuesday</span> : 08:10 - 20:00</h5>
                                <h5 class="hours-text"><span class="orange">Wednesday</span> : 08:10 - 20:00</h5>
                                <h5 class="hours-text"><span class="orange">Thursday</span> : 08:10 - 20:00</h5>
                                <h5 class="hours-text"><span class="orange">Friday</span> : 08:10 - 20:00</h5>
                                <h5 class="hours-text"><span class="orange">Saturday</span> : 08:10 - 20:00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

            {{--gallery--}}
            <section id="gallery" class="py-5">
                <div class="container px-sm-4">
                    <div class="row g-2">
                        <div class="col-12 mb-4">
                            <h2 class="main-heading">Gallery</h2>
                        </div>
                        <div class="col-sm-4 col-6">
                            <img src="{{asset('assets/img/vcard34/gallery-1.png')}}" class="img-fluid" alt="gallery">
                        </div>
                        <div class="col-sm-4 col-6">
                            <img src="{{asset('assets/img/vcard34/gallery-2.png')}}" class="img-fluid" alt="gallery">
                        </div>
                        <div class="col-sm-4 col-6">
                            <img src="{{asset('assets/img/vcard34/gallery-3.png')}}" class="img-fluid" alt="gallery">
                        </div>
                        <div class="col-sm-4 col-6">
                            <img src="{{asset('assets/img/vcard34/gallery-4.png')}}" class="img-fluid" alt="gallery">
                        </div>
                        <div class="col-sm-4 col-6">
                            <img src="{{asset('assets/img/vcard34/gallery-5.png')}}" class="img-fluid" alt="gallery">
                        </div>
                        <div class="col-sm-4 col-6">
                            <img src="{{asset('assets/img/vcard34/gallery-6.png')}}" class="img-fluid" alt="gallery">
                        </div>
                    </div>
            </section>

            {{--testimonial--}}
            <section id="testimonial" class="testimonial bg-black py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <h2 class="status mb-1 text-orange text-center fw-light">Latest Projects</h2>
                            <h2 class="main-heading text-white">What Client Says About My Service</h2>
                        </div>
                        <div class="col-12">
                            <div class="testimonial-slider-2 mx-auto">
                                <!-- slider 1 -->
                                <div class="testimonial-slide">
                                    <div class="testimonial-card position-relative">
                                        <div class="d-flex flex-column gap-1">
                                            <img src="{{asset('assets/img/vcard34/testimonial-profile.png')}}" class="testimonial-profile" alt="profile">
                                            <h4 class="profile-name">Lorem Ipsum</h4>
                                            <span class="designation">CEO-lorem</span>
                                        </div>
                                        <div class="d-flex flex-column gap-3 px-2">
                                            <div class="qoute mt-3 mb-1">
                                                <img src="{{asset('assets/img/vcard34/qoute.svg')}}" alt="qoute">
                                            </div>
                                            <p class="testimonial-desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider 1 -->
                                <div class="testimonial-slide">
                                    <div class="testimonial-card position-relative">
                                        <div class="d-flex flex-column gap-1">
                                            <img src="{{asset('assets/img/vcard34/testimonial-profile.png')}}" class="testimonial-profile" alt="profile">
                                            <h4 class="profile-name">Lorem Ipsum</h4>
                                            <span class="designation">CEO-lorem</span>
                                        </div>
                                        <div class="d-flex flex-column gap-3 px-2">
                                            <div class="qoute mt-3 mb-1">
                                                <img src="{{asset('assets/img/vcard34/qoute.svg')}}" alt="qoute">
                                            </div>
                                            <p class="testimonial-desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- slider 1 -->
                                <div class="testimonial-slide">
                                    <div class="testimonial-card position-relative">
                                        <div class="d-flex flex-column gap-1">
                                            <img src="{{asset('assets/img/vcard34/testimonial-profile.png')}}" class="testimonial-profile" alt="profile">
                                            <h4 class="profile-name">Lorem Ipsum</h4>
                                            <span class="designation">CEO-lorem</span>
                                        </div>
                                        <div class="d-flex flex-column gap-3 px-2">
                                            <div class="qoute mt-3 mb-1">
                                                <img src="{{asset('assets/img/vcard34/qoute.svg')}}" alt="qoute">
                                            </div>
                                            <p class="testimonial-desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{--blog--}}
            <section id="blog" class="blog">
                <div class="container">
                    <div class="row g-3">
                        <div class="col-12 mb-4">
                            <h2 class="status text-center fw-light">My Blogs</h2>
                            <h2 class="main-heading text-black">Latest Blogs & Articles</h2>
                        </div>
                        <div class="col-6"> 
                            <div class="card flex-row">
                                <img src="{{asset('assets/img/vcard34/blog-1.png')}}" class="img-fluid rounded-start" alt="blog">
                                <div class="card-body">
                                    <h5 class="card-title">5 Ways To Design Easily in figma</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6"> 
                            <div class="card flex-row">
                                <img src="{{asset('assets/img/vcard34/blog-2.png')}}" class="img-fluid rounded-start" alt="blog">
                                <div class="card-body">
                                    <h5 class="card-title">5 Ways To Design Easily in figma</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6"> 
                            <div class="card flex-row">
                                <img src="{{asset('assets/img/vcard34/blog-3.png')}}" class="img-fluid rounded-start" alt="blog">
                                <div class="card-body">
                                    <h5 class="card-title">5 Ways To Design Easily in figma</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6"> 
                            <div class="card flex-row">
                                <img src="{{asset('assets/img/vcard34/blog-4.png')}}" class="img-fluid rounded-start" alt="blog">
                                <div class="card-body">
                                    <h5 class="card-title">5 Ways To Design Easily in figma</h5>
                                    <p class="card-text">It is a long established fact that a reader will be distracted </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            {{--appointment--}}
            <section id="appointment" class="appointment-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h2 class="main-heading text-white">Make an Appointment</h2>
                        </div>
                        <div class="col-12">
                            <form class="appointment text-white text-center">
                                <div class="mb-4 position-relative">
                                    <img src="{{asset('assets/img/vcard19/calender.svg')}}" class="position-absolute end-0 top-50 translate-middle" alt="qoute">
                                    <input id="myID" type="text" class="appoint-input mb-2 form-control bg-transparent text-center text-white rounded-0 p-3 position-relative" placeholder="Pick a Date" />
                                </div>
                                <div class="">
                                    <label for="myID" class="form-label">Hours</label>
                                    <div class="d-flex flex-wrap gap-3 justify-content-center">
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
</body>

</html>