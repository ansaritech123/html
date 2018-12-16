<html>
<head>
	<title>Home</title>

<style>
	div{
		height: 5%;
		width: 98%;
		background: #C0C0C0;
		padding: 1%;

	}
	a{
		text-decoration: none;
		font-size: 20;
		color: blue;
		padding: 2%;
	}
	img{
		margin-left: auto;
		margin-right: auto;
		padding: 1%;
		padding-left: 5%;
	}

</style>
</head>

<body>
	<img src="img.jpg" alt="Img">
	<div>
		<a href="Home.html" <h1>Home</h1></a>
		<a href="About.html" <h1>About</h1></a>
		<a href="Contact.html" <h1>Contact Us</h1></a>
		<a href="phppage.php" <h1>Php Page</h1></a>
		
	</div>
<?php
echo "My first PHP Code!<br>";
echo "counting 1 to 50<br><br>";

for ($x = 0; $x <= 50; $x++) {
    echo " $x <br>";
    for ($i=0; $i <$x ; $i++) { 
   		echo "&emsp;";
    }
} 
?>

</body>

</html>