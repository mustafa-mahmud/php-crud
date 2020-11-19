	<?php
$path = $_SERVER['REQUEST_URI'];
$baseName = basename($path, '.php');

?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP <?php echo $baseName === 'index' ? 'Home' : ucfirst($baseName); ?></title>

		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />

		<link rel="stylesheet" href="css/style.css" />

	</head>

	<body>