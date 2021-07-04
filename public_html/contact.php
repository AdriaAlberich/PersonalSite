<?php
    session_start();

    require_once(realpath(dirname(__FILE__) . "/../resources/lang_setup.php"));

    $_SESSION['page_title'] = _MAIN_TITLE . _CONTACT_TITLE;

    $_SESSION['page_name'] = 'contact';
     
    require_once("./layout/header.php");
?>

<?php
    if(isset($_GET['success'])) { 
        if($_GET['success'] == 1) { 
            echo '<div id=\'dialog\' class=\'dialog\'>' . _CONTACT_FORM_SUCCESS . '<br/><br/><a href=\'javascript:void(0)\' class=\'button\' onClick=\'hideDialog()\'>' . _MAIN_DIALOG_ACCEPT . '</a></div>'; 
        }elseif($_GET['success'] == 0) {
            echo '<div id=\'dialog\' class=\'dialog\'>' . _CONTACT_FORM_ERROR . '<br/><br/><a href=\'javascript:void(0)\' class=\'button\' onClick=\'hideDialog()\'>' . _MAIN_DIALOG_ACCEPT . '</a></div>'; 
        }
    }
?>

<section class="section-header section-header-black">
    <header><?= _CONTACT_FORM_HEADER_TITLE ?></header>
    <main>
        <p><?= _CONTACT_FORM_HEADER_TEXT_1 ?></p>
        <p><a href="mailto:<?= _MAIN_EMAIL ?>" target="_blank"><?= _MAIN_EMAIL ?></a></p>
        <p><?= _MAIN_PHONE ?></p>
        <p><?= _CONTACT_FORM_HEADER_TEXT_2 ?></p>
        <form id="contact-form" method="POST" action="sendContactForm">
            <input type="text" id="name" name="name" maxlength="64" placeholder="<?= _CONTACT_FORM_NAME ?>" onfocus="clearStyle(this)">
            <input type="text" id="email" name="email" maxlength="64" placeholder="<?= _CONTACT_FORM_EMAIL ?>" onfocus="clearStyle(this)">
            <input type="text" id="phone" name="phone" maxlength="64" placeholder="<?= _CONTACT_FORM_PHONE ?>" onfocus="clearStyle(this)">
            <input type="text" id="subject" name="subject" maxlength="128" placeholder="<?= _CONTACT_FORM_SUBJECT ?>" onfocus="clearStyle(this)">
            <textarea id="message" name="message" placeholder="<?= _CONTACT_FORM_MESSAGE ?>" onfocus="clearStyle(this)"></textarea>
            <div id="privacy-statement">
                <label class="checkbox" for="privacy">
                    <?= _CONTACT_FORM_SEND_PRIVACY_1 ?>&nbsp;<a href="legal" target="_blank"><?= _CONTACT_FORM_SEND_PRIVACY_2 ?></a>&nbsp;<?= _CONTACT_FORM_SEND_PRIVACY_3 ?>
                    <input type="checkbox" id="privacy" name="privacy" onclick="clearStyle(this)">
                    <span class="checkmark" id="checkmark"></span>
                </label>
            </div>
            <div id="recaptcha" class="g-recaptcha" data-sitekey="6LctbmgbAAAAAHHOitm2wrCxVmOz-EJz5uFtOBT1"></div>
            <input type="button" id="send-button" onclick="sendForm()" value="<?= _CONTACT_FORM_SEND_BUTTON ?>">
        </form>
    </main>
</section>

<?php
    require_once("./layout/footer.php");
?>