@extends("master",['title' => 'แผนที่'])
@section('content')

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>


function initialize(lat,longi)
{
	var myCenter=new google.maps.LatLng(lat,longi);
var mapProp = {
  center:myCenter,
  zoom:20,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,

  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="googleMap" style="width:500px;height:380px;"></div>

<h1>Map </h1>

@stop