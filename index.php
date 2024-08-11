<!DOCTYPE html>
<html lang="en">

    <?php 
        include('partials/head.php')
    ?>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <?php
        include('partials/header.php')
        ?>


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Consulting Services Innovations</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Consulting</h1>
                                <a href="contact.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Consulting Services Innovations</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Services</h1>
                                <a href="contact.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Nous contacter</a>
                            </div>
                        </div>
                    </div>
					<div class="carousel-item">
                        <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Consulting Services Innovations</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Innovations</h1>
                                <a href="contact.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Nous contacter</a>
                            </div>
                        </div>
                    </div>
					
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                      <marquee> <font color="black">Vous êtes sur le portail web de CSI (Consulting Services Innovations)</font></marquee>                
                        </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">Consulting Services Innovations</h6>
                        <h1 class="mb-4"> Qui sommes-nous ? <span class="text-primary text-uppercase"></span> </h1>
                        <p class="mb-4" align="justify">
						Consulting Services Innovations en sigle CSI est un cabinet d'expertise et d'expérience qui accompagne les entreprises depuis 2017.
Au centre de la création de ce cabinet se trouve Monsieur <a href="fumu_delho.html"><font color="#43497A"> <b>Fumu DHELLO</b></font></a> qui est le Fondateur et Directeur.
<br>
Consulting Services Innovation met à profit son expertise en termes d’accompagnement, conseil, formation et team building pour suivre les équipes dirigeantes, les actifs, les étudiants dans l’optimisation, de leur performance. 
<br>
Nous accompagnons les entreprises, les managers, les actifs, les organisations associatives, les collectivités, vers leur meilleur niveau de réussite et d’épanouissement.
</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">15</h2>
                                        <p class="mb-0">Entreprises accompagnées</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">40</h2>
                                        <p class="mb-0">Entrepreneurs assistés</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">250</h2>
                                        <p class="mb-0">Personnes assistées</p>
                                    </div>
                                </div>
                            </div>
                        </div>
						
                   </div>
				   
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/BZV sept 2029.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/Séminaire CSI 2021 02.jpg" width="100%">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/Séminaire BGFIBank nov 2019.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/image3.jpg">
                            </div>
                        </div>
                    </div>
					<p align="justify">
					Consulting Services Innovation fait de la technologie un véritable facteur de différenciation dans les stratégies d’entreprise. 
