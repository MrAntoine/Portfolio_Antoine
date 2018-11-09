<?php 
include 'articles.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title> Antoine Vanderbrecht </title>
	<meta charset="UTF-8">

	<link rel="icon" type="image/png" href="img/favicon.png" />

	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width" />

	<link href="style.css" rel="stylesheet" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<script type="text/javascript" src="script.js"></script>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

</head>

<body>

	<header class="header" id="main-header">

        <nav class="header-menu">

        	<img class="header-logo" src="img/Logo.png" alt="Logo du site web"width="200">
        	<div id="menu-nav">
        		<a class="active" href="#accueil">ACCUEIL </a>
        		<a href="#competences">COMPÉTENCES </a>
				<a href="#portfolio">PORTFOLIO </a>
				<!-- <a href="#apropos">A PROPOS </a> -->
				<a href="#contact">CONTACT </a>
			</div>
			<div class="menu-deroulant">
       			<a href="#main-header" class="menu-ouvert"><img src="img/menu_ouvert.png" width="30" alt="Ouvrir Menu"></a>
        		<a href="#" class="menu-fermer"><img src="img/menu_fermer.png" width="30" alt="Fermer Menu"></a>
      		</div>
		</nav>

	</header>


	<div id="contenu">
	<br />
		<div id="accueil">
			<div id="banniereapropos"></div> <br />
			<a class="bouton_bannere" id="boutongauche" href="doc/cv_antoine_vanderbrecht.pdf" target="_blank" >Télécharger mon CV</a>
      <img id="logo-banner" src="img/Logo.png" alt="Logo du site web" width="200">
			<a class="bouton_bannere" id="boutondroite" href="" target="_blank" >A venir</a>

			<h1>
  				<a href="" class="typewrite" data-period="2000" data-type='[ "Bonjour, Je suis Antoine Vanderbrecht.", "Étudiant en MMI.", "I Love AudioVisuel." ]'>
    				<span class="wrap"></span>
 				 </a>
			</h1>

		</div>

	
	<br />
		<div id="competences">
			<br />
			<div class="titre"> COMPÉTENCES </div>
				<div id="listecomp">

					<h3>Photoshop</h3>
					<div class="progressbar">
   						<div id="ph"></div>
					</div>

          <h3>Illustrator</h3>
          <div class="progressbar">
              <div id="il"></div>
          </div>

					<h3>Audition</h3>
					<div class="progressbar">
   						<div id="au"></div>
					</div>

					<h3>Premiere Pro</h3>
					<div class="progressbar">
   						<div id="pp"></div>
					</div>

					<h3>Photoshop</h3>
					<div class="progressbar">
   						<div id=""></div>
					</div>

          <h3>Git</h3>
            <h4><i>Portfolio déployé avec GitHub</i></h4>
            <div class="progressbar">
              <div id="il"></div>
          </div>

	

		</div>




	<br />
		<div id="portfolio">
		<br />
			<div class="titre"> Découvrez mes différentes réalisations ! </div>
			<div id="cadre">
				
				<div id="categories_nav">
					<a class="active" onClick="action('Tout')"/>Tout</a>	
					<a class="" onClick="action('Web')"/>Web</a>	
					<a class="" onClick="action('AudioVisuel')"/>AudioVisuel</a>	
					<a class="" onClick="action('Projet Perso')"/>Projet Perso</a>	
				</div>


			<div id="articles">


					<div class="portfolio Web">
						<a href="#projet01">
            				<img src="img/image_cosmopolitan.jpg" alt="image projet Cosmopolitan">
                     <span class="articles-over"><span><p>Cosmopolitan</p></br><p>Découvrir en cliquant</p></span></span>
          				</a>
        			</div>

        			<div class="portfolio AudioVisuel">
          				<a href="#projet02">
            				<img src="img/court_metrage.png" alt="image court-metrage">
                    <span class="articles-over"><span><p>Court Métrage</p></br><p>Découvrir en cliquant</p></span></span>
          				</a>
        			</div>

        			<div class="portfolio Web">
          				<a href="#projet03">
            				<img src="img/image1.jpg" alt="image mini projet facebook">
                    <span class="articles-over"><span><p>Mini projet Facebook</p></br><p>Découvrir en cliquant</p></span></span>
          				</a>
        			</div>

        			<div class="portfolio Web">
          				<a href="#projet04">
            				<img src="img/image.jpg" alt="Seak">
          				</a>
        			</div>

        			<div class="portfolio AudioVisuel">
          				<a href="#projet05">
            				<img src="img/image2.jpg" alt="Seak">
          				</a>
        			</div>

        			<div class="portfolio AudioVisuel">
          				<a href="#projet06">
            				<img src="img/image3.png" alt="Seak">
          				</a>
        			</div>

        			<div class="portfolio AudioVisuel">
          				<a href="#projet07">
            				<img src="img/image1.jpg" alt="Seak">
          				</a>
        			</div>

        			<div class="portfolio Projet Perso">
          				<a href="#projet08">
            				<img src="img/image.jpg" alt="Seak">
          				</a>
        			</div>

        	

			</div>
			</div>
		</div>




	


<!--
	<br />
		<div id="apropos">
			<br />

			<div class="titre"> A PROPOS </div>
			<div id="banniereapropos"><p>Bonjour !</br /> Je suis Antoine Vanderbrecht,
			étudiant <br />à l'université d'Artois à Lens, en DUT MMI.</p>

			</div>
			<br />	


			<br> <div id="linkedin"> <a href="https://www.linkedin.com/in/antoine-vanderbrecht-642abb162/" target="_blank"> <img src="img/linkedin.png" alt="Image Profil Linkedin" height="auto" width="3%"> </a> <br> Découvrez mon profil <b><a href="https://www.linkedin.com/in/antoine-vanderbrecht-642abb162/" target="_blank">Linkedin</a></b> </div>


		</div>


<div id="barreprogresscontact">test</div>
			<br />


-->

<!-- Formulaire de contact -->

	<br />
		<div id="contact">
			<br />
			<div class="titre"> N'hésitez pas à me contacter <span  style="color:/*#FF931E*/ #2EA4BF;">!</span> </div>
			<form method="post" action="contact3.php" id="formcontact">
    			<input type="text" name="nom" placeholder="Entrez votre nom" class="form_info" required>
    			<input type="text" name="prenom" placeholder="Entrez votre prénom" class="form_info" required>
   				<input type="email" name="email" placeholder="Entrez votre adresse email" class="form_info" required>
   				<input type="text" name="sujet" placeholder="Entrez votre sujet" class="form_info" required>
   				<br/>
   				<textarea name="message" cols="60" rows="10" placeholder="Ecrivez votre message" required></textarea>
   				<br/>
   				<!--<p>Combien font 1+3 ?: <input type="text" name="captcha" placeholder="Répondre au captcha 1+3 ?" class="form_info" required/> </p>-->
   				<input type="submit" value="Envoyer" class="btn" name="envoi" id="envoyer">
			</form>
		</div>



</div>



<div id="footer">
	<div id="copy">© 2018 - Antoine VANDERBRECHT - Tous droits réservés </div>
</div>




</body>

</html>



<!-- 
 Avancement :
 
 -Mise à jour navbar

 - Formulaire contact 





-->