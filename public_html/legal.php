<?php
    session_start();

    require_once(realpath(dirname(__FILE__) . "/../resources/lang_setup.php"));

    $_SESSION['page_title'] = _MAIN_TITLE . _LEGAL_TITLE;

    $_SESSION['page_name'] = 'legal';
     
    require_once("./layout/header.php");
?>

<section class="section-header section-header-black">
    <header><?= _LEGAL_TITLE ?></header>
    <main>
        <?= _LEGAL_BODY ?>
    </main>
</section>

<section class="section-separator"></section>

<section class="section-header section-header-black">
    <header><?= _LEGAL_OWNER_TITLE ?></header>
    <main>
        <?= _LEGAL_OWNER_BODY ?>
    </main>
</section>

<section class="section-separator"></section>

<section class="section-header section-header-black">
    <header><?= _LEGAL_WARRANTY ?></header>
    <main>
        <?= _LEGAL_WARRANTY_BODY ?>
    </main>
</section>

<section class="section-separator"></section>

<section class="section-header section-header-black">
    <header><?= _LEGAL_COOKIES ?></header>
    <main>
        <?= _LEGAL_COOKIES_BODY ?>
    </main>
</section>

<section class="section-separator"></section>

<section class="section-header section-header-black">
    <header><?= _LEGAL_CONTACT_FORM ?></header>
    <main>
        <?= _LEGAL_CONTACT_FORM_BODY ?>
    </main>
</section>

<section class="section-separator"></section>

<section class="section-header section-header-black">
    <header><?= _LEGAL_THIRD_PARTY ?></header>
    <main>
        <?= _LEGAL_THIRD_PARTY_BODY ?>
    </main>
</section>

<section class="section-separator"></section>

<section class="section-header section-header-black">
    <header><?= _LEGAL_USER_RIGHTS ?></header>
    <main>
        <?= _LEGAL_USER_RIGHTS_BODY ?>
    </main>
</section>

<?php
    require_once("./layout/footer.php");
?>