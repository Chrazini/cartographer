<?php
	require 'assets/head.php';
	require 'assets/header.php';
?>
<!-- Main Begin -->
<article>
	<section>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat enim ab incidunt, illo harum ex voluptatem fuga nesciunt dignissimos quisquam neque dicta fugiat sunt. Culpa amet odio animi quia iste. Dolor sit amet consectetur adipisicing elit. Quaerat enim ab incidunt, illo harum ex voluptatem fuga nesciunt dignissimos quisquam neque dicta fugiat sunt. Culpa amet odio animi quia iste.</p>

		<form>
			<div class="essential-controls">
				<label> Number of Lands
					<input type="range" min="1" max="128" value="32" id="lands" class="slider" required>
					<span></span>
				</label>
				<label> Circle Radius
					<input type="range" min="1" max="50" value="32" id="radius" class="slider" required>
					<span></span>
				</label>

			</div>
			<label> Terrain Type
					<select name="terrain" id="terrain">
						<?php
							$query = 'SELECT * FROM terrains';
							$results = mysqli_query($connection, $query);
							$row = mysqli_fetch_array($results);

							while ($row = mysqli_fetch_array($results)) {
								echo '<option value="' . $row["constant"] . '">' . $row["constant"] . '</option>';
							};
						?>
					</select>
				</label>
			<div class="extended-controls">
				<div class="advanced-controls">
					<?php
						$advanced_controls = [
							'Number of Tiles' => [
								'tiles' => 16
							],
							'Base Size' => [
								'base' => 2
							],
							'Clumping Factor' => [
								'clumping' => 15
							],
							'Base Elevation' => [
								'elevation' => 0
							],
							'Zone ID' => [
								'zone' => 0
							],
							'Land ID' => [
								'identification' => 0
							],
						];

						foreach($advanced_controls as $name => $class) {

						}
					?>

					<label> Number of Tiles
						<input type="input" min="0" max="50" value="32" id="tiles" class="slider">
					</label>
					<label> Base Size
						<input type="input" min="0" max="50" value="32" id="base" class="slider">
					</label>
					<label> Clumping Factor
						<input type="input" min="0" max="50" value="32" id="clumping" class="slider">
					</label>
					<label> Base Elevation
						<input type="input" min="0" max="50" value="32" id="elevation" class="slider">
					</label>
					<label> Zone ID
						<input type="input" min="0" max="50" value="32" id="zone" class="slider">
					</label>
					<label> Land ID
						<input type="input" min="0" max="50" value="32" id="identification" class="slider">
					</label>
				</div>
				<div class="scaling-controls">
					<table>
						<tr>
							<th></th>
						</tr>
					</table>
				</div>
			</div>
			<button id="circle_calculator" type="button">Calculate</button>
		</form>
		<div class="code-output">
			
		</div>



	</section>
<!-- Main End -->
</main>
<aside>
</aside>
<?php
	require 'assets/footer.php';
?>

