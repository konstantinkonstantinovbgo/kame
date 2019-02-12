window.marker = null;

var map = document.getElementById('map_canvas');
if (map != null) {
    google.maps.event.addDomListener(window, 'load', initialize);
}

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };

    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);

    // Multiple Markers
    var markers = [
        ['OFFICE bul. Ruski 46 fl.2 of. 1 Plovdiv 4002', 42.1476831, 24.7409004],
        ['PRODUCTION : BRESTNIK VILLAGE UL. TRAKIA 15', 42.051010, 24.768830]
    ];

    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>OFFICE bul. Ruski 46 fl.2 of. 1 Plovdiv 4002</h3>' +
        '</div>'],
        ['<div class="info_content">' +
        '<h3>PRODUCTION : BRESTNIK VILLAGE UL. TRAKIA 15</h3>' +
        '</div>']
    ];

    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;

    var marker_image = '/images/icons/marker.png';
    var pinIcon = new google.maps.MarkerImage(marker_image, null, null, null, new google.maps.Size(62, 85));

    // Loop through our array of markers & place each one on the map
    for (i = 0; i < markers.length; i++) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0],
            icon: pinIcon
        });

        // Allow each marker to have an info window
        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
        this.setZoom(11);
        google.maps.event.removeListener(boundsListener);
    });
}