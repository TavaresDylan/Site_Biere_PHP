
//for ($i=0; $i < length($beerArray) ; $i++):{
	//inner.HTML = PrixQuantite();
//}
function calculPrix(id){
	var prixHT = parseFloat(document.getElementById("HT_"+id).innerHTML);
	var prixTTC = parseInt(document.getElementById("TTC_"+id).innerHTML);
	console.log(prixHT);
	console.log(prixTTC);
}

//var quantite = document.getElementById("quantite_<?= $i ?>");
//function PrixQuantite(id) {
	//inner.HTML = prixHT * quantite
//};
