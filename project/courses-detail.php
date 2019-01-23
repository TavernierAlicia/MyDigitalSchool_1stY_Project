<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from swlabs.co/edugate/courses-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:28 GMT -->
<head>
    <title>Courses Detail</title>
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
    <?php include_once('core/cours/cours.php');?>
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
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">course detail</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="courses.php">Cours</a></li>
                                <li class="active">Cours Detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-padding courses-detail">
                    <div class="container">
                        <div class="courses-detail-wrapper">
                            <div class="row">
                                <div class="col-md-12 layout-left">
                                    <div class="course-des">
                                        <div class="course-des-title underline">Informations sur le module</div>
                                        <?php while($m = $module->fetch()){?>
                                        <div class="course-des-content">
                                          <p><?php echo $m['description']?></p>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="course-syllabus">
                                        <div class="course-syllabus-title underline">Liste des Cours</div>
                                        <div class="course-table">
                                            <div class="outer-container">
                                                <div class="inner-container">
                                                    <div class="table-header">
                                                        <table class="edu-table-responsive">
                                                            <thead>
                                                            <tr class="heading-table">
                                                                <th class="col-md-2">Titre</th>
                                                                <th class="col-md-2">Professeur</th>
                                                                <th class="col-md-5">Remargue</th>
                                                                <th class="col-md-2">Contact</th>
                                                                <th class="col-md-1">Document</th>
                                                            </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                    <div class="table-body">
                                                        <table class="edu-table-responsive table-hover">
                                                            <tbody>
                                                            <?php while($cour = $cours->fetch()){
                                                                $doc = explode(",", $cour['document']);?>
                                                            <tr class="table-row">
                                                                <td class="left col-md-2"><i class="bg-green mr25 fa fa-caret-right"></i><span> <?php echo $cour['nom'];?></span></td>
                                                                <td class="col-md-2"><?php echo $cour['prof'];?></td>
                                                                <td class="col-md-5"><?php echo $cour['remarque'];?></td>
                                                                <td class="col-md-2"><a href="<?php echo 'contact.php?email='.$cour['email'];?>" target="_blank"><?php echo $cour['email'];?></a></td>
                                                                <td class="green-color col-md-1">
                                                                    <?php foreach($doc as $d){ ?>
                                                                        <a href="<?php echo 'uploads/cours/'.trim($d);?>" target="_blank" download><i class="mr18 fa fa-file-text"></i></a>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                            <tr class="spacing-table">
                                                                <td colspan="4"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
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
    $('#courses').addClass('active')
</script>
</body>

</html>