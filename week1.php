<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht</title>
</head>
<body>
 <!-- <form method="get" action="week1.2.php">
	<label for="naam">Naam:</label>
	<input type="text" name="naam"><br><br>
		
	<label for="achternaam">Achternaam:</label>
	<input type="text" name="achternaam"><br><br>
		
	<label for="leeftijd">Leeftijd:</label>
	<input type="number" name="leeftijd"><br><br>
		
	<label for="adres">Adres:</label>
	<input type="text" name="adres"><br><br>
		
	<label for="email">Email:</label>
	<input type="email" name="email"><br><br>

	<input type="submit" value="Verzenden">
	</form> -->
<?php
	// $naam = $_GET["naam"];
	// $achternaam = $_GET["achternaam"];
	// $leeftijd = $_GET["leeftijd"];
	// $adres = $_GET["adres"];
	// $email = $_GET["email"];

	// echo "Naam: " . $naam . "<br>";
	// echo "Achternaam: " . $achternaam . "<br>";
	// echo "Leeftijd: " . $leeftijd . "<br>";
	// echo "Adres: " . $adres . "<br>";
	// echo "Email: " . $email . "<br>";
?>
 

<form method="POST" action="week1.2.php">

    <label for="naam">Naam:</label>
	<input type="text" name="naam"placeholder="Naam" required><br><br>
		
	<label for="achternaam">Achternaam:</label>
	<input type="text" name="achternaam"placeholder="Achternaam" required><br><br>
		
	<label for="leeftijd">Leeftijd:</label>
	<input type="number" name="leeftijd"placeholder="leeftijd" required><br><br>
		
	<label for="adres">Adres:</label>
	<input type="text" name="adres" placeholder="adres"required><br><br>
		
	<label for="email">Email:</label>
	<input type="email" name="email" placeholder="email" required><br><br>
		
	<input type="submit" value="Verzenden">

</form>
<?php
	$naam = $_POST["naam"];
	$achternaam = $_POST["achternaam"];
	$leeftijd = $_POST["leeftijd"];
	$adres = $_POST["adres"];
	$email = $_POST["email"];

echo "Naam: " . $naam . "<br>";
echo "Achternaam: " . $achternaam . "<br>";
echo "Leeftijd: " . $leeftijd . "<br>";
echo "Adres: " . $adres . "<br>";
echo "Email: " . $email . "<br>";
 ?>
<!-- dus get method verstuurt data via de URL en post method verstuurt data via http -->
</body>
</html>
