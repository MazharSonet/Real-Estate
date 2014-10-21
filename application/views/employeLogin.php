<!DOCTYPE html>

<title>
	Employee
</title>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css"  type="text/css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.css"  type="text/css"/>
	<link rel="stylesheet" href="css/bootstrap-theme.min.css"  type="text/css"/>

	
</head>
<body>
	
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
	      	<a class="navbar-brand" href="home.html">HOME</a>
	    	</div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	     		 <ul class="nav navbar-nav">
	       		 	<li><a href="employee.html">Employer</a></li>
	        	 </ul>
	        	 <ul class="nav navbar-nav">
	       		 	<li><a href="portfolio.html">Portfolio</a></li>
	        	 </ul>
	        	 <ul class="nav navbar-nav">
	       		 	<li><a href="#">Contact</a></li>
	        	 </ul>
			     <ul class="nav navbar-nav navbar-right">

		            <li><a href="#">Employee Login</a></li>

		        </ul>
		      </div><!-- /.navbar-collapse -->
	 		 </div><!-- /.container-fluid -->
		</nav>	
	</div>  <!--row for navbar-->	

		<div class="row">
			<div class="col-md-3 sidebar"> <!--sidebar-->
				<div class="list-group">
        			<span href="#" class="list-group-item active">
           			 	Plots
       				</span>
			        <a href="#" class="list-group-item">
			             On Going project
			        </a>
			        <a href="#" class="list-group-item">
			             Ready flat
			        </a>
			        <a href="#" class="list-group-item">
			             Gallery
			        </a>

    			</div> 
    			
					
					<a class="list-gruop-item" href="about.html">
					<br>
							<h1>About us</h1>
					</a>

				       
			</div>

		<!--employee login-->

					<h1>Employee Profile</h1>
					<div class="col-md-9">
					<a class="list-group-item">
						<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Department</label>
								<div class="col-sm-10">

									<div class="btn-group btn-input clearfix">
									  <button type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown">
									    <span data-bind="label">Select One</span> 
									    <span class="caret"></span>

									  </button>
									  <!--missing menu drop-->


									 </div>
								</div>
						
									 
						</div>
					
						

						<div class="form-group">
						    <label for="inputPassword3" class="col-sm-2 control-label">ID</label>
						    <div class="col-sm-10">
						      <input type="password" class="form-control" id="inputPassword3" placeholder="Enter your employee ID">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						    <div class="col-sm-10">
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
					
					</div>

			
		</div>
			

		</div>






	</div>  <!--container-->
	
</body>