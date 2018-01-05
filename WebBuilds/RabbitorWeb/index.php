<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Portfolio Nathan | Rabbitor 2017</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="../webGLStyle.css">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/RabbitorWeb.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
	<div class="webgl-content">
		<div class="title">
		<h2>
			Rabbitor - 2017
		</h2>
		</div>
	
		<div id="gameContainer" style="width: 960px; height: 600px"></div>
		<div class="gameFooter">
			<div class="webgl-logo"></div>
			<div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
		</div>
		
		<div class="controls">
			<h2>Rabbitor controls</h2>
			<div class="floatLeft">
				<h3>XBox 360 Controller <i>(recommended)</i></h3>
				<p><i>Move</i> = left joystick </br>
				<i>Jump</i> = A </br>
				<i>Load charge</i> = LB/RB</p>
			</div>
			<div class="floatRight">
				<h3>Keyboard</h3> 		
				<p><i>Move</i> = W A S D </br>
				<i>Jump</i> = space </br>
				<i>Load charge</i> = left shift</p>
			</div>
			
			<div class="footer">
				<p><i>Copyright: Nathan Flier - 2018</i></p>
			</div>
		</div>
	</div>
  </body>
</html>