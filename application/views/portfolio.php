<!DOCTYPE html>

<title>
	Portfolio
</title>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" type="text/css">
</head>
<body>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<div class="container">

	<!--navbar-->	

	
    <!-- Page Content for portfolio -->
    <div class="container">
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
                    <li><a href="portfolio?id=mirpur_01">Portfolio</a></li>
                 </ul>
                 <ul class="nav navbar-nav">
                    <li><a href="#">Contact</a></li>
                 </ul>
                 <ul class="nav navbar-nav">
                    <li><a href="about">About Us</a></li>
                 </ul>
                 </div><!-- /.navbar-collapse -->
             </div><!-- /.container-fluid -->
        </nav>  
    </div>  <!--row for navbar-->

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Portfolio Item</br>
                    <small>Duplex House-</br>
                    Plot ID--
                     <?php
                    //foreach($places as $tmp)
                         echo $price_details->plot_id ;                         
                    ?>
                    </small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="<?php echo base_url($price_details->img); ?>" alt="">
            </div>

            <div class="col-md-4">
                <h3>Project Description</h3>
                <p><?php
                    //foreach($price_details as $tmp)
                         echo $price_details->description;                         
                    ?>
                    </p>
                <h3>Project Details</h3>
                
                <ul>
                    <li><big>Architect :</big>
                    <?php
                    //foreach($places as $tmp)
                         echo $places->name ;                         
                    ?>
                    </li>
                    <li><big>Price</big>
                    <?php
                    //foreach($price_details as $tmp)
                         echo $price_details->price;                         
                    ?></li>
                	<li><big>Foundation</big> :Pile foundation, basement raft with strip beams</li>
                
                    <li><big>Floor</big> : Ceramic tiles</li>
                    
                    
                </ul>
            </div>

        </div>
        <!-- /.row -->

        


        <!-- Related Projects Row -->
        <!--
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>
        
            <?php 

                 foreach ($all_plots as $plot){
                    ?>

                     <div class="col-sm-3 col-xs-6">
                        <a href="portfol?id=<?php echo $plot->plot_id; ?>">
                            <img class="img-responsive portfolio-item" src="<?php echo base_url($plot->img); ?>" alt="">
                        </a>
                    </div>

                    <?php 

                 }   

            ?>
            
            <div class="col-sm-3 col-xs-6">
                <a href="portfol?id=dhanmondi_02">
                    <img class="img-responsive portfolio-item" src="<?php echo base_url('assets/image/build2.jpg'); ?>" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="portfolio3">
                    <img class="img-responsive portfolio-item" src="<?php echo base_url('assets/image/build3.jpg'); ?>" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="portfolio4">
                    <img class="img-responsive portfolio-item" src="<?php echo base_url('assets/image/build4.jpg'); ?>" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="portfolio5">
                    <img class="img-responsive portfolio-item" src="<?php echo base_url('assets/image/build5.jpg'); ?>" alt="">
                </a>
            </div>
            -->

       
        

       

   