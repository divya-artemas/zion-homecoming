<?php
require_once('../../../wp-load.php');
?>
<?php

global $wpdb;
  
	 
     	 	$squery = $wpdb->get_results( "SELECT * FROM `wp_cf7_vdata_entry` WHERE value ='$user_email'  AND cf7_id = '37'" );
			//print_r($entryemail);
			 $data_id =  $squery[0]->data_id;    
      		$sresult= $wpdb->get_results( "SELECT * FROM `wp_cf7_vdata_entry` WHERE `data_id` = '$data_id'" );
//echo '<pre>';print_r($entryemail1);echo '</pre>';
			
			echo $cid= $sresult[5]->value;	
 
		 ?>
//select count(*) as tot from wpvp_pollboard where find_in_set('Sundara Raathri',song_names) > 0