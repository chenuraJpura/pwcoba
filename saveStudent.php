<?php 
if (isset($_POST['mem_fName']) && isset($_POST['mem_lName']) && isset($_POST['password1'])){
include("inc/dbconnaction.php");

$mem_fName=$_POST['mem_fName'];
$mem_lName=$_POST['mem_lName'];
$mem_4No=$_POST['mem_4No'];
$mem_pw=$_POST['password1'];
$mem_btN=$_POST['batch_No'];
$mem_db=$_POST['bd'];
$mem_town=$_POST['town'];
$mem_club=$_POST['club'];
$mem_sports=$_POST['sports'];
	
	//time
date_default_timezone_set("Asia/Colombo");
$time=date("h:i:sa");

// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
$date="$mydate[year]";
$st_db=substr($mem_db,0,4);
$age=(int)$date-(int)$st_db;

//encryptation//
$mem_pw=md5($mem_pw);
$mem_pw=sha1($mem_pw);
//encryptation//
$mem_mail=$_POST['mail'];

$sql4="select mem_eMail from pwcobamem where mem_eMail='$mem_mail'";
$sql5="select mem_4No from pwcobamem where mem_4No='$mem_4No'";
$result4=mysqli_query($conn,$sql4);
$result5=mysqli_query($conn,$sql5);	
$no1=mysqli_num_rows($result4);	
$no2=mysqli_num_rows($result5);	
if($no1 or $no2 >0){
	?>
	<script>
alert("your mail or phone number is already in systerm!")
window.location="signup";

</script>
	<?php
}else{	
	
$sql="INSERT INTO `pwcobamem` (`mem_fName`, `mem_lName`, `mem_eMail`, `mem_4No`, `mem_DBA`, `mem_Age`, `mem_BatchN`, `mem_town`, `mem_club`, `mem_sports`) VALUES ('$mem_fName', '$mem_lName', '$mem_mail', '$mem_4No', '$mem_db', '$age', '$mem_btN', '$mem_town', '$mem_club', '$mem_sports')";
	
$result1=mysqli_query($conn,$sql);
	
$sql2="select mem_ID from pwcobamem where mem_eMail='$mem_mail'";
$result3=mysqli_query($conn,$sql2);	
	
$row3=mysqli_fetch_assoc($result3);

$id_no=$row3['mem_ID'];	

//$id_no=intval($id_no);
	
$sql1="INSERT INTO `login` (`mem_ID`, `mail`, `pass`) VALUES ('$id_no', '$mem_mail', '$mem_pw')";

$result2=mysqli_query($conn,$sql1);

	
if($result1 && $result2){
	
	?>
<script>
alert("Registration Completed!You Will recive a conformation code to your Email");
window.location="login";


</script>

<?Php
	
	
}else{
	
	
		?>
<script>
alert("Not Saved");
	window.location="signup";


</script>

<?Php
	
	
}
}

}else{
	echo "Access Denied";
	header("location:signup");
	
}
?>

