<?php
include("dbconnaction.php");
$sql0="SELECT MAX(pic_id) FROM gallery";
$res=mysqli_query($conn,$sql0);
$a=1;
while($ro=mysqli_fetch_assoc($res)){
	$a++;	
	$pre_no=$ro['MAX(pic_id)'];	
}
$id_no=strval($pre_no)+1;
$img_alt=mysqli_real_escape_string($conn, $_POST['alt']);
$sql="INSERT INTO `gallery` (`pic_id`, `pic_src`, `pic_alt`) VALUES ($id_no, NULL, '$img_alt'); ";
$result=mysqli_query($conn,$sql);
include("gallery_upload.php");


?>












