<?php # Database Connections Here...
#start session

session_start();

#databse connection
include('configure/connections.php');
if($_POST){
	$q="SELECT * FROM user WHERE name = '$_POST[name]'AND password = SHA1('$_POST[password]')";
	$r=mysqli_query($dbc,$q);
	
	$num = mysqli_num_rows($r);
	if($num==1){
		$_SESSION['username']=$_POST['name'];
		header('Location: home.php');
	}
		
}
?>
<! doctype html>
<html>
	<head>
		<title>User Login</title>
		
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
						<strong>LOGIN</strong>
					</div><!--end panel heading-->
					<div class="panel-body">
					
				
					<form action="login.php" method="post" role="form">
						<div class="form-group">
							<label for="name">User Name</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Username">
						 </div>
						 
						 <div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						 </div>
						<!--
						 <div class="checkbox">
							<label>
							  <input type="checkbox"> Check me out
							</label>
						 </div> 
						 -->
						 <button type="submit" class="btn btn-default">Submit</button>
						 <a href="signup.php">Sign-up</a>
					</form>
					</div><!-- end oanel body -->
				</div><!-- end panel>>
			</div> <!-- end col -->
			
		
		</div><!-- end row -->
		

	
		</div> <!-- end containner -->
		</div><!-- end wrap-->
	
	
	
	</body>
</html>
