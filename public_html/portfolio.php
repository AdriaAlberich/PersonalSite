<?php
    session_start();

    require_once(realpath(dirname(__FILE__) . "/../resources/lang_setup.php"));

    $_SESSION['page_title'] = _MAIN_TITLE . _PORTFOLIO_TITLE;

    $_SESSION['page_name'] = 'portfolio';
     
    require_once("./layout/header.php");
?>

<section class="center">
    <h1><?= _PORTFOLIO_HEADER_TITLE ?></h1>
    <h3><?= _PORTFOLIO_HEADER_DESCRIPTION_INTRO ?></h3>
</section>
<br/>
<section class="card-container">
    <article class="card">
        <header class="card-title">
            <h3><?= _PORTFOLIO_CARD_PERSONALSITE_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-personal"></figure>
        <main class="card-description">
            <?= _PORTFOLIO_CARD_PERSONALSITE_DESCRIPTION ?>
        </main>
        <a href="#web" class="button"><?= _PORTFOLIO_CARD_BUTTON_LEARNMORE ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _PORTFOLIO_CARD_SADEGELSTOCK_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-sadegel"></figure>
        <main class="card-description">
            <?= _PORTFOLIO_CARD_SADEGELSTOCK_DESCRIPTION ?>
        </main>
        <a href="#sadegelstock" class="button"><?= _PORTFOLIO_CARD_BUTTON_LEARNMORE ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _PORTFOLIO_CARD_REDRP_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-redrp"></figure>
        <main class="card-description">
            <?= _PORTFOLIO_CARD_REDRP_DESCRIPTION ?>
        </main>
        <a href="#redrp" class="button"><?= _PORTFOLIO_CARD_BUTTON_LEARNMORE ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _PORTFOLIO_CARD_MYCHEF_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-mychef"></figure>
        <main class="card-description">
            <?= _PORTFOLIO_CARD_MYCHEF_DESCRIPTION ?>
        </main>
        <a href="#mychef" class="button"><?= _PORTFOLIO_CARD_BUTTON_LEARNMORE ?></a>
    </article>
    <article class="card">
        <header class="card-title">
            <h3><?= _PORTFOLIO_CARD_GAMEINSTANCE_TITLE ?></h3>
        </header>
        <figure class="card-icon card-icon-coding"></figure>
        <main class="card-description">
            <?= _PORTFOLIO_CARD_GAMEINSTANCE_DESCRIPTION ?>
        </main>
        <a href="#gameinstance" class="button"><?= _PORTFOLIO_CARD_BUTTON_LEARNMORE ?></a>
    </article>
</section>

<section class="section-item section-item-orange" id="web">
    <div style="float: left">
        <header><?= _PORTFOLIO_SECTION_PERSONALSITE_TITLE ?></header>
        <main>
            <p><?= _PORTFOLIO_SECTION_PERSONALSITE_DESCRIPTION ?></p>
            <p><a href="https://github.com/AdriaAlberich/PersonalSite" target="_blank" class="button" style="max-width: 200px"><img src="./assets/img/github.png" style="width:32px;height:32px"/><br/><?= _PORTFOLIO_SECTION_REPOSITORY ?></a></p>
        </main>
    </div>
</section>

<section class="section-separator"></section>

<section class="section-item section-item-orange" id="sadegelstock">
    <div style="float: left">
        <header><?= _PORTFOLIO_SECTION_SADEGELSTOCK_TITLE ?></header>
        <img src="./assets/img/sadegelstock.png" style="width: 768px; height: auto;"/>
        <main>
            <p><?= _PORTFOLIO_SECTION_SADEGELSTOCK_DESCRIPTION ?></p>
            <p><a href="https://github.com/AdriaAlberich/SadegelStock" target="_blank" class="button" style="max-width: 200px"><img src="./assets/img/github.png" style="width:32px;height:32px"/><br/><?= _PORTFOLIO_SECTION_REPOSITORY ?></a></p>
        </main>
    </div>
</section>

<section class="section-separator"></section>

<section class="section-item section-item-orange" id="redrp">
    <div style="float: left">
        <header><?= _PORTFOLIO_SECTION_REDRP_TITLE ?></header>
        <main>
            <p><?= _PORTFOLIO_SECTION_REDRP_DESCRIPTION ?></p>
            <p><a href="https://github.com/AdriaAlberich/RedRP" target="_blank" class="button" style="max-width: 200px"><img src="./assets/img/github.png" style="width:32px;height:32px"/><br/><?= _PORTFOLIO_SECTION_REPOSITORY ?></a></p>
        </main>
    </div>
</section>

<section class="section-separator"></section>

<section class="section-item section-item-orange" id="mychef">
    <header><?= _PORTFOLIO_SECTION_MYCHEF_TITLE ?></header>
    <img src="./assets/img/mychef.jpg" style="width: 768px; height: auto;"/>
    <main>
        <p><?= _PORTFOLIO_SECTION_MYCHEF_DESCRIPTION ?></p>
        <p><a href="https://github.com/AdriaAlberich/MyChef" target="_blank" class="button" style="max-width: 200px"><img src="./assets/img/github.png" style="width:32px;height:32px"/><br/><?= _PORTFOLIO_SECTION_REPOSITORY ?></a></p>
    </main>
</section>

<section class="section-separator"></section>

<section class="section-item section-item-orange" id="gameinstance">
    <header><?= _PORTFOLIO_SECTION_GAMEINSTANCE_TITLE ?></header>
    <main>
        <p><?= _PORTFOLIO_SECTION_GAMEINSTANCE_DESCRIPTION ?></p>
    </main>
</section>

<?php
    require_once("./layout/footer.php");
?>