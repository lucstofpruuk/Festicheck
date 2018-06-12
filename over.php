<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Over ons</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="css/over.css">
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

<div class="container">
  <div class="over">
  	<h1>Ons team</h1>
  	<div class="groep"></div>

  	<div class="persoon">
  		<div class="row info">
  			<div class="col-6">
  				<div class="foto" id="luc">
	  				<div class="pers_con">
	  					<div class="tekst"><p>Luc Melissant</p><p><i>"Zeepoag"</i></p><a target="_blank" href="https://www.instagram.com/lucstofpruuk/"><i class="fab fa-instagram"></i></a></div>
	  				</div>
  				</div>
  			</div>
  			<div class="col-6">
  				<div class="foto" id="yari">
	  				<div class="pers_con">
	  					<div class="tekst"><p>Yari Albrechts</p><p><i>"Zeepoag"</i></p><a target="_blank" href="https://www.instagram.com/yari_albrechts/"><i class="fab fa-instagram"></i></a></div>
	  				</div>
  				</div>
  			</div>
  		</div>
  		<div class="row info">
  			<div class="col-6">
  				<div class="foto" id="brandie">
	  				<div class="pers_con">
	  					<div class="tekst"><p>Brandie Roobol</p><p><i>"Zeepoag"</i></p><a target="_blank" href="https://www.instagram.com/brandie.ro/"><i class="fab fa-instagram"></i></a></div>
	  				</div>
  				</div>
  			</div>
  			<div class="col-6">
  				<div class="foto" id="tim">
	  				<div class="pers_con">
	  					<div class="tekst"><p>Tim Ossenblok</p><p><i>"Zeepoag"</i></p><a target="_blank" href="https://www.instagram.com/tim_01989/"><i class="fab fa-instagram"></i></a></div>
	  				</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</div>

<footer>Footer</footer>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</body>
</html>