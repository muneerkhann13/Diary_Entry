	<nav class="navbar navbar-default"role="navigation">
		<ul class="nav navbar-nav">
				
				<?php //nav_main($dbc,$pageid);?>
					
					<li ><a href="home.php">Home</a></li>
					<li ><a href="index.php">Write</a></li>
					<li ><a href="read.php">Read</a></li>
					
					
				</ul>
					
		</ul>
		<div class="pull-right">
			<ul class="nav navbar-nav">
				<li ><a href="logout.php">logout</a></li>	
				<li ><a href="#"><?php echo $user['name']; ?></a></li>	
			</ul>
		</div>
	</nav><!-- END nav -->
