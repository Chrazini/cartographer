

<body>
	<header>
		<nav>
			<div class="link-container">
				<?php
					foreach($main_navigation as $name => $file) {
						echo "<a href='$file'>$name</a>";
					}
				?>
			</div>
			<div class="search-container">
				<div class="search-text">
					<span>Search For</span>
					<span>Commands, Attributes & Constants</span>
				</div>
				<input class="search" type="text" placeholder="Not Working">
			</div>
		</nav>
		<?php
			echo '<h1 class="page-title">' . $page_title . '</h1>'
		?>
	</header>
	<?php
		echo '<main id="' . $page_class . '-page">';

		if ($connection -> connect_error) {
			echo $database_error;
		}
	?>