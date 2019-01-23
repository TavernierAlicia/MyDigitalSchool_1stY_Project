<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from swlabs.co/edugate/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:20 GMT -->
<head><title>Login</title>
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
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">
    <!-- STYLE CSS    -->
    <link type="text/css" rel='stylesheet' href='assets/css/color-1.css'>
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <style>
        .form-control-feedback {
            position: absolute;
            top: 30px;
            right: 13px;
            z-index: 2;
            color: #f32f2f;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
            pointer-events: none;
        }
    </style>
    <?php
    session_start();
    if(isset($_SESSION['connecter'])) {
        header('Location: /../../education/index.php');
    }
    ?>
</head>
<body><!-- HEADER-->
<header><!-- not include--></header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="page-login rlp">
                    <div class="container">
                        <div class="login-wrapper rlp-wrapper">
                            <div class="login-table rlp-table"><img src="assets/images/logo-color-1.png" alt="" class="login"/>
                                <div class="login-title rlp-title">login or <a href="register.php" class="register-redirection"> create account!</a></div>
                                <?php if(isset($_GET['erreur'])){  ?>
                                    <?php if($_GET['erreur']=="login"){  ?>
                                        <div class="login-title rlp-title text-danger">verifier l'email ou mot de passe </div>
                                    <?php }else if($_GET['erreur']=="active"){  ?>
                                        <div class="login-title rlp-title text-danger">Desole cette compte a etait desactivee </div>
                                    <?php } ?>
                                <?php } ?>
                                <form action="core/login/login.php" id="connexion" method="post">
                                    <div class="login-form bg-w-form rlp-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="regemail" class="control-label form-label">email <span class="highlight">*</span></label>
                                                <input id="regemail" type="email" placeholder="" class="form-control form-input" name="email" required/><!--p.help-block Warning !-->
                                            </div>
                                            <div class="col-md-12">
                                                <label for="regpassword" class="control-label form-label">password <span class="highlight">*</span></label>
                                                <input id="regpassword" type="password" placeholder="" class="form-control form-input" name="password" required/><!-- p.help-block Warning !-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="login-submit">
                                        <button type="submit" class="btn btn-login btn-green"><span>sign in</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER-->
<footer></footer>
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
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<script src="assets/js/validation/login.js"></script>
</body>

<!-- Mirrored from swlabs.co/edugate/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:20 GMT -->
</html>