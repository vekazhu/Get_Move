function loadMap() {
    var melbourne = {lat: -37.814, lng: 144.963};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: melbourne,
        zoom: 12,
        mapTypeControl: true,
        mapTypeControlOptions:
            {
                mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map'],
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            }
    });
}

function aerobicCheck()
{
    var checkBox = document.getElementById("Aerobics");
    /* var text = document.getElementById("text"); */
    if (checkBox.checked == true){
        loadAeroMap();
    } else {
        loadAllMap();
    }
}

function cyclingCheck()
{
    var checkBox = document.getElementById("Cycling");
    /* var text = document.getElementById("text"); */
    if (checkBox.checked == true){
        loadCycMap();
    } else {
        loadAllMap();
    }
}

function dancingCheck()
{
    var checkBox = document.getElementById("Dancing");
    /* var text = document.getElementById("text"); */
    if (checkBox.checked == true){
        loadDanMap();
    } else {
        loadAllMap();
    }
}

function fitnessCheck()
{
    var checkBox = document.getElementById("Fitness");
    /* var text = document.getElementById("text"); */
    if (checkBox.checked == true){
        loadFitMap();
    } else {
        loadAllMap();
    }
}

function tennisCheck()
{
    var checkBox = document.getElementById("Tennis");
    /* var text = document.getElementById("text"); */
    if (checkBox.checked == true){
        loadTennisMap();
    } else {
        loadAllMap();
    }
}

function loadAeroMap() {
    var melbourne = {lat: -37.814, lng: 144.963};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: melbourne,
        zoom: 12,
        mapTypeControl: true,
        mapTypeControlOptions:
            {
                mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map'],
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            }
    });
    var aeroData = JSON.parse(document.getElementById('aeroData').innerHTML);
    showAllAerobics(aeroData);
    function showAllAerobics(aeroData) {
    var pin = "../img/mapPin.png";
    Array.prototype.forEach.call(aeroData, function (data) {
        var content = data.FacilityName + data.SportsPlayed;
        var infowindow = new google.maps.InfoWindow({
            content: content,
            maxWidth: 200
        });

        var marker = new google.maps.Marker({
            //position: coordinates,
            position: new google.maps.LatLng(data.lat, data.lng),
            map: map,
            icon: pin,
            title: data.FacilityName
        });

        var ibTimeout;
        google.maps.event.addListener(marker, "mouseover", function (e) {
            console.log('inside marker');
            infowindow.open(map, this);
        });
        google.maps.event.addListener(marker, "mouseout", function (e) {
            ibTimeout = setTimeout(function () {
                infowindow.close();
            }, 50);
        });

        google.maps.event.addListener(infowindow, 'domready', function (e) {
            $('.infobox').on('mouseenter', function (e) {
                clearTimeout(ibTimeout);
            }).on('mouseleave', function (e) {
                clearTimeout(ibTimeout);
                infowindow.close();
            });
        });
    })
}
}

function loadCycMap() {
    var melbourne = {lat: -37.814, lng: 144.963};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: melbourne,
        zoom: 12,
        mapTypeControl: true,
        mapTypeControlOptions:
            {
                mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map'],
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            }
    });
    var cycData = JSON.parse(document.getElementById('cycData').innerHTML);
    showAllCycling(cycData);
    function showAllCycling(cycData) {
        var pin = "../img/mapPin.png";
        Array.prototype.forEach.call(cycData, function (data) {
            var content = data.FacilityName + data.SportsPlayed;
            var infowindow = new google.maps.InfoWindow({
                content: content,
                maxWidth: 200
            });

            var marker = new google.maps.Marker({
                //position: coordinates,
                position: new google.maps.LatLng(data.lat, data.lng),
                map: map,
                icon: pin,
                title: data.FacilityName
            });

            var ibTimeout;
            google.maps.event.addListener(marker, "mouseover", function (e) {
                console.log('inside marker');
                infowindow.open(map, this);
            });
            google.maps.event.addListener(marker, "mouseout", function (e) {
                ibTimeout = setTimeout(function () {
                    infowindow.close();
                }, 50);
            });

            google.maps.event.addListener(infowindow, 'domready', function (e) {
                $('.infobox').on('mouseenter', function (e) {
                    clearTimeout(ibTimeout);
                }).on('mouseleave', function (e) {
                    clearTimeout(ibTimeout);
                    infowindow.close();
                });
            });
        })
    }
}

