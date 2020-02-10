<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "cssPage.css">
	</head>
	<body>
		<div id="textDiv">
			<form action="loginPage.php" method="post">
				<div class="imgcontainer">
					<img src="pykeSkins.png" alt="Pyke's skins" id = "loginPic">
				</div>

				<div class="container">
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>
				
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>

				<button type="submit">Login</button>
				
			  </div>

			  
			  </div>
		</div>
		</form>
		
			<?php
				
				if(isset($_POST['uname'])){
					
					$myPDO = new PDO('sqlite:../sqlite/test.db');
					$result = $myPDO-> query("SELECT * FROM loginInfo");
					foreach($result as $row){
						if($row['UN']== $_POST['uname'] && $row['PW']== $_POST['psw']){
							echo "<script>window.location.assign('introPage.php');</script>";
						}
						echo "<br>";
					}
				}
			?>
			<script>
		</script>
	</body>
</html>