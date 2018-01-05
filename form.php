<!DOCTYPE html>
<html>
	<?php
		if(isset($_POST["name"]) && filter_var($_POST["name"])){
			print("ingevoerde naam: ");
			print($_POST["name"]);
			print("<br>");
		}
		if(isset($_POST["notifications"]) && filter_var($_POST["notifications"])){
			print("notifications: ");
			print($_POST["notifications"]);
			print("<br>");
		}
	?>
	<form method="post">
		<br/>
		<p>wateenmooieform:</p>
		<input type="text" value="name" name="name" size=20 maxlength="20"/><br/><br/>
		<textarea name="notifications" rows=2 cols=20>notifications</textarea><br/>
		<input type="submit" value="send"/>
	</form>
</html>