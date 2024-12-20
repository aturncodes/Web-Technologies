<?php
	
	echo'<div class="collapse navbar-collapse">';
          echo'<ul class="nav navbar-nav">';
		  $page=$_GET['page'];
		
		switch($page){
			case "work":
				echo'<li><a href="index.php">Home</a></li>';
				echo'<li class="open"><a href="index.php?page=work">Work</a></li>';
				echo'<li><a href="index.php?page=school1">School</a></li>';
				echo'<li><a href="index.php?page=about1">About</a></li>';
				echo'<li><a href="index.php?page=contact">Contact</a></li>';
				echo'<li><a href="index.php?page=login">Login</a></li>';
				break;
			case "school1":
				echo'<li><a href="index.php">Home</a></li>';
				echo'<li><a href="index.php?page=work">Work</a></li>';
				echo'<li class="open"><a href="index.php?page=school1">School</a></li>';
				echo'<li><a href="index.php?page=about1">About</a></li>';
				echo'<li><a href="index.php?page=contact">Contact</a></li>';
				echo'<li><a href="index.php?page=login">Login</a></li>';
				break;
			case "about1":
				echo'<li><a href="index.php">Home</a></li>';
				echo'<li><a href="index.php?page=work">Work</a></li>';
				echo'<li><a href="index.php?page=school1">School</a></li>';
				echo'<li class="open"><a href="index.php?page=about1">About</a></li>';
				echo'<li><a href="index.php?page=contact">Contact</a></li>';
				echo'<li><a href="index.php?page=login">Login</a></li>';
				break;
			case "contact":
				echo'<li><a href="index.php">Home</a></li>';
				echo'<li><a href="index.php?page=work">Work</a></li>';
				echo'<li><a href="index.php?page=school1">School</a></li>';
				echo'<li><a href="index.php?page=about1">About</a></li>';
				echo'<li class="open"><a href="index.php?page=contact">Contact</a></li>';
				echo'<li><a href="index.php?page=login">Login</a></li>';
				break;
			case "login":
				echo'<li><a href="index.php">Home</a></li>';
				echo'<li><a href="index.php?page=work">Work</a></li>';
				echo'<li><a href="index.php?page=school1">School</a></li>';
				echo'<li><a href="index.php?page=about1">About</a></li>';
				echo'<li><a href="index.php?page=contact">Contact</a></li>';
				echo'<li class="open"><a href="index.php?page=login">Login</a></li>';
				break;
			default:
				echo'<li class="open"><a href="index.php">Home</a></li>';
				echo'<li><a href="index.php?page=work">Work</a></li>';
				echo'<li><a href="index.php?page=school1">School</a></li>';
				echo'<li><a href="index.php?page=about1">About</a></li>';
				echo'<li><a href="index.php?page=contact">Contact</a></li>';
				echo'<li><a href="index.php?page=login">Login</a></li>';
				break;
		}
            
            
            
			
          echo'</ul>
        </div>';

		
	
	?>