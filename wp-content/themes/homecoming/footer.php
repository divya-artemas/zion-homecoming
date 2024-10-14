 <?php if(!is_page_template('template-userdetails.php') && !is_page_template('template-usereg.php') && !is_page_template('template-stage1.php')){?>
<div class="container pt-5 mt-5">
	<div class="row">
		<div class="col-md-12">
		<img src="<?php echo get_field("registration_image",63);?>" alt='Zion Digital Studio' class="pb-5"/>
		</div>
	</div>

</div>
<br/><br/><br/><br/>
	<div class="footer">
		<div class="container">
    		<div class="text">
        		<h4>This will be a ‘once in a lifetime’ sonic experience for every chorister. <span> <b>2000</b> singers with a <b>100</b> member Symphony Orchestra!!</span></h4>
		 		<?php if(is_page_template('template-poll.php') || is_page_template('template-thankyou.php')) {?>   
<!-- 					<a class="btn disabled align-center mt-1 mb-4 px-4 py-3" href="<?php //echo home_url();?>/stage2-registration/">REGISTER NOW</a>  -->
				<a class="btn align-center mt-1 mb-4 px-4 py-3" href="<?php echo home_url();?>/select-participant">REGISTER NOW</a> 
					<p>Registration will open on Dec 3</p>
				<?php } else if(is_page_template('template-payment.php')){?>
				
				<?php } else{?>
					<a class="btn align-center mt-1 mb-4 px-4 py-3" href="<?php echo home_url();?>/select-participant">POLL &amp; REGISTER NOW </a> 
					<p>Win exciting prizes!</p>
				<?php } ?>
			
				<?php if(!is_page_template('template-payment.php')){?>
        		<h5>More details will be updated on this website and our social media handles. Stay tuned! <br>
            Looking forward to meeting you all in person next year! 
					<br><br>GSTN: 32DDPPK1662F1ZM
				</h5>
				<?php } ?>
				
		   </div>
        </div>
   </div>

<?php } else{?>
<?php } ?>
</div>

    

