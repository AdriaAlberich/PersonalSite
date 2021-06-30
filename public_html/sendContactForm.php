<?php

    $recaptcha = $_POST["g-recaptcha-response"];
 
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6LctbmgbAAAAAIJZnJc_8Q8Kj07wjMVDfWnYhkT9',
		'response' => $recaptcha
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success = json_decode($verify);
	if ($captcha_success->success) {
        $to = "alberichjaumeadria@gmail.com";
    
        $subject = "adrialberich.com - " . $_POST['subject'];

        $messagestr = str_replace("\n","</br>", $_POST['message']);

        $message = "
            <html>
                <head>
                    <title>" . $_POST['subject'] . "</title>
                </head>
                <body>
                    <p><strong>Nom:</strong> " . $_POST['name'] . "</p>
                    <p><strong>Email:</strong> " . $_POST['email'] . "</p>
                    <p><strong>Telèfon:</strong> " . $_POST['phone'] . "</p>
                    <p><strong>Missatge:</strong> " . $messagestr . "</p>
                </body>
            </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $headers .= 'From: <me@adrialberich.com>' . "\r\n";

        if(mail($to,$subject,$message,$headers)) {
            header("Location: contact?success=1");
        }else{
            header("Location: contact?success=0");
        }
	} else {
        header("Location: contact?success=0");
	}
?>

