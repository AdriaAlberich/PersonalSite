<?php
    session_start();

    require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));

    require_once(realpath(dirname(__FILE__) . "/../resources/lang_setup.php"));

    $_SESSION['page_title'] = _MAIN_TITLE . _HOME_TITLE;

    $_SESSION['page_name'] = 'home';
     
    require_once("./layout/header.php");
?>

<section class="slider">
    <div class="slides">
        <div id="slider-item1" class="slider-item">
            <div style="padding-left: 100px; padding-top: 100px;">
                <h1><?= _HOME_SLIDE_FIRST_TITLE ?></h1>
                <h3><?= _HOME_SLIDE_FIRST_DESCRIPTION ?></h3>
            </div>
        </div>
        <div id="slider-item2" class="slider-item">
            <div style="padding-left: 100px; padding-top: 100px;">
                <h1><?= _HOME_SLIDE_SECOND_TITLE ?></h1>
                <h3><?= _HOME_SLIDE_SECOND_DESCRIPTION ?></h3>
            </div>
        </div>
        <div id="slider-item3" class="slider-item">
            <div style="padding-left: 100px; padding-top: 100px;">
                <h1><?= _HOME_SLIDE_THIRD_TITLE ?></h1>
                <h3><?= _HOME_SLIDE_THIRD_DESCRIPTION ?></h3>
            </div>
        </div>
        <div id="slider-item4" class="slider-item">
            <div style="padding-left: 100px; padding-top: 100px;">
                <h1><?= _HOME_SLIDE_FORTH_TITLE ?></h1>
                <h3><?= _HOME_SLIDE_FORTH_DESCRIPTION ?></h3>
            </div>
        </div>
        <div id="slider-item5" class="slider-item">
            <div style="padding-left: 100px; padding-top: 100px;">
                <h1><?= _HOME_SLIDE_FIFTH_TITLE ?></h1>
                <h3><?= _HOME_SLIDE_FIFTH_DESCRIPTION ?></h3>
            </div>
        </div>
    </div>
</section>
<br/>
<section class="center">
    <h1><?= _HOME_HEADER_TITLE ?></h1>
    <h3><?= _HOME_HEADER_DESCRIPTION_INTRO ?></h3>
</section>
<br/>
<section class="card-container">
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_WEBDESIGN_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-web"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_WEBDESIGN_DESCRIPTION ?>
        </main>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_ERP_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-team"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_ERP_DESCRIPTION ?>
        </main>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_HOSTING_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-servers"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_HOSTING_DESCRIPTION ?>
        </main>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_DOMAINS_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-global"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_DOMAINS_DESCRIPTION ?>
        </main>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_EMAIL_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-mail"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_EMAIL_DESCRIPTION ?>
        </main>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_NEWSLETTER_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-magazine"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_NEWSLETTER_DESCRIPTION ?>
        </main>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_SEO_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-search"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_SEO_DESCRIPTION ?>
        </main>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_OTHERS_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-coding"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_OTHERS_DESCRIPTION ?>
        </main>
    </article>
</section>
<br/>
<section class="button-centered">
    <a href="services" class="button"><?= _HOME_GOTO_SERVICES ?></a>
</section>
<br/>
<section class="center">
    <h2><?= _HOME_OFFERS_TITLE ?></h2>
</section>
<br/>
<section class="card-container">
    <article class="card">
        <header class="card-title">
            <h3><?= _HOME_OFFERS_1_TITLE ?></h3>
        </header>
        <main class="card-description">
        <?= _HOME_OFFERS_1_DESCRIPTION ?>
        </main>
        <a href="contact" class="button"><?= _HOME_OFFERS_CONTRACT ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _HOME_OFFERS_2_TITLE ?></h3>
        </header>
        <main class="card-description">
        <?= _HOME_OFFERS_2_DESCRIPTION ?>
        </main>
        <a href="contact" class="button"><?= _HOME_OFFERS_CONTRACT ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _HOME_OFFERS_3_TITLE ?></h3>
        </header>
        <main class="card-description">
        <?= _HOME_OFFERS_3_DESCRIPTION ?>
        </main>
        <a href="contact" class="button"><?= _HOME_OFFERS_CONTRACT ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _HOME_OFFERS_4_TITLE ?></h3>
        </header>
        <main class="card-description">
        <?= _HOME_OFFERS_4_DESCRIPTION ?>
        </main>
        <a href="contact" class="button"><?= _HOME_OFFERS_CONTRACT ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _HOME_OFFERS_5_TITLE ?></h3>
        </header>
        <main class="card-description">
        <?= _HOME_OFFERS_5_DESCRIPTION ?>
        </main>
        <a href="contact" class="button"><?= _HOME_OFFERS_CONTRACT ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _HOME_OFFERS_6_TITLE ?></h3>
        </header>
        <main class="card-description">
        <?= _HOME_OFFERS_6_DESCRIPTION ?>
        </main>
        <a href="contact" class="button"><?= _HOME_OFFERS_CONTRACT ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _HOME_OFFERS_7_TITLE ?></h3>
        </header>
        <main class="card-description">
        <?= _HOME_OFFERS_7_DESCRIPTION ?>
        </main>
        <a href="contact" class="button"><?= _HOME_OFFERS_CONTRACT ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _HOME_OFFERS_8_TITLE ?></h3>
        </header>
        <main class="card-description">
        <?= _HOME_OFFERS_8_DESCRIPTION ?>
        </main>
        <a href="contact" class="button"><?= _HOME_OFFERS_CONTRACT ?></a>
    </article>
</section>
<br/>
<section class="center">
    <h2><?= _HOME_TECHNOLOGIES ?></h2>
</section>
<br/>
<section class="section-centered images">
    <img class="img-responsive" src="./assets/img/html.png"/>
    <img class="img-responsive" src="./assets/img/php.png"/>
    <img class="img-responsive" src="./assets/img/wordpress.png"/>
    <img class="img-responsive" src="./assets/img/odoo.png"/>
    <img class="img-responsive" src="./assets/img/laravel.png"/>
    <img class="img-responsive" src="./assets/img/plesk.png"/>
</section>

<?php
    require_once("./layout/footer.php");
?>