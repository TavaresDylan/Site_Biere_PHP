<?php
include("beerArray.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Titre Onglet -->
	<title>Purchase Order</title>
	<!-- Encodage -->
	<meta charset="utf-8">
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Meta ViewPort -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body class="container-fluid bg-dark text-white">
<!-- Formulaire Coordonnées Client -->
	<form method="Get" class="container mt-3 border border-danger p-3">

		<label class="col-3">Prénom :</label>
			<input class="rounded" type="text" name="prenom" required="true">

		<label class="col-3">Nom :</label>
			<input class="rounded" type="text" name="nom" required="true">

		<label class="col-3">Adresse: :</label>
			<input class="rounded" type="text" name="adresse" required="true">

		<label class="col-3">N° de rue :</label>
			<input class="rounded" type="text" name="num">

		<label class="col-3">Code postal :</label>
			<input class="rounded" type="text" name="cp">

		<label class="col-3">Ville :</label>
			<input class="rounded" type="text" name="ville">

		<label class="col-3">Pays :</label>
			<input class="rounded" type="text" name="pays" required="true">

		<label class="col-3">N° Tel :</label>
			<input class="rounded" type="tel" name="tel">

		<label class="col-3">Mail :</label>
			<input class="rounded" type="email" name="mail" required="true">
<!-- Bouton d'envoi du formulaire coordonnées client  -->
		<input class="btn btn-outline-danger btn-lg btn-block mt-3" type="submit"></input>

	</form>
<!-- Formulaire Achat Client -->
	<form class="border border-danger container">
<!-- Afficher phrase avec infos get -->
		<?php

		echo 'Bonjour '.ucfirst($_GET['nom']).' '.ucfirst($_GET['prenom']).' vous habitez le '.$_GET['num'].' '.ucfirst($_GET['adresse']).' '.$_GET['cp'].' à '.ucfirst($_GET['ville']).' , '.ucfirst($_GET['pays']).'.<br /> Faites votre choix :<br />';
			?>
	<!-- Tableau -->
		<table class="border border-primary m-3">
		<!-- Tête du tableau -->
			<thead>
				<tr>
					<th>Produit :</th>
					<th>Prix HT :</th>
					<th>Prix TTC :</th>
					<th>Quantité :</th>
				</tr>
			</thead>					
<?php
//Boucle du tableau php//
	for ($i=0; $i < count($beerArray) ; $i++):
?>
<!-- Corps du tableau -->
	<tr class="border border-primary">
			<td class="pr-4">
				<?php echo $beerArray[$i][0]?>
			</td>
			<td class='pr-4' id =<?php echo "HT_".$i?>>
				<?php echo number_format($beerArray[$i][3],2,',','.')?> €
			</td>
			<td id=<?php echo "TTC_".$i?>"" class="pr-4">
				<?php echo number_format($beerArray[$i][3]*$TTC,2,',','.')?> €
			</td>
<!-- Input quantités -->
			<td class="pr-4">
				<input id="quantite_<?= $i ?>" class="rounded text-center" type="number" name=<?php echo "quantite_".$i."" ?>"" value='0' onclick=<?php echo "calculPrix(".$i.")" ?> >
			</td>
			
	</tr>


<?php endfor ?>
<!-- Fin du tableau -->
</table>
<!-- Bouton d'envoi du formulaire achat client -->
<input class="btn btn-outline-primary btn-lg mb-2" id="validOrder" type="submit"></input>
<!-- Fin du formulaire -->
</form>

<?php 
//var_dump($beerArray)
?>

<!-- Lien Javascript -->
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>