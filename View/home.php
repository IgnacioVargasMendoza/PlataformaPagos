<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/PlataformaPagos/View/layOutInterno.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php PrintCss(); ?>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="home.php" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Practica3</h1>
            </a>
            <?php NavBar(); ?>
        </div>
    </header>

    <main class="main">
        <section id="hero" class="hero section dark-background">

            <img src="Img/img/hero-bg.jpg" alt="" data-aos="fade-in">

            <div class="container d-flex flex-column align-items-center">
                <h2 data-aos="fade-up" data-aos-delay="100">PLAN. LAUNCH. GROW.</h2>
                <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p>
                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                <a href="#about" class="btn-get-started">Get Started</a>
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>

        </section>
    </main>

    <?php Footer(); ?>
    <?php Scripts(); ?>

</body>
</html>