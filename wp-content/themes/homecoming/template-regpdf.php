<?php 
/* Template name: Registration Result */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 

     <div class="container">
<?php 
		 
		   $q1 = $wpdb->get_results( "SELECT value, COUNT(value) FROM wp_cf7_vdata_entry WHERE name = 'customer_unique_id' AND cf7_id = '49' GROUP BY value HAVING COUNT(value) > 1;" );
		
		 
		  
		 	echo '<pre>'; print_r($q1);	echo '</pre>';
		 
		 
		 
		  $q2 = $wpdb->get_results( "SELECT value, COUNT(value) FROM wp_cf7_vdata_entry WHERE name = 'customer_unique_id' AND cf7_id = '101' GROUP BY value HAVING COUNT(value) > 1;" );
		 echo '<pre>'; print_r($q2);	echo '</pre>';
		 
		 
		   $q3 = $wpdb->get_results( "SELECT value, COUNT(value) FROM wp_cf7_vdata_entry WHERE name = 'customer_unique_id' AND cf7_id = '37' GROUP BY value HAVING COUNT(value) > 1;" );
		  echo '<pre>'; print_r($q3);	echo '</pre>';
		   ?>
<div class="block-three row text-center">
    <div class="col-md-12 text-center">
        <img src="<?php bloginfo("template_url")?>/img/logo.jpg" alt="">
    </div>
    <div class="col-md-6 d-flex justify-content-center align-content-center align-items-center ">
        <h2><span>The carolsav</span> REPERTOIRE</h2>
    </div>   
</div>
<div class="row d-flex justify-content-around  polling-form my-5">
	<!---------- Category Count starts here --------------------------->
	<div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <h4 align="center">Seat Details</h4>				
            </div>
        </div>
      <p>&nbsp;</p>
       <table style="width: 1200px; border: 1px solid #c21f26; text-align: center; background: #f5f2eb;border-collapse:collapse;border-spacing:0;">
       <tr>
		   <th>SN</th>
		   <th>Category</th>     
		   <th>Count</th>
       </tr>
		
       <tr>
		   <td>1</td>
		   <td>Bass</td>
		   <?php 
		   	$entryb = $wpdb->get_results( "SELECT COUNT(*) as totalba FROM wp_cf7_vdata_entry WHERE value LIKE 'Bass' AND cf7_id = '49'" );
		 	$totalba = $entryb[0]->totalba;
		   ?>
	   		<td><?php  echo $totalba; ?>/450
		    <?php		 
		    	$percentage = round(($totalba / 450) * 100);	   
			   if($percentage >= 60){
				   $pclass = "bg-warning";
			   }
			   elseif($percentage >= 85){
					$pclass = "bg-danger";
			   }
			   else{
					$pclass = "bg-success";
			   }
		   	?>
		    <div class="progress">
    			<div class="progress-bar <?php echo $pclass;?>" role="progressbar" aria-valuenow="<?php echo $percentage;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percentage;?>%">
      				<?php echo $percentage;?>% 
    			</div>
		   	</div>
				
		   </td>
      	</tr>

      	<tr>
		   <td>2</td>
		   <td>Soprano</td>
			<?php 
		  		$entrys = $wpdb->get_results( "SELECT COUNT(*) as totalso FROM wp_cf7_vdata_entry WHERE value LIKE 'Soprano' AND cf7_id = '49'" );
		 		$totalso = $entrys[0]->totalso;
		   	?>
	  		<td><?php  echo $totalso; ?>/650
			<?php		 
				$percentage = round(($totalso / 650) * 100);
				if($percentage >= 60){
				   $pclass = "bg-warning";
			   }
			   elseif($percentage >= 85){
					$pclass = "bg-danger";
			   }
			   else{
					$pclass = "bg-success";
			   }
		   ?>	  
		      <div class="progress">
    			<div class="progress-bar <?php echo $pclass;?>" role="progressbar" aria-valuenow="<?php echo $percentage;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percentage;?>%">
      				<?php echo $percentage;?>% 
    			</div>
		   	 </div>
		</td> 
      </tr>
	  <tr>
       <td>3</td>
       <td>Alto</td>
		<?php
			$entrya = $wpdb->get_results( "SELECT COUNT(*) as totalal FROM wp_cf7_vdata_entry WHERE value LIKE 'Alto' AND cf7_id = '49'" );
		 	$totalal = $entrya[0]->totalal;
 
		?>
	   <td><?php  echo $totalal; ?>/450
	   <?php		 
		    $percentage = round(($totalal / 450) * 100);
		    if($percentage >= 60){
			   $pclass = "bg-warning";
		   }
		   elseif($percentage >= 85){
			    $pclass = "bg-danger";
		   }
		   else{
			    $pclass = "bg-success";
		   }
		?>
		<div class="progress">
    		<div class="progress-bar <?php echo $pclass;?>" role="progressbar" aria-valuenow="<?php echo $percentage;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percentage;?>%">
      			<?php echo $percentage;?>% 
    		</div>
		</div> 
		</td> 
   	</tr>
	<tr>
       <td>4</td>
       <td>Tenor</td>
	   <?php		  
			$entryt = $wpdb->get_results( "SELECT COUNT(*) as totalte FROM wp_cf7_vdata_entry WHERE value LIKE 'Tenor' AND cf7_id = '49'" );
		    $totalte = $entryt[0]->totalte;
		?>
	   <td><?php  echo $totalte; ?>/450 
	   <?php
		   //$percentage = floor(($totalte / 450) * 100);
		    $percentage = round(($totalte / 450) * 100);
		    if($percentage >= 60){
			   $pclass = "bg-warning";
		   }
		   elseif($percentage >= 85){
			    $pclass = "bg-danger";
		   }
		   else{
			    $pclass = "bg-success";
		   }
		?>
		<div class="progress">
    		<div class="progress-bar <?php echo $pclass;?>" role="progressbar" aria-valuenow="<?php echo $percentage;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percentage;?>%">
      			<?php echo $percentage;?>% 
    		</div>
  		</div>
	</td> 
    </tr>
   </table>
   <p>&nbsp;</p>
