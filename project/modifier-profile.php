<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from swlabs.co/edugate/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:32:48 GMT -->
<head>
    <title>Modfier | Cours</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
    <link type="text/css" rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.17/jquery.datetimepicker.css">
    <link rel="stylesheet"
          href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/color-1.css">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
</head>
<body><!-- HEADER-->
<?php include_once('includes/header.php'); ?>
<?php include_once('core/profile/profile.php'); ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Cours</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="">Profile</a></li>
                                <li class="active"><a href="ajout-cours.php">Modifier</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-padding contact-main">
                    <div class="container">
                        <div class="contact-main-wrapper">
                            <div class="group-title-index"><h4 class="top-title">Profile</h4>
                                <h2 class="center-title">Modifier le Profile</h2>
                                <div class="bottom-title"><i class="bottom-icon icon-a-01-01"></i></div>
                            </div>
                            <form class="bg-w-form contact-form" action="core/profile/profile.php" method="post"
                                  id="modifier-profile" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label form-label">NOM <span
                                                    class="highlight">*</span></label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Saisir votre nom"
                                                   class="form-control form-input" name="nom"
                                                   value="<?php echo $u['nom']; ?>" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label form-label">PRENOM <span class="highlight">*</span></label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Saisir votre prenom"
                                                   class="form-control form-input" name="prenom"
                                                   value="<?php echo $u['prenom']; ?>" required/>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="control-label form-label">EMAIL <span
                                                    class="highlight">*</span></label>
                                        <div class="form-group">
                                            <input type="email" placeholder="Saisir votre email"
                                                   class="form-control form-input" name="email"
                                                   value="<?php echo $u['email']; ?>" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label">ADRESSE <span
                                                        class="highlight">*</span></label>
                                            <div class="form-group">
                                                <input type="text" placeholder="Saisir votre adresse"
                                                       class="form-control form-input" name="adresse"
                                                       value="<?php echo $u['adresse']; ?>" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label">DATE DE NAISSANCE <span class="highlight">*</span></label>
                                            <div class="form-group">
                                                <input type="date" placeholder="" class="form-control form-input" name="naissance" value="<?php echo $u['naissance']; ?>" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label">SEXE <span class="highlight">*</span></label>
                                            <div class="form-group">
                                                <select class="form-control form-input selectbox" name="sexe">
                                                    <option value="1">Femme</option>
                                                    <option value="0"> Hommme</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($_SESSION['role']=="etudiant"){?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label">FELIERE <span class="highlight">*</span></label>
                                            <div class="form-group">
                                                <select class="form-control form-input selectbox" name="feliere">
                                                    <?php while ($f = $feliere->fetch()) { ?>
                                                        <option value="<?php echo $f['id'] ?>"><?php echo $f['nom'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label">SPECIALITE <span class="highlight">*</span></label>
                                            <div class="form-group">
                                                <select class="form-control form-input selectbox" name="specialite">
                                                    <?php while ($s = $specialite->fetch()) { ?>
                                                        <option value="<?php echo $s['id'] ?>"><?php echo $s['nom'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                    <div class="col-md-6">
                                        <div class="row">
                                        <?php if ($_SESSION['role']=="etudiant"){?>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label form-label">NIVEAU <span class="highlight">*</span></label>
                                                <div class="form-group">
                                                    <select class="form-control form-input selectbox" name="niveau">
                                                        <?php while ($n = $niveau->fetch()) { ?>
                                                            <option value="<?php echo $n['id'] ?>"><?php echo $n['nom'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label form-label">BIO <span class="highlight">*</span></label>
                                                <div class="contact-question form-group">
                                                    <textarea class="form-control form-input" name="bio"><?php echo $u['bio']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label">PHOTO <span class="highlight">*</span></label>
                                            <div class="form-group">
                                                <input class="input-file" id="my-file" type="file" name="photo">
                                            </div>
                                            <img src="uploads/users/<?php echo $u['photo']; ?>" style="margin-top: -50px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-submit">
                                    <input type="hidden" name="path" value="<?php echo $u['photo']; ?>"/>
                                    <button type="submit" class="btn btn-contact btn-green" name="modify">
                                        <span>Modifier Profile</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
    <!-- FOOTER-->
    <?php include_once('includes/footer.php'); ?>
    <!-- LOADING-->
    <!-- JAVASCRIPT LIBS-->
    <script src="assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
    <script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
    <script src="assets/libs/appear/jquery.appear.js"></script>
    <script src="assets/libs/count-to/jquery.countTo.js"></script>
    <script src="assets/libs/wow-js/wow.min.js"></script>
    <script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
    <script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
    <script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
    <!-- MAIN JS-->
    <script src="assets/js/main.js"></script>
    <!-- LOADING SCRIPTS FOR PAGE-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu6tm60TzeUo9rWpLnrQ7mrFn4JPMVje4&amp;amp;sensor=false"></script>
    <script src="assets/js/pages/contact.js"></script>
    <script src="assets/js/pages/homepage.js"></script>
    <script src="assets/js/muti-select.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.17/jquery.datetimepicker.full.js"></script>
    <script type="text/javascript"
            src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
    <script src="assets/js/validation/profile.js"></script>
</body>
</html>