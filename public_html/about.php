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
    <h3><?= _ABOUT_HEADER_DESCRIPTION_INTRO ?></h3>
</section>
<br/>
<section class="section-item section-item-orange">
    <div style="float: left">
        <header><?= _ABOUT_WHO_WE_ARE_TITLE ?></header>
        <main>
            <ul>
                <li><?= _ABOUT_WHO_WE_ARE_1 ?></li>
                <br/>
                <li><?= _ABOUT_WHO_WE_ARE_2 ?></li>
                <br/>
                <li><?= _ABOUT_WHO_WE_ARE_3 ?></li>
                <br/>
                <li><?= _ABOUT_WHO_WE_ARE_4 ?></li>
            </ul>
        </main>
    </div>
</section>

<section class="section-separator"></section>

<section class="section-item section-item-orange">
    <div style="float: left">
        <header><?= _ABOUT_HOW_WE_WORK_TITLE ?></header>
        <main>
            <ul>
                <li><?= _ABOUT_HOW_WE_WORK_1 ?></li>
                <br/>
                <li><?= _ABOUT_HOW_WE_WORK_2 ?></li>
                <br/>
                <li><?= _ABOUT_HOW_WE_WORK_3 ?></li>
                <br/>
                <li><?= _ABOUT_HOW_WE_WORK_4 ?></li>
            </ul>
        </main>
    </div>
</section>

<section class="section-separator"></section>

<section class="section-item section-item-orange">
    <div style="float: left">
        <header><?= _ABOUT_WHY_CHOOSE_US_TITLE ?></header>
        <main>
            <ul>
                <li><?= _ABOUT_WHY_CHOOSE_US_1 ?></li>
                <br/>
                <li><?= _ABOUT_WHY_CHOOSE_US_2 ?></li>
                <br/>
                <li><?= _ABOUT_WHY_CHOOSE_US_3 ?></li>
                <br/>
                <li><?= _ABOUT_WHY_CHOOSE_US_4 ?></li>
            </ul>
        </main>
    </div>
</section>

<?php
    require_once("./layout/footer.php");
?>