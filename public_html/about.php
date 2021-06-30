<?php
    session_start();

    require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));

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
        <header><?= _ABOUT_WHOIAM_TITLE ?></header>
        <main>
            <p><?= _ABOUT_WHOIAM_INTRO ?></p>
        </main>
    </div>
</section>

<?php
    require_once("./layout/footer.php");
?>