<script type='text/javascript' src="<?php bloginfo("template_url")?>/js/jquery-3.2.1.min.js"></script>
 
        
      <script>
   /*
     $(document).ready(function () {

$(".wpcf7-submit").on("click", function (e) {
    e.preventDefault;
      var reg_name = $("#reg_name").val();
      var reg_email = $("#reg_email").val();
      var reg_wnumber = $("#reg_wnumber").val();
   
        sessionStorage.setItem("reg_name", reg_name);
        sessionStorage.setItem("reg_email", reg_email);
        sessionStorage.setItem("reg_wnumber", reg_wnumber);
      
       location.href = "https://www.ziondigitalstudio.com/home-coming-live-concert/polling/";
      
       
        return false; 
    
}); 
});
*/
    </script>           
            
       <!--------------- Limit the checkbox clicks----------------->      
		<script>
         	$(".western :checkbox").click(function() {
   				if($(".western :checkbox:checked").length >= 6) {
        			$(".western :checkbox:not(:checked)").prop("disabled", "disabled");
    			} else {
        			$(".western :checkbox").prop("disabled", "");
    			}
			});

    		$(".indian :checkbox").click(function() {
   				if($(".indian :checkbox:checked").length >= 6) {
        			$(".indian :checkbox:not(:checked)").prop("disabled", "disabled");
    			} else {
        		$(".indian :checkbox").prop("disabled", "");
    			}
			});
         </script>
    
   		 <!---------------- Get all song names into textarea ------------------->
            
         <script>
        	$(document).ready(function() {           
            	$(".get_value").change(function() {        
                
                var insert = [];
                $('.get_value').each(function() {                   
                    if ($(this).is(":checked")) {
                        insert.push($(this).val());
                    }
                });
                insert = insert.toString();            
               $("#song_names").val(insert);            
               //console.log("DONE");               
             }); 
            
        });
    </script>
  
 <script>
     $('.wpcf7-form').submit(function() {
     var tt = $("#song_names").val().split(",").length;
         if(tt==0){ 
                 alert('Please select songs');
             return false;
         }
         else if(tt<12){ 
              alert('Please select 12 songs');
              return false;
         }
         else{
             return true;
         }
});       
</script>
  	  <script>
       /* $(document).ready(function() {
              $("#songs_poll").click(function(event) {
                     event.preventDefault();
                var insert = [];
                $('.get_value').each(function() {
                    if ($(this).is(":checked")) {
                        insert.push($(this).val());
                    }
                });
                insert = insert.toString();
                 var rname = $("#regname").val();
 				 var remail = $("#regemail").val();
 				 var rnumber = $("#regwnumber").val();
                  
                   var template_path = '<?php echo get_stylesheet_directory_uri();?>';                   
            var ajaxurl = template_path+"/PollInsert.php"; 
                $.ajax({
                    url: ajaxurl,
                    method: "POST",
                    data: {
                        insert: insert,
                        rname: rname,
                        remail: remail,
                        rnumber: rnumber
                    },
                    complete: function(data){
        console.log("DONE");
        location.href = 'https://www.ziondigitalstudio.com/home-coming-live-concert/thank-you/';
      }
                  
                });
            });
        }); */
    </script>

                <script>
                var getUrlParameter = function getUrlParameter(sParam) {
                var sPageURL = window.location.search.substring(1),
                    sURLVariables = sPageURL.split('&'),
                    sParameterName,
                    i;

                for (i = 0; i < sURLVariables.length; i++) {
                    sParameterName = sURLVariables[i].split('=');

                    if (sParameterName[0] === sParam) {
                        return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                    }
                }
                return false;
            };

			var cemail = getUrlParameter('your-email');
            $("#cusemail").val(cemail);
       </script>

 <script type="text/javascript">
	 $(document).ready(function(){
		 $(".email_val").hide();
  		const divs = document.getElementsByClassName('wpcf7-not-valid-tip');
		//const divs = document.getElementById('reg_email');
for (let x = 0; x < divs.length; x++) {
    const div = divs[x];
    const content = div.textContent.trim();

    if (content == 'This email address is already registered!') {
		//alert('found');
      // $(".email_val").style.display = 'none';
		$(".email_val").show();
		 }
	else{
		$(".email_val").hide();
	}
}
  
        });
</script> 


<script>

$('.wpcf7-submit').click(function(){
   $('.wpcf7-response-output').toggleClass('spinner');
 	$('body').toggleClass('body-spinner');
 });
</script>
		 
 
    <script>
//   	 const popupTrigger = document.querySelector('.popup-trigger');	
// 		 const popup = document.querySelector('.popup');
// 		 const popupClose = document.querySelector('.popup__close');

		
// popupTrigger.addEventListener('click', (e) => {	   
//    popup.classList.add('show');
//    document.body.style.cssText = `overflow: hidden;`;

// });


// popupClose.addEventListener('click', (e) => {
//   popup.classList.remove('show');
//   document.body.style.cssText = '';
// });

// // close on click on overlay

// popup.addEventListener('click', (e) => {
//   if (e.target === popup) {
//     popup.classList.remove('show');
//     document.body.style.cssText = '';
//   }
// });

// // close on press of escape button

// document.addEventListener('keydown', (e) => {
//     if (e.code === "Escape" && popup.classList.contains('show')) {
//       popup.classList.remove('show');
//       document.body.style.cssText = '';
//     }
//   });


    </script>

<script>

	for(let i = 0; i < 13; i++) {
 		 $('#popen' + i).click( function(){
    //alert('you clicked ' + i);
			 $('#click' + i).addClass("show");
			 
  });
		 $('#pclose' + i).click( function(){
    //alert('you clicked ' + i);
			 $('#click' + i).removeClass("show");
			 
  });
		
}
		


</script>

<?php wp_footer(); ?>
</body>

</html>