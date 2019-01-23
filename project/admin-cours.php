<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from swlabs.co/edugate/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:20 GMT -->
<head><title>Courses</title>
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
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/datatable.css">
    <!-- STYLE CSS    -->
    <link type="text/css" rel="stylesheet" href="assets/css/color-1.css">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
</head>
<body><!-- HEADER-->
<?php include_once('includes/header.php'); ?>
<?php include_once('core/admin/cours.php'); ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Liste des
                                Cours</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="courses.php">Cours</a></li>
                                <li class="active">Liste</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-padding courses">
                    <div class="container">
                        <div class="courses-wrapper">
                            <div class="courses-wrapper"><!-- Nav tabs-->
                                <div class="group-title-index"><h4 class="top-title">Cours</h4>
                                    <h2 class="center-title">Liste des cours </h2>
                                    <div class="bottom-title"><i class="bottom-icon icon-a-01-01"></i></div>
                                </div>
                                <?php if ($_SESSION['role'] == "professeur") { ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="ajout-cours.php">
                                                <button type="button" class="form-submit btn btn-blue pull-right" style="margin-bottom:20px; "><span>Ajouter<i class="fa fa-plus"></i></span></button>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                                <!-- Tab panes-->
                                <div class="tab-content courses-content">
                                <!-- Nav tabs-->
                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Matiere</th>
                                        <th>Specialite</th>
                                        <th>Niveau</th>
                                        <th>Date</th>
                                        <th>remarque</th>
                                        <th>document</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($cour = $cours->fetch()){
                                        $doc = explode(",", $cour['document']);?>
                                    <tr>
                                        <td><?php echo $cour['nom'];?></td>
                                        <td><?php echo $cour['matiere'];?></td>
                                        <td><?php echo $cour['specialite'];?></td>
                                        <td><?php echo $cour['niveau'];?></td>
                                        <td><?php echo $cour['dateC'];?></td>
                                        <td><?php echo substr($cour['remarque'],0,90).'...';?></td>
                                        <td><?php foreach($doc as $d){ ?>
                                                <a href="<?php echo 'uploads/cours/'.trim($d);?>" target="_blank" download><i class="mr18 fa fa-file-text"></i></a>
                                            <?php } ?></td>
                                        <td><a href="modifier-cours.php?idc=<?php echo $cour['id']; ?>" target="_blank"><i class="fa fa-edit"></i></a> <i class="fa fa-trash delete-cours" data-id="<?php echo $cour['id']; ?>" data-spec="<?php echo $cour['specid']; ?>"></i></td>
                                    </tr>
                                    <?php } ?>
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
<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.material.min.css"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/dt-1.10.16/b-1.5.1/b-html5-1.5.1/fc-3.2.4/r-2.2.1/datatables.min.js"></script>
<script type="text/javascript">
    $('#courses').addClass('active');
    $('#example').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
        }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script>
    $('.delete-cours').click(function(){
        id= $(this).data('id');
        spec= $(this).data('spec');
        $.confirm({
            title: 'Confirm!',
            content: 'Simple confirm!',
            theme: 'supervan',
            buttons: {
                confirm: function () {
                    document.location.href='core/cours/liste.php?idd='+id+'&spec='+spec;
                },
                cancel: function () {

                }
            }
        });
    });

</script>
</body>

</html>