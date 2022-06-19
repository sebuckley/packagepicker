
<?php 


$conn = mysqli_connect("localhost", "root", "", "chamber" );

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
	
}