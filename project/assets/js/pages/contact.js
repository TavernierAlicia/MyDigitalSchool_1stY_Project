(function ($) {

    function init() {
        var myLatlng = new google.maps.LatLng(48.8960623,2.3789836);
        // If document (your website) is wider than 767px, isDraggable = true, else isDraggable = false
        var isDraggable = $(document).width() > 767 ? true : false;
        var myOptions = {
            zoom: 16,
            //center: myMap,
            mapTypeControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            draggable: isDraggable,
            scrollwheel: false,

        };
        var contentString = '<div id="content"></div>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var map = new google.maps.Map(document.getElementById('map'), myOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'EDUCATION',
            infowindow: infowindow
        });
        var contentString = '<div id="content">' +
            '<div class="text-center">' +
            '<img src="http://localhost:81/education/assets/images/logo-color-1.png"><br><br> ' +
            '<div class="g-address" style="font-weight: 600;margin-top: 20px;">11, rue de Cambrai Parc du Pont de Flandre Bâtiment 33 75019 Paris</div><br>' +
            '<div class="g-phone-num" style="font-weight: 500;">+33 01 55 07 07 65</div>' +
            '<div class="g-phone-num" style="font-weight: 400;">paris@mydigitalschool.com</div>' +
            '<div class="g-phone-num" style="font-weight: 300;"> www.mydigitalschool.com</div>' +
            '</div>' +
            '</div>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        // infowindow.open(map, marker);
        map.setCenter({
            lat: 48.8960623,
            lng: 2.3789836
        });


            infowindow.open(map, marker);

    }

    google.maps.event.addDomListener(window, 'load', init);

    //END GOOGLE MAP
})(jQuery);
