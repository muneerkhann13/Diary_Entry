<?php
	function data_user($dbc,$id)
	{
		
		$q="SELECT * FROM user WHERE name='$id'";
		$r=mysqli_query($dbc,$q);
		$data = mysqli_fetch_assoc($r);
		
		return $data;
	}
?>
