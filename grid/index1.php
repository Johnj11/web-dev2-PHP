<html>
	<head>
		<style>
			.header{
				grid-area:header;
			}
			.menu{
				grid-area:menu;
			}
			.main{
				grid-area:main;
			}
			
			#grid-container{
				display:grid;
				grid-template-areas:		'header header header header'
												'menu main main main';
				background-color:red;
				padding:10px;
			}
			.grid-item{
				background-color:yellow;
				border:1px solid black;
				text-align:center;
			}
			#pic{
				display:fill;
			}
		</style>
	</head>
	<body>
		<div id="grid-container">
			<div class ="header grid-item"><img id="pic" src= "banner.jfif"></div>
			<div class ="menu grid-item">2</div>
			<div class ="main grid-item">3</div>
			<!--<div class ="right grid-item">4</div>
			<div class ="left grid-item">5</div> -->
		</div>
	</body>
</html>