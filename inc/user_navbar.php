
<div class="container" >
  <nav class="navbar navbar-default" style="background-color:#1e2833;">
	    <div class="container-fluid">
	      <!-- Brand and toggle get grouped for better mobile display -->
	      <div class="navbar-header">
			  <p style="margin-top: 12px;color: white;float: left;margin-left: 45%;" class="visible-xs">Menu</p>
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	        </div>
	      <!-- Collect the nav links, forms, and other content for toggling -->
			
	      <div class="collapse navbar-collapse" id="defaultNavbar1">
	        <ul class="nav navbar-nav">
				<li ><a href="home"><span class="glyphicon glyphicon-home">&nbsp;</span>Home</a></li>
				<li ><a href="group"><span class="glyhicon glyphicon glyphicon glyphicon-user">&nbsp;</span>Friends</a></li>
				<li ><a href="setting"><span class="glyhicon glyphicon glyphicon-cog">&nbsp;</span>Settings</a></li>
		        <li ><a href="contact"><span class="glyphicon glyphicon-phone-alt">&nbsp;</span>Contacts</a></li>
				<li ><a href="gallery"><span class="glyphicon glyphicon-th-large">&nbsp;</span>Gallery</a></li>
				<li ><a href="news">News</a></li>
			
            </ul>
	        <ul class="nav navbar-nav navbar-right">
			<li style="text-transform: capitalize"><a><?php echo $_SESSION['userName'];?></a></li>	
        <li><a href='inc/logout'>Logout</a></li>
        
      </ul>
	        
          </div>
	      <!-- /.navbar-collapse -->
    </div>
	    <!-- /.container-fluid -->
  </nav>
	  </div>