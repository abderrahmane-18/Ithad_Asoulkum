<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content=" , ,  " />
    <meta name="title" content="" />
    <meta name="description" content="" />
    <meta name="author" content="Khaldi Abdou  @https://khamsat.com/user/khaldi_abdou" />
    <meta name="copyright" content="https://github.com/CodingWithAbdou" />

    <link rel="shortcut icon" href="images/logo2.jpeg" type="image/x-icon" />

    <link href="{{ asset('assets/lib/aos.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/lib/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />

    <title>
        إتحاد اصولكم
    </title>
</head>

<body>
    <!--------------
                    Preloader
                --------------->
    <!-- <div class="preloader" data-preloader>
                    <div class="circle"></div>
                </div> -->

    <!--------------
                    What app
                --------------->
    <div class="whatapp">
        <a href="https://wa.me/213776130359">
            <img src="{{ asset('assets/images/whatsapp.png') }}" alt="" width="42px" />
        </a>
    </div>

    <!--------------
                    Navigation
                --------------->
    <nav class="navbar navbar-expand-lg background-green">
        <div class="container">
            <a class="navbar-brand logo d-flex align-items-center justify-content-start" href="">
                <div class="box_logo">
                    <div class="face front d-flex align-items-center justify-content-center w-100 h-100">
                        <img class="img" src="{{ asset('assets/images/logo3.jpeg') }}" alt=""
                            width="100" />
                    </div>
                    <div class="face back d-flex align-items-center justify-content-center w-100 h-100">
                        <img class="img" src="{{ asset('assets/images/logo3.jpeg') }} " alt=""
                            width="100" />
                    </div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                                    <a class="nav-link fs-5 ps-4  text-white ff-GE_SS_tow" href="../index.html">عربي</a>
                                </li>   -->
                    <li class="nav-item">
                        <a class="nav-link fs-6 ps-3 text-white active" aria-current="page" href="#home">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 ps-3 text-white" href="#about-us">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 ps-3 text-white" href="#services">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 ps-3 text-white" href="#advantages">مميزاتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 ps-3 text-white" href="#achievement">إنجزاتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 ps-3 text-white" href="#client">عملائنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 ps-3 text-white" href="#contact-us">إتصل بنا</a>
                    </li>
                    <li class="lang d-flex align-items-center justify-content-center">
                        <select class="select">
                            <option>العربية</option>
                            <option>Türkçe</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--------------
                    Landing
                --------------->


    <!--------------
                    Main Content
                --------------->
    <main class="overflow-hidden">
    </main>
    <!--------------
                    Footer
                --------------->
    <footer class="footer overflow-hidden" id="contact-us">
        <div class="row">
            <div class="col-12 text-center copyright">
                جميع الحقوق محفوظة لمؤسسة سرايا الإنعاش
                <span class="year">2023</span>
            </div>
        </div>
    </footer>
</body>
<script src="{{ asset('assets/lib/jquery.js') }}"></script>
<script src="{{ asset('assets/lib/jquery.nice-select.min.js') }}"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/lib/bootstrap.js') }}"></script>
<script src="{{ asset('assets/lib/aos.js') }}"></script>
<script src="{{ asset('assets/script.js') }}"></script>

</html>
