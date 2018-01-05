<html lang="en">
<head>
	<title>Portfolio</title>
	<link rel="stylesheet" media="screen" href="css/baseStyle.css"/>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Nathan Flier">
	<meta name="description" content="game developer">
	<meta name="keywords" content="unity, csharp, blender, photoshop, developer, enthusiastic">
	<meta name="robots" content="all">
	<meta charset="UTF-8">
	
	<?php
		session_start(); 
		
		$styleSheet = 1;
		if(isset($_GET["style"]) && filter_var($_GET["style"], FILTER_VALIDATE_INT)){		
			$_SESSION['style'] = $_GET["style"];
			$styleSheet = $_GET["style"];
			if($_GET["style"] == 1){
				?>
					<script>
						sessionStorage.useScroll = 1;
					</script>
				<?php
			}
			else{
				?>
					<script>
						sessionStorage.useScroll = 0;
					</script>
				<?php
			}
		}
		elseif(isset($_SESSION["style"])){
			$styleSheet = $_SESSION["style"];
		}
		else{
			$styleSheet = 1;
		}
		
		if($styleSheet == 1){
			?>
				<script src="http://code.jquery.com/jquery.min.js"></script>
				<script src="js/onLoad.js"></script>
				<script src="js/flexibleSize.js"></script>
				<link rel="stylesheet" media="screen" href="css/layout1.css"/>
			<?php
		}
		else if($styleSheet == 2){
			?>
				<script src="http://code.jquery.com/jquery.min.js"></script>
				<link rel="stylesheet" media="screen" href="css/layout2.css"/>
			<?php
		}
		else{
			?>
				<link rel="stylesheet" media="screen" href="css/layout4.css"/>
				<p>
				</p>
				<div class="goofy"></div>
			<?php
		}
	?>
</head>

<div class="header">
	<section id="title">
		<h1 id="nameTitle">Nathan Flier:</h1><h1 id="blackTitle">Game Developer</h1>
		<img id="titleHead" src="images/Nathan.jpg" style="display: none"/>
	</section>
	<form id="stylesheetSwitch" method="get">
		<p>Style:</p>
		<input type="submit" name="style" value="1"/>
		<input type="submit" name="style" value="2"/>
	</form>
	
	<div id="totalMenu">
		<nav id="projectMenuWrapper">
			
		</nav>
		<nav id="menuWrapper">
			<ul>
				<li><a class="hover" href="index.php">HOME</a></li>
				<li><a href="projects.php">PROJECTS</a></li>
				<li><a href="HKUWork.php">HKU WORK</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="log.php">LOG</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</nav>
	</div>
</div>
<nav id="sideMenu">
	<ul>
		<h3>Menu:</h3>
		<li><a href="index.php">dit is een menu wat alleen zichtbaar wordt in stylesheet2 op bepaalde pagina's</a></li>
	</ul>
</nav>
</html>