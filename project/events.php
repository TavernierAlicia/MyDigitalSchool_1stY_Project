<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from swlabs.co/edugate/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:31 GMT -->
<head><title>Evénements</title>
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
    <?php include_once ('core/events/events.php');?>
</head>
<body><!-- HEADER-->
<?php include_once ('includes/header.php');?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><h2 class="captions">Evénements</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li class="active">Evénements</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- OUR EVENT-->
                <div class="section section-padding events-grid">
                    <div class="container">
                        <div class="group-title-index"><h4 class="top-title">Nos événements</h4>

                            <h2 class="center-title">Découvrez nos meilleurs événements</h2>

                            <div class="bottom-title"><i class="bottom-icon icon-a-01-01"></i></div>
                        </div>
                        <div class="news-page-wrapper">
                            <?php if($_SESSION['role'] == "admin"){ ?>
                                <div class="col-md-12">
                                    <a href="ajout-events.php"><button type="button" class="form-submit btn btn-blue pull-right" style="margin-bottom:60px; "><span>Ajouter<i class="fa fa-plus"></i></span></button></a>
                                </div>
                            <?php } ?>
                            <div class="row">
                                <?php while($n =$events->fetch()){?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="edugate-layout-3 news-gird">
                                        <div class="edugate-layout-3-wrapper"><a href="#" class="edugate-image"><img src="uploads/events/<?php echo $n['photo']?>" alt="" class="img-responsive"/></a>
                                            <div class="edugate-content"><a href="event-detail.php?ide=<?php echo $n['id']?>" class="title"><?php echo ucfirst($n['titre'])?></a>
                                                <div class="info-more info-event-detail">
                                                    <div class="view item">
                                                        <i class="fa fa-map-marker fa-fw"></i>
                                                        <p> <?php echo $n['lieux']?></p>
                                                    </div>
                                                    <div class="comment item">
                                                        <i class="fa fa-clock-o fa-fw"></i>
                                                        <p> <?php echo date("F j Y g:i a", strtotime($n['date_deb'])) ?></p>
                                                    </div>
                                                </div>

                                                <div class="description"><?php echo substr($n['description'],0,90).'...'?></div>
                                                <?php if($_SESSION['role'] == "admin"){ ?>
                                                    <button class="btn btn-green" style="display: unset;"><a href="modifier-events.php?id=<?php echo $n['id']?>" class="info-more-link" target="_bl</button>ank"><span>Mofifier</span></a></button>
                                                    <button class="btn btn-green delete-event" style="display: unset;" data-id="<?php echo $n['id']?>"><span>Supprimer</span></button>
                                                <?php }else{?>
                                                    <button class="btn btn-green"><a href="event-detail.php?ide=<?php echo $n['id']?>" class="info-more-link" target="_blank"><span>Lire la suite</span></a></button></button>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
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
<?php include_once ('includes/footer.php');?>
<!-- THEME SETTING-->
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
<script src="assets/js/pages/events.js"></script>
<script src="assets/libs/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript">
    $('#event').addClass('active');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script>
    $('.delete-event').click(function(){
        id= $(this).data('id');
        $.confirm({
            title: 'Confirmation !',
            content: 'Est-ce que vous etes sûrs de suppression cet événement',
            theme: 'supervan',
            buttons: {
                Confirmer: function () {
                    document.location.href='core/events/modifier.php?idd='+id;
                },
                Annuler: function () {

                }
            }
        });
    });

</script>
</body>

<!-- Mirrored from swlabs.co/edugate/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:43 GMT -->
</html>