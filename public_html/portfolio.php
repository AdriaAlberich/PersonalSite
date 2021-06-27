<?php
    session_start();

    require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));

    require_once(realpath(dirname(__FILE__) . "/../resources/lang_setup.php"));

    $_SESSION['page_title'] = _MAIN_TITLE . _SERVICES_TITLE;

    $_SESSION['page_name'] = 'portfolio';
     
    require_once("./layout/header.php");
?>

<section class="center">
    <h1><?= _SERVICES_HEADER_TITLE ?></h1>
    <h3><?= _SERVICES_HEADER_DESCRIPTION_INTRO ?></h3>
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
        <a href="#web" class="button"><?= _SERVICES_CARD_BUTTON_LEARNMORE ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_ERP_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-team"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_ERP_DESCRIPTION ?>
        </main>
        <a href="#erp" class="button"><?= _SERVICES_CARD_BUTTON_LEARNMORE ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_HOSTING_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-servers"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_HOSTING_DESCRIPTION ?>
        </main>
        <a href="#hosting" class="button"><?= _SERVICES_CARD_BUTTON_LEARNMORE ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_DOMAINS_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-global"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_DOMAINS_DESCRIPTION ?>
        </main>
        <a href="#domains" class="button"><?= _SERVICES_CARD_BUTTON_LEARNMORE ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_EMAIL_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-mail"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_EMAIL_DESCRIPTION ?>
        </main>
        <a href="#email" class="button"><?= _SERVICES_CARD_BUTTON_LEARNMORE ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_NEWSLETTER_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-magazine"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_NEWSLETTER_DESCRIPTION ?>
        </main>
        <a href="#newsletter" class="button"><?= _SERVICES_CARD_BUTTON_LEARNMORE ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_SEO_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-search"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_SEO_DESCRIPTION ?>
        </main>
        <a href="#seo" class="button"><?= _SERVICES_CARD_BUTTON_LEARNMORE ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _SERVICES_CARD_OTHERS_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-coding"></figure>
        <main class="card-description">
            <?= _SERVICES_CARD_OTHERS_DESCRIPTION ?>
        </main>
        <a href="#other" class="button"><?= _SERVICES_CARD_BUTTON_LEARNMORE ?></a>
    </article>
</section>

<section class="section-item section-item-orange" id="web">
    <div style="float: left">
        <header><?= _SERVICES_SECTION_WEBDESIGN_TITLE ?></header>
        <main>
            <ul>
                <li><?= _SERVICES_SECTION_WEBDESIGN_FEATURES_1 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_WEBDESIGN_FEATURES_2 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_WEBDESIGN_FEATURES_3 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_WEBDESIGN_FEATURES_4 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_WEBDESIGN_FEATURES_5 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_WEBDESIGN_FEATURES_6 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_WEBDESIGN_FEATURES_7 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_WEBDESIGN_FEATURES_8 ?></li>
            </ul>
        </main>
    </div>
</section>

<section class="section-separator"></section>

<section class="section-item section-item-orange" id="erp">
    <div style="float: left">
        <header><?= _SERVICES_SECTION_ERP_TITLE ?></header>
        <main>
            <ul>
                <li><?= _SERVICES_SECTION_ERP_FEATURES_1 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_ERP_FEATURES_2 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_ERP_FEATURES_3 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_ERP_FEATURES_4 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_ERP_FEATURES_5 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_ERP_FEATURES_6 ?></li>
            </ul>
        </main>
    </div>
</section>

<section class="section-separator"></section>

<section class="section-item section-item-orange" id="hosting">
    <div style="float: left">
        <header><?= _SERVICES_SECTION_HOSTING_TITLE ?></header>
        <main>
            <ul>
                <li><?= _SERVICES_SECTION_HOSTING_FEATURES_1 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_HOSTING_FEATURES_2 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_HOSTING_FEATURES_3 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_HOSTING_FEATURES_4 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_HOSTING_FEATURES_5 ?></li>
                <br/>
                <li><?= _SERVICES_SECTION_HOSTING_FEATURES_6 ?></li>
            </ul>
            <span><em><?= _SERVICES_SECTION_HOSTING_CLARIFICATION ?></em></span>
        </main>
    </div>
</section>

<section class="section-separator"></section>

<section class="section-item section-item-orange" id="domains">
    <header><?= _SERVICES_SECTION_DOMAINS_TITLE ?></header>
    <main>
        <ul>
            <li><?= _SERVICES_SECTION_DOMAINS_FEATURES_1 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_DOMAINS_FEATURES_2 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_DOMAINS_FEATURES_3 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_DOMAINS_FEATURES_4 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_DOMAINS_FEATURES_5 ?></li>
        </ul>
    </main>
</section>

<section class="section-separator"></section>

<section class="section-item section-item-orange" id="email">
    <header><?= _SERVICES_SECTION_EMAIL_TITLE ?></header>
    <main>
        <ul>
            <li><?= _SERVICES_SECTION_EMAIL_FEATURES_1 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_EMAIL_FEATURES_2 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_EMAIL_FEATURES_3 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_EMAIL_FEATURES_4 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_EMAIL_FEATURES_5 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_EMAIL_FEATURES_6 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_EMAIL_FEATURES_7 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_EMAIL_FEATURES_8 ?></li>
        </ul>
    </main>
</section>

<section class="section-separator"></section>

<section class="section-item section-item-orange" id="newsletter">
    <header><?= _SERVICES_SECTION_NEWSLETTER_TITLE ?></header>
    <main>
        <ul>
            <li><?= _SERVICES_SECTION_NEWSLETTER_FEATURES_1 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_NEWSLETTER_FEATURES_2 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_NEWSLETTER_FEATURES_3 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_NEWSLETTER_FEATURES_4 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_NEWSLETTER_FEATURES_5 ?></li>
        </ul>
    </main>
</section>

<section class="section-separator"></section>

<section class="section-item section-item-orange" id="seo">
    <header><?= _SERVICES_SECTION_SEO_TITLE ?></header>
    <main>
        <ul>
            <li><?= _SERVICES_SECTION_SEO_FEATURES_1 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_SEO_FEATURES_2 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_SEO_FEATURES_3 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_SEO_FEATURES_4 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_SEO_FEATURES_5 ?></li>
        </ul>
    </main>
</section>

<section class="section-separator"></section>

<section class="section-item section-item-orange" id="other">
    <header><?= _SERVICES_SECTION_OTHERS_TITLE ?></header>
    <main>
        <ul>
            <li><?= _SERVICES_SECTION_OTHERS_FEATURES_1 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_OTHERS_FEATURES_2 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_OTHERS_FEATURES_3 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_OTHERS_FEATURES_4 ?></li>
            <br/>
            <li><?= _SERVICES_SECTION_OTHERS_FEATURES_5 ?></li>
        </ul>
    </main>
</section>

<?php
    require_once("./layout/footer.php");
?>