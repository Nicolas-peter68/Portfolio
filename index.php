<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/dist/custom.css">
    <link rel="stylesheet" href="assets/css/dist/style.css">
    <title>Document</title>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus vero reiciendis praesentium cum ut, veritatis alias laboriosam ullam hic, commodi eaque at nam nulla earum officiis doloribus cupiditate dolorum sit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, omnis veritatis ratione earum maiores inventore quos, iste, vero perspiciatis perferendis commodi accusantium doloremque assumenda deleniti ex? Blanditiis rerum repellendus error. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad fugit provident perferendis tempore assumenda qui illo hic illum perspiciatis eaque, cumque non accusantium explicabo doloremque, sit reiciendis fuga nostrum? Voluptatem!</p>
                    <button type="button" class="btn btn-primary">Télécharger mon CV</button>
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
            <div class="row">
                <p class="col-md-3 col-12">Projet1</p>
                <p class="col-md-3 col-12">Projet1</p>
                <p class="col-md-3 col-12">Projet1</p>
                <p class="col-md-3 col-12">Projet1</p>
                <p class="col-md-3 col-12">Projet1</p>
                <p class="col-md-3 col-12">Projet1</p>
                <p class="col-md-3 col-12">Projet1</p>
                <p class="col-md-3 col-12">Projet1</p>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row vh-100">
                <div class="col-md-6">
                    <h1>Mes compétences</h1>
                    <div class="my-auto">
                        <div class="skills">
                            <h2>HTML</h2>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                        <div class="skills">
                            <h2>CSS</h2>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
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
                        <button class="btn btn-primary" type="submit">Envoyer</button>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repellendus quisquam, libero, ipsum praesentium, nihil fuga architecto cumque voluptate tempora commodi. Voluptas nobis quas excepturi beatae ea deleniti cum sint. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit voluptatibus eveniet fuga quo unde suscipit, voluptas enim quam, optio recusandae assumenda ad mollitia amet aliquam quae laborum magnam soluta. Illo.</p>
                </div>
            </div>

        </div>
    </section>
</body>
<!--https://preview.colorlib.com/theme/orbit/#contact-section-->

</html>