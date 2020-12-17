<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/dist/custom.css">
    <link rel="stylesheet" href="assets/css/dist/style.css">
    <link rel="stylesheet" href="assets/css/dist/time-line2.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/0676c44351.js" crossorigin="anonymous"></script>
    <title>Portfolio</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#about">A propos de moi</a>
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
    <?php
    require_once("header.html");
    ?>
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center my-5">
                <div class="col-md-5 mb-4">
                    <h1 class="mb-4">A propos de moi</h1>
                    <p data-aos="fade-right">J'ai commencé par bac pro électrotechnique, n'ayant pas trouvé mon bonheur dans ce domaine j'ai souhaité me réorienter vers un BTS systèmes numériques option informatique et réseaux, passionné par les nouvelles technologies, j'ai souhaité faire une formation de web designer.</p>
                    <a href="assets/misc/CV_Nicolas_Peter.pdf" target="_blank">
                        <button type="button" class="btn-neon">
                            <span></span>
                            <span></span>
                            Télécharger mon CV</button></a>
                </div>
                <div class="col-md-6 offset-md-1 pl-4">
                    <img data-aos="fade-down" src="assets/img/photo.jpg" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    <section class="projets" id="projets">
        <div class="container">
            <h1>Mes projets</h1>
            <div class="row vh-75">
                <p class="col-md-3 col-12"><img src="assets/img/Mark.png" class="rounded mx-auto d-block" alt="Mark"></p>
                <p class="col-md-3 col-12"><img src="assets/img/Olive.png" class="mx-auto" width="300px" alt=""></p>
            </div>
        </div>
    </section>
    <section class="skills" id="skills">
        <div class="container">
            <div class="row my-5 align-items-center">
                <div class="col-12 col-md-12">
                    <h1>Mes compétences</h1>
                    <div class="skills">
                        <h2>HTML</h2>
                        <div class="progress mb-4" data-aos="fade-right" >
                            <div class="progress-bar" role="progressbar" style="width: 70%;"  aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                        <h2>CSS</h2>
                        <div class="progress mb-4" data-aos="fade-right" data-aos-delay="200">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                        <h2>JavaScript</h2>
                        <div class="progress mb-4" data-aos="fade-right" data-aos-delay="400">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                        <h2>Bootstrap</h2>
                        <div class="progress mb-4" data-aos="fade-right" data-aos-delay="600">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                        <h2>Photoshop</h2>
                        <div class="progress mb-4" data-aos="fade-right" data-aos-delay="800">
                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">40%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="parcours" id="parcours">
        <div class="container py-5">
            <h1 class="mb-5">Mon parcours</h1>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- Timeline -->
                    <ul class="timeline">
                        <li class="timeline-item bg-dark rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <div data-aos="fade-left">
                            <h2 class="h2 mb-0">Formation développeur web</h2><span class="small text-white"><i class="fa fa-clock-o mr-1"></i>2020</span>
                            <p class="text-small text-white mt-2 font-weight-light">Titre professionel en cours d'acquisition chez Access Code School</p>
                            </div>
                        </li>
                        <li class="timeline-item bg-dark rounded ml-3 p-4 shadow">
                            <div data-aos="fade-left">
                            <div class="timeline-arrow"></div>
                            <h2 class="h2 mb-0">Diplôme Passe Numérique</h2><span class="small text-white"><i class="fa fa-clock-o mr-1"></i> 2018/2019</span>
                            <p class="text-small text-white mt-2 font-weight-light">Remise à niveaux des compétences dans le domaine de l'informatique.</p>
                        </div>
                        </li>
                        <li class="timeline-item bg-dark rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <div data-aos="fade-left">
                            <h2 class="h2 mb-0">Téléconseiller web</h2><span class="small text-white"><i class="fa fa-clock-o mr-1"></i>2018</span>
                            <p class="text-small text-white mt-2 font-weight-light">Traitement des appels entrants, gestions des noms de domaine et des herbergements, résolution d'incidents et vente additionnelle.</p>
                        </div>
                        </li>
                        <li class="timeline-item bg-dark rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <div data-aos="fade-left">
                            <h2 class="h2 mb-0">BTS systèmes numériques option informatique et réseaux</h2><span class="small text-white"><i class="fa fa-clock-o mr-1"></i>2015/2017</span>
                            <p class="text-small text-white mt-2 font-weight-light">Diplôme obtenu au lycée Louis Armand à Mulhouse</p>
                        </div>
                        </li>
                        <li class="timeline-item bg-dark rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <div data-aos="fade-left">
                            <h2 class="h2 mb-0">Baccalauréat professionnel Electrotechnique</h2><span class="small text-white"><i class="fa fa-clock-o mr-1"></i>2012/2015</span>
                            <p class="text-small text-white mt-2 font-weight-light">Diplôme obtenu au lycée Jean-Jacques Henner à Altkirch</p>
                        </div>
                        </li>
                    </ul><!-- End -->
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="me-contacter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" id="mail-alert">
                    <h1>Contactez moi</h1>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-lg-7">
                    <form class="needs-validation" id="formulaire" novalidate>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom02">Nom</label>
                                <input name="nom" type="text" class="form-control" id="validationCustom02" value="" required>
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
                    <script>
                        function message() {
                            let envoi = document.createElement("div");
                            envoi.innerText = "Votre mail a bien été envoyé";
                            envoi.classList.add("alert", "alert-success");
                            document.getElementById('mail-alert').appendChild(envoi);
                            setTimeout(() => {
                                document.getElementById('mail-alert').removeChild(envoi)
                            }, 5000);
                        }
                        (function() {
                            'use strict';
                            window.addEventListener('load', function() {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                const forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                const validation = Array.prototype.filter.call(forms, function(form) {
                                    form.addEventListener('submit', function(event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        } else {
                                            event.preventDefault();
                                            event.stopPropagation();
                                            const formData = new FormData(form);
                                            fetch('assets/php/contact.php', {
                                                    method: "post",
                                                    body: formData
                                                })
                                                .then(response => {
                                                    form.reset();
                                                    message();
                                                });
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>
                </div>
                <div class="col-lg-4 ml-auto">
                    <h3>Mes coordonnées</h3>
                    <ul>
                        <li class="mb-3"><span class="mt-1 mr-2"><i class="far fa-envelope"></i></span><a href="mailto:nicolas.peter67@yahoo.com">nicolas.peter67@yahoo.com</a></li>
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
                    <ul>
                        <li><span class="mr-2"><a href="https://www.linkedin.com/in/nicolas-peter68/" target="_blank"><i class="fab fa-linkedin-in"></i></span></a></li>
                        <li><span class="mr-2"><a href="https://github.com/Nicolas-peter68" target="_blank"><i class="fab fa-github"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/app.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
<!--https://preview.colorlib.com/theme/orbit/#contact-section-->
<!-- https://codepen.io/internette/pen/KqyxjE -->

</html>