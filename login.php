<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="Design/design.css" type="text/css" media="screen">
	<title>Login</title>
	
</head>
<body>
    <div id="contenu">
	<?php
	    include_once("Includes/header.php");
	?>
	<div class="corps">
	    <h1>Merci de vous connecter</h1>
	    <fieldset>
		<legend>Vos identifiants</legend>
		<form method="POST" action="">
		    <p>Login: <input type="text" class="champs_login" name="login"/></p>
		    <p>Mot de passe: <input class="champs_login" type="password" name="password"/></p>
		    <input type="submit" value="Se connecter" name="bt_valider"/>
		</form>
	    </fieldset>
	</div>
	<?php
	    include_once("Includes/footer.php");
	?>
    </div>
</body>
</html>
