<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Jiwa UBL</title>

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
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>


    <!-- navigation -->
    <section class="fixed-top navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><img src="{{asset('public/template/front/images/logoPPIK.png') }}" alt="logo" width="100" height="100">

                </a>
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
                            <a class="nav-link page-scroll" href="index.html#feature">Feature</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="service.html">Service</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="{{route('home')}}#team">Team</a>
                        <!-- </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="index.html#pricing">Pricing</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <a href="login.html" class="btn btn-primary ml-lg-3 primary-shadow">Masuk</a>
                </div>
            </nav>
        </div>
    </section>
    <!-- /navigation -->

    <!-- about us -->
    <section class="section-lg about pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">About us</h2>
                </div>
                <div class="col-lg-12 mb-100">
                    <p>Program Pengembangan Inovasi dan Kreativitas (PPIK) Universitas Bandar Lampung adalah sebuah unit kerja yang fokus pada pengembangan inovasi dan kreativitas di lingkungan kampus UBL. PPIK UBL didirikan pada tahun 2015 dan bertujuan untuk memfasilitasi para mahasiswa, dosen, dan tenaga kependidikan UBL dalam mengembangkan ide-ide inovatif dan kreatif yang dapat diaplikasikan dalam berbagai bidang.

                        PPIK UBL memiliki beberapa program yang ditawarkan untuk mendukung pengembangan inovasi dan kreativitas di lingkungan kampus. Beberapa program tersebut antara lain:</p>
                    <p>Incubator Bisnis: Program ini bertujuan untuk membantu mahasiswa dan alumni UBL dalam mengembangkan bisnis mereka. Melalui program ini, para peserta akan diberikan pelatihan dan pendampingan dalam memulai bisnis mereka.

                        Inovasi Teknologi: Program ini bertujuan untuk memfasilitasi pengembangan inovasi teknologi oleh mahasiswa, dosen, dan tenaga kependidikan UBL. Program ini mencakup kegiatan seperti workshop, pelatihan, dan penelitian untuk menghasilkan produk inovatif berbasis teknologi.
                        
                        Program Kreativitas: Program ini bertujuan untuk mengembangkan kreativitas para peserta melalui kegiatan seperti workshop, seminar, dan kompetisi kreativitas. Program ini juga memiliki fokus pada pengembangan keterampilan seperti desain grafis, animasi, dan multimedia.
                        
                        Penelitian Terapan: Program ini bertujuan untuk mendorong pengembangan inovasi melalui penelitian terapan yang berbasis pada kebutuhan industri. Program ini bekerja sama dengan industri untuk mengidentifikasi kebutuhan dan menciptakan solusi inovatif untuk memenuhi kebutuhan tersebut.
                        
                        Melalui program-program yang ditawarkan, PPIK UBL berkomitmen untuk memfasilitasi dan meningkatkan kreativitas dan inovasi di kalangan mahasiswa, dosen, dan tenaga kependidikan UBL. Dengan dukungan dan fasilitas yang memadai, diharapkan dapat menghasilkan inovasi dan kreativitas yang bermanfaat bagi masyarakat.</p>
                </div>
                <div class="col-lg-12">
                    <!-- about video -->
                    <div class="about-video">
                        <img class="img-fluid w-100" src="images/about/video-thumb.jpg" alt="video-thumb">
                        <a class="venobox play-btn" href="https://www.youtube.com/embed/2yoYxetUrWQ" data-vbtype="iframe"><i class="ti-control-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img src="images/background-shape/green-dot.png" alt="background-shape" class="about-bg-1 up-down-animation">
        <img src="images/background-shape/blue-dot.png" alt="background-shape" class="about-bg-2 left-right-animation">
        <img src="images/background-shape/green-half-cycle.png" alt="background-shape" class="about-bg-3 up-down-animation">
        <img src="images/background-shape/seo-ball-1.png" alt="background-shape" class="about-bg-4 left-right-animation">
        <img src="images/background-shape/team-bg-triangle.png" alt="background-shape" class="about-bg-5 up-down-animation">
        <img src="images/background-shape/service-half-cycle.png" alt="background-shape" class="about-bg-6 left-right-animation">
    </section>
    <!-- /about us -->

    <!-- product -->
    <section class="section product" style="background-image: url(images/backgrounds/about-bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Our Product</h2>
                    <p class="mb-100">Berikut Adalah Beberapa Contoh <br> Produk Inovasi.</p>
                </div>
                <div class="col-md-4 col-sm-6 mb-50">
                    <a href="#"><img src="images/product/product-1.jpg" alt="product-img" class="rounded w-100 img-fluid"></a>
                </div>
                <div class="col-md-4 col-sm-6 mb-50">
                    <a href="#"><img src="images/product/product-2.jpg" alt="product-img" class="rounded w-100 img-fluid"></a>
                </div>
                <div class="col-md-4 col-sm-6 mb-50">
                    <a href="#"><img src="images/product/product-3.jpg" alt="product-img" class="rounded w-100 img-fluid"></a>
                </div>
                <div class="col-md-4 col-sm-6 mb-100">
                    <a href="#"><img src="images/product/product-4.jpg" alt="product-img" class="rounded w-100 img-fluid"></a>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary">Explore More Product</a>
                </div>
            </div>
        </div>

        <!-- our vision -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="section-title">VISI PPIK</h2>
                        <p>Visi dari Program Pengembangan Inovasi dan Kreativitas (PPIK) Universitas Bandar Lampung adalah untuk menjadi pusat pengembangan inovasi dan kreativitas yang terkemuka di tingkat nasional maupun internasional. Dalam mencapai visinya, PPIK UBL berkomitmen untuk melahirkan inovator dan kreator yang berkualitas dan memiliki keunggulan kompetitif di bidangnya masing-masing.

                            PPIK UBL juga bertujuan untuk meningkatkan kualitas dan kuantitas inovasi dan kreativitas di kalangan mahasiswa, dosen, dan tenaga kependidikan UBL serta memfasilitasi pengembangan kewirausahaan dan industri berbasis inovasi. PPIK UBL juga berkomitmen untuk menjadi mitra strategis bagi industri dan dunia usaha dalam menghadapi tantangan global yang semakin kompleks.
                            
                            Dalam rangka mencapai visinya, PPIK UBL juga memprioritaskan pengembangan sumber daya manusia yang berkualitas dan memadai, serta infrastruktur dan teknologi yang mendukung pengembangan inovasi dan kreativitas. Dengan visi ini, diharapkan PPIK UBL dapat menjadi leading center for innovation and creativity di tingkat nasional maupun internasional.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="images/about/vision.png" alt="vision" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </section>
        <!-- /our vision -->

        <!-- clients -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-title">Our Clients</h2>
                        <ul class="list-inline text-center">
                            <li class="list-inline-item mx-5 mb-5">
                                <a href="#"><img src="images/clients-logo/client-1.png" alt="clients-logo" class="img-fluid"></a>
                            </li>
                            <li class="list-inline-item mx-5 mb-5">
                                <a href="#"><img src="images/clients-logo/client-2.png" alt="clients-logo" class="img-fluid"></a>
                            </li>
                            <li class="list-inline-item mx-5 mb-5">
                                <a href="#"><img src="images/clients-logo/client-3.png" alt="clients-logo" class="img-fluid"></a>
                            </li>
                            <li class="list-inline-item mx-5 mb-5">
                                <a href="#"><img src="images/clients-logo/client-4.png" alt="clients-logo" class="img-fluid"></a>
                            </li>
                            <li class="list-inline-item mx-5 mb-5">
                                <a href="#"><img src="images/clients-logo/client-5.png" alt="clients-logo" class="img-fluid"></a>
                            </li>
                            <li class="list-inline-item mx-5 mb-5">
                                <a href="#"><img src="images/clients-logo/client-6.png" alt="clients-logo" class="img-fluid"></a>
                            </li>
                            <li class="list-inline-item mx-5 mb-5">
                                <a href="#"><img src="images/clients-logo/client-7.png" alt="clients-logo" class="img-fluid"></a>
                            </li>
                            <li class="list-inline-item mx-5 mb-5">
                                <a href="#"><img src="images/clients-logo/client-8.png" alt="clients-logo" class="img-fluid"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /clients -->
    </section>
    <!-- /product -->



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
                        <li class="list-inline-item"><a href="about.html">About</a></li>
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
                            <a class="twitter" href="#"><i class="ti-twitter-alt"></i></a>
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