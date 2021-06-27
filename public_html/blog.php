<?php
    session_start();

    require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));

    require_once(realpath(dirname(__FILE__) . "/../resources/lang_setup.php"));

    $_SESSION['page_title'] = _MAIN_TITLE . _BLOG_TITLE;

    $_SESSION['page_name'] = 'blog';
     
    require_once("./layout/header.php");
?>

<div id="page">
    <div id="content">
        <?= _BLOG_DESCRIPTION ?>
    </div>
</div>

<?php
    require_once("./layout/footer.php");
?>