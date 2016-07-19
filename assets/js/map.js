function initialize() {
    var mapCanvas = document.getElementById('map');

    var lat=document.getElementById("latitude").value;
    var long=document.getElementById("longitude").value;

    var mapOptions = {
         center: new google.maps.LatLng(lat,long),
         zoom: 16,
         zoomControl: true,
         zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_BOTTOM
         },
         scaleControl: true,
         mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(lat, long),
        map: map,
        title: 'marker'
  });

}
google.maps.event.addDomListener(window, 'load', initialize);