<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "cssPage.css">
	</head>
	<body>
		<form action="introPage.php" method="post">
			<button type="submit">back</button>
			
  
			
		</form>
		
			<button id="videoBtn">Videos of gameplay.</button>
			<select id="selectId">
				<option value= "vid1">Video1</option>
				<option value= "vid2">Video2</option>
				<option value= "vid3">Video3</option>
			</select>
		
		
			
				<iframe class="vid" id="vid1" width="560" height="315" src="https://www.youtube.com/embed/o8vGaC4OZIs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
				<iframe class="vid" id="vid2" width="560" height="315" src="https://www.youtube.com/embed/vG4lk9wQgTg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
				<iframe class="vid" id="vid3" width="560" height="315" src="https://www.youtube.com/embed/3ECXeoLlR3I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
			  </div>
			</div>
		
		<script>
			
			document.getElementById("selectId").addEventListener("change",vidFunction);
			function vidFunction(){
				document.getElementById("vid1").style.display="none";
				document.getElementById("vid2").style.display="none";
				document.getElementById("vid3").style.display="none";
			
			
				var vids = document.getElementById("selectId").value;
				if (vids === "vid1"){
					document.getElementById("vid1").style.display="block";
				}
				else if (vids === "vid2"){
					document.getElementById("vid2").style.display="block";
				}
				else if (vids === "vid3"){
					document.getElementById("vid3").style.display="block";
				}
			}
			
		</script>
	</body>
</html>