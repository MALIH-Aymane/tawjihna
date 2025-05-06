@extends('layouts.app')


@section('content')

       <!-- Pre-loader -->
       <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>
    <!-- End Preloader-->

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top sticky" id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index-5.html">
                <img src="{{ asset('light-tawjihna.svg') }}" class="logo-light" alt="logo-light" height="35">
                <img src="{{ asset('light-tawjihna.svg') }}" class="logo-dark" alt="logo-dark" height="34">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto navbar-center">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#service" class="nav-link">A propos de nous?</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="contact-btn ">
                            <span>Twasl m3ana</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#000000">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.652a11.882 11.882 0 005.647 1.427h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.476-8.414z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <!--end navabar-collapse-->
        </div>
        <!--end container-->
    </nav>
    <!-- Navbar End -->

    <!-- START HOME -->
    <section class="bg-home5" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="position-relative" style="z-index: 1;">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="me-4">
                            <h1 class="mb-4">Renforcez votre avenir  <span class="text-primary">TAWJIH M3ANA </span></h1>
                            <p class="text-muted fs-17">Découvrez nos services complets et découvrez comment nous pouvons vous aider à atteindre vos objectifs..</p>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary mt-2">En savoir plus</a>
                                <a class="btn btn-primary ms-sm-1 image-popup mt-2" href="https://www.w3schools.com/html/mov_bbb.mp4"><svg width="24" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video icons"><g><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></g></svg> Watch Now</a>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-5 ms-auto">
                        <div class="subscribe-form box-shadow mt-4 mt-lg-0">
                            <div class="text-center mb-4 pb-2">
                                <p class="text-muted text-uppercase mb-2">TSAJAL M3ANA</p>
                                <h5>tsajal w twasel b latest news</h5>
                            </div>
                            <form action="#">
                                <div class="mb-4 position-relative">
                                    <label for="exampleFormControlInput1" class="form-label">Name*</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name">
                                </div>
                                <div class="mb-4 position-relative">
                                    <label for="exampleFormControlInput2" class="form-label">Email*</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Enter your email">
                                </div>
                                <div class="mb-4 position-relative">
                                    <label for="exampleFormControlInput3" class="form-label">Number*</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput3" placeholder="Enter your number">
                                </div>
                                <div class="pt-2">
                                    <button type="submit" class="btn btn-primary w-100">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
        <!--end container-->
    </section>
    <!-- END HOME -->
    <!-- START SHAPE -->
    <div class="position-relative">
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="1440" height="150" preserveAspectRatio="none" viewBox="0 0 1440 250">
                <g mask="url(&quot;#SvgjsMask1036&quot;)" fill="none">
                    <path d="M 0,214 C 96,194 288,120.8 480,114 C 672,107.2 768,201.4 960,180 C 1152,158.6 1344,41.6 1440,7L1440 250L0 250z" fill="rgba(255, 255, 255, 1)"></path>
                </g>
                <defs>
                    <mask id="SvgjsMask1036">
                        <rect width="1440" height="250" fill="#ffffff"></rect>
                    </mask>
                </defs>
            </svg>
        </div>
    </div>
    <!-- END SHAPE -->

    <!-- START SERVICE -->
    <section class="section" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="header-title text-center">
                        <p class="text-uppercase text-muted mb-2">Services We're Provided</p>
                        <h3>We do all Creative Services</h3>
                        <div class="title-border mt-3"></div>
                        <p class="text-muted mt-3">We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning and add a value.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center mt-4">
                        <img src="{{ asset('images/landing/Notification.png') }}" alt="Notification"  width="100" height="80" class="img-fluid">
                        <h5 class="fs-18 mt-4">Bqa 3la Qers!</h5>
                        <div class="lighlight-border mt-3"></div>
                        <p class="text-muted mt-3">Matflet ta chi concours, bourse,  Reçois des rappels perso 
                        sur WhatsApp w b9a toujours au courant des opportunités li kaynin..</p>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center mt-4 box-shadow">
                        <img src="{{ asset('images/landing/Task.png') }}" alt="Notification" width="100" height="80" class="img-fluid">
                        <h5 class="fs-18 mt-4">Nsajlok?</h5>
                        <div class="lighlight-border mt-3"></div>
                        <p class="text-muted mt-3 mb-0">Facilite l’inscription dyalek grâce a l’expertise li 3andna, 
                        Nta bqa ghi hani w mrekz M3a preparation dyalk.</p>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center mt-4">
                        <img src="{{ asset('images/landing/University.png') }}" alt="Notification" width="200" height="150" class="img-fluid">
                        <h5 class="fs-18 mt-4">Découverte des Écoles</h5>
                        <div class="lighlight-border mt-3"></div>
                        <p class="text-muted mt-3 mb-0">Trouvez les meilleures écoles qui correspondent à vos 
                        compétences et intérêts grâce à nos fonctionnalités de recherche.</p>
                    </div>
                </div>
                <!--end col-->

                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END SERVICE -->

    <!-- START PRICING -->
    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="header-title text-center mb-4">
                        <p class="text-uppercase text-muted mb-2">Packs</p>
                        <h3>Khtar Pack li mnasbek</h3>
                        <div class="title-border mt-3"></div>
                        <p class="title-desc text-muted mt-3">Choisissez parmi différents packs d'inscription pour simplifier votre processus. 
                            Paiement en ligne sécurisé et rapide..</p>
                    </div>
                </div><!--end col-->
            </div>
            <!--end row-->

            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box bg-white box-shadow text-center p-5 mt-5 rounded">
                        <p class="price-title mb-4 pb-3">Pack classic</p>
                        <h1 class="mb-0 price">$Free</h1>
                        <div class="pricing-features mt-4 pt-4">
                            <p>POUR BAC : PC, SM, SVT,Lettre</p>
                            <p>Nos informe l'abonné des nouveautés des concours d'accès aux écoles</p>
                        </div>
                        <div class="mt-5">
                            <a href="#" class="btn btn-primary w-100">S'inscrire</a>
                        </div>
                    </div><!--end pricing-box-->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box bg-white box-shadow text-center p-5 mt-5 rounded">
                        <div class="pricing-label">
                            <h5 class=" fs-16">Sale</h5>
                        </div>

                        <p class="price-title mb-4 pb-3">PACK SPECIAL</p>
                        <h1 class="mb-0 price">300DH</h1>
                        <div class="pricing-features mt-4 pt-4">
                            <p>POUR BAC : PC, SM, SVT,Lettre</p>
                            <p>Nos informe l'abonné des nouveautés des concours d'accès aux écoles</p>
                            <p>On se charge des candidatures et leurs suivi à la place de l'abonné</p>
                        </div>
                        <div class="mt-5">
                            <a href="#" class="btn btn-primary w-100">S'inscrire</a>
                        </div>
                    </div>
                    <!--end pricing-box-->
                </div>
                <!--end col-->

                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box bg-white box-shadow text-center p-5 mt-5 rounded">
                        <p class="price-title mb-4 pb-3">Pack MN 3ndek</p>
                        <h1 class="mb-0 price">100DH</h1>
                        <div class="pricing-features mt-4 pt-4">
                            <p>POUR BAC : PC, SM, SVT,Lettre</p>
                            <p>On se charge des candidatures et leurs suivi à la place de l'abonné</p>                            </p>
                            <p>Choose 10 inscriptions from your side</p>
                        </div>
                        <div class="mt-5">
                            <a href="#" class="btn btn-primary w-100">S'inscrire</a>
                        </div>
                    </div>
                    <!--end pricing-box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END PRICING -->

    <!-- START TESTIMONIAL -->
    <section class="section" id="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="header-title text-center">
                        <p class="text-uppercase text-muted mb-2">What our clients Says</p>
                        <h3>Some lovely Feedback from our Clients</h3>
                        <div class="title-border mt-3"></div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row mt-5 pt-2">
                <div class="col-lg-12">
                    <div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"><img
                                    src="images/users/img-5.jpg" alt=""
                                    class="testi-img  img-fluid rounded mx-auto d-block"></button>
                            <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="1"
                                aria-label="Slide 2"> <img src="images/users/img-6.jpg" alt=""
                                    class="testi-img img-fluid mx-auto d-block"></button>
                            <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="2"
                                aria-label="Slide 3">
                                <img src="images/users/img-7.jpg" alt=""
                                    class=" testi-img img-fluid rounded mx-auto d-block">
                            </button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-box text-center mt-4">
                                    <div class="testimonial-content rounded">
                                        <p class="text-muted mb-0">" Very well thought out and articulate communication.
                                            Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                            shortcuts. Even if the client is being careless. "</p>
                                    </div>
                                    <i class="mdi mdi-format-quote-close text-primary display-3"></i>
                                    <h5 class="fs-18">Jennifer Shapiro</h5>
                                    <p class="text-muted mb-0">Frontend</p>
                                </div>
                            </div><!--end carousal-item-->

                            <div class="carousel-item">
                                <div class="testimonial-box text-center mt-4">
                                    <div class="testimonial-content rounded">
                                        <p class="text-muted mb-0">" It looks perfect on all major browsers, tablets,
                                            and mobile devices. All files are organized we believe it will be easy to
                                            use and edit them. This template is well organized and very easy to
                                            customize. "</p>
                                    </div>
                                    <i class="mdi mdi-format-quote-close text-primary display-3"></i>
                                    <h5 class="fs-18">Brandon Carney</h5>
                                    <p class="text-muted mb-0">Designer</p>
                                </div>
                            </div><!--end carousal-item-->

                            <div class="carousel-item">
                                <div class="testimonial-box text-center mt-4">
                                    <div class="testimonial-content rounded">
                                        <p class="text-muted mb-0">" All your client websites if you are an agency or
                                            freelancer. It got all the tools needs to create super fast responsive
                                            websites with amazing user experience. We have added a Dark version with RTL
                                            supported. "</p>
                                    </div>
                                    <i class="mdi mdi-format-quote-close text-primary display-3"></i>
                                    <h5 class="fs-18">William Mooneyhan</h5>
                                    <p class="text-muted mb-0">Developer</p>
                                </div>
                            </div><!--end carousal-item-->
                        </div><!--end carousal-inner-->

                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialSlider"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialSlider"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END TESTIMONIAL -->



    <!-- START BLOG -->
    <section class="section" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="header-title text-center mb-5">
                        <p class="text-uppercase text-muted mb-2">News</p>
                        <h3>Latest Articles And News</h3>
                        <div class="title-border mt-3"></div>
                        <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to
                            create category leading brand experiences that have meaning and add a value.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-box box-shadow rounded mt-4 p-3">
                        <div class="blog-img">
                            <img src="{{ asset('images/landing/hero.png') }}" alt="Notification" width="100" height="80" class="img-fluid">
                            <div class="read-more">
                                <a href="#"><i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="primary-link">
                                <h5 class="fs-19 mb-1">How to be appreciated for your hard work as a developer</h5>
                            </a>
                            <p class="text-muted mt-2">The final text is not yet available. Dummy texts have Internet
                                tend been in use by typesetters since the 16th century.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="images/users/img-5.jpg" alt="" height="45" class="rounded-circle me-2">
                                    <p class="text-muted mb-0">admin</p>
                                </div>
                                <p class="mb-0 float-end text-muted"><i
                                        class="mdi mdi-clock-time-four-outline align-middle me-1 text-primary"></i> 24
                                    min</p>
                            </div>
                        </div>
                    </div>
                    <!--end blog-->
                </div><!-- end col -->

                <div class="col-lg-4">
                    <div class="blog-box box-shadow rounded mt-4 p-3">
                        <div class="blog-img">
                            <img src="images/blog/img-2.jpg" class="img-fluid rounded" alt="">
                            <div class="read-more">
                                <a href="#"><i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="primary-link">
                                <h5 class="fs-19 mb-1">Developers watch out for these burnout symptoms</h5>
                            </a>
                            <p class="text-muted mt-2">Allegedly, a Latin scholar established the origin of the
                                established text Internet by compiling unusual word.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="images/users/img-6.jpg" alt="" height="45" class="rounded-circle me-2">
                                    <p class="text-muted mb-0">admin</p>
                                </div>
                                <p class="mb-0 float-end text-muted"><i
                                        class="mdi mdi-clock-time-four-outline align-middle me-1 text-primary"></i> 32
                                    min</p>
                            </div>
                        </div>
                    </div>
                    <!--end blog-->
                </div><!-- end col -->

                <div class="col-lg-4">
                    <div class="blog-box box-shadow rounded mt-4 p-3">
                        <div class="blog-img">
                            <img src="images/blog/img-3.jpg" class="img-fluid rounded" alt="Blog">
                            <div class="read-more">
                                <a href="#"><i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="primary-link">
                                <h5 class="fs-19 mb-1">How designers and developers can collaborate better</h5>
                            </a>
                            <p class="text-muted mt-2">It seems that only fragments of the original text remain in only
                                fragments the Lorem Ipsum texts used today.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="images/users/img-7.jpg" alt="" height="45" class="rounded-circle me-2">
                                    <p class="text-muted mb-0">admin</p>
                                </div>
                                <p class="mb-0 float-end text-muted"><i
                                        class="mdi mdi-clock-time-four-outline align-middle me-1 text-primary"></i> 45
                                    min</p>
                            </div>
                        </div>
                    </div>
                    <!--end blog-->
                </div><!-- end col -->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END BLOG -->


    <!-- START CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center mb-4">
                        <p class="text-uppercase text-muted mb-2">Contact</p>
                        <h3 class="text-uppercase">Get In Touch</h3>
                        <div class="title-border mt-3"></div>
                        <p class="title-desc text-muted mt-3">We craft digital, graphic and dimensional thinking, to
                            create category leading brand experiences that have meaning and add a value.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="contact-info text-center mt-5">
                        <div class="icon">
                            <i class="mdi mdi-map-marker text-primary h4"></i>
                        </div>
                        <div class="mt-4 pt-2">
                            <h6 class="fs-17">Main Office</h6>
                            <p class="text-muted mb-0">2276 Lynn Ogden Lane Beaumont Lodgeville Road TX 77701</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6">
                    <div class="contact-info text-center mt-5">
                        <div class="icon">
                            <i class="mdi mdi-phone text-primary h4"></i>
                        </div>
                        <div class="mt-4 pt-2">
                            <h6 class="fs-17">Phone & Email</h6>
                            <p class="text-muted mb-0">Phone: +71 612-234-4023</p>
                            <p class="text-muted mb-0">Fax: +954-627-9727</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6">
                    <div class="contact-info text-center mt-5">
                        <div class="icon">
                            <i class="mdi mdi-email text-primary h4"></i>
                        </div>
                        <div class="mt-4 pt-2">
                            <h6 class="fs-17">Contact</h6>
                            <p class="text-muted mb-0"> www.exampledesign.com</p>
                            <p class="text-muted mb-0"> example@design.com</p>                           
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6">
                    <div class="contact-info text-center mt-5">
                        <div class="icon">
                            <i class="mdi mdi-calendar-clock text-primary h4"></i>
                        </div>
                        <div class="mt-4 pt-2">
                            <h6 class="fs-17">Working Hours</h6>
                        <p class="text-muted mb-0"> Monday-friday: 9:00- 06:00</p>
                            <p class="text-muted mb-0"> Saturday-Sunday: Holiday</p>
                            
                        </div>
                    </div>
                </div><!--end col-->

            </div><!--end row-->
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- END CONTACT -->


    <!-- START FOOTER -->
    <footer class="bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="mt-4">
                        <a href="index-1.html"><img src="{{ asset('dark-tawjihna.svg') }}" alt="" height="35"></a>
                        <p class="text-white-50 mt-3 pt-2 mb-0 ">It is a long established fact that a reader will be of
                            a page reader will be of at its layout.</p>
                        <div class="mt-4">
                            <ul class="list-inline footer-social">

                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="mdi mdi-pinterest"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-3 col-md-6">
                    <div class="mt-4 ps-0 ps-lg-5">
                        <h6 class="text-white text-uppercase fs-16">Resources</h6>
                        <ul class="list-unstyled footer-link mt-3 mb-0">
                            <li><a href="#">Company History</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Term &amp; Service</a></li>
                            <li><a href="#">Components</a></li>
                        </ul>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-2 col-md-6">
                    <div class="mt-4">
                        <h6 class="text-white text-uppercase fs-16">Help</h6>
                        <ul class="list-unstyled footer-link mt-3 mb-0">
                            <li><a href="#">Sign Up </a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-4">
                    <div class="mt-4">
                        <h6 class="text-white text-uppercase fs-16">Latest news</h6>
                        <div class="mt-3 mb-0">
                            <div class="d-flex">
                                <i class="mdi mdi-twitter text-white-50 float-start"></i>
                                <div class="flex-grow-1">
                                    <p class="text-white-50 ps-3">Pleasures have to repudiated annoyances accepted
                                        therefore always holds chooses enjoy a pleasure consequences.</p>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="d-flex">
                                    <i class="mdi mdi-twitter text-white-50 float-start"></i>
                                    <div class="flex-grow-1">
                                        <p class="text-white-50 ps-3">Greater pleasures el esndures pains avoid welcomed
                                            avoided pariatu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!-- END FOOTER -->

    <!-- FOOTER-ALT -->
    <div class="footer-alt py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="text-white-50 mb-0">
                            <script>document.write(new Date().getFullYear())</script> &copy; Tawjihna <a href="" target="_blank"  class="text-reset text-decoration-underline">Tawjihna</a>
                        </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!-- END FOOTER-ALT -->

    <!--start back-to-top-->
    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up-bold"></i>
    </button>
    <!--end back-to-top-->



@push('scripts')
    @vite('resources/js/landing/script.js')
@endpush
