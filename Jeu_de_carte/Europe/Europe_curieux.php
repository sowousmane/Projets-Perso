<!DOCTYPE html>
<html lang="fr">
<head>
		<title>Leaflet.js avec couche Stamen Watercolor</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="../UsefulData/StamenTileLayer.css">
		<script type="text/javascript" src="Europe.js"></script>
	<?php include('coordonneesCountries.php');?>
	</head>
	<body>
		
		<?php include("../Menus/menu_jouer.php"); ?>

<!-- ------------------------------------------------------------------------>
<!-- ********************Bienvenue en EUROPE****************************** -->
<!-- ------------------------------------------------------------------------>
	<div id="EuropaInfo" >
		<h5> 
			Bonjour et bienvenue dans le continent qui  a dominé le monde jusqu'au 20ème siècle l'Europe.
			Vous êtes prêt? <br>si oui
			<button type="button" class="bouton" >
			appuyer ici</button>
			sinon prenez votre temps.		
		</h5>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div id="Qeurope">QUESTIONS</div>
				<div id="curieux" class="curieux">	</div>
				<div id="score" style="position: relative;top: 40px; left: 100px; background-color: rgb(240, 143, 232);
    margin-right: 200px;" > </div>
			</div>
			<div class="col-6">
				<div  class="MyCardEurope" id="europe" >
						 
			</div>
</body>
</html>
<script type="text/javascript" src="../UsefulData/Hamza.js"></script>
<script>

var id_question = 0;
	var pays = '';
	var lal = 0;
	var log = 0;
	function getRndInteger(min, max) {
	return Math.floor(Math.random() * (max - min + 1) ) + min;
	}
	$(function () {
	$('.bouton').on('click', function () {

	var idRandom = getRndInteger(33,37);
	if (idRandom>32 && idRandom<38) {
	$.ajax({
			url:'EuropeCurieuxRequetes.php',
			type:'post',
			data:{sow:idRandom},
			success: function (data) {
				$('.curieux').html(data)
				
			},
			error: function () {
				alert('Problème de connexion')
			} 
	}) 
	$.ajax({
			url:'EuropeCurieuxRequetes.php',
			type:'post',
			data:{donnerjson:idRandom},
			dataType:'JSON',
			success: function (data) {
				
				id_question = idRandom;
				pays = data.pays;
				log = data.log;
				lal = data.lal;
			},
			error: function () {
				alert('Problème de connexion')
			}
		}) 
	}else {alert("Je ne vous propose aucune question d'abord comme je suis gentil donc Appuez encore")}

	})

	})
</script>


<script>
	// bornes pour empecher la carte StamenWatercolor de "dériver" trop loin...
	var northWest = L.latLng(90, -180);
	var southEast = L.latLng(-90, 180);
	var bornes = L.latLngBounds(northWest, southEast);
	// Initialisation de la couche StamenWatercolor
	var coucheStamenWatercolor = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.{ext}', {
		attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
		subdomains: 'abcd',
		ext: 'jpg'
	});
	// Initialisation de la carte et association avec la div

	
	var map = new L.Map('europe', {
		center: [51, 10],
		minZoom: 0,
		maxZoom: 18,
		zoom: 3,
		maxBounds: bornes
	});
	//var map = L.map('afrique').setView([48.858376, 2.294442],5);
	// Affichage de la carte
	map.addLayer(coucheStamenWatercolor);
	// Juste pour changer la forme du curseur par défaut de la souris
	document.getElementById('europe').style.cursor = 'crosshair'
	//map.fitBounds(bornes);
	// Initilisation d'un popup
	var popup = L.popup();
	// Fonction de conversion au format GeoJSON
	function coordGeoJSON(latlng,precision) { 
		return '[' +
			L.Util.formatNum(latlng.lng, precision) + ',' +
			L.Util.formatNum(latlng.lat, precision) + ']';
	}
	// Fonction qui réagit au clic sur la carte (e contiendra les données liées au clic)
	function onMapClick(e) {
		popup.setLatLng(e.latlng).setContent("Hello click détecté sur <br/> " + coordGeoJSON(e.latlng,7))
		.openOn(map);
		var valeur = popup.getLatLng(e.latLng);
		var Latitude = valeur.lat;
		var Longitude = valeur.lng;

		var pointA = [lal,log];
		var EntreAetB =[[Latitude,Longitude],pointA];

		var marker = L.marker([Latitude,Longitude]).addTo(map);

		//dessin des pays selon la reponse de la question aléatoire
		if( pays =="luxembourg") {
			map.setView(pointA, 7);
			L.geoJSON(luxembourg, {color:'green' }).addTo(map);
			
			var ligne = L.polyline(EntreAetB,{color: 'red'}).addTo(map);
		}
        else  if( pays =="france") {
			map.setView(pointA, 3);
			L.geoJSON(france, {color:'green' }).addTo(map);
        var ligne = L.polyline(EntreAetB,{color: 'red'}).addTo(map);
		}
        else  if( pays =="norvege") {
			map.setView(pointA, 4);
			L.geoJSON(norvege, {color:'green' }).addTo(map);
        var ligne = L.polyline(EntreAetB,{color: 'red'}).addTo(map);
		}
        else  if( pays =="allemagne") {
			map.setView(pointA, 5);
			L.geoJSON(allemagne, {color:'green' }).addTo(map);
        var ligne = L.polyline(EntreAetB,{color: 'red'}).addTo(map);
		}
        else if( pays =="croatie") {
			map.setView(pointA, 5);
			L.geoJSON(croatie, {color:'green' }).addTo(map);
        var ligne = L.polyline(EntreAetB,{color: 'red'}).addTo(map);
		}
		else{
			alert("Appuez sur \"appyez ici\" d'abord.")
		}

		var Distance = Math.round(map.distance(pointA,valeur)/1000);
		if(Distance<1000){
			if(pays=='france'){
				document.getElementById("score").innerHTML=(' Félicitations! &#128131; &#128079; &#128079; 🎉 je suis '+ pays +'. Oups!!🤭 je me tais! &#128516; et ton score est &#128073; '+scoreFunction (Distance))
			}else{
				document.getElementById("score").innerHTML=(' Congratulation! &#128079; 🎉 je suis '+ pays +'. Oups!!🤭 je me tais! &#128516; et ton score est &#128073; '+scoreFunction (Distance))
			}
		}
		else{
			document.getElementById("score").innerHTML=(' Ohh non &#128562; je suis  '+ pays +'. Oups!!🤭 je me tais! &#128516; et ton score est &#128073; '+scoreFunction (Distance))
		
		}
		$(function () {
			$.ajax({
				url:'EuropeCurieuxRequetes.php',
				type:'post',
				data:{score:scoreFunction (Distance), id_question:id_question},
				
				success: function (data) {
					
				},
				error: function () {
					alert('Probleme de  connexion')
				}
			})
		})

	}

	//

	function scoreFunction (Distance){
	var note = 0;
	if( Distance <500){
		note = 10;
		return note;

	}else if(Distance> 500 && Distance<1000) {
		note =8;
		return note;
	}else if (Distance > 1000 &&  Distance < 1600 ) {
		note=6;
		return note;
	}else if (Distance > 1600 &&  Distance < 3000 ) {
		note=3;
		return note;
	}
	else { return note;}
	}
	// Association Evenement/Fonction handler
	map.on('click', onMapClick);


</script>