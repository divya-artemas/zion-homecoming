<?php 
/* Template name: Payment */
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
        		<p>Thank you for successfully completing Stage 1(Polling) and Stage 2(Registration) of the Carolsav Homecoming Concert. Please read the Terms and Conditions and proceed to make the payment. You may use either of the two options that are available for making the payment of registration charges.</p>  
				<p>
					1) Full Payment : The Concert tickets will be generated immediately upon receipt of the full payment.
				</p>
				<p>
					2) Advance Payment : Payment will be accepted in 2 instalments. The seats will be blocked upon receipt of the 1st instalment (advance payment) but Ticket generation and confirmation will be done only upon receipt of the 2nd instalment before March 31st, 2023.

				</p>
				<p>
					
				<h4> TERMS AND CONDITIONS </h4>
<ul>
<li> 1) Make adequate travel arrangements to arrive well in advance for the onsite rehearsals  scheduled for 26th Dec,2023. </li>
<li> 2) Food,Accomodation and Transportation for the registered participants will be provided.(all charges are inclusive of GST) </li>
<li> 3) Once registered the amount is not refundable or transferable.</li>
<li> 4) Take all possible effort to ensure that the entire Carolsav repertoire selected for the Homecoming Concert is rehearsed well according to the guidelines stipulated by the trainers.</li>
<li> 5) Follow the dress code for the concert. (which will be communicated later)</li>
<li>  6) As this is a homecoming of singers only registered participants and invited guests would be allowed inside the venue.</li>
	
	
</ul> 
				<h3>
					<em>By proceeding to make the payment it is deemed that you have read and agreed to the above terms and conditions</em>
				</h3>
				 
		 		<div class="row pt-5">
		  			<div class="col-md-6 pt-4">
			  			<h4>Advance payment Rs 6250 </h4>
						<p>
							(Block your place in the choir.The 2nd instalment may be paid before 31st,March,2023 to confirm and download your concert ticket)

						</p>
            			<div> <a style=" width: 200px; background-color: #1CA953; text-align: center; font-weight: 800; padding:16px 0px; color: white; font-size: 12px; display: inline-block; text-decoration: none; " href='https://pmny.in/DIKosfSSBeb6' > Pay Now </a> </div>
			
					</div>
		 			<div class="col-md-6 pt-4">
			 			<!--<p>Full Payment</p>          			
						<div> <a style=" width: 200px; background-color: #1CA953; text-align: center; font-weight: 800; padding: 16px 0px; color: white; font-size: 12px; display: inline-block; text-decoration: none; " href='https://pmny.in/9rAnqR1JZBtb' > Pay Now </a> </div>-->
						<h4>Full Payment Rs 10000/- </h4>
						<p>
						Full Payment Rs 12500/- (Awail Early Bird  Discount of 20% to pay Rs 10000/- Only and download your Concert  Ticket immediately)
						</p>
						<div> <a style=" width: 200px; background-color: #1CA953; text-align: center; font-weight: 800; padding: 16px 0px; color: white; font-size: 12px; display: inline-block; text-decoration: none; " href='https://pmny.in/9rAnqR1JZBtb' > Pay Now </a> </div>

					</div>					
				</div>
    		</div>            
		</div>
	</div>



    <?php endwhile; endif;?> 
    <?php get_footer();?>