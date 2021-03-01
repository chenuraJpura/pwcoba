<?php
include("dbconnaction.php");
$n_h=mysqli_real_escape_string($conn, $_POST['n_h']);
$n_d=mysqli_real_escape_string($conn, $_POST['n_d']);
$sql="INSERT INTO `news` (`n_id`,`n_h`, `n_d`) VALUES (NULL,'$n_h', '$n_d')";
$result=mysqli_query($conn,$sql);

$sql2="select n_id from `news` where n_h='$n_h'";

$result3=mysqli_query($conn,$sql2);	

$x=0;

$no1=mysqli_num_rows($result3);

if($no1>0){
while($row3=mysqli_fetch_assoc($result3)){
	$x++;	
	$id_no=$row3['n_id'];	

	
}
}else{echo 'no records';}
	

if ($result){
	?>
	<script>
			alert("Send Sucessfully");
			window.location='../news_insert';
    </script><?php

}else{
	?>
	<script>
			alert("Send unSucessfull");
			window.location='../news_insert';
    </script><?php
	
}


include("upload_News.php");
?>












