<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HEROKids Daily Checklist</title>
<link rel="stylesheet"type="text/css" media="all" href="style.css">
</head>

<body>
<div class="main">

    <p><a href="index.php">Home</a></p>
    
	<h1>HEROKids Daily Checklist</h1>
			
	<div class="right">

		<?php include 'showChecklist.php';?>

	</div>

	<div style="clear:both"></div>

<div style="clear:both"></div>

    <h2>Completed Tasks </h2><?php include 'showCompleted.php';?>

	<h2>Points Earned </h2><?php include 'showPoints.php';?>

	<h2>Badges Earned </h2><?php include 'showBadges.php';?>

</div>

</body>
</html>