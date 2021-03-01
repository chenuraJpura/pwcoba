<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Code Genrater</title>
</head>

<body>
<?php 
	$c1=rand(0,9);//0-9
	$c2=rand(10,99);//0-99
	$c3=chr(rand(97,122));//a-z
	$c4=rand(0,9);//0-9
	$c5=chr(rand(65,90));//A-Z
	$code=$c1.$c2.$c3.$c4.$c5;
	echo $code;
	?>
	
</body>
</html>