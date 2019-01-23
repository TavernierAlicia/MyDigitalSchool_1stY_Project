<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from swlabs.co/edugate/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:32:48 GMT -->
<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/color-1.css">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
</head>
<body><!-- HEADER-->
<?php include_once ('includes/header.php'); ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Contact</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-padding contact-main">
                    <div class="container">
                        <div class="contact-main-wrapper">
                            <div class="row contact-method">
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-map-marker"></i>
                                        <p class="sub">VENIR À</p>
                                        <div class="detail">
                                            <p>11, rue de Cambrai Parc du Pont de Flandre Bâtiment 33 75019 Paris,France</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-phone"></i>

                                        <p class="sub">APPELER POUR</p>

                                        <div class="detail"><p>Local: +(33) 01 55 07 07 65</p>

                                            <p>Mobile: +(33) 01 55 07 07 65</p></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-envelope"></i>

                                        <p class="sub">SE CONNECTER À</p>

                                        <div class="detail"><p>paris@mydigitalschool.com</p>
                                            <p>www.mydigitalschool.com</p></div>
                                    </div>
                                </div>
                            </div>
                            <form class="bg-w-form contact-form" method="post" action="core/contact/contact.php">
                                <?php if(isset($_GET['success'])){?>
                                <div class="col-md-8 col-md-offset-2" style="margin-bottom: 20px;">
                                    <div class="alert alert-success">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <p class="text-center"><strong>Success!</strong> Le Message a etait envoyer avec succee.</p>
                                    </div>
                                </div>
                                <?php }?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label">NOM COMPLETE <span class="highlight">*</span></label>
                                            <input type="text" placeholder="" class="form-control form-input" name="nom" required/>
                                            <!--label.control-label.form-label.warning-label(for="") Warning for the above !-->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label">EMAIL <span class="highlight">*</span></label>
                                            <input type="email" name="email" required placeholder="" class="form-control form-input" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>"/>
                                            <!--label.control-label.form-label.warning-label(for="")-->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">PURPOSE</label>
                                            <select class="form-control form-input selectbox" name="propose" required>
                                            <option value="">Please Select</option>
                                            <option value="1">example 1</option>
                                            <option value="2">example 2</option>
                                            <option value="3">example 3</option>
                                        </select>
                                            <!--label.control-label.form-label.warning-label(for="", hidden)-->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label">SUJET</label>
                                            <input type="text" placeholder="" class="form-control form-input" name="sujet"/>
                                            <!--label.control-label.form-label.warning-label(for="", hidden)-->
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-question form-group">
                                            <label class="control-label form-label">COMMENT POUVONS NOUS AIDER?<span class="highlight">*</span></label>
                                            <textarea class="form-control form-input" required name="contenu"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-submit">
                                    <button type="submit" class="btn btn-contact btn-green" name="contact"><span>ENVOYER</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="map" class="section contact-map"></div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->
<?php include_once ('includes/footer.php');?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script src="assets/js/validation/contact.js"></script>
<script src="assets/js/pages/contact.js"></script>
<script type="text/javascript">
    $('#contact').addClass('active');
</script>
</body>

</html>