<br>
Nous sommes là pour vous aider à réinventer votre entreprise et à booster la création de valeur. Pour ce faire, nous nous appuyons sur des architectures technologiques qui associent résilience et pertinence sectorielle, tout en exploitant des solutions basées sur le cloud et les données, synonymes de rentabilité et de flexibilité.
<a align="center" class="" href="about.html">Plus de détails</a>
 
					</p>
                </div>
            </div>
        </div>
        <!-- About End -->

 <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">CONSULTING SERVICES INNOVATIONS</h6>
                    <h1 class="mb-5">Nos <span class="text-primary text-uppercase">Services</span></h1>
				</div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                       <img src="img/strategie-numerique.png" width="100%" />
                                </div>
                            </div>
                            <h5 class="mb-3">STRATÉGIE DIGITALE</h5>
                      	<p class="text-body mb-0" align="justify">
						Comprendre les tendances numériques et les innovations qui façonneront votre secteur dans cinq, dix, voire vingt ans. 
						</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                   <img src="img/argent-numerique.png" width="100%" />
                                </div>
                            </div>
                            <h5 class="mb-3">MODÈLE D’AFFAIRES</h5> 
							<p class="text-body mb-0" align="justify">
							Utiliser l'innovation numérique pour satisfaire les besoins bruts de vos clients par de nouveaux moyens, et pour réduire les coûts et améliorer l'efficacité.
							
							</p>
						</a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                   <img src="img/facilitateur.png" width="100%" />
                                </div>
                            </div>
                            <h5 class="mb-3">FACILITATEUR</h5>
                            <p class="text-body mb-0" align="justify">
							Favoriser votre transformation via de nouvelles capacités en matière de données tech. Développer les talents et la culture nécessaires pour soutenir une organisation numérique.
							</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <img src="img/camion-dexpedition.png" width="100%" />
                                </div>
                            </div>
                            <h5 class="mb-3">LIVRAISON</h5>
						  <p class="text-body mb-0" align="justify">
						  Orchestrer efficacement les nombreuses composantes d'une transformation durable, en passant rapidement des projets pilotes à un déploiement à grande échelle.

						  </p>
                      
					   </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                     <img src="img/conseiller-financier.png" width="100%" />
                                </div>
                            </div>
                            <h5 class="mb-3">ACCOMPAGNEMENT & CONSEIL </h5>
                         
						   <p class="text-body mb-0" align="justify">
						   Force de proposition et de conseil, CSI vous propose des pistes de réflexion et des plans d’actions sur-mesure pour répondre à vos enjeux stratégiques, commerciaux, organisationnels et humains.
						   
						   </p>
                      </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                   <img src="img/formation.png" width="100%" />
                                </div>
                            </div>
                            <h5 class="mb-3">FORMATION MANAGEMENT</h5>
                           <p class="text-body mb-0" align="justify">
						   Leadership, communication… Notre objectif est de faire émerger les forces humaines et organisationnelles des cadres de l’entreprise pour valoriser leurs capacités d’adaptation, d’évolution et de réussite.
						   </p>
                       </a>
                    </div>
                </div>
            <div class="row g-4">
			<p align="center"><br><br><a href="">Plus de détails</a></p>
					
                </div>
            
			</div>
        </div>
        <!-- Service End -->


        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">CONSULTING SERVICES INNOVATIONS</h6>
                    <h1 class="mb-5">CATALOGUE <span class="text-primary text-uppercase">de formations</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-1.jpg" alt="">
                              <!--  <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Experience client & relation client</small>
                            -->
							</div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3"> 
                                   <h5 class="mb-0" align="center">EXPERIENCE CLIENT & RELATION CLIENT</h5>
                              
                                </div>
                                <p class="text-body mb-3">
								- Comment améliorer le service client?<br>
- Parcours et Expérience Client, les best practices pour se différencier<br>
- Gestion des équipes et optimisation du service client<br>
- S'approprier les fondamentaux de l'accueil<br>
- Cartographie des Parcours Client<br>
- L’hôte-hôtesse d’accueil

								</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-2.jpg" alt="">
                              <!--  <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Marketing & commercial</small>
                            --></div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0" align="center">MARKETING & POLITIQUE COMMERCIALE</h5>
                                    
                                </div>
                              
                                <p class="text-body mb-3">
								- Fondamentaux et métiers du Marketing <br>
- Marketing stratégique<br>
- Pilotage et marketing opérationnel<br>
- Maîtriser les Fondamentaux de la Vente Stratégique de Valeur<br><br><br>
</p>
                             
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-3.jpg" alt="">
                                <!--<small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Achats & logistiques
                             --></small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0" align="center">ACHATS & LOGISTIQUES</h5>
                                  
                                </div>
                                <p class="text-body mb-3">
- Gestion des Achats<br>
- S'approprier les métiers des achats<br>
- Acquérir les outils et les méthodes des achats<br>
- Négocier les achats<br>
- Pratiquer les achats et les marchés publics<br>
- Management des opérations et de la chaine logistique<br>

								</p>
                             
                            </div>
                        </div>
                    </div>
                </div><br>
         <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-31.jpg" alt="">
                             <!--   <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Banque et finance</small>
                            --></div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3"> 
                                 <h5 class="mb-0" align="center">BANQUE & FINANCE</h5>
                              
                                </div>
                                <p class="text-body mb-3">
				- Gestion des risques dans l'univers bancaire<br><br>
- Audit, conformité, contrôle interne dans les établissements financiers<br>
- Analyse financière de la clientèle bancaire<br>


								</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-32.jpg" alt="">
                              <!--  <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Management de projet & agilite</small>
                            --></div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0" align="center">MANAGEMENT DE PROJET & AGILITE</h5>
                                    
                                </div>
                              
                                <p class="text-body mb-3">
- Les fondamentaux du management de projet<br>
- Gestion de projet : méthodes et planification<br>
- Animer un projet<br><br>
</p>
                             
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-33.jpg" alt="">
                               <!-- <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Formations

