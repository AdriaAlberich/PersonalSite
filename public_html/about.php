<?php
    session_start();

    require_once(realpath(dirname(__FILE__) . "/../resources/lang_setup.php"));

    $_SESSION['page_title'] = _MAIN_TITLE . _ABOUT_TITLE;

    $_SESSION['page_name'] = 'about';
     
    require_once("./layout/header.php");
?>

<section class="center">
    <h1><?= _ABOUT_HEADER_TITLE ?></h1>
</section>
<br/>
<section class="section-item section-item-orange">
    <div style="float: left">
        <img src="./assets/img/photo.jpg"/>
        <header><?= _ABOUT_WHOIAM_TITLE ?></header>
        <main>
            <p><?= _ABOUT_WHOIAM_P1 ?></p>
            <p><?= _ABOUT_WHOIAM_P2 ?></p>
            <p><?= _ABOUT_WHOIAM_P3 ?></p>
            <p><a href="https://www.linkedin.com/in/adri%C3%A0-alberich-jaume-744191122/" target="_blank" class="button" style="max-width: 200px"><img src="./assets/img/linkedinlogo.png" style="width:64px;height:64px"/><br/>Linkedin</a></p>
        </main>
        <header><?= _ABOUT_HOWIWORK_TITLE ?></header>
        <main>
            <p><?= _ABOUT_HOWIWORK_P1 ?></p>
            <p><?= _ABOUT_HOWIWORK_P2 ?></p>
            <p><?= _ABOUT_HOWIWORK_P3 ?></p>
            <p><a href="portfolio" target="_self" class="button" style="max-width: 200px"><?= _PORTFOLIO_NAME ?></a></p>
        </main>
        <header><?= _ABOUT_WANNAHIRE_TITLE ?></header>
        <main>
            <p><?= _ABOUT_WANNAHIRE_P1 ?></p>
            <p><a href="contact" target="_self" class="button" style="max-width: 200px"><?= _CONTACT_NAME ?></a></p>
        </main>
    </div>
</section>

<?php
    require_once("./layout/footer.php");
?>