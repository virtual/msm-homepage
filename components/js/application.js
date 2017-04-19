//= require bootstrap
$(document).ready(function() { 
    
    $("#expandme").click(function() {
        if (currentW == 'small') {
		$('#expand_section').toggle();
            }
	});
   
	window.prettyPrint && prettyPrint();
	$(document).on('click', '.yamm .dropdown-menu', function(e) {
		e.stopPropagation();
	});

	$('#expand_section ul>li:has(ul)').click(function(event) {
		$newul = $(this).find("ul:first");
		if ($newul.css("display") == "none") {
			$newul = $(this).find("ul:first");
			$newul.parent().removeClass("drop");
			$newul.parent().addClass("opendrop");
			$newul.show("fast");
			$newul.parent().removeClass("togopen");
		} else {
			$newul = $(this).find("ul:first");
			$newul.parent().removeClass("opendrop");
			$newul.parent().addClass("drop");
			$newul.hide("fast");
			$newul.parent().removeClass("togopen");
		}
		event.stopPropagation();
	});
    
    ($('nav.mainnav li').has('ul')).each(function() {
		$(this).addClass("drop");
		$(".exnav>li:has(ul)>a").css("display", "block");
		$(this).show("fast");
	});
    
    /* Menu accessibility for Enter */
    $('.dropdown > a[tabindex]').keydown(function(event) {
        if (event.keyCode == 13) {
          $(this).dropdown('toggle');
        }
    });
  
    window.prettyPrint && prettyPrint();
	$(document).on('click', '.yamm .dropdown-menu', function(e) {
		e.stopPropagation();
	});
 
    $("#menu-nav").click(function() {
	 	$(this).toggleClass('mobile-active');
		$('.topnav-action').toggle();
	});
 
	// Fix for IE8 window resize
	var lastWindowWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	var currentW = 'small';

	if (lastWindowWidth >= 768) {
		currentW = 'large';	}  
    
	$(window).resize(function() {
		//confirm window was actually resized
		if (Math.max(document.documentElement.clientWidth, window.innerWidth || 0) != lastWindowWidth) {
			lastWindowWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

			//call my function
			if ((lastWindowWidth < 768) && ((currentW == 'large') || (currentW ='xs'))) {
				currentW = 'small';
 				smallWindow(); 
			}
			if ((lastWindowWidth >= 768) && (currentW == 'small')) {
				currentW = 'large';
                largeWindow();
                
			} 
        }
	});

	if ((Math.max(document.documentElement.clientWidth, window.innerWidth || 0)) < 768) {
	 	smallWindow(); 
 	}  
     
	function smallWindow() {
       $('.topnav-action').hide();
            $("#yamm-placeholder").each(function() {
			$('.yamm').prependTo('.topnav-action').removeClass('visible');
			$('#menu-nav').show().removeClass('mobile-active').removeClass('open');
		});
    }
    
    function largeWindow() { 
        $('#expand_section').show();
        $('#yamm-placeholder').append($('.yamm'));
        $('.topnav-action').show();
    }
    
     $( "#expand_section .drop > a" ).click(function( event ) {
        event.preventDefault();
    });
    $( "#expand_section .opendrop > a" ).click(function( event ) {
        event.preventDefault();
    });
}); 