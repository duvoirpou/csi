<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
   <title>www.csi.cg | Consulting Services Innovations</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

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


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


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


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Consulting Services Innovations</h6>
                    <h1 class="mb-5">DECOUVREZ NOS <span class="text-primary text-uppercase">Services</span></h1>
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
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                  <img src="img/seminaire-en-ligne.png" width="100%" />
                                </div>
                            </div>
                            <h5 class="mb-3">SÉMINAIRES</h5>
                           <p class="text-body mb-0" align="justify">
						   Selon vos objectifs, CSI propose des animations team building sur-mesure pour optimiser vos séminaires, conventions, soirées d’entreprise et mettre à profit la performance du collectif.
						   </p>
                       </a>
                    </div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                     <img src="img/seminaire.png" width="100%" />
                                </div>
                            </div>
                            <h5 class="mb-3">COACHING</h5>
                           <p class="text-body mb-0" align="justify">
						   Nous intervenons dans le cadre de coaching individuel et de coaching collectif pour accompagner une personne ou un groupe vers davantage de compétences, d’engagement et d’épanouissement

						   </p>
                       </a>
                    </div>
					
	
                </div>
           </div>
        </div>
        <!-- Service End -->

<br><br><br><br><br><br>
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.php"><h6 class="text-white text-uppercase mb-3">Consulting Services Innovations</h6></a>
                            <p class="text-white mb-0">
						Consulting Services Innovations en sigle CSI est un cabinet d'expertise et d'expérience qui accompagne les entreprises.
Au centre de la création de ce cabinet se trouve Monsieur <a href="fumu_delho.php"><font color="#43497A"> <b>Fumu DHELLO</b></font></a>  qui est le Fondateur et Directeur.<a href="about.php"><font color="#43497A"><b> plus d'infos</b></font></a>
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
                                <a class="btn btn-link" href="index.php">Accueil</a>
                                <a class="btn btn-link" href="about.php">Qui sommes nous</a>
                                <a class="btn btn-link" href="service.php">Services</a>
                                <a class="btn btn-link" href="room.php">Catalogue de formations</a>
                                <a class="btn btn-link" href="gallerie.php">Gallérie</a>
                            <a class="btn btn-link" href="team.php">Reférences</a>
                            <a class="btn btn-link" href="contact.php">contact</a>
                            
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

</php>