<!DOCTYPE html>
<html>
<head>
	<title>MY brief profile</title>
	<style>
			header {
			background-color: cyan;
			color: black;
			padding: 20px;
			text-align: center;
		}
		nav {
			background-color: #f2f2f2;
			padding: 5px;
			text-align: center;
		}
		section {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
			padding: 20px;
			background-color: #ddd;
		}
		article {
			flex: 1;
			margin: 10px;
			padding: 20px;
			background-color: pink;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
			border-radius: 5px;
			text-align: justify;
		}
		footer 
		{
			background-color:black;
			color: white;
			padding: 20px;
			text-align: center;
			font-size: 20px;
		}
		.slideshow-container 
		{
      max-width: 1000px;
      position: relative;
      margin: auto;
    }
     .slideshow-container img 
     {
      width: 100%;
      height: auto;
  }
  	/* below is CSS styles for hover effect element */
    .hover-element {
      width: 200px;
      height: 200px;
      background-color: blue;
      transition: background-color 0.3s ease;
    }
	</style>
	<!--- javascript code for greeting an user-->
	<script>
    function getGreeting() {
      var date = new Date();
      var hours = date.getHours();
      var greeting;
      
      if (hours >= 0 && hours < 12) {
        greeting = "Good morning?";
      } else if (hours >= 12 && hours < 18) {
        greeting = "Good afternoon?";
      } else {
        greeting = "Good evening?";
      }
      
      return greeting;
    }
    
    function displayGreeting() {
      var greeting = getGreeting();
      document.getElementById("greeting").textContent = greeting;
    }
  </script>
<!--- javascript code for greeting an user ends here in head section-->
</head>
	<body onload="displayGreeting()">

<h1 id="greeting"></h1>

<script>
  
</script>


	<header>
		<h3>UPCOMING WEB DESIGNER AND DEVEVELOPER</h3>
	</header>
	  <!--- this is now php code that connects my page to database--->
	  <?php
$sname= "localhost";
$uname= "root";
$password = "";
$db_name = "loginsystem";
// connecting to the database
$conn = mysqli_connect($sname, $uname, $password, $db_name);
// condition that tests if connection is successful
if (!$conn) 
{
	die("Connection failed:" .mysqli_connect_error($conn));
  }
  // retrieve data from very inside myprojects table in database called loginsystem
  $sql="SELECT *FROM `myprojects`;";
  $result= $conn->query($sql);
  if ($result->num_rows>0)
  {
while ($row = $result->fetch_assoc())
  {
	echo "ID" . $row["ID"]. "PROJECTS". $row["PROJECTS"] . "<br>";
}
}
else {
	echo "0 results";
}
?>

	<nav>
		<ul>
			<a href="#"><b>HOME</b></a></li> &emsp; &emsp; &emsp;&emsp;|&emsp;&emsp; &emsp;&emsp;&emsp;
			<a href="project.php"><strong>PROJECTS</strong></a> &emsp; &emsp; &emsp;&emsp;|&emsp;&emsp;&emsp;&emsp;&emsp;
			<a href="skills.php"><strong>SKILLS</strong></a> &emsp; &emsp; &emsp;&emsp;|&emsp;&emsp;&emsp;&emsp;&emsp;
			<a href="contact.php"><strong>CONTACT</strong></a> &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		</ul>
	</nav>
	<section>
		<article>
			<h4>BRIEF BIOGRAPHY</h4>
			<img src="man_go.jpg" widith="100px" height="200px" align="center">
			<p>My name is Govati Bello Benson, am a man born in Chikwawa and am 28 years of age. I was born in a family of three children, two boys and one girl. I did my primary school at Nkhate primary and I did well in my primary school leaving certificate(PSLC) where I got selected to Zomba Catholic Secondary School. Currently am studying Education(ICT) at Mzuzu University and this is my second year.</p>

		</article>

		<article>
			<h4>PROJECTS</h4>
			<p1>As a beginner in the field of web design and development I have done two projects of which the first one I used HTML and the second one I used both HTML and CSS. Currently am working on another project where am combining three skills, HTML, CSS and Javascript. It's an amazing experience that am getting as am working on such projects.</p1>

<!-- javascript starts here in the body section-->
<div class="slideshow-container">
  <!-- Images for the slideshow -->
  <img src="css.png">
  <img src="HTML.jpg">
</div>

<script>
  // JavaScript code for automatic slideshow
  var slideIndex = 0;
  showSlides();
  
  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slideshow-container")[0].getElementsByTagName("img");
    
    // Hide all slides
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    
    // Increment slide index
    slideIndex++;
    
    // Reset slide index if it exceeds the number of slides
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    
    // Display the current slide
    slides[slideIndex - 1].style.display = "block";
    
    // Change slide every 2 seconds (2000 milliseconds)
    setTimeout(showSlides, 2000);
  }
</script>
		</article>
		<article>
			<h4>CONTACT</h4>
		<p1>To get in touch with me please use the contacts found by <a href="contact.html"><i>clicking here</i> </a></p1>
		</article><br>
		<article>
		<h4>SKILLS</h4>
		<P2>Find more about the skills, tools and technologies which I use when developing my projects by clicking <a href="skills.html"><i>here.</i></a></P2>
		</article>
	</section>
	<footer>
		<p>&copy; 2023 Web developer.</p>
	</footer> 
</body>
</html>
