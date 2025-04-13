<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/PlataformaPagos/View/layOutInterno.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php PrintCss(); ?>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">     
            <nav id="navmenu" class="navmenu">
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main" >

        <section id="hero" class="hero section dark-background">

            <img src="Img/img/hero-bg.jpg" alt="" data-aos="fade-in">

            <div class="container d-flex flex-column align-items-center">
                <h2 data-aos="fade-up" data-aos-delay="100">Bienvenido a la Ultima Practica del Curso</h2>
                <p data-aos="fade-up" data-aos-delay="200"> Cuentas claras, amistades largas!</p>
                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="../View/principal.php" class="btn-get-started">Ver Cuenta Principal</a>
                </div>
            </div>

        </section>

    </main>
      <!-- Preloader -->
    <div id="preloader"></div>

    <?php Footer(); ?>

    <?php Scripts(); ?>


</body>
</html>