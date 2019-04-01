<?php $beerArray = [
		[
			'La Chouffe Blonde D\'ardenne',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/la-chouffe-blonde-d-ardenne_opt.png?h=500&rev=899257661',
			'Bière dorée légèrement trouble à mousse dense, avec un parfum épicé aux notes d’agrumes et de coriandre qui ressortent également au goût.',
			1.91
		],
		[
			'Duvel',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/duvel_opt.png?h=500&rev=899257661',
			'Robe jaune pâle, légèrement trouble, avec une mousse blanche incroyablement riche. L’arôme associe le citron jaune, le citron vert et les épices. La saveur incorpore des agrumes frais, le sucre de l’alcool et une note épicée due au houblon qui tire sur le poivre. En dépit de son taux d’alcool, c’est une bière fraîche qui se déguste facilement. ',
			1.66
		],
		[
			'Duvel Tripel Hop',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/duvel-tripel-hop-citra.png?h=500&rev=39990364',
			'Une variété supplémentaire de houblon est ajoutée à cette Duvel traditionnelle. Le HBC 291 lui procure un caractère légèrement plus épicé et poivré. Cette bière présente un fort taux d’alcool mais reste très facile à déguster grâce à ses arômes d’agrumes frais et acides, entre autres.',
			2.24
		],
		[
			'Delirium Tremens',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/blond/delirium_tremens_2.png?h=500&rev=204392068',
			'Bière dorée, claire à la mousse blanche pleine. Bière belge classique fortement gazéifiée et alcoolisée à la levure fruitée, arrière-goût doux.',
			2.08
		],
		[
			'Delirium Nocturnum',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/delirium_nocturnum.png?h=500&rev=1038477262',
			'Une bière rouge foncée brassée selon la tradition belge: à la fois forte et accessible. Des saveurs de fruits secs, de caramel et chocolat. Légèrement sucrée avec une touche épicée (réglisse et coriandre). La finale en bouche est chaude et agréable.',
			2.24
		],
		[
			'Cuvée des Trolls',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/cuvee_des_trolls_2.png?h=500&rev=923839745',
			'Bière brumeuse jaune paille à la mousse blanche consistante. Full body aux arômes fruités d’agrumes et de fruits jaunes. Grande douceur et petite touche acide rafraîchissante, levure. ',
			1.29
		],
		[
			'Chimay Rouge',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/chimay---rood_v2.png?h=500&rev=420719671',
			'Bière brune à la robe cuivrée avec une mousse durable, délicate et généreuse. Elle présente des arômes fruités de banane. D’autres parfums comme le caramel sucré, le pain frais, le pain grillé et même une touche d’amande sont aussi présents. Les mêmes arômes sucrés se retrouvent au goût et conduisent à une fin de bouche douce et légèrement amère. ',
			1.49
		],
		[
			'Chimay Bleue',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/chimay---blauw_v2.png?h=500&rev=420719671',
			'La Chimay Blauw, aussi connue sous le nom de Grande Réserve, est une bière trappiste reconnue. Il s’agissait au départ d’une bière de Noël, mais elle est disponible toute l’année depuis 1954. Une bière puissante et chaleureuse aux arômes de caramel et de fruits secs.',
			1.74
		],
		[
			'Chimay Triple',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/chimay---wit_v2.png?h=500&rev=420719671',
			'Robe de couleur doré clair, légèrement trouble avec une belle mousse blanche qui fera saliver les amateurs. Le nez et la bouche sont chargés de fruits comme le raisin et de levure. Une amertume ronde se dégage en fin de bouche.',
			1.57
		]
	];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Toast la bière du matin !</title>
</head>
<body>	
	<header>
		<nav id="nav">
			<p id="promo"><marquee scrollamount="6" background-color="rgb(136, 204, 0)">Promotion ! 1 bière acheter = 3 bières offertes ! <span><a id="conditions" href="">* Voir les conditions</a></span></marquee></p>

		<img id="icone" src="img/beer.png">
			<ul>

				<li><a href="">Le secret de la Painte</a></li>
				<li><a href="">Acheter La Painte</a></li>
				<li><a href="">Qui sommes-nous ?</a></li>
				<li><a href="">Contactez-nous</a></li>

			</ul>
		</nav>
	</header>

<img id="bierepain" src="img/bierepain.jpg" alt="image_de_la_bière">
<!-- Ouverture de PHP -->
<?php
// Montrer les infos de la variable
//var_dump($beerArray);

// Ecrire dans le HTML <div id=".."> pour créer un container
echo '<div id="containerphp">';
//Boucler le tableau pour lui permettre de viser un élément dans le tableau et d'incrémenter le déplacement de la visée.(multi-selection des cases du tableau)
//Pour (condition de départ; condition Finale; variable i s'incrémente de +1 à chaque itération)
for ($i=0; $i < count($beerArray) ; $i++) {
	// Appeler la fonction   
	showBeerArray($beerArray[$i]);
}
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
echo '<img id="imgphp" src='.$infos[1].'</br>';
	echo '</div>';
	//Infos produits venant de tableau
	echo '<div id="divtxt">';
echo $infos[2].'</br>';

	echo '</div>';

}
//Fermeture du container
echo '</div>';
?>

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