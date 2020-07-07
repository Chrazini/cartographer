<html>
	<?php
		require 'assets/head.php';
		require 'assets/header.php';
	?>
	<!-- Main Begin -->
	<article>
		<section>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat enim ab incidunt, illo harum ex voluptatem fuga nesciunt dignissimos quisquam neque dicta fugiat sunt. Culpa amet odio animi quia iste.</p>
	
		<?php
			$query = 'SELECT name, code FROM sections';
			$results = mysqli_query($connection, $query);

			while($row = mysqli_fetch_array($results)) {
				$code_sections[$row[0]] = $row[1];
			}

			$code_type = array (
				'Commands' => '1',
				'Attributes' => '0',
			);

			foreach($code_sections as $name => $section) {
				$query = 'SELECT * FROM sections WHERE name = "$section"';
				$results = mysqli_query($connection, $query);
				$row = mysqli_fetch_array($results);
				
				echo '<section class="code-section">';
					echo '<h3>' . $name . '</h3>';
					echo '<p>' . $row["description"] . '</p>';

					foreach($code_type as $type => $key) {
						$query = "SELECT * FROM attributes WHERE FIND_IN_SET('$section', section)>0 && command = ($key)";
						$results = mysqli_query($connection, $query) or exit(mysqli_error());
						$row_count = mysqli_num_rows($results); 

						if ($row_count != 0) {
							echo '<div class="' . lcfirst($type) . '">';
								echo '<h6>' . $type . '</h6>';
								echo '<div class="auto-grid">';
						}

							while ($row = mysqli_fetch_array($results)) {
								echo	'<div class="att-container ' . $row["difficulty"] . '">';
									echo '<div class="att-header">';
										echo '<div class="att-combine">';
											echo '<span class="att-name">' . $row["name"] . '</span>';
											echo '<span class="att-type">' . $row["type"] . '</span>';
										echo '</div>';
										echo '<span class="expand material-icons">expand_more</span>';
									echo '</div>';
									echo '<div class="att-content">';
										echo '<span class="att-content-header">Description</span>';
										echo '<p class="att-content-description">' . $row["description"] . '</p>';
										echo '<p class="att-content-description">' . $row["game"] . '</p>';
										echo '<p class="att-content-description">' . $row["scope"] . '</p>';
									echo '</div>';
								echo '</div>';
							}

							echo '</div>';
						echo '</div>';
					}
				
				echo '</section>';
			}
		?>
		
		</section>
	</article>



	<!-- Main End -->
	</main>
	<aside>
		<div class="switch-container">
			<p class="switch-header">Novice</p>
			<div class="flip-switch flip-switch-icon">
				<input type="checkbox" id="c1" checked>
				<label for="c1"></label>
			</div>
		</div>

		<div class="switch-container">
			<p class="switch-header">Intermediate</p>
			<div class="flip-switch flip-switch-icon">
				<input type="checkbox" id="c2" checked>
				<label for="c2"></label>
			</div>
		</div>

		<div class="switch-container">
			<p class="switch-header">Advanced</p>
			<div class="flip-switch flip-switch-icon">
				<input type="checkbox" id="c3" checked>
				<label for="c3"></label>
			</div>
		</div>
	</aside>
	<?php
		require 'assets/footer.php';
	?>