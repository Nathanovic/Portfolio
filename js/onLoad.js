var lastHoveredLink;
$(document).ready(function() {
	var re = '/~nathan.flier';
	var pName = window.location.pathname;
	var pathName = pName;
	if(pName.match("^/~nathan.flier")){	
		pathName = pName.replace(re, '');
	}
	
	var menuWrOffset;
	window.onload = Start();
	function Start(){
		if(pathName == "/" || pathName == "/index.php"){  
			var title = $("#title");
			title.css("display", "block");
			$("h1").first().after("<br/><br/><br/>");
			$("#titleHead").after("<p id='description'>Hi there!<br/> I am Nathan, and I am passionate about creating games that excite and inspire people.<br/><br/>What defines me in the game industry, are my ambitions and my perseverance.</p>");
		}
		
		var scrWidth = $(window).width();
		$("body").removeAttr("id");
		
		sideMenuWrMarginTop = 50;   
		if(pathName != "/" && pathName != "/index.php"){
			var sideMenuWrapper = $("#projectMenuWrapper");
			$(".footer > p").css("margin-left", "0px");
			GetItemByPName(pathName);
			$("body").attr("id","coloredBody");
			
			if(pathName == "/allProjects.php"){
				sideMenuWrapper.css("display","initial");
				sideMenuWrapper.html("<ul> <li><a>Toelating</a></li> <li><a>Piskelaria</a></li> <li><a>Dark World</a></li></ul>");  
			}
			else if(pathName == "/animation.php"){
				sideMenuWrMarginTop = 150;
				sideMenuWrapper.css("display","initial");
				sideMenuWrapper.html("<ul><li><a>15xanimatie</a></li> <li><a>stopmotion</a></li> <li><a>loopbeweging</a></li> <li><a>transport</a></li></ul>");
			}
			sideMenuWrapper.css("margin-top",sideMenuWrMarginTop + "px");   
		}
		else{
			GetItemByPName("/index.php");
		}
	}
	
	$("ul li a").hover(function(){
		if($(this).parent().prop("tagName") == "LI"){
			lastHoveredLink.removeClass("hoveredMenuItem");
			$(this).addClass("hoveredMenuItem");
			lastHoveredLink = $(this);
		}},
		function(){
			lastHoveredLink.removeClass("hoveredMenuItem");
		}
	);

	function GetItemByPName(pathName){
		var elementId = 1;
		switch(pathName){
			case("/index.php"):
				elementId = 1;
				break;
			case("/projects.php"):
				elementId = 2;
				break;
			case("/HKUWork.php"):
				elementId = 3;
				break;
			case("/about.php"):
				elementId = 4;
				break;
			case("/log.php"):
				elementId = 5;
				break;
			case("/contact.php"):
				elementId = 6;
				break;
			default:
				elementId = LastLoadedPage();
				break;
		}
		SetLastHovered(elementId);
		
		StoreLastLoadedPage(elementId);
	}
	
	function SetLastHovered(id){
		var lastHoveredLi = $("#menuWrapper > ul > li:nth-of-type("+id+")");
		lastHoveredLink = lastHoveredLi.find("a");
		lastHoveredLink.attr("id","onCurrentPage");
	}
	
	function StoreLastLoadedPage(pathId){
		if(typeof(Storage) !== "undefined"){
			sessionStorage.pathId = pathId;
		}
	}
	function LastLoadedPage(){
		if(typeof(Storage) !== "undefined"){
			return sessionStorage.pathId;
		}
		else{
			return 1;
		}
	}
});

