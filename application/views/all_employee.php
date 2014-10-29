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
			
			<!--employee table-->
			<div class="col-md-9">


			    <h1>MANAGER</h1>
				<table class="table table-bordered">
			        <thead>
			            <tr>
			              <th>Employee ID</th>
			                <th>Employee Section</th>
			                <th>Name</th>
			                <th>Address</th>
			                <th>Contact</th>
			                <th>Email</th>
			                <th>Designation</th>
			            </tr>
			        </thead>
			        <tbody>
			        
				       <tr> 
				       
				        <?php 
				       //echo '<th>'
				           foreach($details as $tmp){
				           		
				           		echo '<tr>
				           			<td>'.$tmp->emp_id.'</td>
				           			<td>'.$tmp->emp_section.'</td>
				           			<td>'.$tmp->name.'</td>
				           			<td>'.$tmp->address.'</td>
				           			<td>'.$tmp->contact.'</td>
				           			<td>'.$tmp->email.'</td>
				           			<td>'.$tmp->designation.'</td>
				           			</tr>';
				           		//echo '<td>'.$tmp->section.'</td>';
				           		

				           }
				       // echo '</th>';
				        ?>
				        
			        </tr>
			        
			        </tbody>
			    </table>				
			</div>
			

			<div class="col-md-9">
			<?php 
							//var_dump($this->session->userdata); 
							if($this->session->userdata('logged_in')) {
						?>
			<form  class="form-horizontal" role="form" method="post" accept-charset="utf-8" action="insert_mgr"> 
						  
	 
						  <div class="form-group">
						    <div class="col-sm-offset-4 col-sm-4">
						      <button type="submit" class="btn btn-default" value="insert">Insert Manager</button>
						    </div>
						  </div>
						</form>
			    <?php } ?>

			    <h1>PUBLIC RELATION OFFICER</h1>
				<table class="table table-bordered">
			        <thead>
			            <tr>
			                <th>Employee ID</th>
			                <th>Employee Section</th>
			                <th>Name</th>
			                <th>Address</th>
			                <th>Contact</th>
			                <th>Email</th>
			                <th>Designation</th>
			            </tr>
			        </thead>
			       <tbody>
			        
				       <tr> 
				       
				        <?php 
				       //echo '<th>'
				           foreach($ofc_details as $tmp){
				           		
				           		echo '<tr>
				           			<td>'.$tmp->emp_id.'</td>
				           			<td>'.$tmp->emp_section.'</td>
				           			<td>'.$tmp->name.'</td>
				           			<td>'.$tmp->address.'</td>
				           			<td>'.$tmp->contact.'</td>
				           			<td>'.$tmp->email.'</td>
				           			<td>'.$tmp->designation.'</td>
				           			</tr>';
				           		//echo '<td>'.$tmp->section.'</td>';
				           		

				           }
				       // echo '</th>';
				        ?>
				        
			        </tr>
			        
			        </tbody>
			    </table>
			    <hr>	
			    	<?php 
							//var_dump($this->session->userdata); 
							if($this->session->userdata('logged_in')) {
						?>

			   				 <form  class="form-horizontal" role="form" method="post" accept-charset="utf-8" action="insert_mgr"> 
						  
	 
						  <div class="form-group">
						    <div class="col-sm-offset-4 col-sm-4">
						      <button type="submit" class="btn btn-default" value="insert">Insert Officer</button>
						    </div>
						  </div>
						</form>
						<?php } ?>
									
			</div>
			

		</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>


	</div>  <!--container-->
	
</body>