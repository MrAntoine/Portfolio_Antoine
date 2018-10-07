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
			<a class="bouton_bannere" id="boutondroite" href="" target="_blank" >A venir</a>

			<h1>
  				<a href="" class="typewrite" data-period="2000" data-type='[ "Bonjour, Je suis Antoine Vanderbrecht.", "Étudiant en MMI.", "I Love Design." ]'>
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
   						<div id="ph"><h4>76%</h4></div>
					</div>

          <h3>Illustrator</h3>
          <div class="progressbar">
              <div id="il"><h4>76%</h4></div>
          </div>

					<h3>Audition</h3>
					<div class="progressbar">
   						<div id="au"><h4>75%</h4></div>
					</div>

					<h3>Premiere Pro</h3>
					<div class="progressbar">
   						<div id="pp"><h4>65%</h4></div>
					</div>

					<h3>Photoshop</h3>
					<div class="progressbar">
   						<div id=""><h4>75%</h4></div>
					</div>

          <h3>Git</h3>
            <h4>J'ai notamment déployé mon site avec GitHub</h4>
            <div class="progressbar">
              <div id="il"><h4>55%</h4></div>
          </div>
		
    


	

		</div>




	<br />
		<div id="portfolio">
		<br />
			<div class="titre"> Découvrez mes différentes réalisations ! </div>
			<div id="cadre">
				
				<div id="categories_nav">
					<a class="active" onClick="action('Tout')"/>Tout</a>	
					<a  class="" onClick="action('Web')"/>Web</a>	
					<a  class="" onClick="action('Design')"/>Design</a>	
					<a  class="" onClick="action('Projet Perso')"/>Projet Perso</a>	
				</div>


			<div id="articles">


					<div class="portfolio">
						<a href="#projet01">
            				<div class="portfolio_info" id="ensavoirplus1">
              					<h3>Cosmopolitan</h3>
              					<span class="categories">Web</span>
            				</div>
            				</a>
            				<img src="img/image1.jpg" alt="image projet Cosmopolitan" class="Web" onmouseover="survolarticle(this,this.className,1)" onmouseout="survolarticle2(this,1)">
          				
        			</div>


        			<div class="portfolio">
          				<a href="#projet02">
            				<div class="portfolio_info" id="ensavoirplus2">
              					<h3>Projet 2<h3><span class="categories">Web</span>
            				</div>
            				<img src="img/image3.png" alt="Seak" class="Web" onmouseover="survolarticle(this,this.className,2)" onmouseout="survolarticle2(this,2)">
          				</a>
        			</div>

        			<div class="portfolio">
          				<a href="#projet03">
            				<div class="portfolio_info" id="ensavoirplus3">
              					<p>Projet 3<br><span class="categories">Design</span></p>
            				</div>
            				<img src="img/image1.jpg" alt="Seak" class="Design" onmouseover="survolarticle(this,this.className,3)" onmouseout="survolarticle2(this,3)">
          				</a>
        			</div>

        			<div class="portfolio">
          				<a href="#projet04">
            				<div class="portfolio_info" id="ensavoirplus4">
              					<p>Projet 4<br><span class="categories">Web</span></p>
            				</div>
            				<img src="img/image.jpg" alt="Seak" class="Web" onmouseover="survolarticle(this,this.className,4)" onmouseout="survolarticle2(this,4)">
          				</a>
        			</div>

        			<div class="portfolio">
          				<a href="#projet05">
            				<div class="portfolio_info" id="ensavoirplus5">
              					<p>Projet 5<br><span class="categories">Design</span></p>
            				</div>
            				<img src="img/image2.jpg" alt="Seak" class="Design" onmouseover="survolarticle(this,this.className,5)" onmouseout="survolarticle2(this,5)">
          				</a>
        			</div>

        			<div class="portfolio">
          				<a href="#projet06">
            				<div class="portfolio_info" id="ensavoirplus6">
              					<p>Projet 6<br><span class="categories">Design</span></p>
            				</div>
            				<img src="img/image3.png" alt="Seak" class="Design" onmouseover="survolarticle(this,this.className,6)" onmouseout="survolarticle2(this,6)">
          				</a>
        			</div>

        			<div class="portfolio">
          				<a href="#projet07">
            				<div class="portfolio_info" id="ensavoirplus7">
              					<p>Projet 7<br><span class="categories">Design</span></p>
            				</div>
            				<img src="img/image1.jpg" alt="Seak" class="Design" onmouseover="survolarticle(this,this.className,7)" onmouseout="survolarticle2(this,7)">
          				</a>
        			</div>

        			<div class="portfolio">
          				<a href="#projet08">
            				<div class="portfolio_info" id="ensavoirplus2">
              					<h3>Projet 8<h3><span class="categories">Projet Perso</span>
            				</div>
            				<img src="img/image.jpg" alt="Seak" class="Projet Perso" onmouseover="survolarticle(this,this.className,8)" onmouseout="survolarticle2(this,8)">
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
			<div class="titre"> N'hésitez pas à me contacter &#x1F609 </div>
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
	<div id="copy">© 2018 - Antoine VANDERBRECHT </div>
</div>




</body>

</html>



<!-- 
 Avancement :
 
 -Mise à jour navbar

 - Formulaire contact 





-->