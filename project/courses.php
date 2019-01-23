<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from swlabs.co/edugate/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:20 GMT -->
<head><title>Courses</title>
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
</head>
<body><!-- HEADER-->
<?php include_once('includes/header.php'); ?>
<?php include_once('core/cours/cours.php'); ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Tous les Cours</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li class="active">Cours</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-padding courses">
                    <div class="container">
                        <div class="courses-wrapper"><!-- Nav tabs-->
                            <?php if ($_SESSION['role'] == "professeur") { ?>
                                <div class="col-md-12">
                                    <a href="liste-cours.php">
                                        <button type="button" class="form-submit btn btn-blue pull-right" style="margin-bottom:20px;margin-left: 20px" name="liste"><span>Liste<i class="icon-a-01-01"></i></span></button>
                                    </a>
                                    <a href="ajout-cours.php">
                                        <button type="button" class="form-submit btn btn-blue pull-right" style="margin-bottom:20px; "><span>Ajouter<i class="fa fa-plus"></i></span></button>
                                    </a>
                                </div>
                            <?php } ?>
                            <div class="row top-content">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-6">
                                    <ul role="tablist" class="nav nav-tabs edugate-tabs">
                                        <?php while ($fil = $filiere->fetch()) { ?>
                                            <li role="presentation" <?php if ($fil['id'] == 1){ ?>class="active" <?php } ?>><a href="#speciality<?php echo $fil['id']; ?>" data-toggle="tab" class="text"><?php echo $fil['nom']; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                </div>
                            </div>
                            <!-- Tab panes-->
                            <div class="tab-content courses-content">
                                <?php while ($fel = $filiereTab->fetch()) {
                                    $specialite = $conn->query("SELECT s.id AS 'id',s.nom AS 'nom',n.nom AS'niveau',s.feliere AS'feliere'FROM speciality s,niveau n WHERE n.id=s.niveau AND s.feliere=" . $fel['id']." ORDER BY s.niveau ASC");?>
                                    <div id="speciality<?php echo $fel['id']; ?>" role="tabpanel" class="tab-pane fade in <?php if ($fel['id'] == 1) { ?>active <?php } ?>">
                                        <div class="style-show style-grid row">
                                            <div class="accordion-faq">
                                                <div class="">
                                                    <?php while ($spec = $specialite->fetch()) {
                                                        $modules = $conn->query("SELECT  m.id AS'id',m.nom AS'nom' 
                                                                                          FROM modules m,programme p,speciality s 
                                                                                          WHERE p.specialite = s.id AND p.modules = m.id AND p.specialite =". $spec['id'].
                                                                                          " GROUP BY m.id" );?>
                                                        <div class="col-md-6">
                                                            <div class="underline" style="text-align: left;margin-top: 70px;font-size: 25px;">
                                                                <?php
                                                                if($spec['feliere'] == 1){
                                                                     echo $spec['niveau'].' - '.$spec['nom'];
                                                                }else{
                                                                    echo $spec['nom'];
                                                                }?></div>
                                                            <div id="<?php echo $spec['id']; ?>" class="panel-group accordion">
                                                                <div class="panel">
                                                                    <?php while ($mod = $modules->fetch()) {?>
                                                                        <div class="panel-heading">
                                                                            <h5 class="panel-title"><a data-toggle="collapse" data-parent="#<?php echo $spec['id']; ?>" href="#<?php echo $spec['id'] . '-' . $mod['id']; ?>" aria-expanded="false" class="accordion-toggle collapsed"><?php echo $mod['nom']; ?></a></h5>
                                                                        </div>
                                                                        <div id="<?php echo $spec['id'] . '-' . $mod['id']; ?>"
                                                                             aria-expanded="false" style="height: 0px;"
                                                                             class="panel-collapse collapse">
                                                                            <div class="panel-body">
                                                                                <?php
                                                                                $matieres = $conn->query("SELECT  ma.id AS'id',ma.nom AS'nom'
                                                                                          FROM modules m,programme p,speciality s ,matiere ma
                                                                                          WHERE p.specialite = s.id AND p.modules = m.id AND p.matiere = ma.id AND p.modules =". $mod['id'].
                                                                                    " AND p.specialite=".$spec['id'] );
                                                                                while ($ma = $matieres->fetch()) {
                                                                                    echo '<a href="courses-detail.php?idc='.$ma['id'].'&idm='.$mod['id'].'" target="_blank">' . $ma['nom'] . '</a></br>';
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
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
    $('#courses').addClass('active');
</script>
</body>

<!-- Mirrored from swlabs.co/edugate/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:28 GMT -->
</html>