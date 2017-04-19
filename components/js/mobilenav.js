//= require bootstrap
/* NAV BAR */ 
$(document).ready(function() {
	

	$("#menu-search").click(function() {
		 
		$("#yamm-placeholder").each(function(){
	 $(".yamm").removeClass('visible');
	});
		$("#menu-search-open").toggleClass('visible');
        $("#menu-nav").removeClass('open');
	});
	
	$("#yamm-placeholder").each(function(){
		$("#menu-nav").click(function() {
			$("#menu-search-open").removeClass("visible");
			
		 $(".yamm").toggleClass('visible');
		
			$("#menu-search").removeClass('open');
	        $(this).toggleClass('open'); 
		});
		
	});
	
	 
}); 