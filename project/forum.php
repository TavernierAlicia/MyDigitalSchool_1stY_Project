<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from swlabs.co/edugate/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:32:31 GMT -->
<head><title>Forum</title>
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
                        <div class="page-title-wrapper"><h2 class="captions">Nouvelles & mise à jour</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li class="active">Forum</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-padding news-page">
                    <div class="container">
                        <div class="row">
                            <?php if($_SESSION['role'] == "admin"){ ?>
                                <div class="col-md-12">
                                    <a href="ajout-forum.php"><button type="button" class="form-submit btn btn-blue pull-right" style="margin-bottom:20px; "><span>Ajouter<i class="fa fa-plus"></i></span></button></a>
                                </div>
                            <?php } ?>
                            <div class="col-md-9">
                                <div class="news-page-wrapper">
                                    <?php
                                        $nbrP = $publ->rowCount();
                                        while($p = $publication->fetch()){
                                        $nbr = $conn->query("SELECT COUNT(*) AS 'nb' FROM commentaire c WHERE c.publication=".$p['id']);?>
                                    <div class="edugate-layout-1">
                                        <div class="edugate-image"><img src="uploads/forum/<?php echo $p['photo']?>" alt="" class="img-responsive"/></div>
                                        <div class="edugate-content"><span class="title"><?php echo $p['titre']?></span>
                                            <div class="info">
                                                <div class="author item"><a>Par <?php echo $p['auteur']?></a></div>
                                                <div class="date-time item"><a><?php echo $p['dateA']?></a></div>
                                                <div class="date-time item"> <a><i class="fa fa-comment"></i> <?php while($nb = $nbr->fetch()){ echo $nb['nb']; }?></a></div>
                                            </div>
                                            <div class="description"> <?php echo substr($p['description'],0,90).'...'?></div>
                                            <?php if($_SESSION['role'] == "admin"){ ?>
                                                <button class="btn btn-green" style="position:sticky;margin-top:70px;"><a href="modifier-forum.php?pid=<?php echo $p['id']?>" class="info-more-link" target="_blank"><span>Mofifier</span></a></button>
                                                <button class="btn btn-green delete-form" style="position:sticky;margin-top:70px;" data-id="<?php echo $p['id']?>"><span>Supprimer</span></button>
                                            <?php }else{?>
                                                <button class="btn btn-green"><a href="forum-detail.php?pid=<?php echo $p['id']?>" class="info-more-link" target="_blank"><span>Lire la suite</span></a></button></button>
                                            <?php }?>
                                        </div>
                                    </div>
                                    <?php }
                                    if($nbrP>8){
                                        $count = ($nbrP % 8);
                                        $nbC=intval($nbrP / 8);
                                        if($count>0){
                                            $nbC+=1;
                                        } ?>
                                    <nav class="pagination col-md-12">
                                        <ul class="pagination__list">
                                            <?php if(intval($_GET['page'])  == 1){?>
                                                <li><a rel="prev"  class="pagination__previous btn-squae disable">&#8249;</a></li>
                                            <?php }else{?>
                                                <li><a rel="prev" href="" class="pagination__previous btn-squae ">&#8249;</a></li>
                                            <?php }?>
                                            <?php for ($i=1;$i<=$nbC;$i++){
                                                if(intval($_GET['page']) == $i){?>
                                                <li><span  class="pagination__page btn-squae active"><?php echo $i;?></span></li>
                                                <?php }else{?>
                                                    <li><span onclick="pagination(<?php echo $i;?>);" class="pagination__page btn-squae "><?php echo $i;?></span></li>
                                                <?php }?>
                                            <?php } ?>
                                            <?php if(intval($_GET['page']) == $nbC){?>
                                            <li><a rel="next" href="" class="pagination__next btn-squae disable">&#8250;</a></li>
                                            <?php }else{?>
                                                <li><a rel="next" href="" class="pagination__next btn-squae">&#8250;</a></li>
                                            <?php }?>
                                        </ul>
                                    </nav>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col-md-3 sidebar layout-right">
                                <div class="row">
                                    <div class="clearfix"></div>
                                    <div class="category-widget widget col-sm-6 col-md-12 col-xs-6 sd380">
                                        <div class="title-widget">categories</div>
                                        <div class="content-widget">
                                            <ul class="category-widget list-unstyled">
                                                <?php while($c = $categorie->fetch()){
                                                    $nbr = $conn->query("SELECT COUNT(*) AS 'nb' FROM publication p WHERE p.categorie=".$c['id']); ?>
                                                <li><a href="forum.php?gid=<?php echo $c['id']?>&page=1" class="link cat-item"><span class="pull-left"><?php echo $c['nom']?></span><span class="pull-right"><?php while($nb = $nbr->fetch()){ echo $nb['nb']; }?></span></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="archive-widget widget col-sm-6 col-md-12 col-xs-6 sd380">
                                        <div class="title-widget">archive</div>
                                        <div class="content-widget">
                                            <ul class="archive-widget list-unstyled">
                                                <?php foreach($archive as $a){ ?>
                                                    <li><a <?php if($a['nbr']>0 ){?>href="forum.php?date=<?php echo $a['search']?>&page=1<?php }?>" class="link archive-item"><span class="pull-left"><?php echo $a['month']?></span><span class="pull-right"><?php echo $a['nbr']?></span></a></li>
                                                <?php } ?>
                                            </ul>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script type="text/javascript">
    $('#forum').addClass('active');
    function pagination(page) {
        var str = window.location.href;
        var res = str.replace("page=<?php echo $_GET['page']?>", "page="+page);
        document.location.href=res;
    }

    $('.delete-form').click(function(){
        id= $(this).data('id');
        $.confirm({
            title: 'Confirmation !',
            content: 'Est-ce que vous etes sûrs de suppression cet Article',
            theme: 'supervan',
            buttons: {
                Confirmer: function () {
                    document.location.href='core/forum/modifier.php?idd='+id;
                },
                Annuler: function () {

                }
            }
        });
    });
</script>
</body>
</html>