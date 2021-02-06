<?php
include 'php/_inc.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Portfolio</title>
</head>

<body>
    <header id="header">
        <div id="intro">
            <div class="bg-color">
                <div class="position-relative overflow-hidden p-3 p-md-5 text-white text-center bg-transparent">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="aos-item titre-header display-4 fw-normal text-white reveal-1" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-once="true">
                            Romuald Mbaye</h1>
                        <p class="aos-item lead fw-normal reveal-2" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                            Développeur Web</p>
                        <a class="aos-item btn btn-outline-secondary reveal-3" data-aos="zoom-in" data-aos-duration="2000" data-aos-once="true" href="#sec1"><i class="fas fa-angle-double-down"></i></a>
                    </div>
                    <div class="product-device shadow-sm d-none d-md-block"></div>
                    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" aria-label="Tenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#header">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sec1">CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sec3">Réalisations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sec4">Me contacter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="sec1" class="pt-5 sec1">
        <div class="container">
            <div class="row">
                <div class="mt-5 p-4 col-lg-6 bg-white rounded">
                    <i class="mb-3 far fa-file-alt fa-2x text-warning" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-once="true"></i>
                    <h3>À propos de moi:</h3>
                    <h5 class="mt-3">35 ans, permis B, vivant dans la région parisienne.</h5>
                    <p class="text-dark">Suite à une reconversion professionnelle, j'ai voulu me diriger vers un domaine
                        qui m'intéresse
                        depuis longtemps:<br>
                        - Le développement web. <br>
                        J'ai donc suivi une formation et obtenu un titre RNCP "Développeur Web" de
                        niveau 5. <br>
                        En tant que débutant j'ai cependant développé des projets
                        personnels pendant ma formation et mon temps libre. <br>
                        N'hésitez pas à consulter mon <a href="#sec3">portfolio</a> et
                        mon profil <a href="https://github.com/romuald85" target="_blank">GitHub</a>.</p>
                </div><!-- /.col-lg-4 -->
                <div class="mt-5 col-lg-6">
                    <i class="mb-3 pt-3 fas fa-award fa-2x text-warning" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-once="true"></i>
                    <h3 class="text-dark">Compétences techniques</h3>
                    <div class="progress-outer">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-info aos-item" style="width:90%;" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true"></div>
                            <div class="progress-value"><span>90</span>%</div>
                        </div>
                    </div>
                    <p class="pb-2 text-dark">HTML5 / CSS/ Bootstrap</p>
                    <div class="progress-outer">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-info bg-warning" style="width:80%;" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
                            </div>
                            <div class="progress-value"><span>80</span>%</div>
                        </div>
                    </div>
                    <p class="pb-2 text-dark">PHP 7 / Symfony 5</p>
                    <div class="progress-outer">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-info" style="width:70%;" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true"></div>
                            <div class="progress-value"><span>70</span>%</div>
                        </div>
                    </div>
                    <p class="pb-2 text-dark">Javascript / JQuery</p>
                    <div class="progress-outer">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-info" style="width:60%;" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true"></div>
                            <div class="progress-value"><span>60</span>%</div>
                        </div>
                    </div>
                    <p class="pb-2 text-dark">Wordpress</p>
                    <div class="progress-outer">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-info" style="width:65%;" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true"></div>
                            <div class="progress-value"><span>65</span>%</div>
                        </div>
                    </div>
                    <p class="pb-2 text-dark">Apache / MySQL</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="mt-5 col-lg-6">
                    <i class="mb-3 pt-3 far fa-keyboard fa-2x text-warning" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-once="true"></i>
                    <h3>Mes capacités</h3>
                    <ul class="mt-4 mb-3 list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between lh-sm bg-light">
                            <div>
                                <h6 class="my-0 fw-bold text-dark">Développement Front-End</h6>
                                <small class="text-muted">Sites web modernes</small>
                            </div>
                            <i class="laptop mb-3 fas fa-laptop-code"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm bg-light">
                            <div>
                                <h6 class="my-0 fw-bold text-dark">Développement Back-End</h6>
                                <small class="text-muted">Interfaces CRUD (Create, Read, Update, Delete)</small>
                            </div>
                            <i class="data-base fas fa-database"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm bg-light">
                            <div>
                                <h6 class="my-0 fw-bold text-dark">Responsive design</h6>
                                <small class="text-muted">Sites web mobiles</small>
                            </div>
                            <i class="mobile fas fa-mobile-alt"></i>
                        </li>
                    </ul>
                </div>
                <div class="mt-5 mb-5 col-lg-6 bg-white p-4 rounded">
                    <i class="mb-3 fas fa-code fa-2x text-warning" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-once="true"></i>
                    <h3>Environnement de travail</h3>
                    <ul class="mt-4 list-group list-group-flush text-dark">
                        <li class="list-group-item"><img class="mr-3 windows" src="images/windows.png" alt="logo-windows">
                            Windows</li>
                        <li class="list-group-item"><img class="mr-3 chrome" src="images/chrome.png" alt="logo-chrome">Chrome</li>
                        <li class="list-group-item"><img class="mr-3 git" src="images/git.png" alt="logo-git"> Git</li>
                        <li class="list-group-item"><img class="mr-3 github" src="images/github.png" alt="logo-github">
                            Github
                        </li>
                        <li class="list-group-item"><img class="mr-3 visual" src="images/visual.png" alt="logo-visual-studio-code">Visual studio code</li>
                        <li class="list-group-item"><img class="mr-3 wamp" src="images/wamp.png" alt="logo-wamp">Wamp
                        </li>
                        <li class="list-group-item"><img class="mr-3 filezilla" src="images/filezilla.png" alt="logo-filezilla">Filezilla</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--<section id="sec2" class="sec2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 box-timeline">
                    <div class="ligne"></div>
                    <div class="rond r1" data-anim="1"></div>
                    <div class="rond r2" data-anim="2"></div>
                    <div class="rond r3" data-anim="3"></div>
                    <div class="rond r4" data-anim="4"></div>
                    <div class="aos-item box b1 reveal-4" data-aos="flip-left" data-aos-once="true" data-aos-duration="1000" data-anim="1">
                        <h2 class="mb-3 parcours-title">Formation OpenClassrooms: développeur web junior.</h2>
                        <p class="parcours-paragraphe">Préparation au Titre RNCP concepteur/développeur web de niveau 5.Apprentissage des bases des langages de programmation tel que: HTML5, CSS, Javascript, PHP etc.</p>
                    </div>
                    <div class="aos_item box b2 reveal-5" data-aos="flip-right" data-aos-once="true" data-aos-duration="1000" data-anim="2">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est voluptatem sint sapiente
                            corporis modi iste illo expedita laudantium. Repellendus laboriosam, voluptatibus velit sunt
                            quia mollitia!</p>
                    </div>
                    <div class="aos-item box b3 reveal-6" data-aos="flip-left" data-aos-once="true" data-aos-duration="1000" data-anim="3">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est voluptatem sint sapiente
                            corporis modi iste illo expedita laudantium. Repellendus laboriosam, voluptatibus velit sunt
                            quia mollitia!</p>
                    </div>
                    <div class="aos-item box b4 reveal-7" data-aos="flip-right" data-aos-once="true" data-aos-duration="1000" data-anim="4">
                        <h2>Lorem ipsum dolor sit amet.</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est voluptatem sint sapiente
                            corporis modi iste illo expedita laudantium. Repellendus laboriosam, voluptatibus velit sunt
                            quia mollitia!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <section id="sec3" class="sec3">
        <div class="container">
            <div class="row">
                <h2 class="mt-5 mb-5 text-center">
                    Réalisations en ligne
                </h2>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <a href="http://my-coaching-agency.romuald.biramesene.fr/" target="_blank">
                            <img src="images/projet-5.png" class="card-img-top image-portfolio" alt="projet-musculation">
                        </a>
                        <div class="card-body">
                            <div class="content">
                                <h5 class="card-title">My program</h5>
                                <p class="card-text mb-2">Site e-commerce de vente de programmes de sport en ligne (projet dans le cadre de ma formation)</p>
                                <a href="http://my-coaching-agency.romuald.biramesene.fr/" target="_blank" class="btn btn-primary">Visiter le site</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <a href="http://projet4.romuald-mbaye.com/" target="_blank">
                            <img src="images/projet-4.png" class="card-img-top image-portfolio" alt="projet-blog">
                        </a>
                        <div class="card-body">
                            <div class="content">
                                <h5 class="card-title">Billet pour l'alaska</h5>
                                <p class="card-text mb-2">Blog pour un écrivain (projet dans le cadre de ma formation)</p>
                                <a href="http://projet4.romuald-mbaye.com/" target="_blank" class="btn btn-primary">Visiter le site</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <a href="http://romuald-mbaye.com/" target="_blank">
                            <img src="images/projet-3.png" class="card-img-top image-portfolio" alt="projet-location-de-velo">
                        </a>
                        <div class="card-body">
                            <div class="content">
                                <h5 class="card-title">Application vélo location</h5>
                                <p class="card-text mb-2">Carte interactive de location de vélos (projet dans le cadre de ma formation)</p>
                                <a href="http://romuald-mbaye.com/" target="_blank" class="btn btn-primary">Visiter le site</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <a href="http://projet1.romuald-mbaye.com/" target="_blank">
                            <img src="images/projet-1.png" class="card-img-top image-portfolio" alt="projet-web-agency">
                        </a>
                        <div class="card-body">
                            <div class="content">
                                <h5 class="card-title">Web agency</h5>
                                <p class="card-text mb-2">Maquette de site en HTML et CSS (projet dans le cadre de ma formation)</p>
                                <a href="http://projet1.romuald-mbaye.com/" target="_blank" class="btn btn-primary">Visiter le site</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-2 pb-5 sec4" id="sec4">
        <div class="container contact-form">
            <?php if (array_key_exists('errors', $_SESSION)) : ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']) ?>
                </div>
            <?php endif; ?>
            <?php if (array_key_exists('success', $_SESSION)) : ?>
                <div class="alert alert-success">
                    Votre mail a bien été envoyé
                </div>
            <?php endif; ?>
            <h2 class="text-center text-white">Contact</h2>
            <hr class="hr-contact">
            <div class="row">
                <div class="col-md-6">
                    <p>Email: <a href="mailto:romuald.mbaye@gmail.com">romuald.mbaye@gmail.com</a></p>
                    <p>Phone: <a href="tel:+33 6 95 50 21 63">+33 6 95 50 21 63</a></p>
                </div>
                <div class="col-md-6">
                    <form action="post_contact.php" method="POST">
                        <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
                        <?= $form->text('name', 'Votre nom') ?>
                        <?= $form->email('email', 'Votre email') ?>
                        <?= $form->textarea('message', 'Message') ?>
                        <?= $form->submit('submit', 'Envoyer') ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="pt-5 text-center inner">
            <p><small>© Romuald Mbaye, Tous droits réservés.</small></p>
            <p><a href="https://fr.linkedin.com/in/romuald-mbaye-bb4678204/fr-fr?trk=people-guest_people_search-card" target="_blank"><i class="fab fa-linkedin-in mr-2 fa-2x linkedin"></i></a><a href="https://github.com/romuald85" target="_blank"><i class="fab fa-github fa-2x github"></i></a></p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    <script src="js/progress-bar.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
