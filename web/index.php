<html>

	<head>
		<title> Google Map Coordinates Finder </title>
		<style>
			#map {
				height: 50%;  
				width: 50%; 
				margin: 0 auto;
			}
			#header1{
				text-align: center;
				color: blue;
			}
			#info{
			}
			button{

			}
		</style>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	
	<body>
		<div class="jumbotron">
  			<h1 class="display-4" style="text-align: center"> Welcome to Google Map Coordinates Finder </h1>
		</div>

	<h2 id="header1"> You have entered the following details </h2>

	<div id="info">
		<ul>
			<b> <li> Location Name: <?php echo $_POST['nameVal'] ?>  </li> </b>
			<b> <li> Longitude: <?php echo $_POST['latVal'] ?>  </li> </b>
			<b> <li> Latitude: <?php echo $_POST['lngVal'] ?> </li> </b>
		</ul>
	</div>
	

	<div id="map" ></div>

	<script>
	function initMap() 
	{
  		var location = {lat: <?php echo $_POST['latVal'] ?>, lng: <?php echo $_POST['lngVal'] ?> };
  		var map = new google.maps.Map(
  		document.getElementById('map'), {zoom: <?php echo $_POST['zoomVal'] ?>, center: location});
  		var marker = new google.maps.Marker({position: location, map: map});
	}
	</script>

	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLM8rSL2bxHaOVtyiXCPLqEspgO-8TGsE&callback=initMap">
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<br>
	<br>		

	<div style="text-align: center">
	<form action="table.php" method="post">
		 <input type="hidden" name="latVal" value="<?php echo $_POST['latVal']?>">

		 <input type="hidden" name="lngVal" value="<?php echo $_POST['lngVal']?>">

		 <input type="hidden" name="nameVal" value="<?php echo $_POST['nameVal']?>">

		<input type="submit" value="Save Location">
	</form>
	</div>

	<br>
	<br>
	</body>
	
</html>