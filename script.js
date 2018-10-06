
// Creer la classe active pour chaque element cliqué
$(document).on('click', '#menu-nav a', function(){
		$(this).addClass('active').siblings().removeClass('active');
	});

/*$(document).on('click', '#categories input', function(){
		$(this).addClass('active').siblings().removeClass('active');
	});*/

$(document).on('click', '#categories_nav a', function(){
		$(this).addClass('active').siblings().removeClass('active');
	});

////////////////////////////////////////////////


// A AJOUTER : le nombre d'articles, lors du survol du bouton !


/* gh.addEventListener("click",trie(nom)); 

 nom.addEventListener("mouseover", function( event ) {   
    // highlight the mouseover target
    event.target.style.color = "orange";
*/

/////////////// TEXTE ANIMATION /////////////


var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };



///////////// FONCTION TRIE ////////////

function action(nom) {


	// ON COMPTE LE NOMBRE D'ARTICLE

	var nb_web = document.getElementsByClassName("Web").length;
	var nb_design = document.getElementsByClassName("Design").length;
	var nb_projet_perso = document.getElementsByClassName("Projet Perso").length;
	var nb_tout = nb_design + nb_web + nb_projet_perso;


	if(nom == "Tout"){
			let list = document.getElementsByClassName("Web");
			for(let i=0; i<list.length; i++){
			list[i].style.display = "inline-block";
			}
			let list1 = document.getElementsByClassName("Design");
			for(let j=0; j<list1.length; j++){
				list1[j].style.display = "inline-block";
			}
			let list2 = document.getElementsByClassName("Projet Perso");
			for(let k=0; k<list2.length; k++){
				list2[k].style.display = "inline-block";
			}

			}

		if(nom == "Web"){
			let list = document.getElementsByClassName("Web");
			for(let i=0; i<list.length; i++){
				list[i].style.display = "inline-block";
			}
			//suppression autre catégories
			let list1 = document.getElementsByClassName("Design");
			for(let j=0; j<list1.length; j++){
				list1[j].style.display = "none";
			}
			let list2 = document.getElementsByClassName("Projet Perso");
			for(let k=0; k<list2.length; k++){
				list2[k].style.display = "none";
			}

			} 

		if(nom == "Design"){
			// Affichage catégorie design
			let list = document.getElementsByClassName("Design");
			for(let i=0; i<list.length; i++){
				list[i].style.display = "inline-block";
			}
			//suppression autre catégories
			let list1 = document.getElementsByClassName("Web");
			for(let j=0; j<list1.length; j++){
				list1[j].style.display = "none";
			}
			let list2 = document.getElementsByClassName("Projet Perso");
			for(let k=0; k<list2.length; k++){
				list2[k].style.display = "none";
			}	

			}

			if(nom == "Projet Perso"){
			// Affichage catégorie design
			let list2 = document.getElementsByClassName("Projet Perso");
			for(let k=0; k<list2.length; k++){
				list2[k].style.display = "inline-block";
			}
			//suppression autre catégories
			let list1 = document.getElementsByClassName("Web");
			for(let j=0; j<list1.length; j++){
				list1[j].style.display = "none";
			}	
			let list = document.getElementsByClassName("Design");
			for(let i=0; i<list.length; i++){
				list[i].style.display = "none";
			}

			}

}








function survolarticle(gh,cla,nb) {
	//gh.style.backgroundColor="white";
	gh.style.opacity=0.5;	
// affiche le bouton lire plus
var list2 = document.getElementById("ensavoirplus"+nb);
list2.style.display = "inline-block";
}



function survolarticle2(gh,nb) {
	gh.style.backgroundColor="";
	gh.style.opacity=1;
	// affiche le bouton lire plus
var list2 = document.getElementById("ensavoirplus"+nb);
list2.style.display = "none";
}






/////////////////////////////////
/*
var divo = document.getElementById("barreprogresscontact");
divo.pseudoStyle("before","color","purple");


*/



