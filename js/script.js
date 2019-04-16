//fadeOut Scroll
function goToByScroll(id){
	$('html,body').animate({scrollTop: $("#"+id).offset().top},800);
}

function waitForIt(el, callback){
	el.on("mozAnimationEnd webkitAnimationEnd msAnimationEnd oAnimationEnd animationend mozAnimationEnd", callback);
}


$(function(){
	var url = "#page1";

	// On attend que l'url change
	$(window).on("hashchange", function(e){
		if ( window.location.hash == "#page1" && (!url || url == "#")) return false;
		url = window.location.hash || "#page1";
		// Si c'est dans le menu du header
		if ( $("a[href='"+url+"']", "#topMenu").length ){
			// On metmam le lien actif
			$("li", "#topMenu").removeClass("active")
				.find("a[href='"+url+"']").parent().addClass("active")
		}

		// On charge la page en question
		$(".onManShow").toggleClass("fadeOut");
		$("#navigation").removeClass("containerfadeIn").toggleClass("containerfadeOut");
		$("#maskTitle").removeClass("pageTitleIn").toggleClass("pageTitle");
		$("#container").removeClass("containerfadeIn").toggleClass("containerfadeOut");
		setTimeout(function() {
			url=url.replace('#page','');
			$.ajax({
				type: "POST",
				url: "load_page.php",
				data: 'page='+url,
				dataType: "html",
				success: function(msg){
					$('#pageContent').html(msg);
				}
				
			});
		}, 400);
	})
	window.location.hash == "" || window.location.hash == "#" || window.location.hash == "#page1" || $(window).trigger("hashchange");


	// Pour IE:
	if ( !("onhashchange" in window) ){
		setInterval(function(){
			if (url != window.location.hash){
				$(window).trigger("hashchange");
			}
		}, 100);
	}

	$(document).scroll(function() {

		$("#navigation").each(function(){
			var bottomPosition = $(document).height(),
				offset = $(this).offset();
			if (window.scrollY >= 155){
				$(this).removeClass("unstick").addClass("stick");
			}else{
				$(this).removeClass("stick").addClass("unstick");
			}

			if (window.scrollY > bottomPosition - 1080){
				$(this).removeClass("stick").addClass("stickBottom");
			}else{
				$(this).removeClass("stickBottom").addClass("unstick");
			}
		});
	});

	// Wait for preloading
	waitForIt($("#borderTop"), function(){
		// When loaded, then animate everything
		$("body").removeClass("paused")
	})

	$('ul.slideHeader li a').one(function(){
		$("body").removeClass("firstTime")
	})


	//Back to top
	$(window).scroll(function() {
		if($(window).scrollTop() > 200) {	
			$("#backToTop").fadeIn(250);
		} else {	
			$("#backToTop").fadeOut(250);
		}
	});

	$("#pageContent").on("click","#backToTop, #navigation .top",function(){
		$("html, body").animate({
			scrollTop: 0
		},1000);
	});

});

