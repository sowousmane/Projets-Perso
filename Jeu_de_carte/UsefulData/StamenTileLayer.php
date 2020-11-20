<?php
	include('DataBase.php');
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Leaflet.js avec couche Stamen Watercolor</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="StamenTileLayer.css">
		<script type="text/javascript" src="StamenTileLayer.js"></script>
		<script type="text/javascript" src="../UsefulData/Hamza.js"></script>
		<script>
			$(function () {
				$('.connexion').on('mouseover', function () {
					alert('')
				})
			})
		</script>
	</head>
	<body>
		
			<?php include("../Menus/menu_jouer.php"); ?>
			
		
		<div class="MyClassInfo" id="MyIdInfo">  
			<p id="information"> Ce jeu consiste à choisir un continent et cherhcer le pays correspondant à la question posée selon le thème que vous choisirez. </p>
			<p class="text-danger " style="font-size: 19px; margin-top:-20px;"><?=$retVal = (isset($_SESSION['id'])) ? "" : "Vous ne pouvez jouer que sur l'Afrique veillez vous connectez si vous voulez joueur sur les autres continents." ;?>  </p>
			<buton type="button" class="  btn btn-outline-success" data-toggle="modal" data-target="#AfriqueModal">AFRIQUE</buton>
			<button <?=$retVal = (isset($_SESSION['id'])) ? "" : "disabled='none'" ;?>  type="button"class=" btn btn-warning europe" data-toggle="modal" data-target="#EuropeModal">EUROPE</button>
			<button <?=$retVal = (isset($_SESSION['id'])) ? "" : "disabled='none'" ;?>  type="button"class="btn btn-danger" data-toggle="modal" data-target="#AmeriqueModal">AMÉRIQUE</button>			
			<button <?=$retVal = (isset($_SESSION['id'])) ? "" : "disabled='none'" ;?>  type="button"class="btn btn-outline-success" data-toggle="modal" data-target="#AsieModal">ASIE</button>			
			<button <?=$retVal = (isset($_SESSION['id'])) ? "" : "disabled='none'" ;?>  type="button"class="btn btn-warning europe" data-toggle="modal" data-target="#OceanieModal">OCÉANIE</button>			            
			<!-- The Modal Afrique-->
			<div class="modal" id="AfriqueModal">
				<div class="modal-dialog">
					<div class="modal-content">	
						<!-- Modal Header -->
						<div class="modal-header">
							<h6 class="modal-title">Choisissez un thème</h6>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>					
						<!-- Modal body -->
						<div class="modal-body" id= "collapse">
							<a class="btn btn-outline-success"  href="../Afrique/Afrique_amusant.php">Amusant</a>
							<a class="btn btn-warning europe" href="../Afrique/Afrique_curieux.php">Curieux</a>			
						</div>					
					</div>
				</div>
			</div>

			<!-- The Modal Europe-->
			<div class="modal" id="EuropeModal">
				<div class="modal-dialog">
					<div class="modal-content">			
						<!-- Modal Header -->
						<div class="modal-header">
							<h6 class="modal-title">Choisissez un thème</h6>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body" id="collapse">
							<a class="btn btn-outline-success" href="../Europe/Europe_amusant.php">Amusant</a>
							<a class="btn btn-warning europe" href="../Europe/Europe_curieux.php">Curieux</a>
						</div>						
					</div>
				</div>
			</div>

			<!-- The Modal Amerique -->
			<div class="modal" id="AmeriqueModal">
					<div class="modal-dialog">
						<div class="modal-content">
					
							<!-- Modal Header -->
							<div class="modal-header">
								<h6 class="modal-title">Choisissez un thème</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							
							<!-- Modal body -->
							<div class="modal-body">
								<a class="btn btn-outline-success" href="../Amérique/Amerique_amusant.php">Amusant</a>
								<a class="btn btn-warning europe" href="../Amérique/Amerique_curieux.php">Curieux</a>
							</div>						
						</div>
					</div>
			
			</div>
			<!-- The Modal Asie -->
			<div class="modal" id="AsieModal">
				<div class="modal-dialog">
					<div class="modal-content">
				
						<!-- Modal Header -->
						<div class="modal-header">
							<h6 class="modal-title">Choisissez un thème</h6>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						
						<!-- Modal body -->
						<div class="modal-body">
							<a class="btn btn-outline-success" href="../Asie/Asie_amusant.php">Amusant</a>
							<a class="btn btn-warning europe" href="../Asie/Asie_curieux.php">Curieux</a>
						</div>						
					</div>
				</div>
			</div>
			<!-- The Modal  Oceanie-->
			<div class="modal" id="OceanieModal">
					<div class="modal-dialog">
						<div class="modal-content">
					
							<!-- Modal Header -->
							<div class="modal-header">
								<h6 class="modal-title">Choisissez un thème</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							
							<!-- Modal body -->
							<div class="modal-body">
							<a class="btn btn-warning europe" href="../Oceanie/Oceanie_curieux.php">Curieux</a>
							</div>						
						</div>
					</div>
				</div>
		<div id="maDiv" class="MyCardWorld"></div>
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
			var map = new L.Map('maDiv', {
				center: [48.858376, 2.294442],
				minZoom: 1,
				maxZoom: 1,
				zoom:1,
				maxBounds: bornes
			});
			//var map = L.map('maDiv').setView([48.858376, 2.294442],5);
			// Affichage de la carte
			map.addLayer(coucheStamenWatercolor);
			// Juste pour changer la forme du curseur par défaut de la souris
			document.getElementById('maDiv').style.cursor = 'crosshair'
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
				popup.setLatLng(e.latlng)
				.setContent("BONJOUR ET BIENVENUE CHOISISSEZ UN CONTINENT POUR JOUEUR !")
				.openOn(map);
			}
			// Association Evenement/Fonction handler
			map.on('click', onMapClick);
		</script>
	</body>
</html>
<script>
function demomofunction (){
    if(document.getElementById('demomo').style.display=='none'){
      document.getElementById('demomo').style.display='block';
      document.getElementById('demo').style.display='none';
  
    }
    else 
    document.getElementById('demomo').style.display='none';
  }
</script>

<style>
body
{overflow: hidden;}
</style>