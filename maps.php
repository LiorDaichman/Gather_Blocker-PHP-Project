
<!DOCTYPE html>
<html>
  <head>
  <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
    <meta name="viewport"
        content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
    .checkbutton{
 background-color: #3CBC8D;
  border: none;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border: 2px solid grey;
   border-radius: 4px;
   align:center;	
	
}

      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=
      AIzaSyBzEQNrZAro6z0848S1hBpQvo6QuK-73yw&sensor=false">
    </script>
    <script type="text/javascript">
      var map;
var Markers = {};

var infowindow;

<?php
require_once("cofig2.php");
?>
var locations = <?php echo json_encode( $ar ) ?>;
var origin = new google.maps.LatLng(locations[0][2], locations[0][3]);

function initialize() {
  var mapOptions = {
    zoom: 9,
    center: origin
  };

  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	infowindow = new google.maps.InfoWindow();

    for(i=0; i<locations.length; i++) {
    	var position = new google.maps.LatLng(locations[i][2], locations[i][3]);
		var marker = new google.maps.Marker({
			position: position,
			map: map,
		});
		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(locations[i][1]);
				infowindow.setOptions({maxWidth: 200});
				infowindow.open(map, marker);
			}
		}) (marker, i));
		Markers[locations[i][4]] = marker;
	}

	locate(0);

}

function locate(marker_id) {
	var myMarker = Markers[marker_id];
	var markerPosition = myMarker.getPosition();
	map.setCenter(markerPosition);
	google.maps.event.trigger(myMarker, 'click');
}

google.maps.event.addDomListener(window, 'load', initialize);

    
        
        
       
    </script>
  </head>
  <body>
    <div id="map-canvas"/>
  </body>
</html>


