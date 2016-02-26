<?

	session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Einloggen</title>
	</head>
	<body>
		<h1>Einloggen</h1>

		<? if (isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] === true) {
			?>
			Sie sind eingeloggt"
			<br>
			<a href="logout.php">ausloggen</a>
		<? } else { ?>
			Sie sind nicht eingeloggt.
		<? } ?>
		}

		<br>

</body>
</html>