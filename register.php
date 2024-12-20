<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>
	<?php
		if (!isset($_POST['submit']))
		{
		echo '<h2>Please fill out the following form:</h2>';
		echo '<form method="post" action="">';
		echo '<form method="post" action="">';
			
			if(isset($_GET['usernameErr'])){
						if($_GET['usernameErr']=="null"){
						echo'<div class="form-group has-error" id="usernameGroup">
							<label class="control-label">Username:</label>
							<input type="text" class="form-control" id="username" name="username">
							<span class="help-block" id="usernameStatus">Username cannot be blank!</span>
						</div>';
						}
						elseif($_GET['usernameErr']=="invalid"){
							echo'<div class="form-group has-error" id="usernameGroup">';
							echo'<label class="control-label">Username:</label>';
							echo'<input type="text" class="form-control" id="username" name="username" value="'.$_SESSION['username'].'">';
							echo'<span class="help-block" id="usernameStatus">Username contains invalid characters!</span>';
						echo'</div>';
						}
					}
					else{
						if(isset($_SESSION['username'])){
							echo'<div class="form-group has-success" id="usernameGroup">';
								echo'<label class="control-label">Username:</label>';
								echo'<input type="text" class="form-control" id="username" name="username" value="'.$_SESSION['username'].'">';
								echo'<span class="help-block" id="usernameStatus"></span>';
							echo'</div>';
						}
						else{
							echo '<div class="form-group" id="usernameGroup">';
							echo '<label class="control-label">Username:</label>';
							echo '<input name="username" type="text" class="form-control" id="username">';
							echo '<div id="unFeedback"></div>';
							echo '</div>';
						}
						
					}
			echo '<form method="post" action="">';
			if(isset($_GET['passwordErr'])){
						if($_GET['passwordErr']=="null"){
						echo'<div class="form-group has-error" id="passwordGroup">
							<label class="control-label">Password:</label>
							<input type="text" class="form-control" id="password" name="password">
							<span class="help-block" id="passwordStatus">Password cannot be blank!</span>
						</div>';
						}
						elseif($_GET['passwordErr']=="invalid"){
							echo'<div class="form-group has-error" id="passwordGroup">';
							echo'<label class="control-label">Password:</label>';
							echo'<input type="text" class="form-control" id="password" name="password" value="'.$_SESSION['password'].'">';
							echo'<span class="help-block" id="passwordStatus">Password contains invalid characters!</span>';
						echo'</div>';
						}
					}
					else{
						if(isset($_SESSION['password'])){
							echo'<div class="form-group has-success" id="passwordGroup">';
								echo'<label class="control-label">Password:</label>';
								echo'<input type="text" class="form-control" id="password" name="password" value="'.$_SESSION['password'].'">';
								echo'<span class="help-block" id="passwordStatus"></span>';
							echo'</div>';
						}
						else{
							echo '<div class="form-group">';
							echo '<label class="control-label">Password:</label>';
							echo '<input name="password" type="password" class="form-control">';
							echo '<div id="pwFeedback"></div>';
							echo '</div>';
						}
						
					}
			
			
			
		
		
		
		echo '<button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>';
		echo '</form>';
		}
	else
	{
		$errors=array();
		$username=addslashes($_POST['username']);
						if($username==NULL){
							$errors[]="usernameErr=null";
						}
						elseif(!preg_match('/^[a-zA-Z]+$/',$username)){
							$errors[]="usernameErr=invalid";
							$_SESSION['username']=$username;
						}
						else{
							$_SESSION['username']=$username;
						}
		$password=addslashes($_POST['password']);
						if($password==NULL){
							$errors[]="passwordErr=null";
						}
						elseif(!preg_match('/^[a-zA-Z]+$/',$password)){
							$errors[]="passwordErr=invalid";
							$_SESSION['password']=$password;
						}
						else{
							$_SESSION['password']=$password;
						}
		if(count($errors)>0){
							include("functions.php");
							$errorString=implode("&",$errors);
							//header("Location: contact.php?$errorString");
							redirect("register.php?$errorString");
						}
						else
						{
							include("functions.php");
							$dblink=db_connect('contact_data');
							$username=$_POST['username'];
							$password=$_POST['password'];
							$salt="CS4413fa24"; 
							$hash=hash('sha256',$username.$password.$salt);
							$sql="Insert into `accounts` (`username`,`hash`) values ('$username','$hash')";
							$dblink->query($sql) or
								die("<h2>Something went wrong with $sql<br>".$dblink->error."</h2>");
							redirect("index.php?page=login");
							
						}
		
	}
	?>
</body>
</html>