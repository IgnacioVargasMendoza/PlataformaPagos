<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/PlataformaPagos/Model/ConexionBD.php";

    function ConsultarOfertasModel()
    {
        try
        {
            $context = AbrirBaseDatos();

            $sentencia = "CALL SP_ConsultarPrincipal";
            $resultado = $context -> query($sentencia);
    
            CerrarBaseDatos($context);
            return $resultado;
        }
        catch(Exception $error)
        {
            return null;
        }        
    }
?>