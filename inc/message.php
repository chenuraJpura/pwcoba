<?php
if(isset($_POST['Email'])){

include("dbconnaction.php");
	//time
date_default_timezone_set("Asia/Colombo");
$time=date("h:i:sa");
//date
	
// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
$date="$mydate[mday].$mydate[mon].$mydate[year]";

$mn=mysqli_real_escape_string($conn,$_POST['Name']);
$me=mysqli_real_escape_string($conn,$_POST['Email']);
$m=mysqli_real_escape_string($conn,$_POST['Message']);

$sql="INSERT INTO `message` (`m_ID`, `name`, `email`, `message`, `state`, `m_time`, `m_date`) VALUES (NULL, '$mn', '$me', '$m', 'n_seen','$time','$date')";

$result=mysqli_query($conn,$sql);
session_start();
if ($result){
	$_SESSION['message']="contact";
	header("location:../alert");
}else{
	$_SESSION['message']="contact-x";
	echo "Send unSucessfull";
	header("location:../alert");
	
}

}
?>