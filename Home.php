<?php 
#start the session:
session_start();
if(!isset($_SESSION['username']))
{
	header('Location:login.php');
}

?>
<?php include('configure/setup.php');?>
<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width-device-width,initial-scale-1.0">
		<?php include('configure/css.php');?>
		<?php include('configure/js.php');?>
	</head>
	<body>
	<?php include(D_TEMPLATE.'/navigation.php'); ?>
		<?php //include('templates/navigation.php'); ?>
		<div class="row">
			<div class="col-md-6">
				<div class="row">
				  <div class="col-sm-4 col-md-8">
					<div class="thumbnail">
					  <img src="images/add.jpg" alt="">
					  <div class="caption">
						<h3>DIARY ENTRY</h3>
						<p></p>
						<p><a href="index.php" class="btn btn-primary" role="button">Button</a></p>
					  </div>
					</div>
				  </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
				  <div class="col-sm-4 col-md-8">
					<div class="thumbnail">
					  <img src="images/read.jpg" alt="">
					  <div class="caption">
						<h3>Read DIARY</h3>
						<p></p>
						<p><a href="read.php" class="btn btn-primary" role="button">Button</a></p>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	<body>
</html>
				
