<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Contact</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="css/media.css">
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
	  		<a href="index.php"><img id="logo" src="img/festicheck_logo.png" alt="logo"></a>
	  		<div id="outer">
				<span class="menu" id="x"></span>
	  		</div>
	</nav>

	<div class="container-contact">
			<h1 id="cont">Contact</h1>
		
	<div id="formulier-div">
		
		<div class="row">
			<div class="col">
				<div id="map"></div>
			</div>	
			<div class="col cont">
				<h3>Adres</h3>
				<p>Heer Bokelweg 255 (Hoofdgebouw)</p>
				<p>3032 AD</p>
				<p>Rotterdam</p>
				<h3>Contact</h3>
				<p>Tel: <a href="tel:123-456-7890">123-456-7890</a></p>
				<p>E-mail: <a href="mailto:festicheck@info.com" target="_top">festicheck@info.com</a></p>
			</div>
		</div>

	<h2>Contactformulier</h2>
	<form class="needs-validation" novalidate>
			Vul uw gegevens in.
  	<div class="form-row">
		<div class="col-md-4 mb-3">
		  <label for="validationCustom01"></label>
		  <input type="text" class="form-control" id="validationCustom01" placeholder="Voornaam*"  required>
		  <div class="invalid-feedback">
		   Voer uw voornaam in.
		  </div>
		</div>
		<div class="col-md-4 mb-3">
		  <label for="validationCustom02"></label>
		  <input type="text" class="form-control" id="validationCustom02" placeholder="Achternaam*"  required>
		  <div class="invalid-feedback">
		   Voer uw achternaam in.
		  </div>
		</div>
	</div>
	  <div class="form-row">
	  <div class="col-md-4 mb-3">
      <label for="validationCustom03"></label>
      <input type="email" class="form-control" id="validationCustom03" placeholder="E-mailadres*" required>
      <div class="invalid-feedback">
       Voer een geldig e-mailadres in.
      </div>
    </div>
		<div class="col-md-4 mb-3">
      		<label for="validationCustom04"></label>
      		<input type="text" class="form-control" id="validationCustom04" placeholder="Telefoonnummer" >
      
    	</div>
  </div>
		
  <div class="form-row">
  
	  <div class="col-md-8 mb-3">
      <label for="exampleFormControlTextarea1">Laat een bericht achter</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      <div class="invalid-feedback">
       
      </div>
    </div>
  
  </div>

  <button class="btn btn-primary" id="button-aanmelden" type="submit">Verzenden</button>
		
</form>
</div>
	</div>
		
<footer>Footer</footer>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<script>
function initMap() {
  var myLatLng = {lat: 51.927635, lng: 4.478087};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwaTWB8oPQmUWvPoiRabbBKIyUCKOOGRY&callback=initMap"
    async defer></script>

</body>
</html>