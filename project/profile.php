<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from swlabs.co/edugate/profile-teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:32:25 GMT -->
<head><title>Profile </title>
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
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/color-1.css">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
</head>
<body><!-- HEADER-->
<?php include_once ('includes/header.php'); ?>
<?php include_once ('core/profile/profile.php'); ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">profile</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li class="active">profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-padding profile-teacher">
                    <div class="container">
                        <div class="profile-teacher-wrapper">
                            <div class="col-md-12">
                                <a href="modifier-profile.php"><button type="button" class="form-submit btn btn-blue pull-right" style="margin-bottom:20px;margin-left: 20px; "><span> Modifier <i class="fa fa-pencil"></i></span></button></a>
                                <button type="button" class="form-submit btn btn-blue pull-right" data-toggle="modal" data-target="#exampleModal" style="margin-bottom:20px;"><span> Changer mot de passe <i class="fa fa-pencil"></i></span></button>
                            </div>
                            <div class="teacher-info">
                                <div class="staff-item2 customize">
                                    <div class="staff-item-wrapper">
                                        <div class="staff-info">
                                            <a href="#" class="staff-avatar">
                                                <?php if ($u['photo'] == null) {
                                                    if ($u['sexe'] == 1) {
                                                        if ($u['role'] == 'etudiant') { ?>
                                                            <img src="assets/images/people-avatar-8.png" alt="" class="img-responsive"/>
                                                        <?php } else {?>
                                                            <img src="assets/images/people-avatar-5.png" alt="" class="img-responsive"/>
                                                        <?php } ?>
                                                    <?php } else {
                                                        if ($u['role'] == 'etudiant') { ?>
                                                            <img src="assets/images/people-avatar-2.png" alt="" class="img-responsive"/>
                                                        <?php } else {?>
                                                            <img src="assets/images/people-avatar-4.png" alt="" class="img-responsive"/>
                                                        <?php } ?>
                                                    <?php }
                                                }else{?>
                                                    <img src="uploads/users/<?php echo $u['photo']?>" alt="" class="img-responsive"/>
                                                <?php } ?>
                                            </a>
                                            <a href="#" class="staff-name">barry join</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="teacher-des">
                                    <div class="title"> <?php echo ucfirst($u['nom']).' '.ucfirst($u['prenom']);?></div>
                                    <div class="subtitle"><?php echo ucfirst($u['role']);?></div>
                                    <div class="content">
                                        <p class="content-detail"><?php echo $u['bio'];?></p>
                                    </div>
                                    <ul class="detail-list">
                                        <li>E-mail :  <?php echo $u['email'];?></li>
                                        <?php if($_SESSION['role']=='etudiant'){
                                            echo '<li>Feliere : '.ucfirst($u['feliere']).'</li>';;
                                            echo '<li>Specialite : '.$u['niveau'].' '.ucfirst($u['specialite']).'</li>';
                                        }?>
                                        <li>Sexe : <?php if($u['sexe'] == 1){echo "Femme";}else{echo "Homme";}?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><center>Changer mot de passe</center></h4>
                        </div>
                        <div class="modal-body">
                            <form action="core/profile/profile.php" method="post" id="modifier-password">
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" >
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label">nouveau mot de passe:</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="passwordc" class="col-form-label">confirmer mot de passe:</label>
                                    <input type="password" class="form-control" id="passwordc" name="passwordc">
                                </div>
                                <div class="contact-submit">
                                    <button type="submit" class="btn btn-contact btn-green" name="pass">Changer</button>
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
</div>
<!-- FOOTER-->
<?php include_once ('includes/footer.php');?>
</div>
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
<script src="assets/js/pages/profile-teacher.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<script src="assets/js/validation/profile.js"></script>
<script>
    $('#modifier-password').bootstrapValidator({
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fas fa-sync'
        },
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'The description is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The value is not a valid email address'
                    },
                    identical: {
                        value: '<?php echo $u['email']; ?>',
                        message: 'The email and its confirm are not the same'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        message: 'The password must be more than 6characters long'
                    },
                    identical: {
                        field: 'passwordc',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            passwordc: {
                validators: {
                    notEmpty: {
                        message: 'The confim password is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        message: 'The password must be more than 6 characters long'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });
</script>
</body>
</html>