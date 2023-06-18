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
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>


    <!-- navigation -->
    <section class="fixed-top navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><img src="images/logoPPIK.png" alt="logo" width="100" height="100">
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
                            <a class="nav-link page-scroll"  href="{{route('home')}}#team">Team</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link page-scroll" href="index.html#pricing">Pricing</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                    <a href="login.html" class="btn btn-primary ml-lg-3 primary-shadow">Masuk</a>
                </div>
            </nav>
        </div>
    </section>
    <!-- /navigation -->

    <!-- contact -->
    <section class="section-lg contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Contact</h2>
                </div>
            </div>
            <div class="row contact-bg p-5 rounded mb-5">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <form action="#">
                        <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name">
                        <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email">
                        <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
                        <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
                        <button type="submit" value="send" class="btn btn-secondary">SEND MESSAGE</button>
                    </form>
                </div>
                <div class="col-lg-5">
                    <p class="mb-5">Kami senang mendengar dari Anda! Silakan hubungi kami melalui formulir kontak di samping ini.

                        Ada pertanyaan atau masalah yang ingin Anda ajukan? Tim layanan pelanggan kami siap membantu Anda.
                        
                        Kami ingin memastikan bahwa setiap pengalaman pelanggan Anda bersama kami berjalan lancar. Jangan ragu untuk menghubungi kami jika Anda membutuhkan bantuan.
                        
                        Anda dapat mengirimkan pertanyaan, masukan, atau keluhan Anda melalui formulir kontak di bawah ini. Kami akan merespons secepat mungkin.
                        
                        Apakah Anda memiliki pertanyaan tentang produk atau layanan kami? Silakan hubungi tim layanan pelanggan kami melalui formulir kontak di bawah ini.
                        
                        Kami menghargai setiap umpan balik dari pelanggan kami. Silakan kirimkan masukan Anda melalui formulir kontak di bawah ini.
                        
                        Kami berkomitmen untuk memberikan layanan pelanggan terbaik kepada Anda. Jika Anda membutuhkan bantuan atau dukungan, jangan ragu untuk menghubungi kami.</p>
                    <a href="tel:+442081446356" class="text-color h5 d-block">+62 8317 1679 432</a>
                    <a href="mailto:info@altostack.io" class="mb-5 text-color h5 d-block">infoppik@ubl.ac.id</a>
                    <p>Jl. ZA. Pagar Alam No.26, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35142<br>Gedung Program Pengembangan Inovasi dan Kreativitas(PPIK) Universitas Bandar Lampung</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card p-4 border-blue">
                        <h5><i class="ti-layers-alt round-icon blue mr-2"></i> Sales</h5>
                        <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card p-4 border-blue">
                        <h5><i class="ti-desktop round-icon green mr-2"></i> Help & Support</h5>
                        <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card p-4 border-blue">
                        <h5><i class="ti-panel round-icon orange mr-2"></i> Legal Departments</h5>
                        <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img class="contact-bg-1 up-down-animation" src="images/background-shape/feature-bg-2.png" alt="background-shape">
        <img class="contact-bg-2 left-right-animation" src="images/background-shape/green-half-cycle.png" alt="background-shape">
        <img class="contact-bg-3 up-down-animation" src="images/background-shape/green-dot.png" alt="background-shape">
        <img class="contact-bg-4 left-right-animation" src="images/background-shape/service-half-cycle.png" alt="background-shape">
        <img class="contact-bg-5 up-down-animation" src="images/background-shape/feature-bg-2.png" alt="background-shape">
    </section>
    <!-- /contact -->

    <!-- footer -->
    <footer class="footer-section footer" style="background-image: url(images/backgrounds/footer-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
                    <!-- logo -->
                    <a href="index.html">
                        <img class="img-fluid" src="images/logoPPIK.png" alt="logo" width="100" height="100" >
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
                            <a class="tiktok" href="#"><i class="ti-tiktok"></i></a>
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