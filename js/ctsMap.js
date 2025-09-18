    function myMap()
    {
      myCenter=new google.maps.LatLng(-15.360473, 28.361353);
      var mapOptions= {
        center:myCenter,
        zoom:15, scrollwheel: false, draggable: true,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

      var marker = new google.maps.Marker({
        position: myCenter,
      });
      marker.setMap(map);
    }

