<!DOCTYPE html>
<html>
<head>
	<title>EcoGIS</title>
	<link rel="stylesheet" href="https://js.arcgis.com/4.0beta3/esri/css/main.css">
	<script src="https://js.arcgis.com/4.0beta3/"></script>

	<style type="text/css">
		.esri-logo-svg {
			display:none;
		}

	</style>
</head>
<body>
<div id="viewDiv"></div>

<script type="text/javascript">

require([
  "esri/Map",
  "esri/views/SceneView",
  "dojo/domReady!"
],
function(Map, SceneView) {
  var map = new Map({
    basemap: "streets"
  });
  var view = new SceneView({
    container: "viewDiv",
    map: map,
    scale: 50000000,
    center: [-101.17, 21.78]
  });
});

</script>
</body>
</html>