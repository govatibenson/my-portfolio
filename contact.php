<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
	<style type="text/css">
		body{
			background: yellow;
			font-family: times roman numeral;
			font-size: 20px;
		}
	</style>
	<h2 text align="center"><a href="index.php">HOME</a></h2>
</head>
<body>
	<!--- geolocation code starts from here--->
	<script type="text/javascript">
		if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(showPosition);
} else {
  console.log("Geolocation is not supported by this browser.");
}

function showPosition(position) {
  var latitude = position.coords.latitude;
  var longitude = position.coords.longitude;
  
  console.log("Latitude: " + latitude);
  console.log("Longitude: " + longitude);
  // geolocation code has ended here
}

	</script>
<h3 text align="center"><a href="#">CONTACTS</a></h3>
<p>Get more information about me and my projects through the following contacts and social media platforms;</p>
		<p align="left"> <img align="center"src="Whatsapp.png" widith="20px" height="30px" <p> +265 884 231 441 </p>
		<p align="left"> <img align="center"src="imelo.jpg" widith="16px" height="20px" <p> desiregovati89@gmail.com</p>
		<p align="left"> <img align="center"src="fb.jpg" widith="16px" height="20px" <p> Govati Benson Bello</p>
		<p align="left"> <img align="center"src="twitter.jpg" widith="16px" height="20px" <p> govatibenson</p>
<h5 text align="center"><a href="#">HOW TO JOIN ME.</a></h5>
<p>You can also join me in this amazing journey of creating websites.To do it, get the form by clicking <a href="form.html"><i>here</i></a> and fill it with your correct information, and remember to submit upon completion.</p>
</body>
</html>