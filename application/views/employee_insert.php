<!DOCTYPE html>

<title>
	Employee
</title>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" type="text/css">
	
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
			     <ul class="nav navbar-nav navbar-right">

		            <li><a href="employeeLogin">Employee Login</a></li>

		        </ul>
		         <ul class="nav navbar-nav">
	       		 	<li><a href="about">About Us</a></li>
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


		<!--employee insert-->

					<h1>Insert Employee</h1>
					<div class="col-md-9">
					<a class="list-group-item">
						
						<form name="employee_form" class="form-horizontal" role="form" method="post" accept-charset="utf-8" action="insert_mgr">  	
					
					
						  <div class="form-group">
						    <label for="emp_id" class="col-sm-2 control-label">Employee ID</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="emp_id" name="emp_id" placeholder="e.g., M12345">
						    </div>
						  </div>
						  
						  <div class="form-group">
						    <label for="emp_section" class="col-sm-2 control-label">Section</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="emp_section" name="emp_section" placeholder="Manager/Officer">
						    </div>
						  </div>
						  
						  <div class="form-group">
						    <label for="emp_id" class="col-sm-2 control-label">Name</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="name" name="name" placeholder="enter name">
						    </div>
						  </div>

						  <div class="form-group">
						    <label for="emp_id" class="col-sm-2 control-label">Address</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="address" name="address" placeholder="enter address">
						    </div>
						  </div>

						  <div class="form-group">
						    <label for="emp_id" class="col-sm-2 control-label">Contact</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="contact" name="contact" placeholder="enter contact number">
						    </div>
						  </div>

						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
						    </div>
						  </div>

						  <div class="form-group">
						    <label for="emp_id" class="col-sm-2 control-label">Designation</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="designation" name="designation" >
						    </div>
						  </div>
	 
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-default" onclick="allLetter(document.employee_form.name)"  >Insert</button>
						    </div>
						  </div>
						</form>
					</a>
					</div>

					
					
				</div>

			
		</div>
			

		</div>






	</div>  <!--container-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
	<script type="text/javascript">

	function allLetter(inputtxt)  
	  {  
	   var letters = /^[A-Za-z\s]+$/;  
	   if(inputtxt.value.match(letters))  
	     {  
	      return true;  
	     }  
	   else  
	     {  
	     alert(" Enter Valid name ");
	    
	     return false;  
	     }  
	  }  


	</script>
</body>