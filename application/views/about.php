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

	
</head>
<body>
	<a href="employee"></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
	        	 </ul></div><!-- /.navbar-collapse -->
	 		 </div><!-- /.container-fluid -->
		</nav>	
	</div>  <!--row for navbar-->

	

		<div class="row">
			<div class="col-md-3 sidebar"> <!--sidebar-->
				<div class="list-group">
        			<span href="#" class="list-group-item active">
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
    			
					

				       
			</div>

			<!--FOR CAUROSEL-->

			<div class="col-md-9"> 
				<h1>WE</h1>
				</hr>
				<p>We are maintaining our real-estate business since 1990. We have a well known recognition among our respected clients and try to provide most suitable facilities for the clients. Clients satisfaction is the first and formemost vision of our company. 
				
				</p>
		</div>






	</div>  <!--container-->
	
</body>