function loadMap() {
    var melbourne = {lat: -37.814, lng: 144.963};
    var map = new google.maps.Map(document.getElementById('map'), {
            center: melbourne,
            zoom: 14});

    var market = new google.maps.Marker({
        position: melbourne,
        map: map
    });
}