function loadDanMap() {
    var melbourne = {lat: -37.814, lng: 144.963};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: melbourne,
        zoom: 12,
        mapTypeControl: true,
        mapTypeControlOptions:
            {
                mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map'],
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            }
    });
    var danData = JSON.parse(document.getElementById('danData').innerHTML);
    showAllDancing(danData);
    function showAllDancing(danData) {
        var pin = "../img/mapPin.png";
        Array.prototype.forEach.call(danData, function (data) {
            var content = data.FacilityName + data.SportsPlayed;
            var infowindow = new google.maps.InfoWindow({
                content: content,
                maxWidth: 200
            });

            var marker = new google.maps.Marker({
                //position: coordinates,
                position: new google.maps.LatLng(data.lat, data.lng),
                map: map,
                icon: pin,
                title: data.FacilityName
            });

            var ibTimeout;
            google.maps.event.addListener(marker, "mouseover", function (e) {
                console.log('inside marker');
                infowindow.open(map, this);
            });
            google.maps.event.addListener(marker, "mouseout", function (e) {
                ibTimeout = setTimeout(function () {
                    infowindow.close();
                }, 50);
            });

            google.maps.event.addListener(infowindow, 'domready', function (e) {
                $('.infobox').on('mouseenter', function (e) {
                    clearTimeout(ibTimeout);
                }).on('mouseleave', function (e) {
                    clearTimeout(ibTimeout);
                    infowindow.close();
                });
            });
        })
    }
}

function loadFitMap() {
    var melbourne = {lat: -37.814, lng: 144.963};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: melbourne,
        zoom: 12,
        mapTypeControl: true,
        mapTypeControlOptions:
            {
                mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map'],
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            }
    });
    var fitData = JSON.parse(document.getElementById('fitData').innerHTML);
    showAllFitness(fitData);
    function showAllFitness(fitData) {
        var pin = "../img/mapPin.png";
        Array.prototype.forEach.call(fitData, function (data) {
            var content = data.FacilityName + data.SportsPlayed;
            var infowindow = new google.maps.InfoWindow({
                content: content,
                maxWidth: 200
            });

            var marker = new google.maps.Marker({
                //position: coordinates,
                position: new google.maps.LatLng(data.lat, data.lng),
                map: map,
                icon: pin,
                title: data.FacilityName
            });

            var ibTimeout;
            google.maps.event.addListener(marker, "mouseover", function (e) {
                console.log('inside marker');
                infowindow.open(map, this);
            });
            google.maps.event.addListener(marker, "mouseout", function (e) {
                ibTimeout = setTimeout(function () {
                    infowindow.close();
                }, 50);
            });

            google.maps.event.addListener(infowindow, 'domready', function (e) {
                $('.infobox').on('mouseenter', function (e) {
                    clearTimeout(ibTimeout);
                }).on('mouseleave', function (e) {
                    clearTimeout(ibTimeout);
                    infowindow.close();
                });
            });
        })
    }
}

function loadTennisMap() {
    var melbourne = {lat: -37.814, lng: 144.963};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: melbourne,
        zoom: 12,
        mapTypeControl: true,
        mapTypeControlOptions:
            {
                mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map'],
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            }
    });
    var tenData = JSON.parse(document.getElementById('tenData').innerHTML);
    showAllTennis(tenData);
    function showAllTennis(tenData) {
        var pin = "../img/mapPin.png";
        Array.prototype.forEach.call(tenData, function (data) {
            var content = data.FacilityName + data.SportsPlayed;
            var infowindow = new google.maps.InfoWindow({
                content: content,
                maxWidth: 200
            });

            var marker = new google.maps.Marker({
                //position: coordinates,
                position: new google.maps.LatLng(data.lat, data.lng),
                map: map,
                icon: pin,
                title: data.FacilityName
            });

            var ibTimeout;
            google.maps.event.addListener(marker, "mouseover", function (e) {
                console.log('inside marker');
                infowindow.open(map, this);
            });
            google.maps.event.addListener(marker, "mouseout", function (e) {
                ibTimeout = setTimeout(function () {
                    infowindow.close();
                }, 50);
            });

            google.maps.event.addListener(infowindow, 'domready', function (e) {
                $('.infobox').on('mouseenter', function (e) {
                    clearTimeout(ibTimeout);
                }).on('mouseleave', function (e) {
                    clearTimeout(ibTimeout);
                    infowindow.close();
                });
            });
        })
    }
}


function loadAllMap() {
    var melbourne = {lat: -37.814, lng: 144.963};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: melbourne,
        zoom: 12,
        mapTypeControl: true,
        mapTypeControlOptions:
            {
                mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map'],
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            }
    });
    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllFacility(allData);

    function showAllFacility(allData) {
        var pin = "../img/mapPin.png";
        Array.prototype.forEach.call(allData, function (data) {
            var content = data.FacilityName + "-" + data.SportsPlayed;
            var infowindow = new google.maps.InfoWindow({
                content: content,
                maxWidth: 200
            });

            var marker = new google.maps.Marker({
                //position: coordinates,
                position: new google.maps.LatLng(data.lat, data.lng),
                map: map,
                icon: pin,
                title: data.FacilityName
            });

            var ibTimeout;
            google.maps.event.addListener(marker, "mouseover", function (e) {
                console.log('inside marker');
                infowindow.open(map, this);
            });
            google.maps.event.addListener(marker, "mouseout", function (e) {
                ibTimeout = setTimeout(function () {
                    infowindow.close();
                }, 50);
            });

            google.maps.event.addListener(infowindow, 'domready', function (e) {
                $('.infobox').on('mouseenter', function (e) {
                    clearTimeout(ibTimeout);
                }).on('mouseleave', function (e) {
                    clearTimeout(ibTimeout);
                    infowindow.close();
                });
            });
        })
    }
}






