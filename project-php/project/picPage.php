<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "cssPage.css">
		<style>
			
		</style>
	</head>
	<body>
		<input type="text" id="worlds" value="This is the leauge of legends worlds stage here is where the best of the best go to compete for millions of dollers in prise money.">
		<img src="lolWorlds.jpg" alt="A Picture of the Leauge of legends worlds stage." id = "worldsPic">
		<input type="text" id="myText2" value="This is a fan art drawing of the leauge of legends champion kai'sa she is one of the most populer characters in the game.">
		<img src="kai'sa pic.jpg" alt="a fan drawn photo of the leauge of legends charicter kai'sa." id = "kaisaPhoto">
		<input type="text" id="myText3" value="This is an image of all the avalable champions in leauge of legends.">
		<img src="allChampions.jpg" alt="A picture of all the leauge of legends champions to in 2019." id="allChampsPic">
		<form action="introPage.php" method="post">
			<button type="submit">back</button>
		</form>
		<script>
			
			var x = document.getElementById("worlds");
			x.style.display = "none";
			document.getElementById("worldsPic").addEventListener("click",worldsTextbox);
			function worldsTextbox(){
				if (x.style.display === "none") {
				x.style.display = "block";
			} 
			else {
				x.style.display = "none";
			}
			document.getElementById("worlds").readOnly = true;	
			}
			
			
			var y = document.getElementById("myText2");
			y.style.display = "none";
			document.getElementById("kaisaPhoto").addEventListener("click",kaisaTextbox);
			function kaisaTextbox(){
				if (y.style.display === "none"){
					y.style.display = "block";
				} 
				else {
					y.style.display = "none";
				}
				document.getElementById("myText2").readOnly = true;
				
			}
			
			var z = document.getElementById("myText3");
			z.style.display = "none";
			document.getElementById("allChampsPic").addEventListener("click",allChampsTextbox);
			function allChampsTextbox(){
				if (z.style.display === "none"){
					z.style.display = "block";
				} 
				else {
					z.style.display = "none";
				}
				document.getElementById("myText3").readOnly = true;
				
			}
		</script>
	</body>
</html>	