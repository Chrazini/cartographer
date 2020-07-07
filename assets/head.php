<!DOCTYPE html>
<html lang="en">

	<?php
		require 'config.php';

		$pathname = $_SERVER['REQUEST_URI'];
		$filename = basename($pathname); 
		$page_title = array_search($filename, $main_navigation);
		$page_class = (pathinfo($filename)['filename']);
	?>

	<head>
		<?php
			echo '<title>' . $site_name . ' | ' . $page_title . '</title>';
		?>
		<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto+Mono:wght@100;200;300;400;500;600;700&family=Spinnaker&display=swap" rel="stylesheet">
		<link href="stylesheets/main.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>