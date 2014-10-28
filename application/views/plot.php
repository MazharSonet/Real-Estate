<!DOCTYPE html>

<title>
	Home
</title>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" type="text/css">
	<!--link rel="stylesheet" href="loaclhost/bootstrap/css/bootstrap.css"   type="text/css"/>
	<link rel="stylesheet" href="localhost/css/bootstrap.min.css"  type="text/css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.css"  type="text/css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.min.css"  type="text/css"/-->
	<?php echo $map["js"]; ?>
	
</head>

<body>
	
    
	<div class="container">

	<!--navbar-->


	<div class="row">
	     
	    <nav class="navbar navbar-default" role="navigation">
	  		<div class="container-fluid">
	    	<!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header">
	      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        		<span class="sr-only">Toggle navigation</span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	        		<span class="icon-bar"></span>
	      		</button>
	      	<a class="navbar-brand" href="home">HOME</a>
	    	</div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	     		 <ul class="nav navbar-nav">
	       		 	<li><a href="employee">Employer</a></li>
	        	 </ul>
	        	 <ul class="nav navbar-nav">
	       		 	<li><a href="portfolio">Portfolio</a></li>
	        	 </ul>
	        	 <ul class="nav navbar-nav">
	       		 	<li><a href="#">Contact</a></li>
	        	 </ul>
	        	 <ul class="nav navbar-nav">
	       		 	<li><a href="about">About Us</a></li>
	        	 </ul></div><!-- /.navbar-collapse -->
	 		 </div><!-- /.container-fluid -->
		</nav>	
	</div>  <!--row for navbar-->

	

		<div class="row">
			<div class="col-md-3 sidebar"> <!--sidebar-->
				<div class="list-group">
        			<span href="" class="list-group-item active">
           			 	Plots
       				</span>
			        <a href="plot_view" class="list-group-item">
			             On Going project
			        </a>
			        <a href="#" class="list-group-item">
			             Ready flat
			        </a>
			        <a href="plot" class="list-group-item">
			             Map View
			        </a>

    			</div> 
    			
					<!--for user login-->
					<div class="list-group">
					<span href="#" class="list-group-item active">
           			 	User Login
       				</span>
						<br>
					
					<div class="col-md-12">
					<a class="list-group-item">
						<form class="form-horizontal" role="form">
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
						    <div class="col-sm-9">
						      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
						    <div class="col-sm-8">
						      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <div class="checkbox">
						        <label>
						          <input type="checkbox"> Remember me
						        </label>
						      </div>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-default">Sign in</button>
						    </div>
						  </div>
						</form>
						</a>
					</div>
					<a class="list-gruop-item" href="about.html">
							About us
					</a>
					</div>

				       
			</div>

			<!--map-->
			<div class="col-md-9">
					<a class="list-group-item">
						<!-- <form class="form-horizontal" role="form"> -->

						<form  class="form-horizontal" role="form" method="post" accept-charset="utf-8" action="plot">
					
						  <div class="form-group">
						    <label for="emp_id" class="col-sm-4 control-label">Enter Lowest Price</label>
						    <div class="col-sm-4"> 
						      <input type="text" class="form-control" id="l_price" name="l_price" >
						    </div>
						  </div>
						  
						  <div class="form-group">
						    <label for="emp_section" class="col-sm-4 control-label">Enter Highest Price</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="h_price" name="h_price" >
						    </div>
						  </div>
						  
						  
	 
						  <div class="form-group">
						    <div class="col-sm-offset-4 col-sm-6">
						      <button type="submit" class="btn btn-default" value="search">Search</button>
						    </div>
						  </div>
						</form>
					</a>
						

			 
				<?php echo $map["html"]; ?>
			</div><!--END cAUROSEL-->
		</div>







	</div>  <!--container-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"</script>
	
</body>