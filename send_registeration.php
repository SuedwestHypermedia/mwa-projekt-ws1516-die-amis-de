<?php


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Send Registeration</title>
	</head>
	<body>
		<? if (empty($_POST["vorname"]) || empty($_POST["nachname"]) || empty($_POST["geschlecht"])): ?>
			Sie müssen Ihre Vorname, Nachname eingeben. Und auch Ihre Geschlecht auswählen! 
		<? else: ?>
			Sie sind angemeldet!
		<? endif ?>

	</body>
</html>