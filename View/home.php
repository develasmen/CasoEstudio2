<?php

     include_once $_SERVER['DOCUMENT_ROOT']. "/CasoEstudio2/View/layout.php";

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

                                                  <h6 data-aos="fade-up" data-aos-delay="300">Caso Estudio 2</h6>
                                                  <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Bienvenido!</h1>
                                                  
                                             </div>
                                        </div>

                                   </div>
                              </div>
                    </section>

               <?php PrintFooter(); ?>

               <?php PrintScript(); ?>

          </body>

     </html>



     