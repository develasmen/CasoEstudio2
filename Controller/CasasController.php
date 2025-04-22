<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/CasoEstudio2/Model/CasasModel.php";

function ConsultarCasas()
{
    return ConsultarCasasModel();
}

if(isset($_POST["btnAlquilar"])){
    $idCasa = $_POST["txtIdCasa"];
    $usuario = $_POST["txtUsuarioAlquiler"];

    $resultado = ActualizarCasaModel($idCasa,  $usuario);

    if ($resultado == true){
        header('location: ../../View/Consulta/ConsultaCasas.php');
    } else{
        $_POST["Message"] = "Su información no fue registrada correctamente";
    }
}
?>