<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Registreren</title>
</head>

<body>
	
	<?php
	if (isset($_POST['submit']))
	{

		//KOPPELING NAAR DE DATABASE
		require 'config.php';

		//LEES HET FORMULIER UIT
		$username = mysqli_real_escape_string($mysqli, htmlentities($_POST['username']));
		$password = mysqli_real_escape_string($mysqli, htmlentities(md5($_POST['password'])));
		$password2 = mysqli_real_escape_string($mysqli, htmlentities(md5($_POST['password2'])));
		$email = mysqli_real_escape_string($mysqli, htmlentities($_POST['email']));
		$gbdatum = mysqli_real_escape_string($mysqli, htmlentities($_POST['gbdatum']));
		
		if($password2 == $password){

			$query = "INSERT INTO loginFesticheck 
							 VALUES (NULL, '$username', '$password', '$email', '$gbdatum')";

			$result = mysqli_query($mysqli, $query);

			if($result){
				echo "Je account is aangemaakt!";
			}

			else{
				echo "<p>Foutmelding of verkeerde input, probeer opnieuw";
			}
		}
		
		else{
			echo "wachtwoord is niet gelijk";
		}
			
	}
	?>
	
</body>
</html>