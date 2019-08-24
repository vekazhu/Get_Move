function loadMap() {
    var melbourne = {lat: -37.814, lng: 144.963};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: melbourne,
        zoom: 12
    });

    /*
        var cdata = JSON.parse(document.getElementById('data').innerHTML);
        geocoder = new google.maps.Geocoder();
    */
    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllFacility(allData)


    function showAllFacility(allData) {
        Array.prototype.forEach.call(allData, function (data) {
            //var coordinates = {lat:data.lat, lng:data.lng};
            var marker = new google.maps.Marker({
                //position: coordinates,
                position: new google.maps.LatLng(data.lat, data.lng),
                map: map
            });
            console.log(marker);
        })
    }

    function codeAddress(allData) {
        Array.prototype.forEach.call(allData, function (data) {
            var address = data.FacilityName + ' ' + data.SuburbTown + ' ' + data.SportsPlayed + ' ' + data.lat + ' ' + data.lng;
            console.log(address);
        })
    }
}





