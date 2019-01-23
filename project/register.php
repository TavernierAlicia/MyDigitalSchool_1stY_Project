<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from swlabs.co/edugate/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:31:20 GMT -->
<head>
    <title>Register</title>
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
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <!-- STYLE CSS    -->
    <link type="text/css" rel='stylesheet' href='assets/css/color-1.css'>
    <link type="text/css" rel="stylesheet" href='assets/css/menuTab.css'>
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <?php require_once ('core/register/select.php'); ?>
    <style>
        .form-control-feedback {
            position: absolute;
            top: 30px;
            right: 13px;
            z-index: 2;
            color: #f32f2f;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
            pointer-events: none;
        }
    </style>
</head>
<body><!-- HEADER-->
<header><!-- not include--></header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="page-register rlp">
                    <div class="container">
                        <div class="register-wrapper rlp-wrapper">
                            <div class="register-table rlp-table"><img src="assets/images/logo-color-1.png" alt="" class="login"/>
                                <div class="register-title rlp-title">create account or <a href="login.php" class="register-redirection"> connect to your account!</a></div>
                                <div class="tabbable-panel">
                                    <div class="tabbable-line">
                                        <ul class="nav nav-tabs ">
                                            <li class="active">
                                                <a href="#tab_default_1" data-toggle="tab">Etudiant</a>
                                            </li>
                                            <li>
                                                <a href="#tab_default_2" data-toggle="tab">Professeur </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_default_1" style="height: 250px;overflow-y: scroll;overflow-x:hidden ">
                                                <form action="core/register/register.php" method="post" id="ajout-etudiant" style="margin: 25px;">
                                                    <div class="register-form bg-w-form rlp-form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="nom" class="control-label form-label">Nom <span class="highlight">*</span></label>
                                                                <input id="nom" type="text" placeholder="" class="form-control form-input" name="nom" required/>
                                                            </div>
                                                            <div class="col-md-6"><label for="prenom" class="control-label form-label">Prénom <span class="highlight">*</span></label>
                                                                <input id="prenom" type="text" placeholder="" class="form-control form-input" name="prenom" required/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="regpassword" class="control-label form-label">password <span class="highlight">*</span></label>
                                                                <input id="regpassword" type="password" placeholder="" class="form-control form-input" name="password"/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="reregpassword" class="control-label form-label">confirm password <span class="highlight">*</span></label>
                                                                <input id="reregpassword" type="password" placeholder="" class="form-control form-input" required name="confirmPassword"/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="regemail" class="control-label form-label">email <span class="highlight">*</span></label>
                                                                <input id="regemail" type="email" placeholder="" class="form-control form-input" required name="email"/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"><label class="control-label form-label">Filiere</label>
                                                                    <select class="form-control form-input selectbox" required id="feliere" name="feliere">
                                                                        <?php foreach ($felieres as $fil) {?>
                                                                            <option value="<?php echo $fil['id'];?>"><?php echo $fil['nom'];?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-top:-15px;">
                                                                <div class="form-group"><label class="control-label form-label">Specialite</label>
                                                                    <select class="form-control form-input selectbox" required id="specialite" name="specialite">
                                                                        <?php foreach ($specialites as $spec) {?>
                                                                            <option value="<?php echo $spec['id'];?>"><?php echo $spec['nom'];?></option>
                                                                        <?php } ?>
                                                                    </select><!--label.control-label.form-label.warning-label(for="", hidden)-->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-top:-15px;">
                                                                <div class="form-group"><label class="control-label form-label">Niveau</label>
                                                                    <select class="form-control form-input selectbox" required id="niveau" name="niveau">
                                                                        <?php foreach ($niveaux as $niv ) {?>
                                                                            <option value="<?php echo $niv['id'];?>"><?php echo $niv['nom'];?></option>
                                                                        <?php } ?>
                                                                    </select><!--label.control-label.form-label.warning-label(for="", hidden)-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="register-submit">
                                                        <button type="submit" class="btn btn-register btn-green" name="etudiant"><span>create account</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="tab_default_2" style="height: 250px;overflow-y: scroll;overflow-x:hidden ">
                                                <form action="core/register/register.php" method="post" id="ajout-profession" style="margin: 25px;">
                                                    <div class="register-form bg-w-form rlp-form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="nomp" class="control-label form-label">Nom <span class="highlight">*</span></label>
                                                                <input id="nomp" type="text" placeholder="" class="form-control form-input" name="nom" required/>
                                                            </div>
                                                            <div class="col-md-6"><label for="prenomp" class="control-label form-label">Prénom <span class="highlight">*</span></label>
                                                                <input id="prenomp" type="text" placeholder="" class="form-control form-input" name="prenom" required/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="regpasswordp" class="control-label form-label">password <span class="highlight">*</span></label>
                                                                <input id="regpasswordp" type="password" placeholder="" class="form-control form-input" name="password"/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="reregpasswordp" class="control-label form-label">confirm password <span class="highlight">*</span></label>
                                                                <input id="reregpasswordp" type="password" placeholder="" class="form-control form-input" required name="confirmPassword"/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="regemailp" class="control-label form-label">email <span class="highlight">*</span></label>
                                                                <input id="regemailp" type="email" placeholder="" class="form-control form-input" required name="email"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="register-submit">
                                                        <button type="submit" class="btn btn-register btn-green" name="profeseur"><span>create account</span></button>
                                                    </div>
                                                </form>
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
<!-- FOOTER-->
<footer></footer>
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
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<script src="assets/js/validation/register.js"></script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE--></body>
<script>
    $('#feliere').change(function(){
        id = $('#feliere option:selected').val();
        $.ajax({
            url:'core/register/selectJSON.php?fid='+id,
            success: function (data) {
                info = JSON.parse(data);
                addCustom(info['specialite'],'specialite');
                addCustom(info['niveau'],'niveau');
            }
        });
    });

    $('#specialite').change(function(){
        id = $('#specialite option:selected').val();
        $.ajax({
            url:'core/register/selectJSON.php?sid='+id,
            success: function (data) {
                info = JSON.parse(data);
                addCustom(info['niveau'],'niveau');
            }
        });
    });


    function addCustom(info,id){
        spec ="";
        spc="";
        for(var i= 0; i < info.length; i++){
            if (i==0){
                spc='<li style="list-style: none;"><a href="#'+info[i]['id']+'" rel="'+info[i]['id']+'" style="color:#5e6d77">'+info[i]['nom']+'</a></li>';
            }
            spec +='<li><a href="#'+info[i]['id']+'" rel="'+info[i]['id']+'">'+info[i]['nom']+'</a></li>';
        }
        sb =$('#'+id).attr('sb');
        $('#sbOptions_'+sb).html(spec);
        $('#sbSelector_'+sb).html(spc);
        $('#id').html(spec);
    }
</script>
</html>