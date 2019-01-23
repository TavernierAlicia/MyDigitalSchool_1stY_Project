<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from swlabs.co/edugate/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 10:32:48 GMT -->
<head>
    <title>Messages</title>
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
    <link type="text/css" rel="stylesheet" href="assets/css/chat.css">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
</head>
<body><!-- HEADER-->
<?php include_once('includes/header.php'); ?>
<?php include_once('core/message/select.php'); ?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!-- page-title-content -->
                            <h2 class="captions">Message</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php">Accueil</a></li>
                                <li class="active">Message</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="section section-padding contact-main">
                    <div class="container">
                        <div class="contact-main-wrapper">
                            <div class="content container-fluid bootstrap snippets">
                                <div class="col-md-12">
                                    <button type="button" class="form-submit btn btn-blue pull-right add-message" data-toggle="modal" data-target="#exampleModal" data-whatever="" style="margin-bottom:60px; "><span>Ajouter<i class="fa fa-plus"></i></span></button>
                                </div>
                                <div class="row row-broken">
                                    <?php if ($count > 0) { ?>
                                        <div class="col-sm-3 col-xs-12">
                                            <div class="col-inside-lg decor-default chat"
                                                 style="overflow: hidden; outline: none;" tabindex="5000">
                                                <div class="chat-users">
                                                    <?php while ($user = $users->fetch()) {
                                                        if ($user['utilisateur1'] != $_SESSION['connecter'] && $user['utilisateur2'] == $_SESSION['connecter']) {
                                                            $name = $conn->query('SELECT CONCAT(nom," ",prenom),id FROM users WHERE id=' . $user['utilisateur1']);
                                                        } else if ($user['utilisateur1'] == $_SESSION['connecter'] && $user['utilisateur2'] != $_SESSION['connecter']) {
                                                            $name = $conn->query('SELECT CONCAT(nom," ",prenom),id FROM users WHERE id=' . $user['utilisateur2']);
                                                        }
                                                        $nom = $name->fetch(); ?>
                                                        <a href="message.php?id=<?php echo $nom['id']; ?>" class="thread">
                                                     <div class="user <?php if(($nom['id'] == $id) || (isset($_GET['id']) && $nom['id'] == $_GET['id'])){ echo 'user-active'; } ?>">
                                                                <div class="avatar">
                                                                    <img src="assets/images/people-avatar-7.png" alt="User name">
                                                                    <div class="status on"></div>
                                                                </div>
                                                                <div class="name"><?= $nom[0]; ?></div>
                                                                <div class="mood" style="float:right;"> <?php echo intervalDate($user['date_modify'])?></div>
                                                            </div>
                                                        </a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-xs-12 chat" style="overflow: auto; outline: none;" tabindex="5001" id="chat">
                                        <div class="col-inside-lg decor-default">
                                        <div class="chat-body">
                                        <?php if ($messages->rowCount() > 0) {
                                            while ($m = $msg->fetch()) {
                                                if ($m['receiver'] == $_SESSION['connecter']) {
                                                    $utilisateur = $conn->query("SELECT CONCAT(nom ,' ',prenom)AS'name' FROM users WHERE id=" . $m['sender']);
                                                    $ut = $utilisateur->fetch(); ?>
                                                    <div class="answer left">
                                                        <div class="avatar">
                                                            <img src="assets/images/people-avatar-7.png"
                                                                 alt="User name">
                                                            <div class="status online"></div>
                                                        </div>
                                                        <div class="name"><?php echo $ut['name']; ?></div>
                                                        <div class="text">
                                                            <?php echo $m['contenu']; ?>
                                                        </div>
                                                        <div class="time">
                                                            <?php echo intervalDate($m['date_created'])?>
                                                        </div>
                                                    </div>
                                                <?php } else if ($m['sender'] == $_SESSION['connecter']) {
                                                    $utilisateurs = $conn->query("SELECT CONCAT(nom ,' ',prenom)AS'name' FROM users WHERE id=" . $m['sender']);
                                                    $utt = $utilisateurs->fetch(); ?>
                                                    <div class="answer right">
                                                        <div class="avatar">
                                                            <img src="assets/images/people-avatar-7.png" alt="<?php echo $utt['name']; ?>"><div class="status busy"></div>
                                                        </div>
                                                        <div class="name"><?php echo $utt['name']; ?></div>
                                                        <div class="text">
                                                            <?php echo $m['contenu']; ?>
                                                        </div>
                                                        <div class="time">
                                                            <?php echo intervalDate($m['date_created'])?>
                                                        </div>
                                                    </div>
                                                <?php }
                                            } ?>
                                            <div class="col-md-12">
                                                <form action="core/message/send.php" method="post">
                                                    <div class="form-group">
                                                            <textarea class="send-message" rows="2" id="message" required name="message" placeholder="Saisir votre message"></textarea>
                                                    </div>
                                                    <button type="submit" class="send-m" name="sendd"><span class="fa fa-send send-b"></span></button>
                                                    <input type="hidden" name="sender" value="<?php echo $sender; ?>">
                                                    <input type="hidden" name="receiver" value="<?php echo $receiver; ?>">
                                                </form>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                        <?php } else { ?>
                                            <h1 style="text-align: center">Aucune Message</h1>
                                        <?php }
                                    } else { ?>
                                        <h1 style="text-align: center">Aucune Discussion</h1>
                                    <?php } ?>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><center>Nouveau Message</center></h4>
            </div>
            <div class="modal-body">
                <form action="core/message/send.php" method="post">
                    <div class="form-group">
                        <label class="control-label form-label">Recipient</label>
                        <input type="email" placeholder="Saisir l'email de recepteur" class="form-control form-input" name="nom">
                        <!--label.control-label.form-label.warning-label(for="", hidden)-->
                    </div>

                    <div class="contact-question form-group">
                        <label class="control-label form-label">Message<span class="highlight">*</span></label>
                        <textarea class="form-control form-input" required="" name="message"></textarea>
                    </div>

                    <div class="contact-submit">
                        <button type="submit" class="btn btn-contact btn-green" name="contact"><span>ENVOYER</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script type="text/javascript">
    $("#chat").scrollTop($("#chat").offset().top + $("#chat").outerHeight(true));
    $('#messages').css({'color': '#008ACF'});
    $(".chat").niceScroll();
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>
</body>

</html>