<?php 
/* Template name: Stage1 Registration */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 
						<?php
							  if(isset($_POST["rtype"]) ){
 								  $reg_type     = $_POST["rtype"];
                				  $_SESSION['rtype'] = $reg_type;
								header("Location: https://www.ziondigitalstudio.com/home-coming-live-concert/user-details/"); 
							  }	 
						
							?>
                                  
                                  	  <?php
							    //if (isset($_POST['rtype']) && $_POST['rtype'] == 'group') {
        //  $_SESSION['rtype'] = 'group';
   // } else {
         //$_SESSION['rtype'] = 'indiv';
                       //  }
                                                     
			
							  
							  ?>


	<div class="container">     
   		<div class="row chance">
        	
            <div class="col-md-12 text-left">
            	<h3>Please select your preferred category of registration </h3> 
				<p>
					Individual Registration is for individuals who would like to be part of the Carolsav Homecoming Choir
				</p>
				<p>
Group Registration is for families, groups or choirs who would like to be part of the Carolsav Homecoming Choir. To avail special discounts in this category please contact whatsapp +918921869541 or email carolsavhomecoming2023@gmail.com
				</p>
				<p>
					&nbsp;
				</p>
                     <form method="POST" id="getReg" action="" > 
								   <div class="form-group-1">
									   <span class="wpcf7-form-control-wrap">
										   <div class="row text-center">
											     <div class="col-lg-6 col-12">
											  
												   <b>INDIVIDUAL REGISTRATION</b>	
													 <input type="radio" value="indiv" name="rtype" class="form-control">
										 <div class="row text-left">
											 <p>
												 <strong>Steps for Individual Registration </strong>
											 </p>

<p>1) Complete Polling and Registration online
	
											 </p>

<p>2)Complete the payment online and download your concert registration ticket immediately

	
											 </p>


													 </div>
													  </div>
											 <div class="col-lg-6 col-12">
								<b>GROUP REGISTRATION</b><input type="radio" value="group" name="rtype" class="form-control">
												 <div class="row text-left">
										<p><strong>Steps for Group Registration with discounts </strong></p>

	<p>1) Each member of the group has to poll and register their details in the Group Category . The unique id generated should be saved for all future communication and shared with their group leader.	<p>

	<p>2) Children between the age of 12-15 should sing along and record their audio with their preferred vocal part using the links below<br>

<a href="https://youtube.com/playlist?list=PL59tdxi_x-ZSQ8ObZjyAf3R_Z-Gn7LPoM" target="_blank"><u>Vocal Part Identifier Videos-For Audition</u></a><p>

	<p>The recordings may be shared with our team via whatsapp or email.	<p>

	<p>3) Upon confirmation of the audition the representative of the family | group | choir may fill in all the relevant details of the members, including the children who completed the auditions, in the following form.

		<a href="https://forms.gle/NQ4QZBkxWRxmanm96" target="_blank"><u>Form for group leaders</u></a>	<p>

	<p>4) Our team will revert with the details of the payment after applying the discounts applicable.	<p>

	<p>5) The payment may be transferred to the studio account. (Details given in the downloadable Registration Rates pdf on the home page)	<p>

													 <p>6) Individual Concert tickets will be generated and sent.</p>
													 
<!-- 													  <p><strong>Limited Early Bird Discount for Family/Group and Choir Registration</strong> <br> -->
														   <p><strong>Special Discount for Family/Group and Choir Registration</strong> <br>
													  <strong>20% Discount</strong>:2 - 20Members<br>
										 <strong>25% Discount</strong>:6 -10Members <br>
									  <strong>30% Discount</strong>:21 and above Members<br>
									 <strong>35% Discount</strong>:21 - 50 Members<br>
									 <strong>40% Discount</strong>:51 and above Members<br>

														  <strong>N.B</strong>: These Discount rates will be valid only upto March 31st,2023</p>
												 </div>
									
	
												
											   </div>
										   </div>
										 
						 	
									   </span>
									 <div class="row text-center">   
										  <div class="col-lg-12 col-12 mt-3">
<!-- 								 <p><input type="submit" value="SUBMIT" class="wpcf7-form-control has-spinner wpcf7-submit"></p> -->
											   <p><input type="submit" value="SUBMIT" class="btn  align-center mt-1 mb-4 px-4 py-3"></p>
										 </div>
									   </div>
									   
									   
									   <div class="row">
										    <div class="col-lg-12">
										   <h3>Definitions for the purpose of availing the group discounts </h3>

										   <p><strong>Family </strong>: Father,Mother and Children (Children between 12 to 15 will have to undergo online audition to be part of the concert)</p>

										   <p><strong>Choral Groups </strong> : Collection of individuals who sing and rehearse together under a leader. Should have music audio/video release on social media under their Official Name</p>

										   <p><strong>Choirs </strong> : Church Choirs of any denomination who sing during their worship and are trained regularly under the choir director and should produce an official letter from their vicar/pastor or choir director confirming their membership in the respective choirs)</p>
										   </div>
									   </div>
									   
									   
									   
								 </div>
							 </form>
			</div>
        </div>   
  		
   		
   
    
	</div>
  </div>
 <script type='text/javascript' src="<?php bloginfo("template_url")?>/js/jquery-3.2.1.min.js"></script>        
    <script>
		
		$( document ).ready(function() {
    console.log( "ready!" );
			 $('#homec').addClass("show");
			
			 // $('#getReg').on('submit', function(e){
       // e.preventDefault();
			
		//location.href = "https://www.ziondigitalstudio.com/home-coming-live-concert/";	 
        //$('#homec').removeClass("show");
		//$('div').removeClass("on-submit");
          //});
			
});

	


</script>

    <?php endwhile; endif;?> 
    <?php get_footer();?>