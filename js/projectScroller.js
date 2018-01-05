jQuery(window).load(function() {
	var titles = [];
	var newLocation = "animation.php";
	window.onload = Start();
	function Start(){
		var h2s = $("h2").toArray();
		for(var i = 0; i < h2s.length; i ++){
			titles.push($(h2s[i]));
		}
		
		var re = '/~nathan.flier';
		var pathName = window.location.pathname;
		if(pathName.match("^/~nathan.flier")){	
			pathName = pathName.replace(re, '');
		}
		if(pathName == "/projects.php"){
			newLocation = "allProjects.php";
		}
		OnLoadScroller();
	}
	
	function OnLoadScroller(){
		var h2s = $("h2").toArray();
		for(var i = 0; i < h2s.length; i ++){
			titles.push($(h2s[i]));
		}
		
		var id = GoToId();
		if(id > -1){
			ScrollTo(titles[id].offset().top);
		}
	}
	
	$("#projectMenuWrapper > ul > li").click(function(){
		var titleId = $(this).index();
		ScrollTo(titles[titleId].offset().top);
	});
	
	$(".scroller").click(function(){
		StoreId($(this).index(".scroller"));
		window.location.replace(newLocation);
	});
	function ScrollTo(topOffset){
		if(UseScroll()){
			$('html, body').animate({
				scrollTop: topOffset
			}, 700);
		}
	}
	
	function StoreId(id){
		if(typeof(Storage) !== "undefined"){
			sessionStorage.id = id;
		}
	}
	function GoToId(){
		if(typeof(Storage) !== "undefined"){
			var h2Id = sessionStorage.id;
			sessionStorage.id = -1;
			return h2Id;
		}
		else{
			return -1;
		}
	}
	
	function UseScroll(){
		useScroll = true;
		if(typeof(Storage) !== "undefined"){
			if(sessionStorage.useScroll == 0){
				useScroll = false;
			}
		}
		return useScroll;
	}
});

