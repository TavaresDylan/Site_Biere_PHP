
	//Fonction qui nous permet d'afficher les infos dans le tableau
function showBeerArray($infos){
	//Ecrire dans le HTML
	//Titre venant du tableau
	echo '</br>';
echo '<div id="divtitre">'.$infos[0]. '</br>' ;
	echo '</div>';
	//Prix venant du tableau
	echo '<div id="divprix">';
echo $infos[3].'€';
	echo '</div>';
	//Liens d'images venant du tableau
	echo '<div id="divimage">';
echo '<img class="row col-lg-2" id="imgphp" src='.$infos[1].'</br>';
	echo '</div>';
	//Infos produits venant de tableau
	echo '<div id="divtxt">';
echo $infos[2].'</br>';

	echo '</div>';

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- BootStrap-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0", shrink-to-fit ="no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!--Encodage-->
	<meta charset="utf-8">
	<!-- Feuille de style CSS-->
	<link rel="stylesheet" type="text/css" href="css/##.css">
	<!--Titre-->
	<title>Toast la bière du matin !</title>
</head>
<body class="col-lg-12 border border-danger m-0">

	<header class="row m-0 border border-danger">

		<!-- Logo Homer-->
		<div>
			<img  id="icone" src="img/beer.png">
		</div>

		<!--Menu De navigation-->
		<nav id="nav" class="col-lg-4 border border-danger d-flex align-items-center">

			<!--Bandeau défilant-->
			<!--<p class="row col-lg-12 text-center border border-danger d-flex justify-content-start"id="promo"><marquee scrollamount="6" background-color="rgb(136, 204, 0)">Promotion ! 1 bière acheter = 3 bières offertes ! <span><a id="conditions" href="">* Voir les conditions</a></span></marquee></p>-->

			<!--Menu -->
			<ul class="d-flex list-unstyled border border-danger">

				<li class=""><a href="">Le secret de la Painte</a></li>
				<li class=""><a href="">Acheter La Painte</a></li>
				<li class=" "><a href="">Qui sommes-nous ?</a></li>
				<li class=" "><a href="">Contactez-nous</a></li>

			</ul>
		</nav>

	</header>

	<!--Image de Présentation-->
<div class="col-lg-6">
<img class="row border border-danger" id="bierepain" src="img/bierepain.jpg" alt="image_de_la_bière">

<!--Ouverture de la div container php-->
<div class=" col-lg-12" id="containerphp">
<!--Boucler le tableau pour lui permettre de viser un élément dans le tableau et d'incrémenter le déplacement de la visée.(multi-selection des cases du tableau)
//Pour (condition de départ; condition Finale; variable i s'incrémente de +1 à chaque itération)-->
<?php
for ($i=0; $i < count($beerArray) ; $i++) {
	// Appeler la fonction   
	showBeerArray($beerArray[$i]);
}
?><!--Fermeture de PHP-->

</div><!--Fermeture de la div container php-->

</div><!--Fermeture de la div image de présentation-->


	<article>
		<H1>Les Origines de la Painte :</H1>
			<p>Cette bière trouve ses origines dans la petite ville de Stugartt en Allemagne, tout ce pain gaspillé, raci et jeté par les différentes firmes boulangères du coin a été récupéré par nos soins pour obtenir la meilleure des bières.</p>
		
			<p>Julien Producteur de bière depuis 2016.</p>
			<p>Sa brasserie ce situe à <a href="https://googlemaps.com">Stugartt en Allemagne</a>.</p>
			<p> Il vous présente sa bière brune brassée à partir de pain des boulangerie de la région.</p>
			<p> La Bière est disponible uniquement par mail au prix de 15€/ 50cl</p>
			<p>Mail : Bière@apprendre.co</p>
		<h1> Les secrets de fabrication de cette merveilleuse bière qui fait ma fierté </h1>

	<div>
		
		<p></p>
		<ol>
			<li>Composition de la bière</li>
				<p><em>Cette bière a été conçue dans le respect de l'esprit écologique comme récupération de divers aliments dont nous vous informerons.</em></p>
			<ul>
				<li>L'eau</li>
					<p>L'eau vient directement du puit du jardin de mon voisin qui me le prête généreusement depuis que j'ai donné un petit coup dans sa cloture (avec ma tronçonneuse).</p>
				<li>Le houblon</li>
					<p>Récolté dans mon champs, il pousse par lui-même depuis plusieurs générations.</p>
				<li>Le malt</li>
					<p>Récupéré dans le vieux moulin du village voisin, abandonné depuis des années, il a germé par lui-même et est de meilleure qualité.</p>
				<li>Le pain</li>
					<p>Je le récupère dans les boulangeries alentours avant qu'elles ne s'en débarasse, celui-ci, après avoir été émietté, me fournit une levure de première qualité.</p>
			</ul>
		<li>Fabrication en cinq grandes étapes</li>
			<ul>
				<li>Le maltage</li>
				<p>Quelques années lui auront suffit pour arriver à maturation, au chaud dans le moulin fermé mais pas hermétique, il est bien hydraté par l'eau de pluie.</p>
				<li>Le brassage</li>
				<p>Le malt est concassé allègrement à l'aide de la plante de mes propres pieds à la peau durcie par l'entraînement. L'ébulition portée à la trempe sur le feu de bois, totalement écologique. </p>
				<li>L'aromatisation</li>
				<p>Des épices ont été incorporées dans la recette, mais je refuse de dévoiler lesquelles, infusées de longues heures.</p>
				<li>La fermentation</li>
				<p>Une dizaine de jours dans la cave, par fermentation mixte puis clarifiée par filtrage. </p>
				<li>Le conditionnement</li>
				<p>La bière est conservée dans des cuves réfrigérées alimentées par des panneaux solaires, totalement écologique. </p>
			</ul>
		</ol>
	</div>
	<h1>Les origines de la Painte</h1>
	<div>
		<p>Après avoir longuement réfléchi à un nom parlant : le choix de la Painte a été fait. Sa base étant le pain, le suffixe a été gardé ; pour s'en servir une pinte, quantité d'une bouteille achetable en ligne donnant une combinaison adaptée.</p>
		<p>Tous les ingrédients viennent des alentours de la province de Stugartt.</p>

	</article>

	<footer>
		<ul>
			
			<a href="#nav">
			Haut de page
			</a>

		</ul>
	</footer>

</body>
</html>