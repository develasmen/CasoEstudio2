<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/CasoEstudio2/View/layout.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/CasoEstudio2/Controller/CasasController.php";

$datos = ConsultarCasas();
?>

<!DOCTYPE html>
<html lang="en">

<?php PrintCss(); ?>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
    <?php PrintMenu(); ?>
    <section class="principal d-flex flex-column justify-content-center align-items-center" id="home">

        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <div class="container-fluid">
                            <h5 class="text-white">Alquiler de Casas</h5>

                            <?php
                            if (isset($_POST["Message"])) {
                                echo '<div class="alert alert-warning Mensajes">' . $_POST["Message"] . '</div>';
                            }
                            ?>

                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="txtIdCasa" class="text-white" style="font-weight: bold;">Casa</label>
                                    <select class="form-control" id="txtIdCasa" name="txtIdCasa" required
                                        onchange="mostrarPrecio()">
                                        <option value="">Seleccione</option>
                                        <?php
                                    while ($row = mysqli_fetch_array($datos)) {
                                        echo "<option value='" . $row["IdCasa"] . "' data-precio='" . $row["PrecioCasa"] . "'>" . $row["DescripcionCasa"] . "</option>";
                                    }
                                    ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="txtPrecioCasa" class="text-white"
                                        style="font-weight: bold;">Precio</label>
                                    <input type="text" class="form-control" id="txtPrecioCasa"
                                        name="txtPrecioCasa" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="txtUsuarioAlquiler" class="text-white" style="font-weight: bold;">Usuario</label>
                                    <input type="text" class="form-control" id="txtUsuarioAlquiler"
                                        name="txtUsuarioAlquiler" required>
                                </div>

                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <input type="submit" class="btn btn-outline-dark" id="btnAlquilar"  name="btnAlquilar" value="Alquilar">
                                </div>
                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php PrintFooter(); ?>
    <?php PrintScript(); ?>
    <script>
        function mostrarPrecio() {
            var select = document.getElementById("txtIdCasa");
            var precioInput = document.getElementById("txtPrecioCasa");
            var precioSeleccionado = select.options[select.selectedIndex].getAttribute("data-precio");

            precioInput.value = precioSeleccionado ? precioSeleccionado : "";
        }
    </script>

</body>

</html>