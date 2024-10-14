<footer>
</footer>
</div> 
<script type='text/javascript' src="<?php bloginfo("template_url")?>/js/jquery-3.2.1.min.js"></script>    
            
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