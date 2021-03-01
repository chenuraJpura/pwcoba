<?php
$ID=$_SESSION['userID'];
include("dbconnaction.php");
	$sql="select * from pwcobamem where mem_ID='$ID'";
    $sql1="select image from imgtable where mem_ID='$ID'";
    $sqlImg="SELECT mem_ID FROM `imgtable` WHERE mem_ID='$ID'";

    $result=mysqli_query($conn,$sql);
	$result1=mysqli_query($conn,$sql1);
    $resultIMG=mysqli_query($conn,$sqlImg);
	$no=mysqli_num_rows($resultIMG);
 
if($no==0){
	$sql_add="INSERT INTO imgtable (`mem_ID`) VALUES ('$ID');";
	$us_img="default.png";
	mysqli_query($conn,$sql_add);

	
}else{
	
		//profile image
$y=0;
	while($row2=mysqli_fetch_assoc($result1)){
	$y++;
	$us_img=$row2['image'];

}
//profile image
	
}
$x=0;
while($row1=mysqli_fetch_assoc($result)){
	$x++;
	$id=$row1['mem_ID'];
	$fn=$row1['mem_fName'] ;
    $ln=$row1['mem_lName'] ;
	$age=$row1['mem_Age'];
	$dob=$row1['mem_DBA'];
}


?>