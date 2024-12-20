<?php
echo '<div class="container">
			<div class="panel panel-success">
  				<div class="panel-body">';
echo '<h2>Please log in to continue:</h2>';
echo '<form method="post" action="">';




	if(isset($_GET['error'])){
						if($_GET['error']=="authError"){
						echo '<div class="form-group has-error">';
						echo '<label class="control-label">Username:</label>';
						echo '<input name="username" type="text" class="form-control">';
						echo '<span class="help-block" id="usernameStatus">Must be a valid account</span>';
						echo '<div id="unFeedback"></div>';
						echo '</div>';
						echo '<form method="post" action="">';
						echo '<div class="form-group has-error">';
						echo '<label class="control-label">Password:</label>';
						echo '<input name="password" type="password" class="form-control">';
						echo '<span class="help-block" id="passwordStatus">Must be a valid account</span>';
						echo '<div id="pwFeedback"></div>';
						echo '</div>';
						}
					elseif($_GET['error']=="invalidSID"){
						echo '<div class="form-group has-error">';
						echo '<label class="control-label">Username:</label>';
						echo '<input name="username" type="text" class="form-control">';
						echo '<span class="help-block" id="usernameStatus">Must be a valid session ID</span>';
						echo '<div id="unFeedback"></div>';
						echo '</div>';
						echo '<form method="post" action="">';
						echo '<div class="form-group has-error">';
						echo '<label class="control-label">Password:</label>';
						echo '<input name="password" type="password" class="form-control">';
						echo '<span class="help-block" id="passwordStatus">Must be a valid session ID</span>';
						echo '<div id="pwFeedback"></div>';
						echo '</div>';
						}
					
	}
else{
	
	echo '<div class="form-group">';
						echo '<label class="control-label">Username:</label>';
						echo '<input name="username" type="text" class="form-control">';
						echo '<div id="unFeedback"></div>';
						echo '</div>';
						echo '<form method="post" action="">';
						echo '<div class="form-group">';
						echo '<label class="control-label">Password:</label>';
						echo '<input name="password" type="password" class="form-control">';
						echo '<div id="pwFeedback"></div>';
						echo '</div>';
	
}








echo '<button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>';
echo '</form>';



echo '</div>
		</div>
	</div>';
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	include("functions.php");
	$dblink=db_connect('contact_data');
	$salt="CS4413fa24"; 
	$hash=hash('sha256',$username.$password.$salt);
	$sql="Select `auto_id` from `accounts` where hash='$hash'";
	$result=$dblink->query($sql) or
		die("<h2>Something went wrong with $sql<br>".$dblink->error."</h2>");
	if ($result->num_rows>0)
	{
		$data=$result->fetch_array(MYSQLI_ASSOC);
		$SIDsalt=microtime();
		$sid=hash('sha256',$hash.$SIDsalt);
		$sql="Update `accounts` set `session_id`='$sid' where `auto_id`='$data[auto_id]'";
		$dblink->query($sql) or
			die("<h2>Something went wrong with $sql<br>".$dblink->error."</h2>");
		redirect("index.php?page=results&sid=$sid");
	}
	else{ //complete this
		redirect("index.php?page=login&error=authError");
	}
}

?>