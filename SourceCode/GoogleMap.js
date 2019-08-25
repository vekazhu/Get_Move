function loadMap() {
    var styledMapType = new google.maps.StyledMapType(
        [
            {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
            {
                featureType: 'administrative',
                elementType: 'geometry.stroke',
                stylers: [{color: '#c9b2a6'}]
            },
            {
                featureType: 'administrative.land_parcel',
                elementType: 'geometry.stroke',
                stylers: [{color: '#dcd2be'}]
            },
            {
                featureType: 'administrative.land_parcel',
                elementType: 'labels.text.fill',
                stylers: [{color: '#ae9e90'}]
            },
            {
                featureType: 'landscape.natural',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
            },
            {
                featureType: 'poi',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
            },
            {
                featureType: 'poi',
                elementType: 'labels.text.fill',
                stylers: [{color: '#93817c'}]
            },
            {
                featureType: 'poi.park',
                elementType: 'geometry.fill',
                stylers: [{color: '#a5b076'}]
            },
            {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{color: '#447530'}]
            },
            {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [{color: '#f5f1e6'}]
            },
            {
                featureType: 'road.arterial',
                elementType: 'geometry',
                stylers: [{color: '#fdfcf8'}]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{color: '#f8c967'}]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry.stroke',
                stylers: [{color: '#e9bc62'}]
            },
            {
                featureType: 'road.highway.controlled_access',
                elementType: 'geometry',
                stylers: [{color: '#e98d58'}]
            },
            {
                featureType: 'road.highway.controlled_access',
                elementType: 'geometry.stroke',
                stylers: [{color: '#db8555'}]
            },
            {
                featureType: 'road.local',
                elementType: 'labels.text.fill',
                stylers: [{color: '#806b63'}]
            },
            {
                featureType: 'transit.line',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
            },
            {
                featureType: 'transit.line',
                elementType: 'labels.text.fill',
                stylers: [{color: '#8f7d77'}]
            },
            {
                featureType: 'transit.line',
                elementType: 'labels.text.stroke',
                stylers: [{color: '#ebe3cd'}]
            },
            {
                featureType: 'transit.station',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
            },
            {
                featureType: 'water',
                elementType: 'geometry.fill',
                stylers: [{color: '#b9d3c2'}]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.fill',
                stylers: [{color: '#92998d'}]
            }
        ],
        {name: 'Styled Map'});
    var melbourne = {lat: -37.814, lng: 144.963};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: melbourne,
        zoom: 12,
        mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                'styled_map']
        }
    });
    map.mapTypes.set('styled_map', styledMapType);
    map.setMapTypeId('styled_map');

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllFacility(allData)

    function showAllFacility(allData) {
        var pin = "../img/mapPin.png"
        Array.prototype.forEach.call(allData, function (data) {
            //var coordinates = {lat:data.lat, lng:data.lng};
           /* var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h1 id="firstHeading" class="firstHeading"></h1>'+
                '<div id="bodyContent">'+
                '<p></p>'+
                '</div>'+
                '</div>'; */
            var facName = data.FacilityName;
            var facSport = data.SportsPlayed;
            var infowindow = new google.maps.InfoWindow({
                content: (facName + "\n" + facSport),
                maxWidth: 200
            });

            var marker = new google.maps.Marker({
                //position: coordinates,
                position: new google.maps.LatLng(data.lat, data.lng),
                map: map,
                icon: pin,
                title: data.FacilityName
            });

            /*marker.addListener('click', function() {
                infowindow.open(map, marker);
            }); */

            var ibTimeout;
            google.maps.event.addListener(marker, "mouseover", function (e) {
                console.log('inside marker');
                infowindow.open(map, this);
            });

            google.maps.event.addListener(marker, "mouseout", function (e) {
                ibTimeout = setTimeout(function(){
                    infowindow.close();
                }, 50);
            });

            google.maps.event.addListener(infowindow, 'domready', function(e){
                $('.infobox').on('mouseenter', function(e){
                    clearTimeout(ibTimeout);
                }).on('mouseleave', function(e){
                    clearTimeout(ibTimeout);
                    infowindow.close();
                }); });
        })
    }

}





