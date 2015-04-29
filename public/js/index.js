$(document).ready(function() {
	
	$(".reviewImg").click(function(){ 
		var resName = $(this).attr("restaurantName");
	    var review = $(this).attr("reviewData");
	    var foodtype = $(this).attr("foodType");
	    var subtype = $(this).attr("subType");
	    var section = $(this).attr("section");
	    

	    var reviewModalHead = $("#reviewDataHeader");
	    var reviewModal = $("#reviewDataBodyRight");
	    var reviewModalMap = $("#reviewDataBodyLeft");
	    reviewModal.html("");
	   
	    reviewModalHead.html("");
	    reviewModalHead.append("<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>");
	    reviewModalHead.append("<h3>"+resName+"</h3>");
	    reviewModal.append("<h4>รีวิว</h4> " +review+"</br>");
	    reviewModal.append("<h4>ประเภทอาหาร</h4> " + foodtype +"</br>");
	    reviewModal.append("<h4>ประเภทร้านอาหาร</h4>" + subtype+"</br>");
	    reviewModal.append("<h4>ย่าน</h4>" + section+"</br>");
	    
	    var mapData = $(this).attr("map");
	    console.log(mapData);
	   	if(mapData!='null'){
	   		reviewModalMap.show();
	   		mapData = mapData.split(',');
	  		var myCenter=new google.maps.LatLng(mapData[0],mapData[1]);
	 		marker2.setMap(null);
	 		marker2=new google.maps.Marker({
	    		position:myCenter,
	     		map: map2,
	    		draggable: false
	  		});  
	  		map2.panTo(marker2.getPosition());
	  	}
	  	if(mapData=='null'){
	  		reviewModalMap.hide();

	  	}
	  	console.log("test");
	    $("#review").modal("show");

	});
});

