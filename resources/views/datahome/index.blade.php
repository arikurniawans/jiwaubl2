<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>JIWA UBL</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('public/template/front/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{asset('public/template/front/plugins/themify-icons/themify-icons.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{asset('public/template/front/plugins/slick/slick.css') }}">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{asset('public/template/front/plugins/Venobox/venobox.css') }}">
    <!-- aos -->
    <link rel="stylesheet" href="{{asset('public/template/front/plugins/aos/aos.css') }}">

    <!-- Main Stylesheet -->
    <link href="{{asset('public/template/front/css/style.css') }}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('public/template/front/images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('public/template/front/images/favicon.ico')}}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>
/* Custom style to prevent carousel from being distorted 
   if for some reason image doesn't load */
.carousel-item{
    min-height: 280px;
}
</style>

<body>


    <!-- navigation -->
    <section class="fixed-top navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><img src="{{asset('public/template/front/images/logoPPIK.png')}}" alt="logo" width="100" height="100"></a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
                <!-- navbar -->
                <div class="collapse navbar-collapse text-center" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link page-scroll" href="#feature">Feature</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="service.html">Service</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#team">Team</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                    <a href="{{ route('login') }}" class="btn btn-primary ml-lg-3 primary-shadow">Masuk</a>
                </div>
            </nav>
        </div>
    </section>
    <!-- /navigation -->

    <!-- hero area -->
    <section class="hero-section hero" data-background="" style="background-image: url({{asset('public/template/front/images/hero-area/banner-bg.png')}});">
        <div class="container">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                </ol>
                
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('public/storages/slider')}}/slide1.png" class="d-block w-100" alt="Slide 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some demonstrative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/examples/images/slide2.png" class="d-block w-100" alt="Slide 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some demonstrative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/examples/images/slide3.png" class="d-block w-100" alt="Slide 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some demonstrative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <!-- background shapes -->
        <div id="scene">
            <img class="img-fluid hero-bg-1 up-down-animation" src="{{asset('public/template/front/images/background-shape/feature-bg-2.png') }}" alt="">
            <img class="img-fluid hero-bg-2 left-right-animation" src="{{asset('public/template/front/images/background-shape/seo-ball-1.png') }}" alt="">
            <img class="img-fluid hero-bg-3 left-right-animation" src="{{asset('public/template/front/images/background-shape/seo-half-cycle.png') }}" alt="">
            <img class="img-fluid hero-bg-4 up-down-animation" src="{{asset('public/template/front/images/background-shape/green-dot.png') }}" alt="">
            <img class="img-fluid hero-bg-5 left-right-animation" src="{{asset('public/template/front/images/background-shape/blue-half-cycle.png') }}" alt="">
            <img class="img-fluid hero-bg-6 up-down-animation" src="{{asset('public/template/front/images/background-shape/seo-ball-1.png') }}" alt="">
            <img class="img-fluid hero-bg-7 left-right-animation" src="{{asset('public/template/front/images/background-shape/yellow-triangle.png') }}" alt="">
            <img class="img-fluid hero-bg-8 up-down-animation" src="{{asset('public/template/front/images/background-shape/service-half-cycle.png') }}" alt="">
            <img class="img-fluid hero-bg-9 up-down-animation" src="{{asset('public/template/front/images/background-shape/team-bg-triangle.png') }}" alt="">
        </div>
    </section>
    <!-- /hero-area -->

    <!-- feature -->
    <section class="section feature mb-0" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Himpun ide cemerlang Insan Perguruan Tinggi sesuai kebutuhan usaha Anda.</h2>
                    <!-- <p class="mb-100">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>Excepteur sint occaecat cupidatat non proident</p> -->
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-ruler-pencil feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Buka Peluang Cipta</h4>
                            <p>Isi formulir peluang cipta secara detail demi menarik minat Insan Perguruan Tinggi untuk ajukan kreasi rekanya.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layout-cta-left feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Terima Ajuan Kreasi Reka</h4>
                            <p>Jelajahi beragam ide kreatif dan inovatif dari Insan Perguruan Tinggi yang siap Anda seleksi.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <!-- <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-split-v-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Bug free Code</h4>
                            <p>Consectetur adipiscing elit donec tempus pellentesque dui.</p>
                        </div>
                    </div>
                </div> -->
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layers-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Berkolaborasi dengan Insan Perguruan Tinggi</h4>
                            <p>Sinergikan kebutuhan peluang cipta Anda dengan hasil seleksi kreasi reka ke kerja sama strategis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="feature-bg-1 up-down-animation" src="{{asset('public/template/front/images/background-shape/feature-bg-1.png') }}" alt="bg-shape">
        <img class="feature-bg-2 left-right-animation" src="{{asset('public/template/front/images/background-shape/feature-bg-2.png') }}" alt="bg-shape">
    </section>
    <!-- /feature -->

    <!-- marketing -->
    <section class="section-lg seo">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="seo-image">
                        <img class="img-fluid" src="{{asset('public/template/front/images/marketing/marketing.png') }}" alt="form-img">
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 class="section-title">Sumber inspirasi Anda untuk eksplorasi ide-ide kreatif.</h2>
                    <p>Telusuri 100+ ide kreatif dan solutif yang terpublikasi di Kedaireka sebagai sumber inspirasi, Ciptakan langkah nyata dengan ajukan proposal ketertarikan kolaborasi kepada Insan Perguruan Tinggi, Sinergikan potensi kreasi reka Insan Perguruan Tinggi dengan kapabilitas usaha Anda ke kerja sama strategis.
                    </p>
                </div>
            </div>
        </div>
        <!-- background image -->
        <img class="img-fluid seo-bg" src="{{asset('public/template/front/images/backgrounds/seo-bg.png') }}" alt="seo-bg">
        <!-- background-shape -->
        <img class="seo-bg-shape-1 left-right-animation" src="{{asset('public/template/front/images/background-shape/seo-ball-1.png') }}" alt="bg-shape">
        <img class="seo-bg-shape-2 up-down-animation" src="{{asset('public/template/front/images/background-shape/seo-half-cycle.png') }}" alt="bg-shape">
        <img class="seo-bg-shape-3 left-right-animation" src="{{asset('public/template/front/images/background-shape/seo-ball-2.png') }}" alt="bg-shape">
    </section>
    <!-- /marketing -->

    <!-- service -->
    <section class="section-lg service">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5 order-2 order-md-1">
                    <h2 class="section-title">Dukungan dana kolaborasi dari pemerintah Indonesia</h2>
                    <p class="mb-4">Insan Perguruan Tinggi yang sukses berkolaborasi dengan pihak mitra di platform Kedaireka memiliki kesempatan raih tambahan dana dari pemerintah Indonesia sebesar total Rp1 triliun.</p>
                    <!-- <ul class="pl-0 service-list">
                        <li><i class="ti-layout-tab-window text-purple"></i>Responsive on any device</li>
                        <li><i class="ti-layout-placeholder text-purple"></i>Very easy to customize</li>
                        <li><i class="ti-support text-purple"></i>Effective support</li>
                    </ul> -->
                </div>
                <div class="col-md-7 order-1 order-md-2">
                    <img class="img-fluid layer-3" src="{{asset('public/template/front/images/service/service.png') }}" alt="service">
                </div>
            </div>
        </div>
        <!-- background image -->
        <img class="img-fluid service-bg" src="{{asset('public/template/front/images/backgrounds/service-bg.png') }}" alt="service-bg">
        <!-- background shapes -->
        <img class="service-bg-shape-1 up-down-animation" src="{{asset('public/template/front/images/background-shape/service-half-cycle.png') }}" alt="background-shape">
        <img class="service-bg-shape-2 left-right-animation" src="{{asset('public/template/front/images/background-shape/feature-bg-2.png') }}" alt="background-shape">
    </section>
    <!-- /service -->

    <!-- team -->
    <section class="section-lg team" id="team">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Our Team</h2>
                    <p class="mb-100">Berikut Adalah Team <br> Program Pengembangan Inovasi dan Kreativitas (PPIK) Universitas Bandar Lampung  </p>
                </div>
            </div>
            <div class="col-10 mx-auto">
                <div class="team-slider">
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="{{asset('public/template/front/images/team/team-1.jpg') }}" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Bagas Dwijayanto</h4>
                                <h6 class="text-color">web designer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="{{asset('public/template/front/images/team/team-2.jpg') }}" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Bagas Dwijayanto</h4>
                                <h6 class="text-color">web developer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="{{asset('public/template/front/images/team/team-3.jpg') }}" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Bagas Dwijayanto</h4>
                                <h6 class="text-color">Programmer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="{{asset('public/template/front/images/team/team-1.jpg') }}" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Bagas Dwijayanto</h4>
                                <h6 class="text-color">Programmer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. S eparated they</p>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="{{asset('public/template/front/images/team/team-2.jpg') }}" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Bagas Dwijayanto</h4>
                                <h6 class="text-color">web developer</h6>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. S eparated they</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- backgound image -->
        <img src="{{asset('public/template/front/images/backgrounds/team-bg.png') }}" alt="team-bg" class="img-fluid team-bg">
        <!-- background shapes -->
        <img class="team-bg-shape-1 up-down-animation" src="{{asset('public/template/front/images/background-shape/seo-ball-1.png') }}" alt="background-shape">
        <img class="team-bg-shape-2 left-right-animation" src="{{asset('public/template/front/images/background-shape/seo-ball-1.png') }}" alt="background-shape">
        <img class="team-bg-shape-3 left-right-animation" src="{{asset('public/template/front/images/background-shape/team-bg-triangle.png') }}" alt="background-shape">
        <img class="team-bg-shape-4 up-down-animation img-fluid" src="{{asset('public/template/front/images/background-shape/team-bg-dots.png') }}" alt="background-shape">
    </section>
    <!-- /team -->

    <!-- pricing -->
    <!-- <section class="section-lg pb-0 pricing" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Our Pricing</h2>
                    <p class="mb-50">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu <br> fugiat nulla pariatur. Excepteur sint occaecat </p>
                </div>
                <div class="col-lg-10 mx-auto">
                    <div class="row justify-content-center"> -->
                        <!-- pricing table -->
                        <!-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="rounded text-center pricing-table table-1">
                                <h3>Free</h3>
                                <h1><span>$</span>00</h1>
                                <p>Far far away, behind the wordmountains, far from the countries Vokalia and
                                </p>
                                <a href="#" class="btn pricing-btn px-2">Get Started</a>
                            </div>
                        </div> -->
                        <!-- pricing table -->
                        <!-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="rounded text-center pricing-table table-2">
                                <h3>Standard</h3>
                                <h1><span>$</span>75</h1>
                                <p>Far far away, behind the wordmountains, far from the countries Vokalia and
                                </p>
                                <a href="#" class="btn pricing-btn px-2">Buy Now</a>
                            </div>
                        </div> -->
                        <!-- pricing table -->
                        <!-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="rounded text-center pricing-table table-3">
                                <h3>Premium</h3>
                                <h1><span>$</span>99</h1>
                                <p>Far far away, behind the wordmountains, far from the countries Vokalia and
                                </p>
                                <a href="#" class="btn pricing-btn px-2">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- background shapes -->
        <img class="pricing-bg-shape-1 up-down-animation" src="{{asset('public/template/front/images/background-shape/seo-ball-1.png') }}" alt="background-shape">
        <img class="pricing-bg-shape-2 up-down-animation" src="{{asset('public/template/front/images/background-shape/seo-half-cycle.png') }}" alt="background-shape">
        <img class="pricing-bg-shape-3 left-right-animation" src="{{asset('public/template/front/images/background-shape/team-bg-triangle.png') }}" alt="background-shape">
    </section>
    <!-- /pricing -->

    <!-- client logo slider -->
    <section class="section">
        <div class="container">
            <div class="client-logo-slider align-self-center">
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset('public/template/front/images/clients-logo/client-logo-1.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset('public/template/front/images/clients-logo/client-logo-2.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset('public/template/front/images/clients-logo/client-logo-3.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset('public/template/front/images/clients-logo/client-logo-4.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset('public/template/front/images/clients-logo/client-logo-5.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset('public/template/front/images/clients-logo/client-logo-1.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset('public/template/front/images/clients-logo/client-logo-2.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset('public/template/front/images/clients-logo/client-logo-3.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset('public/template/front/images/clients-logo/client-logo-4.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="{{asset('public/template/front/images/clients-logo/client-logo-5.png') }}" alt="client-logo"></a>
            </div>
        </div>
    </section>
    <!-- /client logo slider -->

    <!-- newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Subscribe to our newsletter</h2>
                    <p class="mb-5">Receive updates, news and deals</p>
                </div>
                <div class="col-lg-8 col-sm-10 col-12 mx-auto">
                    <form action="#">
                        <div class="input-wrapper position-relative">
                            <input type="email" class="newsletter-form" id="newsletter" placeholder="Enter your email">
                            <button type="submit" value="send" class="btn newsletter-btn">subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img class="newsletter-bg-shape left-right-animation" src="{{asset('public/template/front/images/background-shape/seo-ball-2.png') }}" alt="background-shape">
    </section>
    <!-- /newsletter -->

    <!-- footer -->
    <footer class="footer-section footer" style="background-image: url({{asset('public/template/front/images/backgrounds/footer-bg.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
                    <!-- logo -->
                    <a href="index.html">
                        <img class="img-fluid" src="{{asset('public/template/front/images/logoPPIK.png') }}" alt="logo" width="100" height="100">

                    </a>
                </div>
                <!-- footer menu -->
                <nav class="col-lg-8 align-self-center mb-5">
                    <ul class="list-inline text-lg-right text-center footer-menu">
                        <li class="list-inline-item active"><a href="index.html">Home</a></li>
                        <!-- <li class="list-inline-item"><a class="page-scroll" href="#feature">Feature</a></li> -->
                        <li class="list-inline-item"><a href="about.blade.php">About</a></li>
                        <li class="list-inline-item"><a class="page-scroll" href="#team">Team</a></li>
                        <!-- <li class="list-inline-item"><a class="page-scroll" href="#pricing">Pricing</a></li> -->
                        <li class="list-inline-item"><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <!-- footer social icon -->
                <nav class="col-12">
                    <ul class="list-inline text-lg-right text-center social-icon">
                        <li class="list-inline-item">
                            <a class="facebook" href="#"><i class="ti-facebook"></i></a>
                        </li>
                        <!-- <li class="list-inline-item">
                            <a class="twitter" href="#"><i class="ti-tiktok"></i></a>
                        </li> -->
                        <li class="list-inline-item">
                            <a class="instagram" href="#"><i class="ti-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="black" href="#"><i class="ti-youtube"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- jQuery -->
    <script src="{{asset('public/template/front/plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('public/template/front/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- slick slider -->
    <script src="{{asset('public/template/front/plugins/slick/slick.min.js') }}"></script>
    <!-- venobox -->
    <script src="{{asset('public/template/front/plugins/Venobox/venobox.min.js') }}"></script>
    <!-- aos -->
    <script src="{{asset('public/template/front/plugins/aos/aos.js') }}"></script>
    <!-- Main Script -->
    <script src="{{asset('public/template/front/js/script.js') }}"></script>

</body>

</html>