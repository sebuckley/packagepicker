<?php

session_start();

include '../dbh.php';

$SupportName = mysqli_real_escape_string($conn, $_POST['SupportName']);
$ServiceType = mysqli_real_escape_string($conn, $_POST['ServiceType']);
$Charity = $_POST['Charity'];
$Key = $_POST['Key'];
$Core = $_POST['Core'];
$Prime = $_POST['Prime'];
$Description = mysqli_real_escape_string($conn, $_POST['Description']);
$Link = mysqli_real_escape_string($conn, $_POST['Link']);

if($Charity == 'Yes'){
	
$Charity = 1;	
	
}else{
	
	
$Charity = 0;	
	
}

if($Key == 'Yes'){
	
$Key = 1;	
	
}else{
	
	
$Key = 0;	
	
}

if($Core == 'Yes'){
	
$Core = 1;	
	
}else{
	
	
$Core = 0;	
	
}

if($Prime == 'Yes'){
	
$Prime = 1;	
	
}else{
	
	
$Prime = 0;	
	
}


$sql = "SELECT * FROM support WHERE Support='$ServiceType'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$ServiceTypeID = $row['SupportID'];



$sql = "SELECT * FROM supportdetails WHERE SupportName='$SupportName'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
	
	
header("location: index.php?AlreadyAdded");
exit();		
	
	
}else{
	
	
	
$sql = "INSERT INTO supportdetail (SupportName, SupportTypeID, Charity, Kee, Core, Prime, Description, Link) VALUES ('$SupportName','$ServiceTypeID',$Charity,$Key,$Core,$Prime,'$Description','$Link')";
$result = mysqli_query($conn, $sql);

if($result){

header("location: index.php");
exit();	

}else{
	
	
	
}
	
	
	
	
}
