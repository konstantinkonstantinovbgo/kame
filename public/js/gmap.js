window.marker = null;

// function initialize() {
//     var map;
//     var nottingham = new google.maps.LatLng(51.507351, -0.127758);
//     var style = [{
//         "featureType": "road.highway",
//         "elementType": "geometry",
//         "stylers": [{"saturation": -100}, {"lightness": -8}, {"gamma": 1.18}]
//     }, {
//         "featureType": "road.arterial",
//         "elementType": "geometry",
//         "stylers": [{"saturation": -100}, {"gamma": 1}, {"lightness": -24}]
//     }, {
//         "featureType": "poi",
//         "elementType": "geometry",
//         "stylers": [{"saturation": -100}]
//     }, {"featureType": "administrative", "stylers": [{"saturation": -100}]}, {
//         "featureType": "transit",
//         "stylers": [{"saturation": -100}]
//     }, {
//         "featureType": "water",
//         "elementType": "geometry.fill",
//         "stylers": [{"saturation": -100}]
//     }, {"featureType": "road", "stylers": [{"saturation": -100}]}, {
//         "featureType": "administrative",
//         "stylers": [{"saturation": -100}]
//     }, {"featureType": "landscape", "stylers": [{"saturation": -100}]}, {
//         "featureType": "poi",
//         "stylers": [{"saturation": -100}]
//     }, {}];
//     var mapOptions = {
//         center: nottingham,
//         mapTypeId: google.maps.MapTypeId.ROADMAP,
//         backgroundColor: "#000",
//         zoom: 17,
//         panControl: false,
//         zoomControl: true,
//         mapTypeControl: false,
//         scaleControl: false,
//         streetViewControl: false,
//         overviewMapControl: false,
//         zoomControlOptions: {style: google.maps.ZoomControlStyle.LARGE}
//     }
//     map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
//     var mapType = new google.maps.StyledMapType(style, {name: "Grayscale"});
//     map.mapTypes.set('grey', mapType);
//     map.setMapTypeId('grey');
//     var marker_image = '/images/icons/marker.png';
//     var pinIcon = new google.maps.MarkerImage(marker_image, null, null, null, new google.maps.Size(62, 85));
//     marker = new google.maps.Marker({position: nottingham, map: map, icon: pinIcon, title: 'Biztrox'});
// }

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
        ['London Eye, London', 51.503454, -0.119562],
        ['Palace of Westminster, London', 51.499633, -0.124755]
    ];

    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>London Eye</h3>' +
        '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' + '</div>'],
        ['<div class="info_content">' +
        '<h3>Palace of Westminster</h3>' +
        '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
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
        this.setZoom(14);
        google.maps.event.removeListener(boundsListener);
    });
}