var marker;
var map;
var marker2;
var map2;
function initialize()
{
  var myCenter=new google.maps.LatLng(13.7455103,100.5332882);
  var mapProp = {
    center:myCenter,
    zoom:20,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  map=new google.maps.Map(document.getElementById("map_canvas"),mapProp);

  map2=new google.maps.Map(document.getElementById("reviewDataBodyLeft"),mapProp);


setTimeout(function(){
            $('#map_modal .modal-body').append($("#map_canvas").css("margin-top","0px").get(0));
        },1000);
setTimeout(function(){
            $('#reviewDataBody').prepend($("#reviewDataBodyLeft").css("margin-top","0px").get(0));
        },1000);
  marker=new google.maps.Marker({
    position:myCenter,
    draggable: false
  });
  marker2=new google.maps.Marker({
    position:myCenter,
    draggable: false
  });

  marker.setMap(map);
}


google.maps.event.addDomListener(window, 'load', initialize);