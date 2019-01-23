<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from swlabs.co/edugate/news-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:32:36 GMT -->
<head><title>Forum | Detail</title>
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
    <link type="text/css" rel="stylesheet" href="assets/css/color-1.css">
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <?php include_once ('core/forum/forum.php');?>
</head>
<body>
<!-- HEADER-->
<?php include_once ('includes/header.php');?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><h2 class="captions">news &amp; updates</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="forum.php">Forum</a></li>
                                <li class="active">Detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-padding news-detail">
                    <div class="container">
                        <div class="news-detail-wrapper">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php while($p = $publication->fetch()){
                                    $nbr = $conn->query("SELECT COUNT(*) AS 'nb' FROM commentaire c WHERE c.publication=".$p['id']);?>
                                    <div class="news-detail">
                                        <img src="uploads/forum/<?php echo $p['photo']?>" alt="" class="news-image"/>
                                        <h1 class="title-news"><?php echo $p['titre']?></h1>
                                        <div class="info">
                                            <div class="author item"><a href="#"><span>Par&nbsp;</span><span><?php echo $p['auteur']?></span></a></div>
                                            <div class="category item"><a href="#"><?php echo $p['categorie']?></a></div>
                                            <div class="comment item"><a href="#"><span><?php while($nb = $nbr->fetch()){ echo $nb['nb'];$n=$nb['nb']; }?></span><span>&nbsp;Comments</span></a></div>
                                            <div class="date-time item"><a href="#"><span>Posted&nbsp;</span><span><?php echo $p['dateA']?></span></a></div>
                                        </div>
                                        <div class="news-content">
                                            <div class="news-des"><p><?php echo $p['description']?></p></div>
                                        </div>
                                        <?php } ?>
                                        <div class="news-comment">
                                            <div class="news-comment-title underline">Commentaires</div>
                                            <ul class="comment-list list-unstyled">
                                                <?php while($c = $commentaire->fetch()){ ?>
                                                    <li class="media commentaire">
                                                    <div class="list-item">
                                                        <div class="media-left">
                                                            <a class="media-image">
                                                                <?php if ($c['photo'] == null) {
                                                                    if ($c['sexe'] == 1) {
                                                                        if ($c['role'] == 'etudiant') { ?>
                                                                            <img src="assets/images/people-avatar-8.png" alt="" />
                                                                        <?php } else {?>
                                                                            <img src="assets/images/people-avatar-5.png" alt=""/>
                                                                        <?php } ?>
                                                                    <?php } else {
                                                                        if ($c['role'] == 'etudiant') { ?>
                                                                            <img src="assets/images/people-avatar-2.png" alt=""/>
                                                                        <?php } else {?>
                                                                            <img src="assets/images/people-avatar-4.png" alt=""/>
                                                                        <?php } ?>
                                                                    <?php }
                                                                }else{?>
                                                                    <img src="uploads/users/<?php echo $c['photo']?>" alt="" />
                                                                <?php } ?>
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="pull-left">
                                                                <div class="info">
                                                                    <div class="reader item"><a href="#"><?php echo $c['comment']?></a></div>
                                                                </div>
                                                            </div>
                                                            <div class="pull-right"></div>
                                                            <div class="clearfix"></div>
                                                            <div class="time"><?php echo $c['dateC']?></div>
                                                            <div class="des"><p><?php echo $c['contenu']?></p></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div class="comment-write">
                                            <div class="comment-write-title underline">laissez un commentaire</div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="contact-question form-group">
                                                            <textarea class="form-control form-input" name="contenu" id="contenu" rows="4" placeholder="Saisir votre commentaire"></textarea>
                                                            <span class="text text-danger commentaire-erreur">Le commentaire est obligatoire et ne peut pas être vide </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contact-submit">
                                                    <button type="submit" class="btn btn-green btn-bold info-more-link" name="comment" id="comment" style="float: right;"><span>SOMMETRE COMMENTAIRE</span></button>
                                                </div>
                                        </div>
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
<?php include_once ('includes/footer.php');?>

<!-- LOADING--><!-- JAVASCRIPT LIBS-->
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
<script src="assets/js/pages/new-detail.js"></script>
<script>
    $('#forum').addClass('active');
    publication = <?php echo $_GET['pid']; ?>;
</script>
<script type="text/javascript" src="assets/js/pages/commentaire.js"></script>
</body>
</html>