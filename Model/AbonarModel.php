<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/PlataformaPagos/Model/ConexionBD.php";

    function RegistrarAbono($idCompra, $monto)
    {
        try
        {
            $context = AbrirBaseDatos();
            $sentencia = "CALL RegistrarAbono('$idCompra', '$monto')";
            $resultado = $context -> query($sentencia);
    
            CerrarBaseDatos($context);
            return $resultado;
        }
        catch(Exception)
        {
            return null;
        }        
    }
?>