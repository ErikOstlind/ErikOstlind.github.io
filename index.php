<html>
	<head>
		<style type="text/css">
			body {
				/*background: linear-gradient(180deg, #777676, #000);*/
				background: #c4f8ff;
				transition: all 0.3s ease;
			}
			
			table {
				border-collapse: collapse;
				width: 100%;
			}

			th, td {
				text-align: left;
				padding: 2px 8px;
				color: #000;
				font-size: 12px;
			}
			
			tr:nth-child(even){background-color: #f2f2f2}
			tr:nth-child(odd) {background-color: #dedede}
			
			hr {
				border-color: #aba9a8;
			}
			
			h1 {
				color: #000;
				border-radius: 10px;
				padding-left: 10px;
				background: linear-gradient(90deg, white, white 10%, #c1c1c1 20%, transparent);
				z-index: 5;
				position: relative;
			}
			
			.headshot {
				border-radius: 10px;
			}
			
			p {
				margin-top: 5px;
				margin-left: 5px;
				color: #adadad;
			}
			
			.container{
				float: right;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				z-index: 1;
			}
			
			.dropdown {
				position: relative;
				width: 100%;
				display: none;
			}

			.dropdown-content {
				border-bottom-left-radius: 10px;
				border-bottom-right-radius: 10px;
				overflow: hidden;
				width: 100%;
				/*transform: translateY(-100%);*/
				top: -210px;
				transition: all 0.7s ease;
				position: relative;
			}
			
			.dropdown-header {
				width: 100%;
				background: #aaa;
				cursor: pointer;
				text-align: center;
				font-weight: 600;
				color: #000;
				position: relative;
				float: right;
				z-index: 2;
				padding: 5px 0px;
				border-bottom-left-radius: 10px;
				border-bottom-right-radius: 10px;
				transition: all 0.7s ease;
			}
			
			.dropdown-bounds{
				position: absolute;
				border-bottom-left-radius: 10px;
				border-bottom-right-radius: 10px;
				overflow: hidden;
				background: transparent;
				width: 100%;
				height: 100%;
				/*transform: translateY(calc(-100% + 28px));*/
				transition: all 0.7s ease;
				z-index: 3;
				top: calc(-100% + 28px);
			}
			
			.dropdown-bounds:hover ~ .dropdown-header{
				border-radius: 0px;
				transition: all 0.7s ease;
			}
			
			.dropdown-bounds:hover ~ .dropdown-content{
				top: 0;
			}
			
			.dropdown-bounds:hover { 
				top: 0;
			}
			
			.canvas {
				width: 600px;
				height: 600px;
				z-index: 4;
				position: relative;
				border-width: 0px;
				background: #FFF;
				border-radius: 10px;
				overflow: hidden;
			}
			
			.switch {
				position: absolute;
				right: 0px;
				bottom: 0px;
				cursor: pointer;
				border-top-left-radius: 10px;
				overflow: hidden;
			}
			
			.bawk-text {
				position: absolute;
				right: 0px;
				bottom: 0px;
				color: white
			}
			
			.cover {
			}

		</style>
		
		
	</head>
	<title>Erik Ostlind</title>
	<body onload="handleClick('fish')">
		<script type="application/javascript">
			function handleClick(type) {
				document.getElementById("script").remove();
				var iframes = document.getElementsByTagName("IFRAME");
				while(iframes.length) {
				  iframes[0].parentNode.removeChild(iframes[0]);
				}
				if(type === 'bawk'){
					document.getElementsByTagName("BODY")[0].style.background = "linear-gradient(180deg, #777676, #000)";
					var script = document.createElement("script")
					script.src = "https://www.khanacademy.org/computer-programming/asteroidsphysics/6183045552947200/embed.js?editor=no&buttons=no&author=no&embed=yes&width=600&height=600";
					script.id = "script"
					var canvas = document.getElementById("canvas");
					canvas.append(script);
					canvas.style["border-bottom-left-radius"] = 0;
					canvas.style["border-bottom-right-radius"] = 0;
					canvas.style.width = "600px";
					canvas.style.height = "600px";
					document.getElementById("dropdown").style.display = "block";
					document.getElementById("fish").style.display = "block";
					document.getElementById("bawk").style.display = "none";
				}
				else if(type === 'fish'){
					document.getElementsByTagName("BODY")[0].style.background = "#c4f8ff";
					var dim = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0) * 1.0;
					var script = document.createElement("script")
					script.src = "https://www.khanacademy.org/computer-programming/boid-pond/5615654214647808/embed.js?editor=no&buttons=no&author=no&embed=yes&width="+dim+"&height="+dim;
					script.id = "script"
					var canvas = document.getElementById("canvas");
					canvas.append(script);
					canvas.style["border-bottom-left-radius"] = "10px";
					canvas.style["border-bottom-right-radius"] = "10px";
					canvas.style.width = dim+"px";
					canvas.style.height = dim+"px";
					document.getElementById("dropdown").style.display = "none";
					document.getElementById("bawk").style.display = "block";
					document.getElementById("fish").style.display = "none";
				}
			}
		</script>
		<div class="container">
			<div class="canvas" id="canvas">
				<script id="script" src=""></script>
			</div>
			<div class="dropdown" id="dropdown">
				<div class="dropdown-bounds"></div>
				<span class="dropdown-header">Controls</span>
				<div class="dropdown-content">
					<table>
						<tr>
							<td>Up Arrow</td>
							<td>Forward Thrust</td>
						</tr>
						<tr>
							<td>Left Arrow</td>
							<td>Rotate Left</td>
						</tr>
						<tr>
							<td>Right Arrow</td>
							<td>Rotate Right</td>
						</tr>
						<tr>
							<td>Space</td>
							<td>Shoot</td>
						</tr>
						<tr>
							<td>R</td>
							<td>Restart</td>
						</tr>
						<tr>
							<td>Q</td>
							<td>Quit</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<h1> Erik Ostlind </h1>
		<a href="https://www.linkedin.com/in/erikostlind/" target="_blank">
			<img class="headshot" src="./37188138291_9e4d510c16_o.jpg" width=227  height=300 alt="Erik Ostlind"/>
		</a>
		<p> CS Undergraduate Student </p>
		<div class="switch">
			<div id="bawk" class="cover">
				<img src="./bawk.png" width="80px" onclick="handleClick('bawk')">
				<span class="bawk-text">Bawk</span>
			</div>
			<div id="fish" class="cover" style="display: none;">
				<img src="./fish.png" width="80px" onclick="handleClick('fish')">
			</div>
		</div>		
	</body>
</html>
