<html>
	<?php
		require 'assets/head.php';
		require 'assets/header.php';
	?>
	<!-- Main Begin -->
	<form>
		<label for="firstname">First Name</label>
		<input type="text" name="firstname">
		<label for="nickname">Nickname</label>
		<input type="text" name="nickname">
		<label for="email">Email</label>
		<input type="email" name="email">
		<label for="topic">Topic</label>
		<select id="form_topic" name="topic">
			<option value="website">Website</option>
			<option value="request">RMS Request</option>
			<option value="question">RMS Question</option>
			<option value="other">Other</option>
		</select>
		<label for="message">Message</label>
		<textarea name="message"></textarea>
		<label for="validation">Validation</label>
		<input type="validation" name="validation">
	</form>

	<!-- Main End -->
	</main>
	<aside>
	</aside>
	<?php
		require 'assets/footer.php';
	?>

