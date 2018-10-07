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


use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'mx1.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@antoinevanderbrecht.fr';
    $mail->Password = 'IN6Mrra7IWxP';
    $mail->setFrom('contact@antoinevanderbrecht.fr', 'Antoine Vanderbrecht');


    $mail->addAddress('contact@antoinevanderbrecht.fr', 'Antoine test');

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
            $msg = 'Désolé, quelque chose a mal tourné. Veuillez réessayer plus tard.';
        } else {
            $msg = 'Le message a été envoyé. Merci de m\'avoir contacté !';
            header ('Location:/#contact');
            echo '<div class="contactmessage"> <p>'.$msg_ok.'Vous allez être rediriger automatiquement. Sinon retournez sur le site en <a href='.$urlformulaire.'>cliquant ici</a></p></div>'."\n";

        }
    } else {
        $msg = 'Votre adresse e-mail est invalide. Le message n\'a pas été envoyé.';
    }


if (!empty($msg)) {
    echo "<h2>$msg</h2>";
}

///////////// CODE  /////////////////


$msg_erreur = "Erreur dans le formulaire. Tout les champs ne sont pas remplit ou érronés.<br/><br/>";
$msg_ok = "Votre demande a bien été prise en compte.";
$message = $msg_erreur;
$erreurs=0;
$urlformulaire='"/#contact"';


//  Message non transmit par le formulaire
if (!isset($_POST['envoi'])){
	$affichage = "erreur_formulaire";
	$delai=5; 
	$url='/#contact';
	header("Refresh: $delai;url=$url");
}


// Si tous les champs sont remplis
if( isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['sujet']) && isset($_POST['message']) /*&& isset($_POST['captcha'])*/ ){
 
 	// On vérifie que le champ email est bien un email:
	$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (!preg_match($regex, $_POST['email'])){
			$erreurs = $erreurs +1;
		}else{  
			$email = $_POST['email'];
		}

	/*// Si le captcha est différent de 4
	if($_POST['captcha'] != 4){
		$erreurs = $erreurs +1;
	}*/

	// Si il n'y a aucune erreur
	if($erreurs == 0){

		$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
		$prenom  = (isset($_POST['prenom']))  ? Rec($_POST['prenom'])  : '';
		$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
		$sujet   = (isset($_POST['sujet']))   ? Rec($_POST['sujet'])   : '';
		$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';


		// Si les chemps ne sont pas vide
		if (($nom != '') && ($prenom != '') && ($email != '') && ($sujet != '') && ($message != '')){

				// les 4 variables sont remplies, on génère puis envoie le mail
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'De:'.$nom.$prenom.' <'.$email.'>' . "\r\n" .
						'Répondre à:'.$email. "\r\n";

			// Remplacement de certains caractères spéciaux
			$message = str_replace("&#039;","'",$message);
			$message = str_replace("&#8217;","'",$message);
			$message = str_replace("&quot;",'"',$message);
			$message = str_replace('<br>','',$message);
			$message = str_replace('<br />','',$message);
			$message = str_replace("&lt;","<",$message);
			$message = str_replace("&gt;",">",$message);
			$message = str_replace("&amp;","&",$message);

			
			mail($destinataire, $sujet, $message, $headers);

			$_POST['nom'] = "";
			$_POST['prenom'] = "";
			$_POST['sujet'] = "";
			$_POST['email'] = "";
			/*$_POST['captcha'] = "";*/
			$_POST['message'] = "";
			$_POST['envoi'] = "";

			 



 			
		}
		else
		{
			// une des 3 variables (ou plus) est vide ...
			$affichage = "message_vide";
		}


	}else {
		$affichage = "erreur_formulaire_2";
	}

}

/////////////////////////////////////////////


//////////// AFFICHAGES /////////////////////

switch ($affichage){

	case "erreur_formulaire":
		echo "<div id=\"contacterreur\">Vous n'avez pas envoyé le formulaire. Ou celui-ci est mal rempli. <br/> <br/> <a href=" . $urlformulaire . ">Retourner sur le site</a> <div>";
		break;



	case "message_vide":
		echo '<div class="contactmessage"><p>'.$msg_erreur.' <a href='.$urlformulaire.'>Retour au formulaire</a></p>'."\n</div>";
		break;

	case "erreur_formulaire_2":
		echo '<div class="contacterreur">'.$msg_erreur.' <a href='.$urlformulaire.'>Retour au formulaire</a>'."\n <br/> <br/> Si vous aviez écrit un long message le voici pour vous éviter de le recopier:<br/> <textarea cols=\"60\" rows=\"10\" >". $_POST['message']. "</textarea></div>";
		break;

}

////////////////////////////////////////////

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



