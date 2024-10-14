<?php 
/* Template name: Final Payment */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 

  <?php
     if(isset($_SESSION["em"])){
			$user_email = $_SESSION["em"];
		}

      if(isset($_SESSION["pem"])){
			//else{
                 $user_email = $_SESSION["pem"];
			}

     ?>
    <div class="container">
		<div class="row chance">
    		<div class="col-md-12 text-center">
        		<img src="<?php bloginfo("template_url")?>/img/logo.jpg" alt="">
        		<h3>Awesome!</h3>
        		<p>Thank you for making the payment of the 1st instalment as part of your Registration for the Carolsav Homecoming Concert. Kindly make the payment of the 2nd instalment before 31st of March,2023 to confirm your seats and generate the Concert ticket</p>        
		 		<div class="row">
		  			<div class="col-md-12">
			  			<p>Final Payment</p>
            			<div> <a style=" width: 200px; background-color: #0D1E29; text-align: center; font-weight: 800; padding: 11px 0px; color: white; font-size: 12px; display: inline-block; text-decoration: none; " href='https://pmny.in/CIJdF7DamFyz' > Pay Now </a> </div>					

		 		    </div>
    		    </div>            
		</div>
	</div>
    </div>


    <?php endwhile; endif;?> 
    <?php get_footer();?>