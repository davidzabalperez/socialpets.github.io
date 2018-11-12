@extends('layouts.layout')
@section('title','socialpets')

<!-- donde quires que vaya y lo que quieres -->

@section('content')
<div class="content">
        <section class="header parallax home-parallax page" id="HOME">
                <h2></h2>
                <div class="section_overlay">
                    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">
                                    <img src="images/logo perrito.png" alt="Logo">
                                </a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <!-- NAV -->
                                    <li><a href="#HOME">HOME</a> </li>
                                    <li><a href="#ABOUT">ACERCA DE</a> </li>
                                    <li><a href="#FEATURES">CARACTERISTICAS</a></li>
                                    <li><a href="#LOGIN">CONTACTO</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container- -->
                    </nav>
        
                    <div class="container home-container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="logo text-center">
                                        <!-- LOGO -->
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <div class="home_text">
                                    <!-- TITLE AND DESC -->
                                    <h1>SocialPets</h1>
                                    <p>Comunidad de amigos perrunos</p>
        
                                    <div class="download-btn">
                                    <!-- BUTTON -->
                                        <a class="btn home-btn wow fadeInLeft" href="#LOGIN">Log in</a>
                                        <a class="btn home-btn wow fadeInLeft" href="#DOWNLOAD">Register</a>
                                        <a class="tuor btn wow fadeInRight" href="#ABOUT">Más información<i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-1 col-sm-4">
                                <div class="home-iphone">
                                    <img src="images/logo perrito.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            <!-- END HEADER SECTION -->
        
        
        
        
         <!-- =========================
             START ABOUT US SECTION
        ============================== -->
        
        
            <section class="about page section_about" id="ABOUT">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- ABOUT US SECTION TITLE-->
                            <div class="section_title">
                                <h2>Acerca de</h2>
                                <p>Alguna vez has salido a la calle a pasear a tu mejor amigo, y te has encontrado con otro perro con el se ha congeniado, seguro que te gustaría que volviesen a encontrarse, o que quedasen más a menudo. Hoy en día es fácil detectar cuando se llevan bien nuestras mascotas, y gracias a esta app pordremos ponernos encontacto con su dueña/o o más gente para poder hacer que nuestros amigos tengan una mejor vida social, y aparte podamos conocer gente nueva</p>
                            </div>
                        </div>
        
                    </div>
                </div>
                <div class="inner_about_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <!-- PHONE -->
                                    <img src="images/pixel3xlsocialpets2.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                <!-- TITLE -->
                                <div class="inner_about_title">
                                    <h2>Nuestra aplicacion<br></h2>
                                    <p>Aplicación web que podrá visualizarse y tener las mismas funciones en los distintos dispositivos</p>
                                </div>
                                <div class="inner_about_desc">
        
                                    <!-- SINGLE DESC -->
                                    <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="0.5s">
                                        <!-- ICON -->
                                        <div><i class="pe-7s-timer"></i></div>
                                        <!-- HEADING DESCRIPTION -->
                                        <h3>Rendimiento</h3>
                                        <p>Las mejores tecnologias actuales para ofrecer el máximo rendimiento</p>
                                    </div>
                                    <!-- END SINGLE DESC -->
        
        
                                    <!-- SINGLE DESC -->
                                    <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="0.5s">
                                        <!-- ICON -->
                                        <div><i class="pe-7s-target"></i></div>
                                        <!-- HEADING DESCRIPTION -->
                                        <h3>Funcional</h3>
                                        <p>Funciones de fácil manejo y variedad</p>
                                    </div>
                                    <!-- END SINGLE DESC -->
        
        
                                    <!-- SINGLE DESC -->
                                    <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="0.5s">
                                        <!-- ICON -->
                                        <div><i class="pe-7s-stopwatch"></i></div>
                                        <!-- HEADING DESCRIPTION -->
                                        <h3>Rápida</h3>
                                        <p>Las mejores tecnologias actuales para ofrecer la máxima velocidad</p>
                                    </div>
                                    <!-- END SINGLE DESC -->
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            <!-- End About Us -->
         <!-- =========================
             START TESTIMONIAL SECTION
        ============================== -->
        
            <section id="TESTIMONIAL" class="testimonial parallax">
                <div class="section_overlay">
                    
                </div>
            </section>
        
        
        
            <!-- END TESTIMONIAL SECTION -->
        
        
        
        <!-- =========================
             START FEATURES
        ============================== -->
            <section id="FEATURES" class="features page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- FEATURES SECTION TITLE -->
                            <div class="section_title wow fadeIn" data-wow-duration="1s">
                                <h2>Características</h2>
                                <p></p>
                            </div>
                            <!-- END FEATURES SECTION TITLE -->
                        </div>
                    </div>
                </div>
        
                <div class="feature_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 right_no_padding wow fadeInLeft" data-wow-duration="1s">
                                <!-- FEATURE -->
        
                                <div class="left_single_feature">
                                    <!-- ICON -->
                                    <div><span class="pe-7s-like"></span></div>
        
                                    <!-- FEATURE HEADING AND DESCRIPTION -->
                                    <h3>Diseño creativo</h3>
                                    <p>Intuitivo,ágil, fácil de utilizar.</p>
                                </div>
        
                                <!-- END SINGLE FEATURE -->
        
        
                                <!-- FEATURE -->
                                <div class="left_single_feature">
                                    <!-- ICON -->
                                    <div><span class="pe-7s-science"></span></div>
        
                                    <!-- FEATURE HEADING AND DESCRIPTION -->
                                    <h3>Moderno</h3>
                                    <p>Actual, con las últimas tecnologias.</p>
                                </div>
                                <!-- END SINGLE FEATURE -->
        
        
                                <!-- FEATURE -->
                                <div class="left_single_feature">
                                    <!-- ICON -->
                                    <div><span class="pe-7s-look"></span></div>
        
                                    <!-- FEATURE HEADING AND DESCRIPTION -->
                                    <h3>Diseño minimalista</h3>
                                    <p>Tenemos en cuenta la usabilidad, eliminando funciones y cosas inecesarias.</p>
                                </div>
                                <!-- END SINGLE FEATURE -->
        
                            </div>
                            <div class="col-md-4">
                                <div class="feature_iphone">
                                    <!-- FEATURE PHONE IMAGE -->
                                    <img class="wow bounceIn" data-wow-duration="1s" src="images/pixel3xlsocialpets2.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4 left_no_padding wow fadeInRight" data-wow-duration="1s">
        
                                <!-- FEATURE -->
                                <div class="right_single_feature">
                                    <!-- ICON -->
                                    <div><span class="pe-7s-monitor"></span></div>
        
                                    <!-- FEATURE HEADING AND DESCRIPTION -->
                                    <h3>Responsive</h3>
                                    <p>Se adapta a cualquier dispositivo</p>
                                </div>
                                <!-- END SINGLE FEATURE -->
        
        
                                <!-- FEATURE -->
                                <div class="right_single_feature">
                                    <!-- ICON -->
                                    <div><span class="pe-7s-phone"></span></div>
        
                                    <!-- FEATURE HEADING AND DESCRIPTION -->
                                    <h3>Responsive</h3>
                                    <p>Se adapta a cualquier dispositivo</p>
                                </div>
                                <!-- END SINGLE FEATURE -->
        
        
                                <!-- FEATURE -->
                                <div class="right_single_feature">
                                    <!-- ICON -->
                                    <div><span class="pe-7s-gleam"></span></div>
        
                                    <!-- FEATURE HEADING AND DESCRIPTION -->
                                    <h3>Rápida</h3>
                                    <p>Funciones simples y eficaces</p>
                                </div>
                                <!-- END SINGLE FEATURE -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END FEATURES SECTION -->
        
        <!-- =========================
             Start FUN FACTS
        ============================== -->
        
        
            <section class="fun_facts parallax">
                <div class="section_overlay">
                    
                </div>
            </section>
        
            <!-- END FUN FACTS -->
            <section class="LOGIN">
                    <div class="container" id="LOGIN">
                            <div class="col-md-10 col-md-offset-1">
                                    <!-- FEATURES SECTION TITLE -->
                                    <div class="section_title wow fadeIn" data-wow-duration="0.5s">
                                        <h2>Contacto</h2>
                                        <p></p>
                                    </div>
                      <div class="row">
                        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                          <div class="card card-signin my-5">
                              <form action="/contacto" method="get" class="form-signin">
                              @csrf
                                <div class="form-label-group">
                                        <label>Nombre</label>
                                        <input type="text" name="nombre" class="form-control" placeholder="nombre" required>
                                    </div>
                                    <label>Email</label>
                                  <input type="email" name="email" class="form-control" placeholder="Correo electronico" required autofocus>
                                </div>
                                <div class="form-group">
                                    <br>
                                    <textarea name="texto" class="form-control" placeholder="Que necesitas saber?" rows="5"></textarea>
                                  </div>
                               <button class="btn home-btn wow fadeInLeft enviar" type="submit" name="enviar">Enviar</button>
                                <hr class="my-4">
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            </section>
</div>
@endsection

@section('enviado')

@endsection