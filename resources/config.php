<?php
    /*
        File: config.php
        Description: contains site configuration
        Author: Adrià Alberich
    */

    /*
        Config array
    */
    $config = array(
        "db" => array(
            "dbname" => "webvers",
            "username" => "root",
            "password" => "",
            "host" => "localhost"
        ),
        "urls" => array(
            "baseUrl" => "http://localhost:8080/webvers/public_html"
        ),
        "static" => array(
            "basetitle" => "Webvers - "
        ) 
    );

    /*
        Error reporting.
    */
    ini_set("error_reporting", "true");
    error_reporting(E_ALL|E_STRCT);
?>