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
		<div id="wrap">
		<?php include(D_TEMPLATE.'/navigation.php'); ?>
		<div class="row">
			<div class="col-md-12">
				
				<?php 
						
					$q = "SELECT * FROM entry WHERE user = '$user[name]' ";
					$r = mysqli_query($dbc,$q);
					echo '<table class="table">';
					echo  '<tr>';
					echo  '<th>Date</th>';
					echo  '<th>Title</th>';
					echo  '<th>Body</th>';
					echo  '</tr>';
					echo '<tr>';
					while( $data = mysqli_fetch_assoc($r) ) 
					{
						$blurb = strip_tags($data['body']);
					
						echo "<tr><td>" . $data['date'] . "</td><td>" . $data['title'] . "</td><td>".$blurb."</td></tr>";
					} 
					echo '</tr>';
					echo '</table>';

				?>
			</div>
			
			
			</div>
								
					
		
		</div>
	</body>
