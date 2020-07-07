<html>
	<?php
		require 'assets/head.php';
		require 'assets/header.php';
	?>
	<!-- Main Begin -->
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsum necessitatibus at eos sequi suscipit possimus, expedita eligendi culpa qui unde, quas in magni debitis labore laborum. Ea, ducimus neque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia architecto dolore, velit reprehenderit consequuntur asperiores laborum veritatis quod labore dicta vitae, ex dolores? Minus, labore accusamus magni porro rerum temporibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime asperiores aut sint quas ipsam est odit! Distinctio corrupti recusandae unde nemo vero nulla odit ad, laudantium ratione et quidem amet.</p>
	
	<?php
		echo '<h3>Terrains</h3>';

		$query = 'SELECT * FROM terrains';
		$results = mysqli_query($connection, $query);

		echo '<table cellspacing="0" cellpadding="0">';
			echo '<tr>';
				echo '<th>ID</th>';
				echo '<th>Constant</th>';
				echo '<th>Color</th>';
				echo '<th>Walkable</th>';
				echo '<th>Sailable</th>';
				echo '<th>Buildable</th>';
			echo '</tr>';

		while($row = mysqli_fetch_array($results)) {
			echo '<tr>';
				echo '<td>' . $row['id'] . '</td>';
				echo '<td>' . $row['constant'] . '</td>';
				echo '<td>';
					echo '<div class="minimap-box" style="background-color: rgb(' . $row['minimap'] . ')"></div>';
				echo '</td>';
				echo '<td>' . $row['walkable'] . '</td>';
				echo '<td>' . $row['sailable'] . '</td>';
				echo '<td>' . $row['buildable'] . '</td>';
			echo '</tr>';
		}

		echo '</table>'

	?>

	<!-- Main End -->
	</main>
	<aside>
	</aside>
	<?php
		require 'assets/footer.php';
	?>

