
<html>
	<head>
		<style>
		</style>
	</head>
	<body>
		<?php
			$test = "Hello Worlds";
			echo $test;
			echo "<h1 id='peeps'>".$test."</h1>";
		?>
	</body>
</html>



NEW PAGE
runGet.php
<html>
	<head>
		<style>
		</style>
	</head>
	<body>
		<?php
			$name = $_GET["name"];
			$email = $_GET["email"];
			echo"Your name is ".$name.". Your email is ".$email.".";
		?>
	</body>
</html>

NEW PAGE 
runPost.php
<html>
	<head>
		<style>
		</style>
	</head>
	<body>
		<?php
			$name = $_POST["name"];
			$email = $_POST["email"];
			echo"Your name is ".$name.". Your email is ".$email.".";
		?>
	</body>
</html>

NEW PAGE
superVar.php
/*
$_SERVER
$_FILES
$GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
*/
<html>
	<head>
		<style>
		</style>
	</head>
	<body>
		<?php
			$test = "Hello Worlds";
			echo $test;
			echo "<h1 id='peeps'>".$test."</h1>";
		?>
	</body>
</html>

NEW PAGE
array.php
<html>
	<head>
		<style>
		</style>
	</head>
	<body>
		<?php
			$testArray = array("test1 ","test2 ");
			foreach($testArray as $test){
				echo $test;
			}
		?>
	</body>
</html>

NEW PAGE
arrayInproved.php
<html>
	<head>
		<style>
		.liClass{
			color:red;
			font-family:comicSans;
		}
		</style>
	</head>
	<body>
		<?php
			$testArray = array("test1 ","test2 ","test3 ","test4 ","test5 ");
			echo "<ol>";
			foreach($testArray as $test){
				echo"<li class = 'liClass'>".$test."</li>";
			}
			echo "</ol>";
		?> 
	</body>
</html>






