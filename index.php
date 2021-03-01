<?php session_start(); $pageName="index"; ?> 
<!--Header Start-->
<?php include_once('inc/head.php'); ?> 
<!--Header ends-->
<body>
<!--Menu Start --><?php include("inc/index_nav_bar.php");   ?><!--Menu End -->	  
<!--SLider--><?php include('inc/slider.php');?> <!--SLider End-->
<br>
<div class="container">
<?php include('inc/color_set.php');?>
</div>	
<?php include('inc/counter.php');?>
<?php include('inc/features-boxed.php'); ?>
<br>
	<div class="container">
	<div class="marketing" style="color: white;">

      <!-- START THE FEATURETTES -->

      <?php include('inc/color_set.php');?>
      <div class="row featurette">
        <div class="col-md-7 col-md-offset-0 col-xs-9 col-xs-offset-1 ">
          <h1 class="featurette-heading" style="color: #ee0a0a">Welcome!<br class="visible-xs"><span class="text-muted" style="color: white">CAMBRIANS</span></h2>
		
		 <p class="lead f1" style="text-align: justify;padding-left: 10px">Prince of Wales' College<br class="visible-xs"> is a selective entry boys' school situated in Moratuwa, a suburb of Colombo, Sri Lanka. Prince of Wales' College, Moratuwa, was founded and endowed in 1876 by Sir Charles Henry de Soysa, a famous 19th century Sri Lankan philanthropist.</p>
        </div>
        <div class="col-md-5 ">
		  	
          <img class="featurette-image center-block" src="images/logo_re.png" alt="Generic placeholder image" width="55%">
        </div>
		  
      </div>

      <div class="row featurette" >
		  <div class="col-md-5 col-md-offset-0 col-xs-5 col-xs-offset-2">
	<img class="visible-xs visible-sm" src="images/flag.png" width="200%" >
	<img class="visible-lg visible-md" src="images/flag.png" width="70%" >		  
		   </div>
        <div class="col-md-7 col-md-offset-0 col-xs-7 col-xs-offset-2 " style="text-align: center">
          <h1 class="featurette-heading" style="padding-top: 0px;color: white">COLORS OF<br class="visible-xs"> PROUD<br class="visible-lg visible-md visible-sm visible-xs"><span class="text-muted"><span style="color:#9c14fd;"><b>Purple</b></span><span style="color:Gold;"><b>Gold</b></span><br class="visible-xs"><span style="color:#ee0a0a;"><b>Maroon</b></span></span></h2>
          <p class="lead" style="font-size: 20px;">Purple=<b>Bold</b><br>
						  Gold=<b>Royalty</b><br>	
						  Red=<b>Glory</b>	
			</p>
        </div>
        
		 
      </div>

      <div class="row featurette">
        <div class="col-md-6">
          
		  <h1 class="featurette-heading" style="padding-top: 0px;color: white">143 Years of<br class="visible-lg visible-md visible-sm visible-xs"> Prince Of Wales College <span class="text-muted" style="color: #ee0a0a">Unique Resplendency</span></h2>
		  </div>
		  <div class="col-md-6" style="margin-top: 4%">
          <p class="lead">Prince of Wales' College has a proud history of 140 years. There is a school that has created a large number of students who have gained reputation for this school and the country.

The purpose of this site is to bring to the world the unique workings of the school and its unique activities.</p>
        </div>
		 <!-- <div class="col-md-5">-->
        <!--  <img class="featurette-image img-responsive center-block fimg" src="images/old1.png" height="50%" alt="Generic placeholder image">
        --><!--</div>-->

      </div>

      

      <!-- /END THE FEATURETTES -->

    </div>
	</div>
<!-- /.modal --><?php include('inc/model.php')?><!-- /.modal -->
<!--Content--><?php include('inc/wave.php')?>
<!--footer--><?php include('inc/footer.php');?><!--footer end-->	  
<!--scripts-->	  
<?php include('inc/scripts.php')?>
</body>
</html>