<?php 
#start the session:
session_start();
if(!isset($_SESSION['username']))
{
	header('Location:login.php');
}

?>

<?php include('configure/setup.php');?>


<html>
	<head>
		<meta name="viewport" content="width-device-width,initial-scale-1.0">
		<?php include('configure/css.php');?>
		<?php include('configure/js.php');?>
		
	</head>
	
	<body>
		<div id="wrap">
		<?php include(D_TEMPLATE.'/navigation.php'); ?>
		
		
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<?php 
					
						if(isset($_POST['submitted']) == 1)
						{
							$date=date('Y-m-d H:i:s');
							$title=mysqli_real_escape_string($dbc,$_POST['title']);
							$user=$user['name'];
							$body=mysqli_real_escape_string($dbc,$_POST['body']);
							$q="INSERT INTO entry(title,date,user,body) VALUES('$title','$date','$user','$body')";
							$r = mysqli_query($dbc,$q);
							if($r){
								$message ='<p>Entry was Added!!</p>';
							}
							else
							{	$message ='<p>Entry Could not be added because :'.mysqli_error($dbc).'</p>';
								$message.='<p>'.$q.'</p>';
							}
						}
					
						?>
					
						
				</div>
			
			</div>
			
			<div class="col-md-9">
				<?php  if(isset($message)) echo $message;?>
				<form role="form" action="index.php" method="post">
					
					
					<div class="form-group">
						<label for="title">Title:</label>
						<input class="form-control"type="text" name="title" id="title" placeholder="page Title">
					</div>
					
			
					<div class="form-group">
						<label for="body">Body:</label>
						<textarea class="form-control" rows="15" name="body" id="body" placeholder="Body"></textarea>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
					<input type="hidden"name="submitted"value="1">
				</form>
			</div>
		</div>

		</div><!-- end wrap-->
	
	</body>

</html>
