<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from swlabs.co/edugate/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:20 GMT -->
<head><title>Scolarite</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/color-1.css">
    <link type="text/css" rel="stylesheet" href="assets/css/datatable.css">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
</head>
<body><!-- HEADER-->
<?php include_once('includes/header.php'); ?>
<?php include_once('core/admin/scolarite.php'); ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Scolarite</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li class="active">Scolarite</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-padding courses">
                    <div class="container">
                        <div class="courses-wrapper"><!-- Nav tabs-->
                            <div class="row top-content">
                                <div class="col-md-2">
                                     </div>
                                <div class="col-md-8">
                                    <ul role="tablist" class="nav nav-tabs edugate-tabs">
                                        <li role="presentation" class="active"><a href="#feliere" data-toggle="tab" class="text">Féliere</a></li>
                                        <li role="presentation"><a href="#specialite" data-toggle="tab" class="text">Spécialité</a></li>
                                        <li role="presentation"><a href="#niveau" data-toggle="tab" class="text">Niveau</a></li>
                                        <li role="presentation"><a href="#matiere" data-toggle="tab" class="text">Matiere</a></li>
                                        <li role="presentation"><a href="#module" data-toggle="tab" class="text">Module</a></li>
                                        <li role="presentation"><a href="#programme" data-toggle="tab" class="text">Programme</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                </div>
                            </div>
                            <!-- Tab panes-->
                            <div class="tab-content courses-content">
                                <div id="feliere" role="tabpanel" class="tab-pane fade in active">
                                    <div class="style-show style-grid row">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="form-submit btn btn-blue pull-right" style="margin-bottom:20px; " data-toggle="modal" data-target="#feliereAjout"><span>Ajouter<i class="fa fa-plus"></i></span></button>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered example" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Date de creation</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($fil = $filiere->fetch()) { ?>
                                                    <tr>
                                                        <th><?php echo $fil['nom']?></th>
                                                        <th><?php echo date("F j Y g:i a", strtotime($fil['date_created'])) ?></th>
                                                        <th><center><i class="fa fa-edit editFeliere" data-id="<?php echo $fil['id']?>" data-nom="<?php echo $fil['nom']?>" data-toggle="modal" data-target="#feliereModal"></i></center></th>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="specialite" role="tabpanel" class="tab-pane fade">
                                    <div class="style-show style-grid row">
                                        <div class="style-show style-grid row">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="button" class="form-submit btn btn-blue pull-right" style="margin-bottom:20px; " data-toggle="modal" data-target="#specialiteAjout"><span>Ajouter<i class="fa fa-plus"></i></span></button>
                                                </div>
                                            </div>
                                            <table class="table table-striped table-bordered example" cellspacing="0"
                                                   width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Niveau</th>
                                                    <th>Nom</th>
                                                    <th>Féliere</th>
                                                    <th>Date de creation</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php while ($spec = $specialite->fetch()) { ?>
                                                    <tr>
                                                        <th><?php echo $spec['niveau']?></th>
                                                        <th><?php echo $spec['nom']?></th>
                                                        <th><?php echo $spec['feliere']?></th>
                                                        <th><?php echo date("F j Y g:i a", strtotime($spec['creation'])) ?></th>
                                                        <th><center><i class="fa fa-edit editSpecialite" data-id="<?php echo $spec['id']?>" data-nom="<?php echo $spec['nom']?>" data-feliere="<?php echo $spec['idf']?>" data-niveau="<?php echo $spec['idn']?>" data-toggle="modal" data-target="#specialiteModal"></i></center></th>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="niveau" role="tabpanel" class="tab-pane fade">
                                    <div class="style-show style-grid row">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="form-submit btn btn-blue pull-right" style="margin-bottom:20px; " data-toggle="modal" data-target="#niveauAjout"><span>Ajouter<i class="fa fa-plus"></i></span></button>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered example" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Date de creation</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php while ($niv = $niveauxx->fetch()) { ?>
                                                <tr>
                                                    <th><?php echo $niv['nom']?></th>
                                                    <th><?php echo date("F j Y g:i a", strtotime($niv['date_created'])) ?></th>
                                                    <th>
                                                        <center><i class="fa fa-edit editNiveau" data-id="<?php echo $niv['id']?>" data-nom="<?php echo $niv['nom']?>" data-toggle="modal" data-target="#niveauModal"></i></center>
                                                    </th>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="matiere" role="tabpanel" class="tab-pane fade">
                                    <div class="style-show style-grid row">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="form-submit btn btn-blue pull-right" style="margin-bottom:20px; " data-toggle="modal" data-target="#matiereAjout"><span>Ajouter<i class="fa fa-plus"></i></span></button>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered example" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Date de creation</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php while ($mat = $matiere->fetch()) { ?>
                                                <tr>
                                                    <th><?php echo $mat['nom']?></th>
                                                    <th><?php echo date("F j Y g:i a", strtotime($mat['date_created'])) ?></th>
                                                    <th>
                                                        <center><i class="fa fa-edit editMatiere" data-id="<?php echo $mat['id']?>" data-nom="<?php echo $mat['nom']?>" data-toggle="modal" data-target="#matiereModal"></i></center>
                                                    </th>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="module" role="tabpanel" class="tab-pane fade">
                                    <div class="style-show style-grid row">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="form-submit btn btn-blue pull-right" style="margin-bottom:20px; " data-toggle="modal" data-target="#moduleAjout"><span>Ajouter<i class="fa fa-plus"></i></span></button>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered example" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Date de creation</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php while ($mod = $module->fetch()) { ?>
                                                <tr>
                                                    <th><?php echo $mod['nom']?></th>
                                                    <th><?php echo date("F j Y g:i a", strtotime($mod['date_created'])) ?></th>
                                                    <th>
                                                        <center><i class="fa fa-edit editModule" data-id="<?php echo $mod['id']?>" data-nom="<?php echo $mod['nom']?>" data-toggle="modal" data-target="#moduleModal"></i></center>
                                                    </th>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="programme" role="tabpanel" class="tab-pane fade">
                                    <div class="style-show style-grid row">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="form-submit btn btn-blue pull-right" style="margin-bottom:20px; " data-toggle="modal" data-target="#programmeAjout"><span>Ajouter<i class="fa fa-plus"></i></span></button>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered example" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Niveau</th>
                                                <th>Specialite</th>
                                                <th>Module</th>
                                                <th>Matiere</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php while ($prog = $programme->fetch()) { ?>
                                                <tr>
                                                    <th><?php echo $prog['niveau']?></th>
                                                    <th><?php echo $prog['specialite']?></th>
                                                    <th><?php echo $prog['module']?></th>
                                                    <th><?php echo $prog['matiere']?></th>
                                                    <th><?php echo date("F j Y g:i a", strtotime($prog['creation'])) ?></th>
                                                    <th>
                                                        <center><i class="fa fa-edit editProgramme" data-id="<?php echo $prog['id']?>" data-specialite="<?php echo $prog['ids']?>" data-module="<?php echo $prog['idm']?>" data-matiere="<?php echo $prog['idma']?>" data-toggle="modal" data-target="#programmeModal"></i></center>
                                                    </th>
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
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>

    <!-- modifier feliere modal -->
    <div class="modal fade" id="feliereModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Modifier Féliere</center></h4>
                </div>
                <div class="modal-body">
                    <form action="core/admin/scolarite.php" method="post" id="modifier-password">
                        <div class="form-group">
                            <label for="nomFeliere" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" id="nomFeliere" name="nom">
                        </div>
                        <div class="contact-submit">
                            <input type="hidden" id="idFeliere" name="id">
                            <button type="submit" class="btn btn-contact btn-green" name="modFeliere">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ajouter feliere modal -->
    <div class="modal fade" id="feliereAjout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Ajout Féliere</center></h4>
                </div>
                <div class="modal-body">
                    <form action="core/admin/scolarite.php" method="post" id="modifier-password">
                        <div class="form-group">
                            <label for="nomFeliere" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" name="nom" placeholder="Saisir nom de féliere">
                        </div>
                        <div class="contact-submit">
                            <button type="submit" class="btn btn-contact btn-green" name="ajoutFeliere">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modifier specialite modal -->
    <div class="modal fade" id="specialiteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Modifier Spécialité</center></h4>
                </div>
                <div class="modal-body">
                    <form action="core/admin/scolarite.php" method="post" id="modifier-password">
                        <div class="form-group">
                            <label for="nomFeliere" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" id="nomSpecialite" name="nomSpecialite" placeholder="Saisir nom de spécialité">
                        </div>
                        <div class="form-group">
                            <label for="nomFeliere" class="col-form-label">Féliere:</label>
                            <select class="form-control form-input" name="felSpecialite" id="felSpecialite"  required>
                                <?php while ($fil = $filieres->fetch()) { ?>
                                    <option value="<?php echo $fil['id']?>"> <?php echo $fil['nom']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nomFeliere" class="col-form-label">Niveau:</label>
                            <select class="form-control form-input" name="nivSpecialite"  id="nivSpecialite" required>
                            <?php while ($niv = $niveau->fetch()) { ?>
                                <option value="<?php echo $niv['id']?>"> <?php echo $niv['nom']?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="contact-submit">
                            <input type="hidden" id="idSpecialite" name="idSpecialite">
                            <button type="submit" class="btn btn-contact btn-green" name="modSpecialite">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ajouter specialite modal -->
    <div class="modal fade" id="specialiteAjout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Ajout Spécialité</center></h4>
                </div>
                <div class="modal-body">
                    <form action="core/admin/scolarite.php" method="post" id="modifier-password">
                        <div class="form-group">
                            <label for="nomFeliere" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Saisir nom de spécialité">
                        </div>
                        <div class="form-group">
                            <label for="nomFeliere" class="col-form-label">Féliere:</label>
                            <select class="form-control form-input" name="feliere" id="feliere"  required>
                                <?php while ($fil = $filieress->fetch()) { ?>
                                    <option value="<?php echo $fil['id']?>"> <?php echo $fil['nom']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nomFeliere" class="col-form-label">Niveau:</label>
                            <select class="form-control form-input" name="niveau"  id="niveau" required>
                                <?php while ($niv = $niveaux->fetch()) { ?>
                                    <option value="<?php echo $niv['id']?>"> <?php echo $niv['nom']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="contact-submit">
                            <button type="submit" class="btn btn-contact btn-green" name="ajoutSpecialite">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modifier niveau modal -->
    <div class="modal fade" id="niveauModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Modifier Niveau</center></h4>
                </div>
                <div class="modal-body">
                    <form action="core/admin/scolarite.php" method="post" >
                        <div class="form-group">
                            <label for="nomFeliere" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" id="nomNiveau" name="nom" placeholder="Saisir nom de niveau">
                        </div>
                        <div class="contact-submit">
                            <input type="hidden" id="idNiveau" name="id">
                            <button type="submit" class="btn btn-contact btn-green" name="modNiveau">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ajouter niveau modal -->
    <div class="modal fade" id="niveauAjout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Ajout Niveau</center></h4>
                </div>
                <div class="modal-body">
                    <form action="core/admin/scolarite.php" method="post" id="modifier-password">
                        <div class="form-group">
                            <label for="nomFeliere" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" name="nom" placeholder="Saisir nom de niveau">
                        </div>
                        <div class="contact-submit">
                            <button type="submit" class="btn btn-contact btn-green" name="ajoutNiveau">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modifier matiere modal -->
    <div class="modal fade" id="matiereModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Modifier Matiere</center></h4>
                </div>
                <div class="modal-body">
                    <form action="core/admin/scolarite.php" method="post" >
                        <div class="form-group">
                            <label for="nomFeliere" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" id="nomMatiere" name="nom" placeholder="Saisir nom de niveau">
                        </div>
                        <div class="contact-submit">
                            <input type="hidden" id="idMatiere" name="id">
                            <button type="submit" class="btn btn-contact btn-green" name="modMatiere">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ajouter matiere modal -->
    <div class="modal fade" id="matiereAjout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Ajout Matiere</center></h4>
                </div>
                <div class="modal-body">
                    <form action="core/admin/scolarite.php" method="post" id="modifier-password">
                        <div class="form-group">
                            <label for="nomFeliere" class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" name="nom" placeholder="Saisir nom de matiere">
                        </div>
                        <div class="contact-submit">
                            <button type="submit" class="btn btn-contact btn-green" name="ajoutMatiere">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modifier module modal -->
    <div class="modal fade" id="moduleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Modifier Module</center></h4>
                </div>
                <div class="modal-body">
                    <form action="core/admin/scolarite.php" method="post" >
                        <div class="form-group">
                            <label class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" id="nomModule" name="nom" placeholder="Saisir nom de module">
                        </div>
                        <div class="contact-submit">
                            <input type="hidden" id="idModule name="id">
                            <button type="submit" class="btn btn-contact btn-green" name="modModule">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ajouter module modal -->
    <div class="modal fade" id="moduleAjout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Ajout Module</center></h4>
                </div>
                <div class="modal-body">
                    <form action="core/admin/scolarite.php" method="post" id="modifier-password">
                        <div class="form-group">
                            <label class="col-form-label">Nom:</label>
                            <input type="text" class="form-control" name="nom" placeholder="Saisir nom de module">
                        </div>
                        <div class="contact-submit">
                            <button type="submit" class="btn btn-contact btn-green" name="ajoutModule">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modifier programme modal -->
    <div class="modal fade" id="programmeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Modifier Programme</center></h4>
                </div>
                <div class="modal-body">
                    <form action="core/admin/scolarite.php" method="post" id="modifier-password">
                        <div class="form-group">
                            <label for="progSpecialite" class="col-form-label">Specialite:</label>
                            <select class="form-control form-input" name="progSpecialite" id="progSpecialite"  required>
                                <?php while ($spec = $specialiteM->fetch()) { ?>
                                    <option value="<?php echo $spec['id']?>"> <?php echo $spec['niveau'].' '.$spec['nom'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="progModule" class="col-form-label">Module:</label>
                            <select class="form-control form-input" name="progModule" id="progModule"  required>
                                <?php while ($mod = $moduleM->fetch()) { ?>
                                    <option value="<?php echo $mod['id']?>"> <?php echo $mod['nom']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="progMatiere" class="col-form-label">Matiere:</label>
                            <select class="form-control form-input" name="progMatiere"  id="progMatiere" required>
                                <?php while ($mat = $matiereM->fetch()) { ?>
                                    <option value="<?php echo $mat['id']?>"> <?php echo $mat['nom']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="contact-submit">
                            <input type="hidden" id="idProgramme" name="idProgramme">
                            <button type="submit" class="btn btn-contact btn-green" name="modProgramme">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ajouter programme modal -->
    <div class="modal fade" id="programmeAjout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Ajout Programme</center></h4>
                </div>
                <div class="modal-body">
                    <form action="core/admin/scolarite.php" method="post" id="modifier-password">
                        <div class="form-group">
                            <label class="col-form-label">Specialite:</label>
                            <select class="form-control form-input" name="specialite" id="specialite"  required>
                                <?php while ($spec = $specialiteA->fetch()) { ?>
                                    <option value="<?php echo $spec['id']?>"> <?php echo $spec['niveau'].' '.$spec['nom'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Module:</label>
                            <select class="form-control form-input" name="module" id="module"  required>
                                <?php while ($mod = $moduleA->fetch()) { ?>
                                    <option value="<?php echo $mod['id']?>"> <?php echo $mod['nom']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Matiere:</label>
                            <select class="form-control form-input" name="matiere" id="matiere" required>
                                <?php while ($mat = $matiereA->fetch()) { ?>
                                    <option value="<?php echo $mat['id']?>"> <?php echo $mat['nom']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="contact-submit">
                            <button type="submit" class="btn btn-contact btn-green" name="ajoutProgramme">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.material.min.css"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/b-1.5.1/b-html5-1.5.1/fc-3.2.4/r-2.2.1/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script>
    $('#contact').addClass('active');
    $('.example').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"
        }
    });
</script>
<script>
    $('.editFeliere').click(function(){
        nom = $(this).data('nom');
        id = $(this).data('id');
        $('#nomFeliere').val(nom);
        $('#idFeliere').val(id);
    });

    $('.editSpecialite').click(function(){
        nom = $(this).data('nom');
        feliere = $(this).data('feliere');
        niveau = $(this).data('niveau');
        id = $(this).data('id');
        $('#nomSpecialite').val(nom);
        $('#idSpecialite').val(id);
        $("#felSpecialite option[value='"+feliere+"'").prop('selected', true);
        $("#nivSpecialite option[value='"+niveau+"'").prop('selected', true);
    });

    $('.editNiveau').click(function(){
        nom = $(this).data('nom');
        id = $(this).data('id');
        $('#nomNiveau').val(nom);
        $('#idNiveau').val(id);
    });

    $('.editMatiere').click(function(){
        nom = $(this).data('nom');
        id = $(this).data('id');
        $('#nomMatiere').val(nom);
        $('#idMatiere').val(id);
    });

    $('.editModule').click(function(){
        nom = $(this).data('nom');
        id = $(this).data('id');
        $('#nomModule').val(nom);
        $('#idModule').val(id);
    });

    $('.editProgramme').click(function(){
        specialite = $(this).data('specialite');
        console.log(specialite);
        module = $(this).data('module');
        matiere = $(this).data('matiere');
        id = $(this).data('id');
        $('#idProgramme').val(id);
        $("#progSpecialite option[value='"+specialite+"'").prop('selected', true);
        $("#progModule option[value='"+module+"'").prop('selected', true);
        $("#progMatiere option[value='"+matiere+"'").prop('selected', true);
    });
</script>


</body>

<!-- Mirrored from swlabs.co/edugate/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:28 GMT -->
</html>