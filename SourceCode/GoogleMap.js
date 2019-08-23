function loadMap() {
    var uluru = {lat: -25.264, lng: 131.044};
    var map = new google.maps.Map(document.getElementById('map'), {
            center: uluru,
            zoom: 4});
}