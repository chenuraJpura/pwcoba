<?php
session_start();
$target_dir = "../images/gallery/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
    			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    			if($check !== false) {
					//echo "File is an image - " . $check["mime"] . ".";
$uploadOk = 1;
    			} else {
        				?>
						<script>alert("File is not an image.");
						//window.location='home';
						</script>			
						<?php
        				$uploadOk = 0;
    				   }
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
  				?>
				<script>alert("Sorry, your file is too large.")
						window.location='../gallery_update';
				</script>
				<?php
    			$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
	?>
<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")
window.location='../gallery_update';
</script>
<?php
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
$target_file = $target_dir . basename($id_no.".".$imageFileType);
if ($uploadOk == 0) {
    ?>
<script>
	alert("Sorry, your file was not uploaded.");
	window.location='../gallery_update';
	</script>	
<?php
// if everything is ok, try to upload file
} else {
    	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$sql1="UPDATE `gallery` SET `pic_src` = '$id_no.$imageFileType' WHERE `gallery`.`pic_id` = $id_no";
		$result1=mysqli_query($conn,$sql1);
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		}
		else {
		?>
				<script>
		alert("Sorry, there was an error uploading your file.");
	    window.location='../gallery_update';
		</script>	
	<?php
    	}
		}
if($result && $res && $result1){
	?>
	<script>
			alert("Send Sucessfully");
			window.location='../gallery_update';
    </script><?php
}else{
	?>
	<script>
			alert("Send unSucessfull");
			window.location='../gallery_update';
    </script><?php
}
?>