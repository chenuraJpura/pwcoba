<?php session_start();
if(isset($_POST['reMail'])){
	$email=$_POST['reMail'];
include("dbconnaction.php");
$sql="select mail from `login` where mail='$email'";
$result=mysqli_query($conn,$sql);
$no=mysqli_num_rows($result);
if($no>0){
//conformation code genrating
$c1=rand(0,9);//0-9
$c2=rand(10,99);//0-99
$c3=chr(rand(97,122));//a-z
$c4=rand(0,9);//0-9
$c5=chr(rand(65,90));//A-Z
$code=$c1.$c2.$c3.$c4.$c5;
$sql1="UPDATE `login` SET `c_code` = '$code' WHERE `login`.`mail` ='$email'";	
$result0=mysqli_query($conn,$sql1);
//mail part
$to       = $email;
$subject  = 'Password Reset Code';
$message  = $code.' This is password reset code.you can enter this code & reset the password using this link http://localhost/php/password_code';
$headers  = 'From:  crf@localhost';
mail($to, $subject, $message, $headers);
$_SESSION['message']="mail";
header("location:../alert");
}else{
$_SESSION['message']="mail";
header("location:../alert");
}	
}
?>
