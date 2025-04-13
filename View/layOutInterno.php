<?php
function PrintCss(){
    echo '<head>
                <meta charset="utf-8">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <meta name="description" content="">
                <meta name="keywords" content="">
                
                <title>Practica 3</title>

                <!-- Favicons -->
                <link href="Styles/assets/img/favicon.png" rel="icon">
                <link href="Styles/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

                <!-- Fonts -->
                <link href="https://fonts.googleapis.com" rel="preconnect">
                <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

                <!-- Vendor CSS Files -->
                <link href="Styles/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                <link href="Styles/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
                <link href="Styles/assets/vendor/aos/aos.css" rel="stylesheet">
                <link href="Styles/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
                <link href="Styles/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

                <!-- Main CSS File -->
                <link href="Styles/assets/css/main.css" rel="stylesheet">
            </head>';
}

function NavBar(){
    echo '<nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>';
}

function Scripts(){
    echo '<script src="Scripts/bootstrap.bundle.min.js"></script>
            <script src="Scripts/validate.js"></script>
            <script src="Scripts/aos.js"></script>
            <script src="Scripts/glightbox.min.js"></script>
            <script src="Scripts/purecounter_vanilla.js"></script>
            <script src="Scripts/swiper-bundle.min.js"></script>
            <script src="Scripts/imagesloaded.pkgd.min.js"></script>
            <script src="Scripts/isotope.pkgd.min.js"></script>
        <script src="Scripts/main.js"></script>';
}

function Footer(){
    echo '  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename">Dewi</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                    <p><strong>Email:</strong> <span>info@example.com</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Dewi</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if youve purchased the pro version -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>';
}

?>