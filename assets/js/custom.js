// JavaScript Document
$(document).ready(function(){	
	//Change Language
	$('.dropdown-language li').click(function(){
		var lng = $(this).attr("data-lng");
		$.get( "/common.php", { lang:lng } )
		  .done(function( data ) {
		   location.reload();
		});
	});
	
	$("a.link-effect").click(function(){
		$(".preloader").fadeIn();
	});
	
	$('.modal-center').on('shown.bs.modal', function (event) {
		var window_height = $(window).height();
		var modal_height = $(this).find(".modal-dialog").height();
		var margin_top = ((window_height-modal_height)/2);
		$(this).find(".modal-dialog").css("margin-top",margin_top);
	})
	
	var navbarCollapse = $(".navbar-collapse");

	navbarCollapse.on('show.bs.collapse',function(){
		$("body").css("overflow","hidden");
	});	
	navbarCollapse.on('hide.bs.collapse',function(){
		$("body").css("overflow","visible");
	});
	
						
	$(navbarCollapse).find("a.scroll").click(function(){
		navbarCollapse.collapse("hide");
	});
	
	$('.scroll').bind('click', function(event) {
			var $anchor = $(this);
			var $target = $anchor.attr('href');
			var offsetTop = $(".navbar-header").height();		
			
			if($target=="#") {
				var $target_distance =0
			} else {				
				var $target_distance = $($target).offset().top-offsetTop;
			}
				
			$('html, body').stop().animate({
				scrollTop: $target_distance
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
	});
	
	
});


$(window).resize(function (){
	waitForFinalEvent(function(){
		setBodyMargin();
    }, 500, randString(4));
    verticalCenter();
});

$(window).load(function (){
	$(".preloader").fadeOut();
	$("html").css("overflow","visible");
	setBodyMargin();
	ScrollToanchorlink();
	verticalCenter();
});

$(window).scroll(function(){
	scrollUpIcon(200);
});

function ScrollToanchorlink(){
	var $anchor = window.location['hash'];
	var offsetTop = $(".navbar-header").height();
	if($anchor!="" && typeof($($anchor).offset())!=="undefined"){
		setTimeout(
		function() {
			var $target_distance = $($anchor).offset().top-offsetTop;		
			$('html, body').stop().animate({
					scrollTop: $target_distance
				}, 1500, 'easeInOutExpo');
		}, 1000);
	}

}
function scrollUpIcon(offset){
	var curPosition = $(window).scrollTop();
	if (curPosition > offset){
		$("#toTop").fadeIn();
	} else {
		$("#toTop").fadeOut();
	}
}

function setBodyMargin(){
	var offsetTop = $("header .navbar-header").outerHeight()+1;
	$("body").css("padding-top",offsetTop);
}

function verticalCenter(){
	var objectClass = $(".vertical-center");
    var window_height = $(window).height();
	var header_heigth = $("header .navbar-header").outerHeight()+1;
	var footer_height = $("footer").outerHeight();
	var padding = (window_height-header_heigth-footer_height-0-$("#content").height())/2 ;
	
	objectClass.css("padding-top", padding);
	objectClass.css("padding-bottom", padding);
	
	if( objectClass.outerHeight() < objectClass.css("min-height") ) {
		objectClass.css("padding",objectClass.height()/2+"px auto");
	}
}

function randString(n){
    if(!n){
        n = 5;
    }

    var text = '';
    var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    for(var i=0; i < n; i++){
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    }
    return text;
}

var waitForFinalEvent = (function () {
  var timers = {};
  return function (callback, ms, uniqueId) {
    if (!uniqueId) {
      uniqueId = "Don't call this twice without a uniqueId";
    }
    if (timers[uniqueId]) {
      clearTimeout (timers[uniqueId]);
    }
    timers[uniqueId] = setTimeout(callback, ms);
  };
})();