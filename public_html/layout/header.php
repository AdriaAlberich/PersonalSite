<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">
    <head>
        <title><?= $_SESSION['page_title'] ?></title>
        <meta charset="UTF-8">
        <meta name="description" content="Adria Alberich personal website, portfolio">
        <meta name="keywords" content="web,portfolio,app,development,it,solutions,personal,soluciones,aplicaciones,TIC,programación">
        <meta name="author" content="Adria Alberich">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../assets/img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../assets/img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../assets/img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">
        <link rel="manifest" href="./manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../assets/img/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" type="text/css" href="../assets/css/site.css">
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140464621-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-140464621-1');
        </script>
        <script type="text/javascript" src="../assets/js/app.js"></script>
        <header>
            <div id="nav" class="nav">
                <!--<span id="logo"><img src="../assets/img/logo.png"/></span>-->
                <a href="about" <?php if($_SESSION['page_name'] == 'about') { echo "class=\"navactive\""; }?>><?= _ABOUT_NAME ?></a>
                <a href="portfolio" <?php if($_SESSION['page_name'] == 'portfolio') { echo "class=\"navactive\""; }?>><?= _PORTFOLIO_NAME ?></a>
                <a href="contact" <?php if($_SESSION['page_name'] == 'contact') { echo "class=\"navactive\""; }?>><?= _CONTACT_NAME ?></a>
                <div class="dropdown">
                    <button class="dropbtn"><?php if(isset($_SESSION['lang'])) { switch($_SESSION['lang']) { case 'ca': echo 'Idioma'; break; case 'es': echo 'Idioma'; break; case 'en': echo 'Language'; break; default: echo 'Idioma'; } }else{ echo 'Idioma'; } ?></button>
                    <div class="dropdown-content">
                        <a href="#" onclick="changeLang('en');"><img src="../assets/img/flag_en.png">&nbsp;English</a>
                        <a href="#" onclick="changeLang('ca');"><img src="../assets/img/flag_ca.png">&nbsp;Català</a>
                        <a href="#" onclick="changeLang('es');"><img src="../assets/img/flag_es.png">&nbsp;Español</a>
                    </div>
                </div>
                <a id="collapseBtn" class="icon" href="javascript:void(0);" onclick="navCollapse()">+</a>
            </div>
        </header>