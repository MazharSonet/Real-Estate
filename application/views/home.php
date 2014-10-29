<!DOCTYPE html>

<title>
	Home
</title>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css" type="text/css">
	<!--link rel="stylesheet" href="loaclhost/bootstrap/css/bootstrap.css"   type="text/css"/>
	<link rel="stylesheet" href="localhost/css/bootstrap.min.css"  type="text/css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.css"  type="text/css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.min.css"  type="text/css"/-->

	
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
	       		 	<li><a href="contact">Contact</a></li>
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
			             Map view
			        </a>

    			</div> 
    			
					
					
					
					
				<?php
					$logged_in = $this->session->userdata('logged_in');
					//var_dump($this->session->userdata);
					if($logged_in)
					{
						
						$this->load->view('logout_partial');  
					}
					else{
						$this->load->view('login_form_partial');
					}

				?>

				       
			</div>

			<!--FOR CAUROSEL-->

			<div class="col-md-9"> 
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					      <img src="<?php echo base_url('assets/image/build0.jpg'); ?>" alt="...">

					      <div class="carousel-caption">
					        ...
					      </div>
					    </div>
					    <div class="item">
					      <img src="<?php echo base_url('assets/image/5.png'); ?>" alt="...">
					      <div class="carousel-caption">
					        ...
					      </div>
					    </div>
					    ...
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					  </a>
					</div>

			</div><!--END cAUROSEL-->
		</div>






	</div>  <!--container-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"</script>
	
</body>

