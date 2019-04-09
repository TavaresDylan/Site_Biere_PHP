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
<body class="conatainer-fluid bg-dark text-white">

	<form method="Get" class="container mt-3 border border-danger p-3">

		<label class="m-3 ">Prénom :</label>
		<input class="rounded" type="text" name="prenom" required="true">

		<label class="">Nom :</label>
		<input class="rounded" type="text" name="nom" required="true">

		<label class="">Adresse: :</label>
		<input class="rounded" type="text" name="adresse" required="true">

		<label class="">N° de rue :</label>
		<input class="rounded" type="text" name="num">

		<label class="">Code postal :</label>
		<input class="rounded" type="text" name="cp">

		<label class="">Ville :</label>
		<input class="rounded" type="text" name="ville">

		<label class="">N° Tel :</label>
		<input class="rounded" type="tel" name="tel">

		<label class="">Mail :</label>
		<input class="rounded" type="email" name="mail" required="true">

		<input class="btn btn-outline-danger btn-lg btn-block mt-3" type="submit"></input>

	</form>

	<form class="border border-danger container">

		<?php

		echo 'Bonjour '.ucfirst($_GET['nom']).' '.ucfirst($_GET['prenom']).' vous habitez le '.$_GET['num'].' '.ucfirst($_GET['adresse']).' '.$_GET['cp'].' à '.ucfirst($_GET['ville']).'<br /> Faites votre choix :<br />';
			?>

		<table class="border border-primary m-3">
			<thead>
				<tr>
					<th>Produit :</th>
					<th>Prix HT :</th>
					<th>Prix TTC :</th>
					<th>Quantité :</th>
				</tr>
			</thead>
						
<?php
	for ($i=0; $i < count($beerArray) ; $i++):
?>
	<tr class="border border-primary">
			<td class="pr-4">
				<?php echo $beerArray[$i][0]?>
			</td>
			<td class="pr-4">
				<?php echo $beerArray[$i][3].' €'?>
			</td>
			<td class="pr-4">
				<?php echo number_format(number) $beerArray[$i][3].' €'?>
			</td>
			<td class="pr-4">
				<input class="rounded text-center" type="number" name="qt">
			</td>

			
	</tr>

<?php endfor ?>
</table>
<input class="btn btn-outline-primary btn-lg mb-2" type="submit"></input>
	
<?php 
//var_dump($beerArray)
?>
</form>	
</body>
</html>