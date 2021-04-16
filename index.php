<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/dist/custom.css">
    <link rel="stylesheet" href="assets/css/dist/style.css">
    <link rel="stylesheet" href="assets/css/dist/time-line2.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/0676c44351.js" crossorigin="anonymous"></script>
    <title>Portfolio</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#about">À propos de moi</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#projets">Mes projets</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#skills">Mes compétences</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#parcours">Mon parcours</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#me-contacter">Me contacter</a>
                </li>
            </ul>
        </div>
    </nav>
    <header style="background-image: radial-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 1)),
url('assets/img/brick-wall1.png')">
        <div class="intro">
            <h1>Nicolas Peter</h1>
            <h2>Web designer</h2>
            <ul>
                <li><span class="mr-2"><a href="https://www.linkedin.com/in/nicolas-peter68/" target="_blank"><i class="fab fa-linkedin-in"></i></span></a></li>
                <li><span class="mr-2"><a href="https://github.com/Nicolas-peter68" target="_blank"><i class="fab fa-github"></i></span></a></li>
            </ul>
        </div>
    </header>
    <section class="about" id="about">
        <div class="container">
            <h1>À propos de moi</h1>
            <div class="row align-items-center mb-5">
                <div class="col-md-5 mb-4">
                    <p class="mb-4">J'ai commencé par un bac pro électrotechnique, n'ayant pas trouvé mon bonheur dans ce domaine j'ai souhaité me réorienter vers un BTS systèmes numériques option informatique et réseaux, passionné par les nouvelles technologies et le design, j'ai souhaité faire une formation de web designer.</p>
                    <a href="assets/misc/CV_design.pdf" target="_blank">
                        <button type="button" class="btn-neon">
                            <span></span>
                            <span></span>
                            Télécharger mon CV</button></a>
                </div>
                <!-- <div class="col-md-6 offset-md-1 pl-4">
                    <img src="assets/img/photo.jpg" alt="" srcset="">
                </div> -->
            </div>
        </div>
    </section>
    <section class="projets" id="projets">
        <div class="container">
            <h1 class="my-4">Mes projets</h1>
            <div class="row mb-4 h-100">
                <div class="col-md-4 col-12 d-flex justify-content-center bulle mb-5"><a target="_blank" href="https://nicolasp.promo-45.codeur.online/ProjetMark/"><img class="img-fluid" src="assets/img/Mark.png" alt="Mark"></a><span class="affiche mb-4">Intégration de maquette avec Bootstrap</span></div>
                <div class="col-md-4 col-12 d-flex justify-content-center bulle mb-5"><a target="_blank" href="https://nicolasp.promo-45.codeur.online/ProjetTablesMultiplication/"><img class="img-fluid" src="assets/img/multiplication.png" alt=""></a><span class="affiche">Tables de multiplication en PHP</span></div>
                <div class="col-md-4 col-12 d-flex justify-content-center bulle mb-5"><a target="_blank" href="https://nicolasp.promo-45.codeur.online/ProjetItalianRestaurant/"><img class="img-fluid" src="assets/img/italian.png" alt=""></a><span class="affiche">Intégration de maquette sans Bootstrap</span></div>
                <div class="col-md-4 col-12 d-flex justify-content-center bulle mb-4"><a href="https://nicolasp.promo-45.codeur.online/ProjetBDD/" target="_blank" rel="noopener noreferrer"> <img class="img-fluid" src="assets/img/crud.png" alt=""></a><span class="affiche">Mise en place d'un système de manipulation de base de données</span></div>
                <div class="col-md-4 col-12 d-flex justify-content-center bulle mb-4"><a href="https://nicolasp.promo-45.codeur.online/wordpress-first/" target="_blank"><img class="img-fluid" src="assets/img/wp.png" alt=""></a><span class="affiche">Création d'un thème Wordpress</span></div>
                <div class="col-md-4 col-12 d-flex justify-content-center bulle mb-4"><a href="https://nicolasp.promo-45.codeur.online/cine-code" target="_blank"><img class="img-fluid" src="assets/img/cine-code.jpg" alt=""></a><span class="affiche">Projet de groupe MVC</span></div>
                <div class="col-md-4 col-12 d-flex justify-content-center bulle mb-4"><a href="https://www.nicolas-peter.fr/projets/noel/" target="_blank"><img class="img-fluid" src="assets/img/noel.png" alt=""></a><span class="affiche">Carte de vœux de noël</span></div>
                <div class="col-md-4 col-12 d-flex justify-content-center bulle mb-4"><a href="https://nicolas-peter.fr/projets/wordpress-ecolo" target="_blank"><img class="img-fluid" src="assets/img/ecolo.jpg" alt=""></a><span class="affiche">Projet de sensibilisation des utilisateurs aux bonnes pratiques sur internet avec Wordpress</span></div>
                <div class="col-md-4 col-12 d-flex justify-content-center bulle mb-4"><a href="http://maze-bank.nicolas-peter.fr/" target="_blank"><img class="img-fluid" src="assets/img/Maze_Bank.png" alt=""></a><span class="affiche">Création d'une interface bacaire pour un serveur GTA RP</span></div>
                    <div class="col-md-4 col-12 d-flex justify-content-center bulle mb-4"><a href="https://topcryptos.promo-45.codeur.online/" target="_blank"><img class="img-fluid" src="assets/img/crypto.png" alt=""></a><span class="affiche">Projet de groupe Synfony/VueJS et manipulation API</span></div>
            </div>
        </div>
    </section>
    <section class="skills my-5" id="skills">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-12 col-md-12">
                    <h1 class="mb-3">Mes compétences</h1>
                    <div class="skills">
                        <div class="row">
                            <img src="assets/img/logos/HTML.png" class="logo mx-auto mb-3" alt="HTML">
                            <img src="assets/img/logos/CSS.png" class="logo mx-auto mb-3" alt="CSS">
                            <img src="assets/img/logos/JS.png" class="logo mx-auto mb-3" alt="JS">
                            <img src="assets/img/logos/Bootstrap.png" class="logo mx-auto mb-3" alt="Bootstrap">
                            <img src="assets/img/logos/VueJS.svg" class="logo mx-auto mb-3" alt="VueJS">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="parcours" id="parcours">
        <div class="container pb-5">
            <h1 class="mb-5">Mon parcours</h1>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- Timeline -->
                    <ul class="timeline">
                        <li class="timeline-item bg-dark rounded ml-3 p-4">
                            <div class="timeline-arrow"></div>
                            <div>
                                <h2 class="h2 mb-0">Formation développeur web</h2><span class="small text-white"><i class="fa fa-clock-o mr-1"></i>2020</span>
                                <p class="text-small text-white mt-2 font-weight-light">Titre professionel en cours d'acquisition chez Access Code School</p>
                            </div>
                        </li>
                        <li class="timeline-item bg-dark rounded ml-3 p-4">
                            <div>
                                <div class="timeline-arrow"></div>
                                <h2 class="h2 mb-0">Diplôme Passe Numérique</h2><span class="small text-white"><i class="fa fa-clock-o mr-1"></i> 2018/2019</span>
                                <p class="text-small text-white mt-2 font-weight-light">Remise à niveaux des compétences dans le domaine de l'informatique.</p>
                            </div>
                        </li>
                        <li class="timeline-item bg-dark rounded ml-3 p-4">
                            <div class="timeline-arrow"></div>
                            <div>
                                <h2 class="h2 mb-0">Téléconseiller web</h2><span class="small text-white"><i class="fa fa-clock-o mr-1"></i>2018</span>
                                <p class="text-small text-white mt-2 font-weight-light">Traitement des appels entrants, gestions des noms de domaine et des herbergements, résolution d'incidents et vente additionnelle.</p>
                            </div>
                        </li>
                        <li class="timeline-item bg-dark rounded ml-3 p-4">
                            <div class="timeline-arrow"></div>
                            <div>
                                <h2 class="h2 mb-0">BTS systèmes numériques option informatique et réseaux</h2><span class="small text-white"><i class="fa fa-clock-o mr-1"></i>2015/2017</span>
                                <p class="text-small text-white mt-2 font-weight-light">Diplôme obtenu au lycée Louis Armand à Mulhouse</p>
                            </div>
                        </li>
                        <li class="timeline-item bg-dark rounded ml-3 p-4">
                            <div class="timeline-arrow"></div>
                            <div>
                                <h2 class="h2 mb-0">Baccalauréat professionnel Electrotechnique</h2><span class="small text-white"><i class="fa fa-clock-o mr-1"></i>2012/2015</span>
                                <p class="text-small text-white mt-2 font-weight-light">Diplôme obtenu au lycée Jean-Jacques Henner à Altkirch</p>
                            </div>
                        </li>
                    </ul><!-- End -->
                </div>
            </div>
        </div>
    </section>
    <section class="contact mb-3" id="me-contacter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" id="mail-alert">
                    <h1>Contactez-moi</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <form class="needs-validation" id="formulaire" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Nom</label>
                                <input name="nom" type="text" class="form-control" id="validationCustom02" value="" required>
                                <div class="valid-feedback">
                                    C'est bien
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Prénom</label>
                                <input name="prenom" type="text" class="form-control" id="validationCustom02" value="" required>
                                <div class="valid-feedback">
                                    C'est bien
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom02">Sujet</label>
                                <input name="objet" type="text" class="form-control" id="validationCustom02" value="" required>
                                <div class="valid-feedback">
                                    C'est bien
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom03">Email</label>
                                <input name="email" type="email" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Merci de saisir une adresse mail valide.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="Message">Message</label>
                                <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <button class="btn-form" type="submit">
                            <span></span>
                            <span></span>
                            Envoyer
                        </button>
                    </form>
                </div>
                <div class="col-lg-4 ml-auto">
                    <h3>Mes coordonnées</h3>
                    <ul>
                        <li class="mb-3"><span class="mt-1 mr-2"><i class="far fa-envelope"></i></span><a href="mailto:contact@nicolas-peter.fr">contact@nicolas-peter.fr</a></li>
                        <li class="mb-3"><span class="mt-1 mr-2"><i class="fas fa-phone"></i></span><a href="tel:+33668999385">+33 6 68 99 93 85</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">

                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery-3.6.0.slim.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/form.js"></script>
</body>
<!--https://preview.colorlib.com/theme/orbit/#contact-section-->
<!-- https://codepen.io/internette/pen/KqyxjE -->

</html>