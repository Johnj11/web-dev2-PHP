<html>
	<head>
		<style>
			
		</style>
	</head>
	<body>
		<img src="" alt="" id="EmptyImage">
		<input type="file" name="fileupload" value="fileupload" id="fileupload"> 
		<label for="fileupload"> Select a file to upload</label> 
		<input type="submit" value="submit" id = "subBtn"> 
		<?php
			echo("PicInnerHTML")
		
		?>
		<script>
		var PicInnerHTML = document.getElementById("fileuplod").innerHTML;
		
		document.getElementById("subBtn").addEventlistener("click", picInput);
		
		function picInput(){
			picInnerHTML;
		}
		
		</script>
	</body>
</html>
