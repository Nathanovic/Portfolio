<!DOCTYPE html>
<html>
<body>
	<div class="wrapper">     
		<?php include "base.php"; 
			// if(isset($_POST["opinion"])){
				// if(Validate($_POST["sender"], $_POST["message"], $_POST["opinion"]) == true){
					// $msg = $_POST["message"]."\n opinion: ".$_POST["opinion"];
					// mail("nathanflier@hotmail.com","formMail from: ".$_POST["sender"],$msg);
				// }
			// }
			
			// function Validate($name, $message, $opinion){
				// return true;
			// }
		?>
		<section class="mainSection">
			<h2 class="contentTitle">Contact:</h2>
			<section class="container">
				<section id="contactData">
					<h4>Contactgegevens:</h4>
					<p>E-mail: nathanflier@hotmail.com<br/>
					Adres: Dorpsweg 89<br/>
					Woonplaats: Hattem<br/>
					Telefoon: 06 33214553<br/>
					</p>
				</section>
				
				<form id="reflectionForm" method="post" action="/srv/www/cgi-bin/FormMail.cgi">
					<h4>Send me a message:</h4>
					<input name="subject" type="hidden" value="Formulier">
					<input name="recipient" type="hidden" value="nathanflier@hotmail.com">
					<input name="return_link_title" type="hidden" value="WebsiteReflection">
					<input name="return_link_url" type="hidden" value="mailSend.php">
					<input name="required" type="hidden" value="sender">
					<input name="required" type="hidden" value="message">
					<input name="required" type="hidden" value="radio">
					Naam:<br/>
					<input type="text" name="sender" size=22 maxlength="32"><br/>
					Improvement(s):<br/>
					<textArea rows="4" cols="23" name="message" maxlength="80">any hints on how to improve my site?</textArea><br/>
					Wat vind je van mijn website:<br/>
					<input type="radio" name="opinion" value="slecht" checked>Slecht<br/>
					<input type="radio" name="opinion" value="matig">Matig<br/>
					<input type="radio" name="opinion" value="okeyish">Okeyish<br/>
					<input type="radio" name="opinion" value="goed :)">Goed :)<br/>
					<input type="submit" value="send">
				</form>
			</section>
		</section>
	</div>
	<?php include "footer.html" ?>
</body>

</html>
