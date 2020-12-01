<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/dist/custom.css">
    <link rel="stylesheet" href="assets/css/dist/style.css">
    <link rel="stylesheet" href="assets/css/dist/time-line.css">
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
            <div class="row align-items-center">
                <div class="col-md-5">
                    <h2>A propos de moi</h2>
                    <p>Passionné par les nouvelles technologies, titulaire d'un BTS systèmes numériques option informatique et réseaux j'ai souhaité faire une formation de web designer.</p>
                    <button type="button" class="btn-neon">
                        <span></span>
                        <span></span>
                        Télécharger mon CV</button>
                </div>
                <div class="col-md-7">
                    <div class="photo">photo</div>
                </div>
            </div>
        </div>
    </section>
    <section class="projets" id="projets">
        <div class="container">
            <h2>Mes projets</h2>
            <div class="row vh-75">
                <p class="col-md-3 col-12"><img src="assets/img/Mark.png" class="rounded mx-auto d-block" alt="Mark"></p>
                <p class="col-md-3 col-12">Projet Italian food</p>
                <p class="col-md-3 col-12">Projet1</p>
                <p class="col-md-3 col-12">Projet1</p>
                <p class="col-md-3 col-12">Projet1</p>
                <p class="col-md-3 col-12">Projet1</p>
                <p class="col-md-3 col-12">Projet1</p>
                <p class="col-md-3 col-12">Projet1</p>
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
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                    </div>
                    <div class="skills">
                        <h2>CSS</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skills">
                        <h2>JavaScript</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skills">
                        <h2>Bootstrap</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skills">
                        <h2>Wordpress</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="parcours" id="parcours">
    <div class="container-fluid blue-bg">
    <div class="container">
        <h2 class="pb-3 pt-2">Mon parcours</h2>
        <!--first section-->
        <div class="row align-items-center how-it-works">
            <div class="col-2 text-center bottom">
                <div class="circle">2020</div>
            </div>
            <div class="col-6">
                <h5>Formation de Web designer</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
            </div>
        </div>
        <!--path between 1-2-->
        <div class="row timeline">
            <div class="col-2">
                <div class="corner top-right"></div>
            </div>
            <div class="col-8">
                <hr/>
            </div>
            <div class="col-2">
                <div class="corner left-bottom"></div>
            </div>
        </div>
        <!--second section-->
        <div class="row align-items-center justify-content-end how-it-works">
            <div class="col-6 text-right">
                <h5>Using Bootstrap</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
            </div>
            <div class="col-2 text-center full">
                <div class="circle">2019</div>
            </div>
        </div>
        <!--path between 2-3-->
        <div class="row timeline">
            <div class="col-2">
                <div class="corner right-bottom"></div>
            </div>
            <div class="col-8">
                <hr/>
            </div>
            <div class="col-2">
                <div class="corner top-left"></div>
            </div>
        </div>
        <!--third section-->
        <div class="row align-items-center how-it-works">
            <div class="col-2 full1 text-center">
                <div class="circle">2018</div>
            </div>
            <div class="col-6">
                <h5>Now with Pug and Sass</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
            </div>
        </div>
        <div class="row timeline">
            <div class="col-2">
                <div class="corner top-right"></div>
            </div>
            <div class="col-8">
                <hr/>
            </div>
            <div class="col-2">
                <div class="corner left-bottom"></div>
            </div>
        </div>  
        <div class="row align-items-center justify-content-end how-it-works">
            <div class="col-6 text-right">
                <h5>ligne 4</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
            </div>
            <div class="col-2 text-center full">
                <div class="circle">2017</div>
            </div>
        </div>
        <div class="row timeline">
            <div class="col-2">
                <div class="corner right-bottom"></div>
            </div>
            <div class="col-8">
                <hr/>
            </div>
            <div class="col-2">
                <div class="corner top-left"></div>
            </div>
        </div>
        <div class="row align-items-center how-it-works">
            <div class="col-2 text-center top">
                <div class="circle">2016</div>
            </div>
            <div class="col-6">
                <h5>Now with Pug and Sass</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
            </div>
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
            <div class="row">
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
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
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
                        <li><span class="mr-2"><i class="fab fa-linkedin-in"></i></span></li>
                        <li><span class="mr-2"><i class="fab fa-github"></i></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<!--https://preview.colorlib.com/theme/orbit/#contact-section-->

</html>