function initMap() {
    var itc = {
        lat: 40.784969,
        lng: -73.849631
    };
    var map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 15,
            center: itc,
            mapId: '9badee228f2ee90a',
            disableDefaultUI: true
        });
    
    var marker = new google.maps.Marker({
        position: itc,
        map: map,
        animation: google.maps.Animation.BOUNCE,
        icon: "/images/map-marker.svg"
    });
}