</div>

	<!-----------Category Count ends here ----------------------------->
	

<div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <h4 align="center">Registration Details</h4>				
            </div>
        </div>
      <p>&nbsp;</p>
       <table style="width: 1200px; border: 1px solid #c21f26; text-align: center; background: #f5f2eb;border-collapse:collapse;border-spacing:0;">
       <tr>
       <th>SN</th>
<!--        <th>Name</th> -->
		   <th>Email ID</th>
     
       <th>PDF</th>
       </tr>
		 <?php
            //$results= $wpdb->get_results("SELECT * FROM wp_cf7_vdata_entry WHERE cf7_id = '49' GROUP BY data_id ");
			 $results= $wpdb->get_results("SELECT * FROM wp_cf7_vdata_entry WHERE cf7_id = '49' && name = 'user-email' GROUP BY data_id ");
			//echo '<pre>'; print_r($results); echo '</pre>';

$i=1;
			 foreach( $results as $result ) {             
           
              ?>
       <tr>
       <td><?php echo $i;?></td>
       <td> <?php echo $result->value; ?></td>

	   <td> 
		   <?php 
            	$user_email  = $result->value;
  				$email_re    = str_replace("@","",$user_email);
				$email_final = str_replace(".","-",$email_re);

			
                $extension = 'pdf';
                $uploads = wp_upload_dir();

                $files = new \FilesystemIterator( 
                $uploads['path'],
                \FilesystemIterator::SKIP_DOTS 
                | \FilesystemIterator::FOLLOW_SYMLINKS
            );

				$html = [];
            	foreach ( $files as $pdf )
            	{
                	/** @noinspection PhpIncludeInspection */
                   if ( 
                    ! $files->isDir() 
                    && $extension === $files->getExtension()
                	)
                   $html[] = $files->getRealPath();
            	}
     			
		
				foreach ($html as $data) {
        			if (strpos($data, $email_final) !== FALSE) {
            			$found = $data;
            			break;
                    }
       			}
				//echo $found;
		             
      			$path = explode('/', $found);
      			unset($path[1],$path[2],$path[3],$path[4]);
      			$path = implode('/', $path); 
				 ?>
				<a href="<?php echo home_url();?><?php echo $path;?>" target="_blank" class="btn align-center mt-1">View ticket</a>
		   </td> 
       </tr>
	  <?php $i++; } ?>
 	</table>
   </div>

</div>
</div>
   

                

    <?php endwhile; endif;?> 
    <?php get_footer();?>