</small>-->
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0" align="center">FORMATIONS</h5>    
                                  
                                </div>
                                <p class="text-body mb-3">
							- Formation de formateurs<br>
- Développement des compétences et formation<br><br><br><br>

								</p>
                             
                            </div>
                        </div>
                    </div>
                </div>
      
     </div>
        </div>
        <!-- Room End -->


        <!-- Video Start -->
        <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3">CONSULTING SERVICES INNOVATIONS</h6>
                        <h1 class="text-white mb-4">Une pensée</h1>
                        <p class="text-white mb-4">L'excellence est 
un art que l'on n'atteint que par
l'exercice constant. 
Nous sommes ce que nous
 faisons de manière répété. L'excellence n'est donc pas un acte mais une habitude
<br><br>
<i>Aristote</i>

</p>
                    
					</div>
                </div>
                <div class="col-md-6">
                    <div class="video">
                       <!-- <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button> -->
                    </div>
                </div>
            </div>
        </div>
 <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">CONSULTING SERVICES INNOVATIONS</h6>
                    <h1 class="mb-5">Gallérie <span class="text-primary text-uppercase">images</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/image6.jpg" alt="">
                           </div>
                  
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/image3.jpg" alt="">
                           </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/Séminaire CSI 2021 021.jpg" alt="">
           
                            </div>
                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room End -->


        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Start -->


       
       
        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">CONSULTING SERVICES INNOVATIONSCSI </h6>
                    <h1 class="mb-5">NOS<span class="text-primary text-uppercase"> PARTENAIRES</span></h1>
                </div>
                <div class="row g-4">
				
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <a href="https://global-it.cg"><img class="img-fluid" src="img/global-it.jpg" alt=""></a>
                               
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

<br><br><br><br><br>
        <!-- Footer Start -->
       <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html"><h6 class="text-white text-uppercase mb-3">Consulting Services Innovations</h6></a>
                            <p class="text-white mb-0">
						Consulting Services Innovations en sigle CSI est un cabinet d'expertise et d'expérience qui accompagne les entreprises.
Au centre de la création de ce cabinet se trouve Monsieur <a href="fumu_delho.html"><font color="#43497A"> <b>Fumu DHELLO</b></font></a>  qui est le Fondateur et Directeur.<a href="about.html"><font color="#43497A"><b> plus d'infos</b></font></a>
</div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Brazzaville, République du Congo</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>00242 06 669 1745</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>contact@csi.cg</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <!-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a> -->
                           
							<a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Plan du site</h6>
                                <a class="btn btn-link" href="index.html">Accueil</a>
                                <a class="btn btn-link" href="about.html">Qui sommes nous</a>
                                <a class="btn btn-link" href="service.html">Services</a>
                                <a class="btn btn-link" href="room.html">Catalogue de formations</a>
                                <a class="btn btn-link" href="gallerie.html">Gallérie</a>
                            <a class="btn btn-link" href="team.html">Reférences</a>
                            <a class="btn btn-link" href="contact.html">contact</a>
                            
							</div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Liens utiles</h6>
                                <a class="btn btn-link" href="https://congo.groupebgfibank.com/">BGFI BANK</a>
                                <a class="btn btn-link" href="https://banquepostale.cg/">Banque Postale</a>
                                <a class="btn btn-link" href="https://www.ubacongobrazzaville.com/about-us/">UBA Congo</a>
								 <a class="btn btn-link" href="https://www.congobrazzaville.campusfrance.org/">Campus France Congo</a>
								 <a class="btn btn-link" href="https://institutfrancais-congo.com/">Institut Français du Congo</a>
								
								<a class="btn btn-link" href="https://global-it.cg">GLOBAL IT Solutions</a>
                                <a class="btn btn-link" href="https://www.wtwco.com/fr-cd/">Willis Towers Watson</a>
                                <a class="btn btn-link" href="https://www.escic-cg.com/">ESCIC</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#"> 2024 CSI</a>, Tous Droits Réservés  - 
							
							Réalisé par <a class="border-bottom" href="https:globlal-it.cg">GLOBAL IT Solutions</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Accueil</a>
                                <a href="">webmail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>