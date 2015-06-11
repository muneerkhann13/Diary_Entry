<?php # Database Connections Here...

include('configure/connections.php');?>

<! doctype html>
<html>
	<head>
		<title>Sign Up</title>
		
		<meta name="viewport" content="width-device-width,initial-scale-1.0">
		<?php include('configure/css.php');?>
		<?php include('configure/js.php');?>
	</head>
	<body>
	<div id="wrap">
		
		<div class="container">
		
		<div class="row">
			
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<strong>SIGN UP</strong>
					</div><!--end panel heading-->
					<div class="panel-body">
					<?php 
					
						if(isset($_POST['submitted']) == 1)
						{
							$name=mysqli_real_escape_string($dbc,$_POST['name']);
							$p=SHA1($_POST['password']);
							$password=mysqli_real_escape_string($dbc,$p);
							$email=mysqli_real_escape_string($dbc,$_POST['email']);
							
							$q="INSERT INTO user(name,password,email) VALUES('$name','$password','$email')";
							$r = mysqli_query($dbc,$q);
							if($r){
								header('Location: login.php');
							}
							else
							{	$message ='<p>Entry Could not be added because :'.mysqli_error($dbc).'</p>';
								$message.='<p>'.$q.'</p>';
							}
						}
					
						?>
					
				<form role="form" action="signup.php" method="post">
					
					
					<div class="form-group">
						<label for="name">User Name</label>
						<input class="form-control"type="text" name="name" id="name" placeholder="NAME">
					</div>
					
			
					
					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control"type="password" name="password" id="password" placeholder="PASSWORD">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control"type="text" name="email" id="email" placeholder="EMAIL">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
					<input type="hidden"name="submitted"value="1">
				</form>
					</div><!-- end oanel body -->
				</div><!-- end panel>>
			</div> <!-- end col -->
			
		
		</div><!-- end row -->
		

	
		</div> <!-- end containner -->
		</div><!-- end wrap-->
	
	
	
	</body>
</html>
