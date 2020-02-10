<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "cssPage.css">
	</head>
	<body>
		<form action="introPage.php" method="post">
			<button type="submit">back</button>
		</form>
		<form action="QuestionBordPage.php" method="post">
			<input type="text"  value="" name="myText">
			<div id="answer"></div>
			<button type="button" id= "subBtn">test button</button>
		</form>
		<?php
			if(isset($_POST['myText'])){
				$myPDO = new PDO('sqlite:../sqlite/test.db');
				$result = $myPDO-> query("SELECT * FROM project WHERE entry LIKE '%".$_POST['myText']."%'");
				foreach($result as $row){
					echo "<br>";
					echo $row["entry"];
				}
			}
		?>
		<script>
			
		</script>
	</body>
</html>