<?php
//setup files:
# Database Connections Here...

include('configure/connections.php');
#constants:
DEFINE('D_TEMPLATE','templates');

#Functions
include('functions/data.php');

#user setup:

$user=data_user($dbc,$_SESSION['username']);

?>
