<?php 
//echo "hello kalob ! I'm a web developer";
define('__CONFIG__',true);
require_once "inc/config.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<META NAME="ROBOTS" CONTENT="FOLLOW">
		<base href="/">
		<!-- UIkit CSS -->
		<link rel="stylesheet"
	        href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css" />
       </head>
       <body>
               <div class="uk-section uk-container">
	       <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
	       <form class="js-register">

		    <h2>Register</h2>
	
         	    <fieldset class="uk-fieldset">

			<legend class="uk-legend">Email</legend>

			<div class="uk-margin">
			    <input class="uk-input" type="email" required="required" 				    placeholder="email@email.com">
			</div>
			<legend class="uk-legend">Password</legend>

			<div class="uk-margin">
			    <input class="uk-input" type="password" required="required" 			    placeholder="Your Password">
			</div>
		<div class="uk-margin uk-alert uk-alert-danger js-error" style="display:none"></div>
			 <div class="uk-margin">
			    <button class="uk-button uk-button-default" type="submit">Register</button>
			</div>
		       

		    </fieldset>
		</form>
	        </div>
		</div>
	<?php require_once "inc/footer.php" ;?>
	</body>
</html>
