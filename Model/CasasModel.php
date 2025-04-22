<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/CasoEstudio2/Model/BaseDatosModel.php";

function ConsultarCasasModel()
{
    try
    {
        $context = AbrirBaseDatos();
        $sentencia = "CALL SP_ConsultarCasas()";
        $resultado = $context->query($sentencia);
        CerrarBaseDatos($context);
        return $resultado;
    }
    catch(Exception $error)
    {
        return null;
    }        
}

function ActualizarCasaModel($idCasa, $usuario)
{
    try
    {
        $context = AbrirBaseDatos();
        $sentencia = "CALL SP_ActualizarCasa('$idCasa', '$usuario')";
        $resultado = $context->query($sentencia);
        CerrarBaseDatos($context);
        return $resultado;
    }
    catch(Exception $error)
    {
        return null;
    }        
}

?>