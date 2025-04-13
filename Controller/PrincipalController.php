<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/PlataformaPagos/Model/PrincipalModel.php";

    function ConsultarPrincipal()
    {
        return ConsultarOfertasModel();
    }
?>