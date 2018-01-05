jQuery(window).load(function() {
	var videoTags = document.getElementsByTagName('video')
	for( var i = 0; i < videoTags.length; i++ ){
		 alert( videoTags.item(i).currentSrc )
	}
});