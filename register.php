<?php 
$pageTitle = "Die Amis - Home";

include("inc/header.php"); ?>



<div id="wrapper">

		<section>

<h1>Anmelung</h1>
<br>
<form action="send_registeration.php" method="post">
	<table style="border 0; margin-left: auto; margin-right: auto; text-align:left">
		<tr>
			<td>Vorname:</tr>
			<td><input name="vorname" type="text"></td>
		</tr>
		<tr>
			<td>Nachname:</tr>
			<td><input name="nachname" type="text"></td>
		</tr>
		<tr>
			<td>Geschlecht</td>
			<td>
				<input name="geschlecht" type="radio" value="w"> Weiblich
				<input name="geschlecht" type="radio" value="m"> Männlich
			</td>
		</tr>
		<tr>
			<td>Bundesland</td>
			<td>
				<select name="bundesland">
					<option value=""></option>
					<option value="Baden-Württemberg">Baden Württemberg</option>
					<option value="Bayern">Bayern</option>
					<option value="Berlin">Berlin</option>
					<option value="Brandenburg">Brandenburg</option>
					<option value="Bremen">Bremen</option>
					<option value="Hamburg">Hamburg</option>
					<option value="Hessen">Hessen</option>
					<option value="Mecklenburg-Vorprommern">Mecklenburg-Vorprommern</option>
					<option value="Niedersachsen">Nordrhein-Westfalen</option>
					<option value="Rheinland-Pfalz">Rheinland-Pfalz</option>
					<option value="Saarland">Saarland</option>
					<option value="Sachsen">Sachsen</option>
					<option value="Sachsen-Anhalt">Sachsen-Anhalt</option>
					<option value="Schleswig-Holstein">Schleswig-Holstein</option>
					<option value="Thüringen">Thüringen</option>
				</select>
			</td>
		</tr>
	</table>
	<br>
	<input type="submit" value="Anmelden!">
</form>


</section>

</div>



<?php include("inc/footer.php"); ?>




