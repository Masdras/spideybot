<html>
	<head>
		<script>
			var amount = 0;
			var idk = false;
			setInterval(omg, 30);
			function omg() {
				amount += 1;
				document.getElementById("god").style.transform = "translateX(-50%) rotate(" + amount.toString() + "deg)";
				if (amount >= 360) {
					amount = 0;
					idk = !idk;
					document.getElementById("background").className = idk ? "white" : "black";
					document.body.className = idk ? "black" : "white";
				}
			}
		</script>
		<style>
			#god {
				position:fixed;
				left: 50%;
			}
			
			#background {
				position:absolute;
				left:0px;
				top:0px;
				height:100%;
				width: 50%;
			}
			
			#background a {
				display: block;
			}

			.black {
				background-color: #000;
				color: #FFF
			}
			
			.white {
				background-color: #FFF;
				color: #000;
			}
.noselect {
  -webkit-touch-callout: none; /* iOS Safari */
  -webkit-user-select: none;   /* Chrome/Safari/Opera */
  -khtml-user-select: none;    /* Konqueror */
  -moz-user-select: none;      /* Firefox */
  -ms-user-select: none;       /* Internet Explorer/Edge */
  user-select: none;           /* Non-prefixed version, currently
                                  not supported by any browser */
}

		</style>
	</head>
	<body class="white">
		<div id="background" class="black">
			<a href="http://daydun.com">Datsun.com</a>
			<a href="namegenerator.html">Name generator</a>
		</div>
		<a href="god.html">
		<img id="god" draggable="false" src="god.png" class="noselect">
		</a>
	

	</body>
</html>
