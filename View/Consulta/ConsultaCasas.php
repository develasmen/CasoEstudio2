<?php

    include_once $_SERVER['DOCUMENT_ROOT']. "/CasoEstudio2/View/layout.php";
    include_once $_SERVER['DOCUMENT_ROOT']. "/CasoEstudio2/Controller/CasasController.php";

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
                                <h5 class="text-white">Consulta de Casas</h5>
                                <table id="example" class="table">
                                    <thead>
                                        <tr class="header-row, text-white">
                                            <th>Descripcion</th>
                                            <th>Precio</th>
                                            <th>Usuario</th>
                                            <th>Estado</th>
                                            <th>Fecha Alquiler</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        <?php
                                            $datos = ConsultarCasas();
                                                while($row = mysqli_fetch_array($datos)) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row["DescripcionCasa"] . "</td>";
                                                    echo "<td>" . $row["PrecioCasa"] . "</td>";
                                                    echo "<td>" . $row["UsuarioAlquiler"] . "</td>";
                                                    echo "<td>" . $row["Estado"] . "</td>";
                                                    echo "<td>" . $row["FechaAlquiler"] . "</td>";
                                                    echo "</tr>";
                                                }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php PrintFooter(); ?>
        <?php PrintScript(); ?>

    </body>

</html>