<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "rms_site";

	$connection = new mysqli($server, $username, $password, $database);
	$database_error = '<h1>We could not establish a connection to the database. Most of the information and functionality on the site will be severely limited. Error code: ' . $connection -> connect_error . '</h1>';

	$site_name = 'Learn RMS';

	$main_navigation = array (
		'Home' => 'index.php',
		'Learning' => 'learning.php',
		'Commands & Attributes' => 'commands.php',
		'Constants' => 'constants.php',
		'Miscellaneous' => 'miscellaneous.php',
		'Maps' => 'maps.php',
		'Contact' => 'contact.php',
	);
?>