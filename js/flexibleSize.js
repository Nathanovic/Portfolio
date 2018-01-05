$(document).ready(function() {
	window.onload = PaddingCheck();
	$(window).resize(function() {
		console.log($(window).width());
		PaddingCheck();
	});
	function PaddingCheck(){
		scrW = $(window).width();
		var menu = $("#totalMenu");
		bodyPL = 75;
		menuRight = "1%";
		if(scrW < 1270){     
			bodyPL = 0;
			menuRight = "-1%";
		}
		else if(scrW < 1300){
			bodyPL = 20;
			menuRight = "0.5%";
		}
		else if(scrW < 1320){
			bodyPL = 25;	
			menuRight = "0.5%";
		}
		else if(scrW >= 1200 && scrW < 1380){
			bodyPL = 30;
		}
		else{
			bodyPL = 270;     
		}
		$(".footer").css("margin-left", (scrW - 960) / 2 - 45+"px");
		//$("body").css("padding-left",bodyPL+"px");
		menu.css("right",menuRight);
	}
});