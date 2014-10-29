  <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

 <?php 

                 foreach ($all_plots as $plot){
                    ?>

                     <div class="col-sm-3 col-xs-6">
                        <a href="portfolio?id=<?php echo $plot->plot_id; ?>">
                            <img class="img-responsive portfolio-item" src="<?php echo base_url($plot->img); ?>" alt="">
                        </a>
                    </div>

                    <?php 

                 }   

?>
</div>

 </div>
        <!-- /.row -->

        <hr>