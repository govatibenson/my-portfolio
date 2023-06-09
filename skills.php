<!DOCTYPE html>
<html>
<head>
	<title>skills</title>
	<style type="text/css">
		body{
			background: cyan;
			font-size: 20px;
		}
		h4{
			text-align: center;
		}
	</style>
<h2 text align="center"><a href="index.html" >HOME</a></h2>
</head>
<body>
	<?php
$servernane="localhost";
$username="root";
$password="";
$database="skills";

$conn=myqli_connect($servername,$username,$password,$database);
if($conn){
echo "connected";
}
else{
echo "not connected";
}
$query=mysqli_query($conn,"select*from my_skill");

while($row=mysqli_fetch_array(query)){
echo $row["id"]."\t".$row["skill"]."<br>";
}
?>
<h4>SKILLS, TOOLS AND TECHNOLOGIES</h4> <br>
<P3>Below are the skills, tools and technologies that I use in developing my projects.</P3><br>
<ol>
				<ul>
					<li>Coding using C and Java programming languages</li>
					<li>Web designing and development</li>
					<li>interacting with Github </li>
				</ul>
			</ol>
<UL>
	</ol>
</body>
</html>
