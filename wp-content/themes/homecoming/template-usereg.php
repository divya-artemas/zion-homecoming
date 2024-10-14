<?php 
/* Template name: User Registration */
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
		if(isset($_SESSION["em"])){
			$user_email = $_SESSION["em"];
		}
       
		
	//echo "User email: " .$_SESSION["em"];
	//echo "User name: " .$_SESSION["nm"];
	//echo "User number: " .$_SESSION["wn"];
	//echo "Customer ID: " .$_SESSION['regcode'];
	?>


	<div class="container">     
   		<div class="row chance">
        	<div class="col-md-12 text-center reg">
                    <h2> Stage 2 - Registration for Choir</h2>
                <p>
					 We are thrilled to bring to life this unprecedented Carolsav Homecoming Concert featuring a  full fledged Orchestra and the best Music Maestros to Conduct the Choral Community. Registration Charges will cover all the resources to gear you for the best choral experience in your life. It will also cover food, travel and accomodation charges for the Rehearsal and Concert (18% G.S.T included)
				</p>  

				<p>If you need help to identify your vocal part/range please use our help videos to do so</p>


                    <div class="row pt-5">
                        <div class="col-md-6">
                            <h4>ALTO</h4>
					   <video width="100%" height="290" controls>
					  <source src="<?php bloginfo("template_url")?>/img/alto.mp4" type="video/mp4"> 
					  Your browser does not support the video tag.
					</video>
							
							<audio class="mt-2 mb-5" controls>
  <source src="<?php bloginfo("template_url")?>/img/alto.wav" type="audio/wav"> 
  Your browser does not support the audio tag.
</audio>
                        </div>
                        <div class="col-md-6">
                            <h4>SOPRANO</h4>
                             <video width="100%" height="290" controls>
					  <source src="<?php bloginfo("template_url")?>/img/soprano.mp4" type="video/mp4"> 
					  Your browser does not support the video tag.
					</video>
														<audio class="mt-2 mb-5" controls>
  <source src="<?php bloginfo("template_url")?>/img/soprano.wav" type="audio/wav"> 
  Your browser does not support the audio tag.
</audio>
                        </div>
                        <div class="col-md-6">
                            <h4>TENOR</h4>
                               <video width="100%" height="290" controls>
					  <source src="<?php bloginfo("template_url")?>/img/tenor.mp4" type="video/mp4"> 
					  Your browser does not support the video tag.
					</video>
														<audio class="mt-2 mb-5" controls>
  <source src="<?php bloginfo("template_url")?>/img/tenor.wav" type="audio/wav"> 
  Your browser does not support the audio tag.
</audio>
                        </div>
                        <div class="col-md-6">
                            <h4>BASS</h4>
                             <video width="100%" height="290" controls>
					  <source src="<?php bloginfo("template_url")?>/img/bass.mp4" type="video/mp4"> 
					  Your browser does not support the video tag.
					</video>
														<audio class="mt-2 mb-5" controls>
  <source src="<?php bloginfo("template_url")?>/img/bass.wav" type="audio/wav"> 
  Your browser does not support the audio tag.
