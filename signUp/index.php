<?php
require_once 'userController.php';

$users2 = new userController;
if(isset($_POST['submit'])){
    $users2->insert($_POST);
}
?>
	<link rel="stylesheet" type="text/css" href="style.css">

	<div class="div1">
		<h1>Create account</h1>
		<form method="post">
			<div class="div2">
				<input type="name" placeholder="First name" name="firstName" >
				<input type="name" placeholder="Last name" name="lastName" ><br>
				<input type="email" placeholder="Email address" name="emailAddress" >
				<input type="birthday" placeholder="Birthday" name="birthday" ><br>
				<input type="password" placeholder="password" name="pass" ><br>
				<input type="submit" name="submit" value="Sign up">
				<h5><a href="../logIn/index.php">or, log in</a></h5>
			</div>
		</form>
	</div>

