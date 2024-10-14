<?php 
/* Template name: User Details */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 
 <?php                      
		if(isset($_SESSION["rtype"])){
			$r_type = $_SESSION["rtype"];
		}
?>


    <?php
			global $wpdb;
		 	$yemail = $_POST['your-email'];
           //echo  $yemail = $_REQUEST['yemailr'];
     	 	$entryemail = $wpdb->get_results( "SELECT * FROM `wp_cf7_vdata_entry` WHERE value ='$yemail'  AND cf7_id = '34'" );
			//print_r($entryemail);
			$data_id1 =  $entryemail[0]->data_id;    
      		$entryemail1 = $wpdb->get_results( "SELECT * FROM `wp_cf7_vdata_entry` WHERE `data_id` = '$data_id1'" );
			$yname   = $entryemail1[0]->value;
			$yemail  = $entryemail1[1]->value;
			$ynumber = $entryemail1[2]->value;		 
		 ?>
<div class="email_val">This email address is already registered!&nbsp;<b><a href="https://www.ziondigitalstudio.com/home-coming-live-concert/polling/?your-name=<?php echo $yname;?>&your-email=<?php echo $yemail;?>&whatsapp_number=<?php echo $ynumber;?>">Please Click here to VOTE</a></b></div>
	<div class="container">     
   		<div class="row chance">
        	<div class="col-md-5">
               <a href="<?php echo home_url();?>"> <img src="<?php bloginfo("template_url")?>/img/image-2.jpg" alt=""> </a>
            </div>
            <div class="col-md-7 text-left">
            	<h3>Spend a few minutes to select the songs to be presented in one of the most prestigious homecoming concerts ever. By participating in this poll you stand the chance to win exciting prizes too.</h3>   
                 <?php echo do_shortcode('[contact-form-7 id="34" title="User details"]');?>
			</div>
        </div>   
  		
   		
   
    
	</div>
  </div>


    <?php endwhile; endif;?> 
    <?php get_footer();?>