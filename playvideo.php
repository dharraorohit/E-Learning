<!DOCTYPE html>
<html>
<head>
	<title>Play Video</title>
	<link rel="stylesheet" type="text/css" href="css/playvideo.css">
</head>
<body>
	<header>
		<img id="logo" src="img/logo.png" alt="Logo">
	</header>
	<main>
		<?php
		echo'
		<video src="videos/'.$_GET["title"].'.mp4" type="video/mp4" width="854" height="480" controls></video>
		<div class="title">'.$_GET["title"].'</div>
		';
		?>
	</main>
</body>
</html>