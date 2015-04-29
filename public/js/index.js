$(document).ready(function() {
	
	$(".reviewImg").click(function(){ 
	    var review = $(this).attr("reviewData");
	    var reviewModal = $("#reviewData");
	    reviewModal.html("");
	    reviewModal.append(review);
	    $("#review").modal("show");

	});
});

