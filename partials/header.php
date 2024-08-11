<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!-- Header Start -->
<div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase"><img src="img/logo.png"/></h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">contact@csi.cg</p>  
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+242 06 669 1745</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <!--<a class="me-3" href=""><i class="fab fa-facebook-f"></i></a> -->
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase"><img src="img/logo.png"/></h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.php" class="nav-item nav-link <?= ($activePage == 'index') ? 'active':''; ?>">Accueil</a>
                                <a href="about.php" class="nav-item nav-link <?= ($activePage == 'about') ? 'active':''; ?>">Qui sonnes-nous</a>
                                <a href="service.php" class="nav-item nav-link <?= ($activePage == 'service') ? 'active':''; ?>">Services</a>
                                <a href="formations.php" class="nav-item nav-link <?= ($activePage == 'formations') ? 'active':''; ?>">Catalogue de formations</a>
								 <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle <?= ($activePage == 'gallerie') ? 'active':''; ?> <?= ($activePage == 'videotheque') ? 'active':''; ?>" data-bs-toggle="dropdown">Galérie</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="gallerie.php" class="dropdown-item">Photothèque</a>
                                        <a href="videotheque.php" class="dropdown-item">Vidéothèque</a>
                                    </div>
                                </div>
                                 <a href="references.php" class="nav-item nav-link <?= ($activePage == 'references') ? 'active':''; ?>">Références</a>
                                <a href="contact.php" class="nav-item nav-link <?= ($activePage == 'contact') ? 'active':''; ?>">Contact</a>
								</div>
                          </div>
                    </nav>

                </div>
            </div>
        </div>
     <!-- Header End -->