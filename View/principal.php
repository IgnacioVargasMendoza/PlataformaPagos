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
    <div class="d-flex justify-content-between align-items-center mb-3">
    <p class="mb-0">Consulta de Compras</p>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalRegistro">
        Agregar abono
    </button>
</div>

<!-- Aqui esta el MODAL Para el registro -->
<div class="modal fade" id="modalRegistro" tabindex="-1" aria-labelledby="modalRegistroLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title w-100 text-center" id="modalRegistroLabel">Registro</h5>
      </div>

      <div class="modal-body">

        <div class="mb-3 d-flex align-items-start">
          <label class="form-label me-3 mt-2">Compra</label>
          <div class="flex-grow-1">
            <div class="border p-2 bg-light mb-1">Producto 1</div>
            <div class="border p-2 bg-light mb-1">Producto 2</div>
            <div class="border p-2 bg-light mb-1">..</div>
            <div class="border p-2 bg-light mb-1">..</div>
          </div>
          <button class="btn btn-secondary ms-2">Consultar</button>
        </div>

        <div class="mb-3">
          <label for="saldoAnterior" class="form-label">Saldo Anterior</label>
          <input type="text" class="form-control" id="saldoAnterior" placeholder="Saldo anterior">
        </div>

        <div class="mb-4">
          <label for="abono" class="form-label">Abono</label>
          <input type="text" class="form-control" id="abono" placeholder="Monto a abonar">
        </div>

        <div class="text-center">
          <button class="btn btn-secondary w-100">Abonar</button>
        </div>

      </div>
    </div>
  </div>
</div>


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

            <tbody>

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