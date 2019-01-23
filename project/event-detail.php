<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from swlabs.co/edugate/event-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:43 GMT -->
<head><title>Détail de l'événement</title>
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
    <!-- STYLE CSS    -->
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
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Détail de l'événement</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="categories.html">Evénement</a></li>
                                <li class="active">Evénement Détail</li>
                            </ol>
                        </div>
                    </div>
                </div>
                </div>
                <div class="section section-padding courses-detail event-detail-section">
                    <div class="container">
                        <div class="courses-detail-wrapper">
                            <div class="row">
                                <div class="col-md-12 layout-left">
                                    <?php while($n = $event->fetch()){?>
                                    <h1 class="event-detail-title"><?php echo ucfirst($n['titre'])?></h1>
                                    <div class="course-info info info-event-detail">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-4">
                                                <div class="note-time-block"><span class="label-time"> Début</span><span class="note-time"><?php echo $n['date_deb']?></span></div>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <div class="note-time-block"><span class="label-time"> Fin</span><span class="note-time"><?php echo $n['date_fin']?></span></div>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <div class="note-time-block"><span class="label-time"> Lieux</span><span class="note-time"><?php echo $n['lieux']?></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-detail-thumb"><img src="uploads/events/<?php echo $n['photo']?>" alt="" class="img-responsive"/></div>
                                    <div class="event-detail-des">
                                        <div class="event-detail-des-content">
                                            <p><?php echo $n['description'] ?> </p>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            
                            </div>
                        </div>
                        <div class="event-detail-related">
                            <div class="course-syllabus-title underline">Peut-être aussi vous aimez</div>
                            <div class="event-detail-content">
                                <div class="row">
                                    <?php while($n = $events->fetch()){?>
                                    <div class="col-md-4">
                                        <div class="edugate-layout-3 news-gird">
                                            <div class="edugate-layout-3-wrapper"><a href="#" class="edugate-image"><img src="uploads/events/<?php echo $n['photo']?>" alt="" class="img-responsive"/></a>
                                                <div class="edugate-content"><a href="events-detail.php?ide=<?php echo $n['id']?>" class="title"><?php echo ucfirst($n['titre'])?></a>
                                                    <div class="info-more info-event-detail">
                                                        <div class="view item"><i class="fa fa-map-marker fa-fw"></i>
                                                            <p> <?php echo $n['lieux']?></p></div>
                                                        <div class="comment item"><i class="fa fa-clock-o fa-fw"></i>

                                                            <p> <?php echo date("F j Y g:i a", strtotime($n['date_deb'])) ?></p></div>
                                                    </div>
                                                    <div class="description"><?php echo substr($n['description'],0,90).'...'?></div>
                                                    <button class="btn btn-green"><a href="event-detail.php?ide=<?php echo $n['id']?>" class="info-more-link" target="_blank"><span>Lire la suite</span></a></button></button>
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
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->
<?php include_once ('includes/footer.php');?>
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
<script type="text/javascript">
    $('#event').addClass('active');
</script>
<!-- LOADING SCRIPTS FOR PAGE--></body>

<!-- Mirrored from swlabs.co/edugate/event-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:44 GMT -->
</html>