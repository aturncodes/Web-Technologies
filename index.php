<!DOCTYPE html>
<html>
<head>
<title>Welcome to Alex's homepage.</title>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	
      <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
	<section class"navbar custom-navbar navbar-fixed-top" style="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome to Alex's homepage.</a>
        </div>
		<?php 
		  if(isset($_GET['page'])){
			  include("navigation.php");
		  }
		  else{
			  
			  echo'<div class="collapse navbar-collapse">';
          echo'<ul class="nav navbar-nav">';
			  echo'<li class="open"><a href="index.php">Home</a></li>';
				echo'<li><a href="index.php?page=work">Work</a></li>';
				echo'<li><a href="index.php?page=school1">School</a></li>';
				echo'<li><a href="index.php?page=about1">About</a></li>';
				echo'<li><a href="index.php?page=contact">Contact</a></li>';
			  	echo'<li><a href="index.php?page=login">Login</a></li>';
			  
			   echo'</ul>
        		</div>';
		  }
		  ?>
        
      </div>
		</section>
	
	<?php
	if(isset($_GET['page'])){
		
	
	
		$page=$_GET['page'];
		switch($page){
			case "work":
				include("work.php");
				break;
			case "school1":
				include("school1.php");
				break;
			case "about1":
				include("about1.php");
				break;
			case "contact":
				include("contact.php");
				break;
			case "results":
				include("results.php");
				break;
			case "login":
				include("login.php");
				break;
			default:
				include("home.php");
				break;
		}
	}
	else{
		include("home.php");
	}
	
	?>
    
		
	</body>
</html>