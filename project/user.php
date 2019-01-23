<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from swlabs.co/edugate/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:20 GMT -->
<head><title>Utlisateurs</title>
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
    <style>
        .info .item:after {
            content: '';
            margin: 0 5px;
            color: #bfc9ce;
        }
    </style>
</head>
<body><!-- HEADER-->
<?php include_once('includes/header.php'); ?>
<?php include_once('core/admin/users.php'); ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Tous les utilisateurs</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li class="active">Utilisateurs</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-padding courses">
                    <div class="container">
                        <div class="courses-wrapper"><!-- Nav tabs-->
                            <div class="row top-content">
                                <div class="col-md-3">
                                   </div>
                                <div class="col-md-6">
                                    <ul role="tablist" class="nav nav-tabs edugate-tabs">
                                        <li role="presentation" class="active"><a href="#campus" data-toggle="tab" class="text">Professeur</a></li>
                                        <li role="presentation"><a href="#education" data-toggle="tab" class="text">Etudiant</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                </div>
                            </div>
                            <!-- Tab panes-->
                            <div class="tab-content courses-content">
                                <div id="campus" role="tabpanel" class="tab-pane fade in active">
                                        <div class="style-show style-grid row">
                                            <?php while($p = $professeur->fetch()){ ?>
                                                <div class="col-style">
                                                    <div class="edugate-layout-2">
                                                        <div class="edugate-layout-2-wrapper">
                                                            <div class="edugate-content"><a  class="title"><?php echo ucfirst($p['nom']).' '.ucfirst($p['prenom']);?></a>
                                                                <div class="info">
                                                                    <div class="date-time item"><a href="#"><?php echo date("F j Y g:i a", strtotime($p['creation'])); ?></a></div>
                                                                </div>
                                                                <div class="info-more">
                                                                    <div class="view item">
                                                                        <a class=""><span><?php echo $p['email'];?></span></a>
                                                                    </div>
                                                                </div>
                                                                <div class="description"><?php echo substr($p['bio'],0,90).'...'?></div>
                                                                <button class="btn btn-green desactive-compte" data-id="<?php echo $p['id']?>"><span><?php if($p['statut']==1){?>Desactiver<?php }else{?>Activer<?php }?></span></button>
                                                            </div>
                                                            <div class="edugate-image"><img src="assets/images/courses/courses-4.jpg" alt="" class="img-responsive"/></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                    </div>
                                </div>
                                <div id="education" role="tabpanel" class="tab-pane fade">
                                    <div class="style-show style-grid row">
                                        <?php while($e = $etudiant->fetch()){ ?>
                                        <div class="col-style">
                                            <div class="edugate-layout-2">
                                                <div class="edugate-layout-2-wrapper">
                                                    <div class="edugate-content"><a class="title"><?php echo ucfirst($e['nom']).' '.ucfirst($e['prenom']);?></a>

                                                        <div class="info">
                                                            <div class=""><?php echo $e['email']; ?></div>
                                                            <div class="author item"<?php echo ucfirst($e['feliere']).' :<br> '.$e['niveau'].'  '.ucfirst($e['specialite']); ?></div><br><br>
                                                            <div class="date-time item"><?php echo date("F j Y g:i a", strtotime($e['creation'])); ?></div>
                                                        </div>
                                                    <button class="btn btn-green desactive-compte" data-id="<?php echo $e['id']?>"><span><?php if($e['statut']==1){?>Desactiver<?php }else{?>Activer<?php }?></span></button>
                                                    </div>
                                                    <div class="edugate-image"><img src="assets/images/categories/categories-4.jpg" alt="" class="img-responsive"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    <!--<nav class="pagination col-md-12">
                                        <ul class="pagination__list">
                                            <li><a rel="prev" href="#" class="pagination__previous btn-squae disable">&#8249;</a></li>
                                            <li><span class="pagination__page btn-squae active">1</span></li>
                                            <li><a href="#" class="pagination__page btn-squae">2</a></li>
                                            <li><a href="#" class="pagination__page btn-squae">...</a></li>
                                            <li><a href="#" class="pagination__page btn-squae">14</a></li>
                                            <li><a rel="next" href="#" class="pagination__next btn-squae">&#8250;</a></li>
                                        </ul>
                                    </nav>-->
                                    </div>
                                </div>
                            </div>
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
<?php include_once('includes/footer.php'); ?>
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
<script src="assets/js/pages/courses.js"></script>
<script type="text/javascript">
    $('#user').addClass('active');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script>
    $('.desactive-compte').click(function(){
        id= $(this).data('id');
        $.confirm({
            title: 'Confirmation',
            content: 'Est-ce que vous etes sûrs de activer/desactiver cette compte',
            theme: 'supervan',
            buttons: {
                Confirmer: function () {
                    document.location.href='core/admin/users.php?idd='+id;
                },
                Annuler: function () {

                }
            }
        });
    });

</script>
</body>

<!-- Mirrored from swlabs.co/edugate/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:28 GMT -->
</html>