</audio>
                        </div>


                    </div>



                </div>
            <div class="col-md-8 pt-5 mt-5 offset-2 text-left">                        
     			<?php
					global $wpdb;	
					if(isset($_SESSION["em"])){  
     	 				$entryemail = $wpdb->get_results( "SELECT * FROM `wp_cf7_vdata_entry` WHERE value ='$user_email'  AND cf7_id = '37'" ); 
					} 
					else {
                		$user_email      = $_POST["uemail"];
                		$_SESSION['pem'] = $user_email;
                		$entryemail      = $wpdb->get_results( "SELECT * FROM `wp_cf7_vdata_entry` WHERE value ='$user_email'  AND cf7_id = '37'" );				
				 		$total_q         = $wpdb->get_results("SELECT COUNT(*) as tot FROM wp_cf7_vdata_entry WHERE value LIKE '$user_email' AND cf7_id = '34' ");
			 			$totq 			 = $total_q[0]->tot;
						if ($totq == 0 && $user_email!=null ){ 
							echo 'Kindly go through Stage 1(Polling) to proceed to Stage 2(Registration). <a class="btn  align-center mt-1 mb-4 px-4 py-3" href="https://www.ziondigitalstudio.com/home-coming-live-concert/select-participant/"> VOTE NOW</a>' ; 
						  }  
						 	
                        
                        
             // $totalreg= $wpdb->get_results("SELECT COUNT(*) as totc FROM wp_cf7_vdata_entry WHERE value LIKE '$user_email' AND cf7_id = '49' ");
			  //$totr = $totalreg[0]->totc;
             
                        //if ($totr > 0 && $user_email!=null ){                          
							  //echo '<div class="email_sub"><h6>Your registration details have already been submitted.In case your payment was unsuccessful in the previous attempt Please Click here to proceed to the payment page </h6><a href="https://www.ziondigitalstudio.com/home-coming-live-concert/payment/" class="btn  align-center mt-1 mb-4 px-4 py-3"> Pay now</a> </div>'; 
    						?>                              
                                <?php
                           
						  //}
                          
                                      
           				}
			            //print_r($entryemail);
			 			$data_id1        =  $entryemail[0]->data_id;    
      		 			$entryemail1     =  $wpdb->get_results( "SELECT * FROM `wp_cf7_vdata_entry` WHERE `data_id` = '$data_id1'" );
            			//echo '<pre>';print_r($entryemail1);echo '</pre>';			
			 			$customer_ID     =  $entryemail1[5]->value;	
             			$user_fname      =  $entryemail1[0]->value;
             			$user_wnumber    =  $entryemail1[2]->value;
             			$sel_songs       =  $entryemail1[3]->value; 
		      ?>
				
		<!----------------------------------- Rtype group starts here -------------------------------------->		
			<?php if ($r_type == 'group') {?>
				<?php
             		    $total_c         = $wpdb->get_results("SELECT COUNT(*) as totc FROM wp_cf7_vdata_entry WHERE value LIKE '$user_email' AND cf7_id = '37' ");
			            $totc            = $total_c[0]->totc;
	
						$total_cg         = $wpdb->get_results("SELECT COUNT(*) as totcg FROM wp_cf7_vdata_entry WHERE value LIKE '$user_email' AND cf7_id = '101' ");
			            $totcg            = $total_cg[0]->totcg;
						if ($totcg > 0){ 
							echo '<p style="visibility: hidden;">Already Collected Group Info</p>' ; 
							 echo '<div class="email_sub"><h6>Your registration details have already been submitted. Thank you!  </h6><a class="btn  align-center mt-1 mb-4 px-4 py-3" href="https://www.ziondigitalstudio.com/home-coming-live-concert/"> BACK TO HOME</a></div>'; 
						  }  
              				 ?>
				
        
       <?php if ($totc > 0){?> 				
                 <?php echo do_shortcode('[contact-form-7 id="101" title="User Group Registration Form" html_id="contact-groupform"]');?>				
            
             <?php } else { ?>
				<?php
						$total_q1         = $wpdb->get_results("SELECT COUNT(*) as tot FROM wp_cf7_vdata_entry WHERE value LIKE '$user_email' AND cf7_id = '34' ");
			 			$totq1 			 = $total_q1[0]->tot;
						if ($totq1 > 0 && $user_email!=null ){ 
							echo 'Kindly go through Stage 1(Polling) to proceed to Stage 2(Registration). <a class="btn  align-center mt-1 mb-4 px-4 py-3" href="https://www.ziondigitalstudio.com/home-coming-live-concert/select-participant/"> VOTE NOW</a>' ; 
						  }  
						   
						   
						   ?>
                <p>Please enter email id submitted during Stage 1(Polling)</p>
				
                     <form method="POST" id="getEmail" action="" >                     	
						  <div class="form-group">
  							<label for="userEmail">Email Id</label><br>
 							<span class="wpcf7-form-control-wrap">
								<input type="email" name="uemail"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-email form-control" id="uemail">
							 </span>
						</div>
						 <p><input type="submit" value="SUBMIT" class="wpcf7-form-control has-spinner wpcf7-submit"></p>
                     </form>
			
				
                     
     <?php } ?>
				
				<?php } else {?>
		<!----------------------------------- Rtype indiv starts here -------------------------------------->			
		      <?php
             		    $total_c         = $wpdb->get_results("SELECT COUNT(*) as totc FROM wp_cf7_vdata_entry WHERE value LIKE '$user_email' AND cf7_id = '37' ");
			            $totc            = $total_c[0]->totc;
	
						 $totalregi= $wpdb->get_results("SELECT COUNT(*) as totci FROM wp_cf7_vdata_entry WHERE value LIKE '$user_email' AND cf7_id = '49' ");
			  $totri = $totalregi[0]->totci;
             
                        if ($totri > 0){                          
							  echo '<div class="email_sub"><h6>Your registration details have already been submitted.In case your payment was unsuccessful in the previous attempt Please Click here to proceed to the payment page </h6><a href="https://www.ziondigitalstudio.com/home-coming-live-concert/payment/" class="btn  align-center mt-1 mb-4 px-4 py-3"> Pay now</a> </div>'; 
						}
	
	
               ?>
        
       <?php if ($totc > 0){?> 				
                 <?php echo do_shortcode('[contact-form-7 id="49" title="User Registration Form"]');?>				
            
             <?php } else { ?>
				<?php
						$total_q1         = $wpdb->get_results("SELECT COUNT(*) as tot FROM wp_cf7_vdata_entry WHERE value LIKE '$user_email' AND cf7_id = '34' ");
			 			$totq1 			 = $total_q1[0]->tot;
						if ($totq1 > 0 && $user_email!=null ){ 
							echo 'Kindly go through Stage 1(Polling) to proceed to Stage 2(Registration). <a class="btn  align-center mt-1 mb-4 px-4 py-3" href="https://www.ziondigitalstudio.com/home-coming-live-concert/select-participant/"> VOTE NOW</a>' ; 
						  }  
						   
						   
						   ?>
                <p>Please enter email id submitted during Stage 1(Polling)</p>
				
                     <form method="POST" id="getEmail" action="" >                     	
						  <div class="form-group">
  							<label for="userEmail">Email Id</label><br>
 							<span class="wpcf7-form-control-wrap">
								<input type="email" name="uemail"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-email form-control" id="uemail">
							 </span>
						</div>
						 <p><input type="submit" value="SUBMIT" class="wpcf7-form-control has-spinner wpcf7-submit"></p>
                     </form>
			
				
                     
     <?php } ?>
				
				
		
				
				
				
				<?php } ?>
				
