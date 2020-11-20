<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Leaflet.js avec couche Stamen Watercolor</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../UsefulData/StamenTileLayer.css">
	<script type="text/javascript" src="Afrique.js"></script>
	<?php include('coordonneesCountries.php');?>
</head>
<body>
		
	<?php include("../Menus/menu_jouer.php"); ?>

<!-- ------------------------------------------------------------------------>
<!-- *******Bienvenue en AFRIQUE*********** -->
<!-- ------------------------------------------------------------------------>
	<div id="AfricaInfo" >
		<h5> 
			Bonjour et bienvenue dans le berceau de l’humanité, vous allez vous amusez!<br>
			Vous êtes prêt?
			<button type="button" class="bouton">appuyer ici</button>
			sinon prenez votre temps.		
		</h5>
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div >QUESTIONS</div>
				<div id="curieux" class="curieux"  > </div>
				<div id="score" style="position: relative;top: 40px; left: 50px; background-color:  rgb(139, 189, 218);
    margin-right: 100px;" > 

				<br>
				</div>
				
			</div>
			<div class="col-6 monmap">
				 <div  class="MyCardAfrique" id="afrique" > </div>
				 
			</div>
		</div>
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
		
		//$(".monmap").append('<div  class="MyCardAfrique" id="afrique" > Barry </div>');
		$('.bouton').on('click', function () {
			
	var idRandom = getRndInteger(6,10);
	if (idRandom>5 && idRandom<11) {
		$.ajax({
                    url:'AfriqueCurieuxRequetes.php',
                    type:'post',
                    data:{sow:idRandom},
                    success: function (data) {
						$('.curieux').html(data)
						//alert(data)
                       /*setTimeout(
                            function() 
                            {
                                location.reload();
                                 
                            }, 0002); */
                    },
                    error: function () {
                        alert('Problème de connexion')
                    } 
			 }) 
			 $.ajax({
                     url:'AfriqueCurieuxRequetes.php',
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
	

	var map = new L.Map('afrique', {
		center: [13.87008, 18.193359],
		minZoom: 2,
		maxZoom: 18,
		zoom: 3,
		maxBounds: bornes
	});
	//var map = L.map('afrique').setView([48.858376, 2.294442],5);
	// Affichage de la carte
	map.addLayer(coucheStamenWatercolor);
	// Juste pour changer la forme du curseur par défaut de la souris
	document.getElementById('afrique').style.cursor = 'crosshair'
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
		popup.setLatLng(e.latlng);
		var valeur = popup.getLatLng(e.latLng);
        var Latitude = valeur.lat;
        var Longitude = valeur.lng;
       
        var pointA = [lal,log];
        var EntreAetB =[[Latitude,Longitude],pointA];
		
		var marker = L.marker([Latitude,Longitude]).addTo(map);
		// var pp=L.popup().setLatLng(pointA)
		// 	.setContent('<p>Hello world!<br />This is a nice popup.</p>');
			
		//dessin des pays selon la reponse de la question aléatoire
		if( pays =="afrique du sud") {
			
			map.setView(pointA, 3);
			L.geoJSON(sudAfrique, {color:'green' }).addTo(map);
        var ligne = L.polyline(EntreAetB,{color: 'red'}).addTo(map);

		}
        else  if( pays =="tanzanie") {
			map.setView(pointA, 3);
			L.geoJSON(tanzanie, {color:'green' }).addTo(map);
        var ligne = L.polyline(EntreAetB,{color: 'red'}).addTo(map);
		}
        else  if( pays =="maroc") {
			map.setView(pointA, 3);
			L.geoJSON(maroc, {color:'green' }).addTo(map);
        var ligne = L.polyline(EntreAetB,{color: 'red'}).addTo(map);
		}
        else  if( pays =="mozambie") {
			map.setView(pointA, 3);
			L.geoJSON(mozambique, {color:'green' }).addTo(map);
        var ligne = L.polyline(EntreAetB,{color: 'red'}).addTo(map);
		}
        else if( pays =="madagascar") {
			map.setView(pointA, 3);
			L.geoJSON(madagascar, {color:'green' }).addTo(map);
        var ligne = L.polyline(EntreAetB,{color: 'red'}).addTo(map);
		}
        else{
			alert("Cliquez d'abord sur\"commencer\"")
		}

		var Distance = Math.round(map.distance(pointA,valeur)/1000);
		if(Distance<500){
			document.getElementById("score").innerHTML=(' Barvooo! &#128079; 🎉 Je suis  '+ pays +' &#128516; et votre score est &#128073; '+scoreFunction (Distance))
		
		}
		else{
			document.getElementById("score").innerHTML=(' Je suis  '+ pays +' &#128516; et votre score est &#128073; '+scoreFunction (Distance))
		
		}

		$(function () {
			// if (scoreFunction (Distance)==0) {
			// 	location.reload();
			// }
			$.ajax({
                     url:'AfriqueCurieuxRequetes.php',
                     type:'post',
                     data:{score:scoreFunction (Distance), id_question:id_question},
                    
                     success: function (data) {
						$('.message_score').html(data); 
                     },
                     error: function () {
                         alert('Probl  connexion')
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
	 }else if (Distance > 1000 &&  Distance < 1500 ) {
		note=5;
		return note;
	}
	else { return note;}
   }
	// Association Evenement/Fonction handler
		map.on('click', onMapClick);
		
</script>