<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/dist/custom.css">
    <link rel="stylesheet" href="assets/css/dist/style.css">
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
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">A propos de moi</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Mes projets</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Mon parcours</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Me contacter</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    require_once("header.html");
    ?>
    <section class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <h2>A propos de moi</h2>
                    <p>Passionné par les nouvelles technologies, j'ai souhaité faire une formation de web designer en complément de BTS systèmes numériques...</p>
                    <button type="button" class="btn-neon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
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
    <section class="projets">
        <div class="container">
            <h2>Mes projets</h2>
            <div class="row vh-75">
                <p class="col-md-3 col-12">Projet Mark</p>
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
    <section class="skills">
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                    <div class="col-md-12">
                        <h1>Mes compétences</h1>
                        <div class="skills">
                            <h2>HTML</h2>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                        <div class="skills">
                            <h2>CSS</h2>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skills">
                            <h2>JavaScript</h2>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skills">
                            <h2>Bootstrap</h2>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skills">
                            <h2>Wordpress</h2>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Contactez moi</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Prénom</label>
                                <input type="text" class="form-control" id="validationCustom01" value="" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Nom</label>
                                <input type="text" class="form-control" id="validationCustom02" value="" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom03">Email</label>
                                <input type="email" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Merci de saisir une adresse mail valide.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="Message">Message</label>
                            <textarea class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn-form" type="submit">
                            <span></span>
                            <span></span>
                            Envoyer
                        </button>
                    </form>
                    <script>
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
                        <li>nicolas.peter67@yahoo.com</li>
                        <li>+33668999385</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>github</p>
            <p>LikedIn</p>
        </div>
    </footer>
</body>
<!--https://preview.colorlib.com/theme/orbit/#contact-section-->

</html>