<?php 

	//allow the config 
define('__CONFIG__', true);
	// Require the 	config
require_once "inc/config.php"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="follow">
	<title>Page title</title>

	<base href="/"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />


</head>
<body>

	<div class="uk-section uk-container"> <!---ovo dvoje nam je potrebno kako bi unutra pisali sa uk gridom -->
		<div class="uk-grid uh-child-width-1-3@s uk-child-width-1-1" uk-grid>
			<form class="uk-form-stacked js-register">

				<h1>Register</h1>

				<div class="uk-margin">
					<label class="uk-form-label" for="form-stacked-text">Email</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="email@email.com">
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="form-stacked-text">Password</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="Enter password">
					</div>
				</div>
				<div class="uk-margin">
					<label class="uk-form-label" for="form-stacked-text">Confirm-Password</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="Confirm password">
					</div>
				</div>
				<div class="uk-margin">
					<button class="uk-button uk-button-default uk-button-small">Register</button>				
				</div>
			</form>
		</div>
	</div>

	<?php require_once "inc/footer.php" ?>

</body>
</html>
