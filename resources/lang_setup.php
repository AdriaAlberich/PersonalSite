<?php
    if(isset($_GET['lang']) && !empty($_GET['lang']))
    {
        $_SESSION['lang'] = $_GET['lang'];

        if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang'])
        {
            echo "<script type='text/javascript'> location.reload(); </script>";
        }
    }

    if(isset($_SESSION['lang']))
    {
        include realpath(dirname(__FILE__) . "/../resources/lang") . "/" . $_SESSION['lang'] . ".php";
    }
    else
    {
        //$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        //$acceptLang = ['ca', 'es']; 
        //$lang = in_array($lang, $acceptLang) ? $lang : 'es';
        $lang = 'es';
        include realpath(dirname(__FILE__) . "/../resources/lang/{$lang}.php");
    }

?>