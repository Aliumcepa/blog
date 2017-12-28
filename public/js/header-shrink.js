function scrolling() {
     
		if ($(document).scrollTop() > 80)
		{
		  $("#header-shrink").addClass("shrink");
		}
		else
		{
			$("#header-shrink").removeClass("shrink");
		}
	
}

$(document).on("scroll", function(){
	if (screen.width > 1024) {
		scrolling();
	}
});

//$( window ).resize(function() {
//    scrolling();
//});

