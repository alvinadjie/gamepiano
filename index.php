<!DOCTYPE html>
<html>
<head>
	<title>Game Piano</title>
</head>
<style type="text/css">
	.button{
		width:250px;
		height: 500px;
		border: 1px solid black;
		float: left;


	}
	a{
		font-size: 80px;
		text-decoration: none;
		text-align: center;
		
	}
</style>
<body>
	<a id ="do" href="resources/C.mp3"><div class="button">Do </div></a>
	<a id ="re" href="resources/D.mp3"><div class="button">Re </div></a>
	<a id ="mi" href="resources/E.mp3"><div class="button">Mi </div></a>
	

	<script >
		var doEl= document.getElementById("do");
		var doClick = function(e) {
			e.preventDefault();
			var audioDo = document.createElement("audio");
			audioDo.src="resources/C.mp3";
			audioDo.autoplay="true";
			document.body.appendChild(audioDo);
		};
		doEl.addEventListener("click",doClick);

		var reEl= document.getElementById("re");
		var reClick = function(e) {
			e.preventDefault();
			var audioRe = document.createElement("audio");
			audioRe.src="resources/D.mp3";
			audioRe.autoplay="true";
			document.body.appendChild(audioRe);
		};
		reEl.addEventListener("click",reClick);

		var miEl= document.getElementById("mi");
		var miClick = function(e) {
			e.preventDefault();
			var audioMi = document.createElement("audio");
			audioMi.src="resources/E.mp3";
			audioMi.autoplay="true";
			document.body.appendChild(audioMi);
		};
		miEl.addEventListener("click",miClick);
	</script>
</body>
</html>