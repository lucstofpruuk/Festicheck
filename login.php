<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	
	<title>Inloggen</title>
	
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body id="body">

<div id="myNav" class="overlay">
  <div class="overlay-content">
    <a href="index.php">Actueel</a>
    <a href="#">Festivals</a>
    <a href="over.php">Over</a>
    <a href="contact.php">Contact</a>
    <div class="user">
      <?php if (isset($_SESSION['username'])) {
      	echo "<a href=''>". $_SESSION['username']. "</a>";
      } ?>
      <i class="fas fa-arrow-down"></i>
      <?php if (isset($_SESSION['username'])) {
        echo "<a href='php/loguit.php'>Uitloggen</a>";
      } else{
        echo "<a href='login.php'>Inloggen</a>";
        }?>
    </div>
  </div>
</div>

<nav id="nav" class="nav fixed-top">
  <a href="index.php"><img id="logo" src="img/festicheck_logo.png"></a>
  <div id="outer">
    <span class="menu" id="x"></span>
  </div>
</nav>
	
	
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="back" id="back1"></div>
			</div>
			<div class="carousel-item">
				<div class="back" id="back2"></div>
			</div>
			<div class="carousel-item">
				<div class="back" id="back3"></div>
			</div>
			<div class="carousel-item">
				<div class="back" id="back4"></div>
			</div>
			<div class="carousel-item">
				<div class="back" id="back5"></div>
			</div>
  		</div>
	</div>

	<div class="containerform" >
		<!--INLOGGEN-->
		<form action="php/login_verwerk.php" method="post" id="form">
		  <h1><b>Inloggen</b></h1>
		  <div class="form-group">
			<label for="gebruikersnaam"><b>Gebruikersnaam</b></label>
			<input type="text" name="usernameInlog" class="form-control" placeholder="Voer gebruikersnaam in">
		  </div>
		  <div class="form-group">
			<label for="wachtwoord"><b>Wachtwoord</b></label>
			<input type="password" name="passwordInlog" class="form-control" placeholder="Voer wachtwoord in">
		  </div>
		  <button type="submit" name="submit1" class="btn btn-primary"><span>Inloggen</span></button>
			<p>Nog geen account? <a class="register" href="#">Meld je hier aan!</a></p>
		</form>
		
		<!--REGISTREREN-->
		<form action="php/verwerkRegistreren.php" method="post" id="formregister">
		  <h1><b>Registreren</b></h1>
		  <div class="form-group">
			<label for="gebruikersnaam"><b>Gebruikersnaam</b><i>*</i></label>
			<input type="text" name="username" class="form-control" id="gebruikersnaam" placeholder="Gebruikersnaam">
		  </div>
		  <div class="form-group">
			<label for="wachtwoord"><b>Wachtwoord</b><i>* </i><small class="text-muted">(min. 6 tekens)</small></label>
			<input type="password" name="password" class="form-control" id="wachtwoord" placeholder="Wachtwoord">
		  </div>
		  <div class="form-group">
			<label for="wachtwoordBevestig"><b>Bevestig wachtwoord</b></label>
			<input type="password" name="password2" class="form-control" id="wachtwoordBevestig" placeholder="Bevestig wachtwoord">
		  </div>
		  <div class="form-group">
			<label for="email"><b>E-mail</b><i>*</i></label>
			<input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
		  </div>
		  <div class="form-group">
			<label for="geboortedatum"><b>Geboortedatum</b><i>*</i></label>
			<input type="date" name="gbdatum" class="form-control" id="geboortedatum" placeholder="Geboortedatum">
		  </div>
		  <button type="submit" name="submit" class="btn btn-primary"><span>Registreren</span></button>
			<p>Heb je al een account? <a class="register" href="#">Hier inloggen.</a></p>
		</form>
	</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>	
<script src="js/script.js"></script>
	
</body>
</html>