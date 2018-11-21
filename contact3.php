<?php


///////////// FONCTIONS  /////////////////

// On nettoie les champs 
function Rec($text)
	{
		$text = htmlspecialchars(trim($text), ENT_QUOTES);
		if (1 === get_magic_quotes_gpc())
		{
			$text = stripslashes($text);
		}
 
		$text = nl2br($text);
		return $text;
	};


//////////////////////////////////////
$urlformulaire='"/#contact"';
$erreurs=0;

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'mx1.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@antoinevanderbrecht.fr';
    $mail->Password = 'IN6Mrra7IWxP';
    $mail->setFrom('contact@antoinevanderbrecht.fr', 'Antoine Vanderbrecht');

    $mail->addAddress('contact@antoinevanderbrecht.fr', 'Antoine Vanderbrecht');



// Si tous les champs sont remplis
if( isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['sujet']) && isset($_POST['message']) ){

/*
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = '6LevT3wUAAAAAF5swzP29OD8q2JnZeYOIzeyHg2C';
        $response = $_POST['g-recaptcha-response'];
        $urlverif = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&responde=$response");
        $result = json_decode($urlverif, TRUE);
        if($result['succes] == 1']){
            $erreurs = $erreurs;
        }
        }else{
            $erreurs = $erreurs +1;
        }
    }
    */
      if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        //your site secret key
        $secret = '6LevT3wUAAAAAF5swzP29OD8q2JnZeYOIzeyHg2C';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success):
            $erreurs = $erreurs;
        else:
            $erreurs = $erreurs +1;
        endif;
    } else {
        $erreurs = $erreurs +1;
    }






// On vérifie que le champ email est bien un email:
	$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (!preg_match($regex, $_POST['email'])){
			$erreurs = $erreurs +1;
		}else{  
			$email = $_POST['email'];
		}

// Si il n'y a aucune erreur
	if($erreurs == 0){

		$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
		$prenom  = (isset($_POST['prenom']))  ? Rec($_POST['prenom'])  : '';
		$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
		$sujet   = (isset($_POST['sujet']))   ? Rec($_POST['sujet'])   : '';
		$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';


		// Si les chemps ne sont pas vide
		if (($nom != '') && ($prenom != '') && ($email != '') && ($sujet != '') && ($message != '')){

		// Remplacement de certains caractères spéciaux
			$message = str_replace("&#039;","'",$message);
			$message = str_replace("&#8217;","'",$message);
			$message = str_replace("&quot;",'"',$message);
			$message = str_replace('<br>','',$message);
			$message = str_replace('<br />','',$message);
			$message = str_replace("&lt;","<",$message);
			$message = str_replace("&gt;",">",$message);
			$message = str_replace("&amp;","&",$message);


    	if ($mail->addReplyTo($_POST['email'], $_POST['nom'], $_POST['prenom'])) {
        	$mail->Subject = 'Formulaire de contact Antoine Vanderbrecht';
        	$mail->isHTML(false);

        	$mail->Body = <<<EOT
Email: {$_POST['email']}
Nom: {$_POST['nom']}
Prénom : {$_POST['prenom']}
Message: {$_POST['message']}
EOT;
		

        if (!$mail->send()) {
            echo 'Désolé, quelque chose a mal tourné. Veuillez réessayer plus tard.';
        } else {
            // Message 
            echo '<div class="contactmessage"> <p>'.$msg_ok.'Vous allez être rediriger automatiquement. Sinon retournez sur le site en <a href='.$urlformulaire.'>cliquant ici</a></p></div>'."\n";

            // Reset des champs 
            $_POST['nom'] = "";
			$_POST['prenom'] = "";
			$_POST['sujet'] = "";
			$_POST['email'] = "";
			$_POST['message'] = "";
			$_POST['envoi'] = "";

			// Redirection
            header ('Location:/#messagesucces');

        }

    }

	} else {
		// une des 3 variables (ou plus) est vide ...
		echo '<div class="contactmessage"><p> Erreur dans le formulaire. Tout les champs ne sont pas remplit ou érronés.<br/><br/><a href='.$urlformulaire.'>Retour au formulaire</a></p>\n</div>';
	
	}

   	} else {
       	echo 'L\'un des champs est invalide. Le message n\'a pas été envoyé.';
    }

}
  $mail->SmtpClose();

///////////// CODE  /////////////////

/*
$msg_ok = "Votre demande a bien été prise en compte.";
$message = $msg_erreur;



//  Message non transmit par le formulaire
if (!isset($_POST['envoi'])){
	echo "<div id=\"contacterreur\">Vous n'avez pas envoyé le formulaire. Ou celui-ci est mal rempli. <br/> <br/> <a href=" . $urlformulaire . ">Retourner sur le site</a> <div>";
	$delai=5; 
	header("Refresh: $delai;url=$urlformulaire");
}




 


		



	}else {
		echo '<div class="contacterreur">'.$msg_erreur.' <a href='.$urlformulaire.'>Retour au formulaire</a>'."\n <br/> <br/> Si vous aviez écrit un long message le voici pour vous éviter de le recopier:<br/> <textarea cols=\"60\" rows=\"10\" >". $_POST['message']. "</textarea></div>";
	}

}
*/
/////////////////////////////////////////////

?>



<!DOCTYPE html>
<html>
	<head>
		<title> Antoine Vanderbrecht </title>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" href="img/favicon.png" />
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width" />
		<link href="style2.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="script.js"></script> -->
	</head>
</html>



