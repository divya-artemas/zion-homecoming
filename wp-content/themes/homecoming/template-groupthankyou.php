<?php 
/* Template name: Group Thank You  */
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
        		<p>Thank you for successfully completing Stage 1(Polling) and Stage 2(Registration) of the Carolsav Homecoming Concert. Please read the Terms and Conditions</p>  
			
				<p>
					
				<h4> TERMS AND CONDITIONS </h4>
<ul>
<li> 1) Make adequate travel arrangements to arrive well in advance for the onsite rehearsals  scheduled for 26th Dec,2023. </li>
<li> 2) Food,Accomodation and Transportation for the registered participants will be provided.(all charges are inclusive of GST) </li>
<li> 3) Once registered the amount is not refundable or transferable.</li>
<li> 4) Take all possible effort to ensure that the entire Carolsav repertoire selected for the Homecoming Concert is rehearsed well according to the guidelines stipulated by the trainers.</li>
<li> 5) Follow the dress code for the concert. (which will be communicated later)</li>
<li>  6) As this is a homecoming of singers only registered participants and invited guests would be allowed inside the venue..</li>
	
	
</ul> 
				<h3>
					The representative of the family/group/choir may kindly contact +918921869541 (whatsapp) or carolsavhomecoming2023@gmail.com to avail the discounts, make necessary payments and receive the concert tickets.
				</h3>
				 
		 		
    		</div>            
		</div>
	</div>



    <?php endwhile; endif;?> 
    <?php get_footer();?>