<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/PlataformaPagos/Model/ConexionBD.php";

    function ConsultarOfertasModel(bool $estado)
    {
        try
        {
            $context = AbrirBaseDatos();
            $valor = $estado ? 1 : 0; 
            $sentencia = "CALL SP_ConsultarPrincipal('$valor')";
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