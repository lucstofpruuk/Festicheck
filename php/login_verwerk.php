 <?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inloggen</title>

	<!-- Compressed CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.4.3/dist/css/foundation.min.css" integrity="sha256-GSio8qamaXapM8Fq9JYdGNTvk/dgs+cMLgPeevOYEx0= sha384-wAweiGTn38CY2DSwAaEffed6iMeflc0FMiuptanbN4J+ib+342gKGpvYRWubPd/+ sha512-QHEb6jOC8SaGTmYmGU19u2FhIfeG+t/hSacIWPpDzOp5yygnthL3JwnilM7LM1dOAbJv62R+/FICfsrKUqv4Gg==" crossorigin="anonymous">



</head>
<body>

	<?php

		if (isset($_POST['submit1']))
		{

			require 'config.php';

			$username = $_POST['usernameInlog'];
			$password = md5($_POST['passwordInlog']);

			$opdracht = "SELECT * FROM loginFesticheck
						WHERE username = '$username'
						AND password = '$password'";

			$resultaat = mysqli_query($mysqli, $opdracht);

			if (mysqli_num_rows($resultaat) > 0)
			{
				$user = mysqli_fetch_array($resultaat);

				$_SESSION['username'] = $user['username'];

				echo "<p>Hallo $username, u bent ingelogd!</p>";
				header("location:../index.php");
			}
			else
			{
				echo "Naam of wachtwoord is onjuist!";;
			}
			
		}
		else
				
		{
	?>

<!-- Compressed JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.4.3/dist/js/foundation.min.js" integrity="sha256-mRYlCu5EG+ouD07WxLF8v4ZAZYCA6WrmdIXyn1Bv9Vk= sha384-KzKofw4qqetd3kvuQ5AdapWPqV1ZI+CnfyfEwZQgPk8poOLWaabfgJOfmW7uI+AV sha512-0gHfaMkY+Do568TgjJC2iMAV0dQlY4NqbeZ4pr9lVUTXQzKu8qceyd6wg/3Uql9qA2+3X5NHv3IMb05wb387rA==" crossorigin="anonymous"></script>
</body>
</html>

<?php
}
?>