<?php
session_start();
if(!isset($_SESSION['connecter'])) {
    header('Location: /../../education/login.php');
}
setlocale(LC_TIME, "fr_FR");
include_once '/../config/connexion.php';
$users = $conn->query('SELECT * FROM users WHERE id ='.$_SESSION['connecter']);
while($user = $users->fetch()){
    $nom = $user['nom'].' '.$user['prenom'];
}
?>
<header>
    <div class="header-topbar">
        <div class="container">
            <div class="topbar-left pull-left">
                <div class="email"><a href="#"><i class="topbar-icon fa fa-envelope-o"></i><span>paris@mydigitalschool.com</span></a></div>
                <div class="hotline"><a href="#"><i class="topbar-icon fa fa-phone"></i><span>+33 01 55 07 07 65</span></a></div>
            </div>
            <div class="topbar-right pull-right">
                <div class="group-sign-in">
                    <?php if($_SESSION['role'] != "admin"){?>
                        <a href="profile.php" class="login"><?php echo $nom; ?></a>
                    <?php }else{?>
                        <?php echo $nom; ?>
                    <?php }?>
                    <a href="../education/core/login/logout.php" class="register"><i class="fa fa-sign-out" style="font-size: 18px;margin-left: 20px" title="Deconnecter"></i></a></div>
            </div>
        </div>
    </div>
    <div class="header-main homepage-01">
        <div class="container">
            <div class="header-main-wrapper">
                <div class="navbar-heade">
                    <div class="logo pull-left"><a href="index-2.html" class="header-logo"><img src="assets/images/logo-color-1.png" alt=""/></a></div>
                    <button type="button" data-toggle="collapse" data-target=".navigation" class="navbar-toggle edugate-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <nav class="navigation collapse navbar-collapse pull-right">
                    <ul class="nav-links nav navbar-nav">
                        <li id="accueil">
                            <a href="index.php" class="main-menu">Accueil</span></a>
                        </li>
                        <li id="courses">
                            <?php if($_SESSION['role'] == "admin"){?>
                                <a href="admin-cours.php" class="main-menu">Cours</span></a>
                            <?php }else{?>
                                <a href="courses.php" class="main-menu">Cours</span></a>
                            <?php }?>
                        </li>
                        <li id="event">
                            <a href="events.php" class="main-menu">événements</a>
                        </li>
                        <li id="forum">
                            <a href="forum.php?page=1" class="main-menu">Forum</a>
                        </li>
                        <?php if($_SESSION['role'] != "admin"){?>
                            <li id="about">
                                <a href="about-us.php" class="main-menu">A propos</a>
                            </li>
                        <?php }?>
                        <li id="contact">
                            <?php if($_SESSION['role'] != "admin"){?>
                                <a href="contact.php" class="main-menu">Contact</a>
                            <?php }else{?>
                                <a href="scolarite.php" class="main-menu">Scolarité</a>
                            <?php }?>
                        </li>
                        <?php if($_SESSION['role'] == "admin"){?>
                            <li id="user">
                                <a href="user.php" class="main-menu">Utilisateurs</a>
                            </li>
                        <?php }if($_SESSION['role'] != "admin"){?>
                        <li class="button-search">
                            <a href="message.php<?php echo "/../core/message/select.php";?>" class="main-menu" style="font-size: 25px"><i class="fa fa-comments" id="messages"></i></a>
                        </li>
                        <?php }?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>