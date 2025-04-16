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

      <div class="mb-3">
            <label for="compraSelect" class="form-label">Compra</label>
            <select class="form-select" id="compraSelect" name="id_compra" required>
              <option value="" selected disabled>-- Seleccione --</option>
              <?php
                  $pendientes = ConsultarPrincipal(1);
                  while ($c = mysqli_fetch_assoc($pendientes)) {
                      echo '<option value="' . $c['id_principal'] . '">' .
                           $c['id_principal'] . ' - ' . $c['descripcion'] .
                           '</option>';
                  }
              ?>
            </select>
          </div>

        <div class="mb-3">
          <label for="saldoAnterior" class="form-label">Saldo Anterior</label>
          <input type="text" class="form-control" id="saldoAnterior" placeholder="Saldo anterior" readonly>
        </div>

        <div class="mb-3">
            <label for="abono" class="form-label">Abono</label>
            <input type="number" step="0.01" min="0.01" class="form-control" id="abono"
                   name="abono" required>
            <div id="msgError" class="invalid-feedback">
              El abono no puede ser mayor al saldo anterior.
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary w-100" id="btnAbonar" >Abonar</button>
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
                <?php
                    $datos = ConsultarPrincipal(0);

                    while ($row = mysqli_fetch_assoc($datos)) {
                      echo "<tr>";
                      echo "<td>{$row['id_principal']}</td>";
                      echo "<td>{$row['descripcion']}</td>";
                      echo "<td>$ {$row['precio']}</td>";
                      echo "<td>$ {$row['saldo']}</td>";
                      echo "<td>{$row['DescripcionEstado']}</td>";
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
<script src="Scripts/abonar.js"></script>

</body>

</html>