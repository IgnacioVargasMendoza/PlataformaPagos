<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/PlataformaPagos/Controller/PrincipalController.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/PlataformaPagos/View/layOutInterno.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php PrintCss(); ?>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="home.php" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">Practica3</h1>
            </a>
            <?php NavBar(); ?>
        </div>
    </header>

    <main class="main" style="margin-top: 2%;">
   
        <section id="portfolio" class="portfolio section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Compras</h2>
                <p>Consulta de Compras</p>
            
                        <div class="container-fluid">
                           <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>Codigo Compra</th>
                                        <th>Descripción</th>
                                        <th>Precio</th>
                                        <th>Saldo</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $datos = ConsultarPrincipal();

                                        while($row = mysqli_fetch_array($datos))
                                        {
                                            echo "<tr>";
                                            echo "<td>" . $row["id_principal"] . "</td>";
                                            echo "<td>" . $row["descripcion"] . "</td>";
                                            echo "<td> $ " . $row["precio"] . "</td>";
                                            echo "<td> $ " . $row["saldo"] . "</td>";
                                            echo "<td> ". $row["estado"] . "</td>";                                  
                                            echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
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