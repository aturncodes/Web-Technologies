
		<div class="container">

					<?php
					session_start();
					
					ini_set('display errors', 1);
					ini_set('display_startup_errors', 1);
					error_reporting(E_ALL);
						if(!isset($_POST['submit']))
						{
							
					echo'<h3>Please fill out the contact form below:</h3><br>';
					echo'<form action="" method="post">';
					if(isset($_GET['fnameErr'])){
						if($_GET['fnameErr']=="null"){
						echo'<div class="form-group has-error" id="firstNameGroup">
							<label class="control-label">First Name:</label>
							<input type="text" class="form-control" id="firstName" name="firstName">
							<span class="help-block" id="firstNameStatus">First Name cannot be blank!</span>
						</div>';
						}
						elseif($_GET['fnameErr']=="invalid"){
							echo'<div class="form-group has-error" id="firstNameGroup">';
							echo'<label class="control-label">First Name:</label>';
							echo'<input type="text" class="form-control" id="firstName" name="firstName" value="'.$_SESSION['firstName'].'">';
							echo'<span class="help-block" id="firstNameStatus">First Name contains invalid characters!</span>';
						echo'</div>';
						}
					}
					else{
						if(isset($_SESSION['firstName'])){
							echo'<div class="form-group has-success" id="firstNameGroup">';
								echo'<label class="control-label">First Name:</label>';
								echo'<input type="text" class="form-control" id="firstName" name="firstName" value="'.$_SESSION['firstName'].'">';
								echo'<span class="help-block" id="firstNameStatus"></span>';
							echo'</div>';
						}
						else{
							echo'<div class="form-group" id="firstNameGroup">
								<label class="control-label">First Name:</label>
								<input type="text" class="form-control" id="firstName" name="firstName">
								<span class="help-block" id="firstNameStatus"></span>
							</div>';
						}
						
					}
					
					if(isset($_GET['lnameErr'])){
						if($_GET['lnameErr']=="null"){
						echo'<div class="form-group has-error" id="lastNameGroup">
							<label class="control-label">Last Name:</label>
							<input type="text" class="form-control" id="lastName" name="lastName">
							<span class="help-block" id="firstNameStatus">Last Name cannot be blank!</span>
						</div>';
						}
						elseif($_GET['lnameErr']=="invalid"){
							echo'<div class="form-group has-error" id="lastNameGroup">';
							echo'<label class="control-label">Last Name:</label>';
							echo'<input type="text" class="form-control" id="lastName" name="lastName" value="'.$_SESSION['lastName'].'">';
							echo'<span class="help-block" id="lastNameStatus">Last Name contains invalid characters!</span>';
						echo'</div>';
						}
					}
					else{
						if(isset($_SESSION['lastName'])){
							echo'<div class="form-group has-success" id="lastNameGroup">';
								echo'<label class="control-label">Last Name:</label>';
								echo'<input type="text" class="form-control" id="lastName" name="lastName" value="'.$_SESSION['lastName'].'">';
								echo'<span class="help-block" id="lastNameStatus"></span>';
							echo'</div>';
						}
						else{
							echo'<div class="form-group" id="lastNameGroup">
								<label class="control-label">Last Name:</label>
								<input type="text" class="form-control" id="lastName" name="lastName">
								<span class="help-block" id="lastNameStatus"></span>
							</div>';
						}
						
					}	
							
					if(isset($_GET['emailErr'])){
						if($_GET['emailErr']=="null"){
						echo'<div class="form-group has-error" id="emailGroup">
							<label class="control-label">Email:</label>
							<input type="text" class="form-control" id="email" name="email">
							<span class="help-block" id="emailStatus">Email cannot be blank!</span>
						</div>';
						}
						elseif($_GET['emailErr']=="invalid"){
							echo'<div class="form-group has-error" id="emailGroup">';
							echo'<label class="control-label">Email:</label>';
							echo'<input type="text" class="form-control" id="email" name="email" value="'.$_SESSION['email'].'">';
							echo'<span class="help-block" id="emailStatus">Email contains invalid characters!</span>';
						echo'</div>';
						}
					}
					else{
						if(isset($_SESSION['email'])){
							echo'<div class="form-group has-success" id="emailGroup">';
								echo'<label class="control-label">Email:</label>';
								echo'<input type="text" class="form-control" id="email" name="email" value="'.$_SESSION['email'].'">';
								echo'<span class="help-block" id="emailStatus"></span>';
							echo'</div>';
						}
						else{
							echo'<div class="form-group" id="emailGroup">
								<label class="control-label">Email:</label>
								<input type="text" class="form-control" id="email" name="email">
								<span class="help-block" id="emailStatus"></span>
							</div>';
						}
						
					}
							
					if(isset($_GET['phoneErr'])){
						if($_GET['phoneErr']=="null"){
						echo'<div class="form-group has-error" id="phoneGroup">
							<label class="control-label">Phone:</label>
							<input type="text" class="form-control" id="phone" name="phone">
							<span class="help-block" id="phoneStatus">Phone cannot be blank!</span>
						</div>';
						}
						elseif($_GET['phoneErr']=="invalid"){
							echo'<div class="form-group has-error" id="phoneGroup">';
							echo'<label class="control-label">Phone:</label>';
							echo'<input type="text" class="form-control" id="phone" name="phone" value="'.$_SESSION['phone'].'">';
							echo'<span class="help-block" id="phoneStatus">Phone contains invalid characters!</span>';
						echo'</div>';
						}
					}
					else{
						if(isset($_SESSION['phone'])){
							echo'<div class="form-group has-success" id="phoneGroup">';
								echo'<label class="control-label">Phone:</label>';
								echo'<input type="text" class="form-control" id="phone" name="phone" value="'.$_SESSION['phone'].'">';
								echo'<span class="help-block" id="phoneStatus"></span>';
							echo'</div>';
						}
						else{
							echo'<div class="form-group" id="phoneGroup">
								<label class="control-label">Phone:</label>
								<input type="text" class="form-control" id="phone" name="phone">
								<span class="help-block" id="phoneStatus"></span>
							</div>';
						}
						
					}
							
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
							echo'<div class="form-group" id="usernameGroup">
								<label class="control-label">Username:</label>
								<input type="text" class="form-control" id="username" name="username">
								<span class="help-block" id="usernameStatus"></span>
							</div>';
						}
						
					}
							
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
							echo'<div class="form-group" id="passwordGroup">
								<label class="control-label">Password:</label>
								<input type="text" class="form-control" id="password" name="password">
								<span class="help-block" id="passwordStatus"></span>
							</div>';
						}
						
					}
							
					if(isset($_GET['commentsErr'])){
						if($_GET['commentsErr']=="null"){
						echo'<div class="form-group has-error" id="commentsGroup">
							<label class="control-label">Comments:</label>
							<input type="text" class="form-control" id="comments" name="comments">
							<span class="help-block" id="commentsStatus">Comments cannot be blank!</span>
						</div>';
						}
						elseif($_GET['commentsErr']=="invalid"){
							echo'<div class="form-group has-error" id="commentsGroup">';
							echo'<label class="control-label">Comments:</label>';
							echo'<input type="text" class="form-control" id="comments" name="comments" value="'.$_SESSION['comments'].'">';
							echo'<span class="help-block" id="commentsStatus">Comments contains invalid characters!</span>';
						echo'</div>';
						}
					}
					else{
						if(isset($_SESSION['comments'])){
							echo'<div class="form-group has-success" id="commentsGroup">';
								echo'<label class="control-label">Comments:</label>';
								echo'<input type="text" class="form-control" id="comments" name="comments" value="'.$_SESSION['comments'].'">';
								echo'<span class="help-block" id="commentsStatus"></span>';
							echo'</div>';
						}
						else{
							echo'<div class="form-group" id="commentsGroup">
								<label class="control-label">Comments:</label>
								<input type="text" class="form-control" id="comments" name="comments">
								<span class="help-block" id="commentsStatus"></span>
							</div>';
						}
						
					}
						echo'<button class="btn btn-default" type="submit" name="submit" value="submit">Submit</button>
					</form>';
					
						}
					else{
						$errors=array();
						$firstname=addslashes($_POST['firstName']);
						if($firstname==NULL){
							$errors[]="fnameErr=null";
						}
						elseif(!preg_match('/^[a-zA-Z]+$/',$firstname)){
							$errors[]="fnameErr=invalid";
							$_SESSION['firstName']=$firstname;
						}
						else{
							$_SESSION['firstName']=$firstname;
						}
						$lastname=addslashes($_POST['lastName']);
						if($lastname==NULL){
							$errors[]="lnameErr=null";
						}
						elseif(!preg_match('/^[a-zA-Z]+$/',$lastname)){
							$errors[]="lnameErr=invalid";
							$_SESSION['lastName']=$lastname;
						}
						else{
							$_SESSION['lastName']=$lastname;
						}
						$email=$_POST['email'];
						if($email==NULL){
							$errors[]="emailErr=null";
						}
						elseif(!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',$email)){
							$errors[]="emailErr=invalid";
							$_SESSION['email']=$email;
						}
						else{
							$_SESSION['email']=$email;
						}
						$phone=$_POST['phone'];
						if($phone==NULL){
							$errors[]="phoneErr=null";
						}
						elseif(!preg_match('/^[0-9]+$/',$phone)){
							$errors[]="phoneErr=invalid";
							$_SESSION['phone']=$phone;
						}
						else{
							$_SESSION['phone']=$phone;
						}
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
						$comments=addslashes($_POST['comments']);
						if($comments==NULL){
							$errors[]="commentsErr=null";
						}
						elseif(!preg_match('/^[a-zA-Z]+$/',$comments)){
							$errors[]="commentsErr=invalid";
							$_SESSION['comments']=$comments;
						}
						else{
							$_SESSION['comments']=$comments;
						}
						if(count($errors)>0){
							$errorString=implode("&",$errors);
							//header("Location: contact.php?$errorString");
							redirect("contact.php?$errorString");
						}
						else
						{
							include("functions.php");
							$dblink = db_connect("contact_data");
							$sql="Insert into `contact_info` (`first_name`, `last_name`,`email`,`phone`,`username`,`password`,`comments`) values ('$firstname','$lastname','$email','$phone','$username','$password','$comments')";
							$dblink->query($sql) or
								die("<div class=\"section-title\"><h2>Something went wrong with $sql<br>".$dblink->error."</h2></div>");
							echo '<div class="section-title"><h2>Data sent to database!</h2></div>';
							/*echo "<h2>Contact Form Results:</h2>";
							echo "<p>First Name: $firstname</p>";
							echo "<p>Last Name: $lastname</p>";
							echo "<p>Email: $email</p>";
							echo "<p>Phone: $phone</p>";
							echo "<p>Username: $username</p>";
							echo "<p>Password: $password</p>";
							echo "<p>Comments: $comments</p>";*/
							
							
						}
					}
					?>

		</div>

	