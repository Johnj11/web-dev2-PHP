<html>
	<head>
		<link rel="stylesheet" href="design.css">
		<style>
			#dropDown{
				width:200px;
				height:40;
				border-color:black;
				margin-left:4px;
				margin-top:5px;
				font-size:25px;
			}
			.data{
				display:none;
				margin-left:10px;
				margin-right:10px;
				text-align:center;
			}
			.title{
				display:none;
			}
			#pic{
				width:750px;
			}
		</style>
	</head>
	<body>
		<div id="header">
			<h1 id="hone">Hermiston Rotary Club</h1>
		</div>
		<select id="dropDown">
			<option>Choose Event</option>
			<?php
				$row = 1;
				if (($handle = fopen("info.csv", "r")) !== FALSE) {
					while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
						$num = count($data);
						#echo "<option> $num fields in line $row: <br /></option>\n";
						$row++;
						#for ($c=0; $c < $num; $c++) {
							echo "<option>".$data[0] . "</option>";
							#echo "<h1>".$data[0] . "</h1><div>".$data[1]."";
						#}
					}
					echo "</select>";
					
					fclose($handle);
				}
				if (($handle = fopen("info.csv", "r")) !== FALSE) {
					while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
						$num = count($data);
						#echo "<option> $num fields in line $row: <br /></option>\n";
						$row++;
						#for ($c=0; $c < $num; $c++) {
							echo "<div class='data' id='".$data[0]."'><h1>".$data[0]."<br></h1><img id='pic' src='pics/".$data[2]."'><br>".$data[1]."</div>";
							#echo "<h1>".$data[0] . "</h1><div>".$data[1]."";
						#}
					}
					fclose($handle);
				}
				
			?>
		<script>
			var eventSelect = document.getElementsByClassName("data");
			document.getElementById("dropDown").addEventListener("change",update);
			function update(){
				var event = document.getElementById("dropDown").value;
				for(i=0;i<eventSelect.length;i++){
					eventSelect[i].style.display = "none";
				}
				var data = document.getElementById(event);
				data.style.display = "block";
			}
			
		</script>
	</body>
</html>
