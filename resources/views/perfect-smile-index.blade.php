<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Perfect Smile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('css/clinic/img/logo__.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/p_smile/css/open-iconic-bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('css/p_smile/css/animate.css')}} ">

    <link rel="stylesheet" href="{{ asset('css/p_smile/css/owl.carousel.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('css/p_smile/css/owl.theme.default.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('css/p_smile/css/magnific-popup.css')}} ">

    <link rel="stylesheet" href="{{ asset('css/p_smile/css/aos.css')}} ">

    <link rel="stylesheet" href="{{ asset('css/p_smile/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/p_smile/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('css/p_smile/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{ asset('css/p_smile/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/p_smile/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/p_smile/css/style.css')}}">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/">
          <img src="{{asset('css/clinic/img/logo_.png')}}" width="35" height="35" alt=""> Perfect<span>Smile</span>
        </a>
        


	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Inicio</a></li>

            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Iniciar Sesión</a></li>
            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Registrarse</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url( {{ asset('css/p_smile/images/bg_1.jpg')}} );">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Calidad y Atención</h1>
              <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tratamos de una forma integral cada una de las especialidades. Tratamientos personalizados para una sonrisa perfecta.</p>
              
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url( {{ asset('css/p_smile/images/bg_2.jpg')}} );">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Compromiso Perfect Smile</h1>
              <p class="mb-4">Contamos con los mejores especialistas para cada uno de los miembros de tu familia y con el objetivo por verte feliz.</p>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 color-2 p-4">
                    <h3 class="mb-4">Horario</h3>
                    <p class="openinghours d-flex">
                        <span>Lunes - Viernes</span>
                        <span>09:00 am - 07:00 pm</span>
                    </p>
                    <p class="openinghours d-flex">
                        <span>Sábados</span>
                        <span>10:00 am - 05:00 pm</span>
                    </p>
                    <p class="openinghours d-flex">
                        <span>Domingo</span>
                        <span>10:00 am - 03:00 pm</span>
                    </p>
                </div>
                <div class="col-md-8 color-3 p-4">
                    <h3 class="mb-2">Agendar una Cita</h3>
                    <form action="#" class="appointment-form" method="post">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option class ="form-option" value="">Tratamiento</option>
                                            <option class ="form-option" value="">Consulta General</option>
                                            <option class ="form-option" value="">Limpieza Dental</option>
                                            <option class ="form-option" value="">Blanqueamiento dental</option>
                                            <option class ="form-option" value="">Resina Dental</option>
                                            <option class ="form-option" value="">Endodoncia</option>
                                            <option class ="form-option" value="">Extracción Dental</option>
                                            <option class ="form-option" value="">Ortodoncia</option>
                                            <option class ="form-option" value="">Implante Dental</option>
                                            <option class ="form-option" value="">Periodoncia</option>
                                            <option class ="form-option" value="">Guarda Oclusar</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="icon-user"></span></div>
                                      <input type="text" class="form-control" id="appointment_name" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="icon-paper-plane"></span></div>
                                      <input type="text" class="form-control" id="appointment_email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="ion-ios-calendar"></span></div>
                                    <input type="text" class="form-control appointment_date" placeholder="Fecha">
                                </div>    
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" class="form-control appointment_time" placeholder="Horario">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="icon"><span class="icon-phone2"></span></div>
                                  <input type="text" class="form-control" id="phone" placeholder="Teléfono">
                                </div>
                            </div>
                        </div>

                        <div >
                          <input type="submit" value="Enviar" class="btn btn-light ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
  
    <section class="ftco-section ftco-services">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Nuestros servicios te mantienen sonriendo</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tooth-1"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Blanqueamiento dental</h3>
                <p>El blanqueamiento es un procedimiento que aclara los dientes que están manchados, decolorados o que se han oscurecido por un golpe. Se puede realizar en dientes vitales o en dientes con endodoncia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-dental-care"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Limpieza Dental</h3>
                <p>La limpieza dental, también llamada profilaxis, es un procedimiento en el cual removeremos manchas, sarro y placa dentobacteriana para mantener la salud de tus dientes y encías.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tooth-with-braces"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Ortodoncia</h3>
                <p>
                   Consigue que sus dientes tengan la mejor estética con un encaje perfecto.
                    Gracias a este tratamiento no sólo puede conseguir una sonrisa estéticamente bonita sino una mejor funcionalidad de su boca y que su imagen facial resulte en su conjunto más armoniosa y atractiva.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-dentist"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Odontopediatría</h3>
                <p>El cuidado de la dentadura infantil, es de vital importancia para conseguir una dentadura fuerte y sana. Lo que se pretende es dar un tratamiento diferente, ya que sus dientes son aún muy sensibles</p>
              </div>
            </div>      
          </div>
        </div>
      </div>

    </section>


    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">¡Doctores asombrosos y tecnología avanzada, mantendrán tu sonrisa luciendo genial!</h2>
            
            <p>Nuestro equipo, integrado por profesionales de la salud bucal, le garantiza una atención de la máxima calidad, seguridad y profesionalidad. Odontólogos, Cirujanos, Ortodoncistas, Endodoncistas y Odontopediatras trabajamos de la mano para ofrecerte siempre la mejor calidad y los precios más accesibles del mercado.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url({{ asset('css/p_smile/images/person_5.jpg')}} );"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Edgar Franco</a></h3>
      					<span class="position">Odontólogo</span>
      					<div class="text">
	        			<ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url( {{ asset('css/p_smile/images/person_6.jpg')}} );"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Fernando Orozco</a></h3>
      					<span class="position">Cirujano</span>
      					<div class="text">
                        <ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url( {{ asset('css/p_smile/images/person_7.jpg')}} );"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Paola Espinoza</a></h3>
      					<span class="position">Ortodoncista</span>
      					<div class="text">
                        <ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url( {{ asset('css/p_smile/images/person_8.jpg')}} );"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Ivan Alcalá</a></h3>
      					<span class="position">Cirujano</span>
      					<div class="text">
                        <ul class="ftco-social">
			              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>
    
    

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url( {{ asset('css/p_smile/images/about-x.jpg')}} );" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col-md-3 aside-stretch py-5">
    				<div class=" heading-section heading-section-white ftco-animate pr-md-4">
	            <h2 class="mb-3">Nuestros Logros</h2>
	            <p>Queremos que en Perfect Smile te sientas tan cómodo que nos volvamos tu Clínica Dental de preferencia.</p>
	          </div>
    			</div>
    			<div class="col-md-9 py-5 pl-md-5">
		    		<div class="row">
		          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="12">0</strong>
		                <span>Años de Experiencia</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="4200">0</strong>
		                <span>Dentistas Calificados</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="6100">0</strong>
		                <span>Clientes Satisfechos</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
	      </div>
    	</div>
    </section>
    
    <br>

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">        
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="row d-flex justify-content-center">
                <div class="col-md-12 text-center heading-section heading-section-white ftco-animate">

                  <h2>Pacientes Felices</h2>

                </div>
              </div>
            </div>
        <div class="row justify-content-center ftco-animate">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel ftco-owl">
             
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url({{ asset('css/p_smile/images/person_1.jpg')}} )">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-8 text-center heading-section heading-section-white ftco-animate">
                    <p >Hoy fue la primera vez que visitamos al dentista. Todos fueron muy amables y serviciales.</p>
                        <div class="text text-center">
                        <p class="name">Ana Sánchez</p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url( {{ asset('css/p_smile/images/person_2.jpg')}} )">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-8 text-center heading-section heading-section-white ftco-animate">
                    <p >Necesitaba una ondodoncia y no lo sabía, pero fui a Perfect Smile y además de tener precios super accesibles, fue rápido, seguro y sin dolor alguno.</p>
                        <div class="text text-center">
                        <p class="name">Daniela García</p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url( {{ asset('css/p_smile/images/person_3.jpg')}} )">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-8 text-center heading-section heading-section-white ftco-animate">
                    <p >Por fin pude arreglar mis dientes de manera fácil, a un precio accesible y con los más profesionales. Gracias Perfect Smile.</p>
                        <div class="text text-center">
                        <p class="name">Luis Escobar</p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>  

              
            </div>
          </div>
        </div>
      </div>
                
      </div>
    </section>	
    
    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url( {{ asset('css/p_smile/images/gallery-1.jpg')}} );">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url( {{ asset('css/p_smile/images/gallery-2.jpg')}} );">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url( {{ asset('css/p_smile/images/gallery-3.jpg')}} );">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url( {{ asset('css/p_smile/images/gallery-4.jpg')}} );">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>


		
		<section class="ftco-quote">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
                    <div class="heading-section heading-section-white mb-5 ftco-animate">
                        <h2 class="mb-2">Perfect Smile</h2>
                    </div>
                    <div class="ftco-animate col-md-6">
                        <p>
                            Porque una boca sana es una boca sin filtros. Ven a Perfect Smile y conoce todos los tratamientos que tenemos para mejorar tu estética dental y cuidar tu salud bucal.	          	
                        </p>
                    </div>
    			</div>
    			<div class="col-md-6 py-5 pl-md-5">
    				<div class="heading-section mb-5 ftco-animate">
	                <h2 class="mb-2">Pide Tu Primera Consulta Gratis</h2>
	                </div>
                    <form action="#" class="ftco-animate" method="post">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre Completo">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Teléfono">
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Mensaje"></textarea>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <input type="submit" value="Agendar Cita" class="btn btn-primary py-3 px-5">
                              </div>
                          </div>
                        </div>
                    </form>
    			</div>
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Perfect Smile.</h2>
              <p>
                  Perfect Smile, está conformada por un grupo de odontólogos especializados en tratamientos correctivos y estéticos, preocupados por el bienestar y la salud de la sociedad mexicana, ofrecemos alternativas con tecnología de punta para garantizar la calidad de nuestro servicio.
              </p>
            </div>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          
          <div class="col-md-6">
            <div class="ftco-footer-widget mb-4">
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Av. Aviación #4855, Zapopan, Jal.</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+52 3310104955</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@perfectsmile.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                &copy; <script>document.write(new Date().getFullYear());</script> Todos los Derechos Reservados | Perfect Smile
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Make an Appointment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
              <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="text" class="form-control" id="appointment_email" placeholder="Email">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_date" class="text-black">Date</label> -->
                  <input type="text" class="form-control appointment_date" placeholder="Date">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_time" class="text-black">Time</label> -->
                  <input type="text" class="form-control appointment_time" placeholder="Time">
                </div>
              </div>
            </div>
            

            <div class="form-group">
              <!-- <label for="appointment_message" class="text-black">Message</label> -->
              <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Make an Appointment" class="btn btn-primary">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>


  <script src="{{ asset('js/p_smile/js/jquery.min.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/popper.min.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/aos.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('js/p_smile/js/google-map.js')}}"></script>
  <script src="{{ asset('js/p_smile/js/main.js')}}"></script>
    
  </body>
</html>