<!---------------------- Rtype Indiv ends here ------------------------------------>	
				
				
			</div>
			
			
			
        </div>   
  		
 
           
	</div>
  </div>
       
                     <script type='text/javascript' src="<?php bloginfo("template_url")?>/js/jquery-3.2.1.min.js"></script>
     				  <!--<script>
                        $(document).ready(function () {
                           var reg_name = sessionStorage.getItem("reg_name");
                           var reg_email = sessionStorage.getItem("reg_email");
                           console.log(reg_email);  
                           console.log(reg_name);
                           return false;
                		});
                	  </script>-->
                          
                    
                          
                          <script type="text/javascript">
 							 $(document).ready(function () {
  								$('#full_name').val('<?php echo $user_fname; ?>');
                                $('#user_email').val('<?php echo $user_email; ?>');
                                $('#user_wnumber ').val('<?php echo $user_wnumber; ?>');
                                $('#user_cnumber').val('<?php echo $customer_ID; ?>');
                                $('#sel_songs').val('<?php echo $sel_songs; ?>');
                                
							});
						</script>
                           
                      <script type="text/javascript">
		 					if($("div:contains('Your registration details have already been submitted.In case your payment was unsuccessful in the previous attempt')").length)
                        {
                          
							$("#wpcf7-f49-p46-o1").hide(500);
                        }
						  
						  
						  	if($("div:contains('Already Collected Group Info')").length)
                        {
                          
							$("#contact-groupform").hide(500);
                        }

   
					</script> 
                    
                            
    <?php endwhile; endif;?> 
    <?php get_footer();?>