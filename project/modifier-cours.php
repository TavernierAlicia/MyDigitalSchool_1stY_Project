<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from swlabs.co/edugate/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:32:48 GMT -->
<head>
    <title>Modifier | Cours</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
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
    <link type="text/css" rel="stylesheet" href="assets/css/multi-select.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/color-1.css">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
</head>
<body><!-- HEADER-->
<?php require_once('includes/header.php'); ?>
<?php include_once('core/cours/liste.php'); ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Cours</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="courses.php">Cours</a></li>
                                <li class="active">Modifier</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-padding contact-main">
                    <div class="container">
                        <div class="contact-main-wrapper">
                            <div class="group-title-index"><h4 class="top-title">Cours</h4>
                                <h2 class="center-title">modifier  cours</h2>
                                <div class="bottom-title"><i class="bottom-icon icon-a-01-01"></i></div>
                            </div>
                            <form class="bg-w-form contact-form" action="core/cours/cours.php" method="post" id="cours-modifier" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label">TITRE <span class="highlight">*</span></label>
                                            <input type="text" placeholder="" class="form-control form-input" name="titre" value="<?php echo $c['titre']; ?>"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label">COURS</label>
                                            <div class="input-file-container">
                                                <input class="input-file" id="my-file" type="file" name="cours[]" multiple accept=".pdf,.doc,.docx,.ppt,.pptx">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-question form-group">
                                            <label class="control-label form-label">DESCRIPTION <span class="highlight">*</span></label>
                                            <textarea class="form-control form-input" name="description" style="resize: none;"><?php echo $c['description']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label">MATIERE</label>
                                            <div class="classes-div">
                                                <ul>
                                                    <?php while ($fel = $filiere->fetch()) {
                                                        $specialite = $conn->query("SELECT s.id AS 'id',s.nom AS 'nom',n.nom AS'niveau',s.feliere AS'feliere'FROM speciality s,niveau n WHERE n.id=s.niveau AND s.feliere=" . $fel['id']." ORDER BY s.niveau ASC");?>
                                                        <li>
                                                            <input type="checkbox" id="<?php echo $fel['nom']; ?>" name="feliere[]">
                                                            <label for="<?php echo $fel['nom']; ?>"><?php echo $fel['nom']; ?></label>
                                                            <ul>
                                                                <?php while ($spec = $specialite->fetch()) {
                                                                    $modules = $conn->query("SELECT  m.id AS'id',m.nom AS'nom' 
                                                                                          FROM modules m,programme p,speciality s 
                                                                                          WHERE p.specialite = s.id AND p.modules = m.id AND p.specialite =". $spec['id'].
                                                                        " GROUP BY m.id" );?>
                                                                    <li>
                                                                        <input type="checkbox"  id=" <?php echo $spec['nom']; ?>" name="spec<?php echo $spec['id']; ?>">
                                                                        <label for=" <?php echo $spec['nom']; ?>"> <?php echo $spec['nom']; ?></label>
                                                                        <ul>
                                                                            <?php while ($mod = $modules->fetch()) {
                                                                                $matieres = $conn->query("SELECT  ma.id AS'id',ma.nom AS'nom'
                                                                                          FROM modules m,programme p,speciality s ,matiere ma
                                                                                          WHERE p.specialite = s.id AND p.modules = m.id AND p.matiere = ma.id AND p.modules =". $mod['id'].
                                                                                    " AND p.specialite=".$spec['id'] );?>
                                                                                <li>
                                                                                    <input type="checkbox"  id="<?php echo $mod['nom']; ?>">
                                                                                    <label for="<?php echo $mod['nom']; ?>"><?php echo $mod['nom']; ?></label>
                                                                                    <ul>
                                                                                        <?php while ($ma = $matieres->fetch()) { ?>
                                                                                            <li>
                                                                                                <input type="checkbox" name="<?php echo 'spe'.$spec['id'].'cour'.$ma['id']; ?>" id="<?php echo $ma['nom']; ?>">
                                                                                                <label for="<?php echo $ma['nom']; ?>"><?php echo $ma['nom']; ?></label>
                                                                                            </li>
                                                                                        <?php } ?>
                                                                                    </ul>
                                                                                </li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                    </li>
                                                                <?php } ?>
                                                            </ul>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-submit">
                                    <button type="submit" class="btn btn-contact btn-green" name="modify"><span>Modifier Cours</span>
                                    </button>
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
<?php include_once('includes/footer.php'); ?>
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
<script src="assets/js/pages/contact.js"></script>
<script src="assets/js/pages/homepage.js"></script>
<script src="assets/js/muti-select.js"></script>
<script type="text/javascript">
    $('#courses').addClass('active');

    $('input[type="checkbox"]').change(function (e) {
        var checked = $(this).prop("checked"),
            container = $(this).parent(),
            siblings = container.siblings();
        container.find('input[type="checkbox"]').prop({
            indeterminate: false,
            checked: checked
        });
        function checkSiblings(el) {
            var parent = el.parent().parent(),
                all = true;
            el.siblings().each(function () {
                return all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
            });
            if (all && checked) {

                parent.children('input[type="checkbox"]').prop({
                    indeterminate: false,
                    checked: checked
                });

                checkSiblings(parent);

            } else if (all && !checked) {
                parent.children('input[type="checkbox"]').prop("checked", checked);
                parent.children('input[type="checkbox"]').prop("indeterminate", (parent.find('input[type="checkbox"]:checked').length > 0));
                checkSiblings(parent);
            } else {
                el.parents("li").children('input[type="checkbox"]').prop({
                    indeterminate: true,
                    checked: false
                });

            }
        }
        checkSiblings(container);
    });
</script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<script src="assets/js/validation/cours.js"></script>
</body>

</html>