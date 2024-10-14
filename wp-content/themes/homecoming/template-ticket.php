<?php 
/* Template name: Ticket */
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

 if( (!isset($_SESSION['em'])) && (!isset($_SESSION['pem'])) ){
          
      $user_email = $_POST["gstemail"];
         }
  // echo "User email: " .$_SESSION["pem"];
 // echo "User email: " .$user_email;
     ?>

    <div class="container">
		<div class="row chance">
   			<div class="col-md-12 text-center">
        		<img src="<?php bloginfo("template_url")?>/img/logo.jpg" alt="">
        		<h3>Awesome!</h3>
        		<p>Congratulations! You are now officially part of the 2000 member choir of the Carolsav Home coming Concert 2023.</p>
			    <p>We express our sincere gratitude to you for choosing to be part of this unprecedented Concert. Here, begins our journey of learning  together and earnestly preparing, which will eventually culminate in an ethereal experience of singing together supported by a 100 member strong orchestra.</p>
  			 </div>
             
                    
                      <?php if(!isset($user_email)){?>
                          
<!--                 <p>Please enter your registered Email ID</p>           -->
               <form method="POST" id="getEmail" action="">
                     	<div class="form-group">
  							<label for="gstemail">Confirm your email id to download the Concert Ticket</label><br>
							<span class="wpcf7-form-control-wrap">
                  				<input type="email" name="gstemail" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email form-control" id="uemail">
							</span>
						</div>
                     	<p><input type="submit" value="SUBMIT" class="wpcf7-form-control has-spinner wpcf7-submit"></p>
                </form>
                 <?php } else{ ?>
                    
                    
         	<?php 
            	//$email_data  = 'divya@artemasdigital.com';
  				$email_re    = str_replace("@","",$user_email);
				$email_final = str_replace(".","-",$email_re);

			 ?>
       		<?php
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
     			// echo "<pre>"; print_r($html); echo "</pre>";
				//echo $html[0];

				//$result = preg_grep('/.*divyaartemasdigital-com.*/', $html);
				//print_r($result);
           	?>
               
           <?php
				foreach ($html as $data) {
        			if (strpos($data, $email_final) !== FALSE) {
            			$found = $data;
            			break;
                    }
       			}
				//echo $found;
			?>
                
            <?php               
      			$path = explode('/', $found);
      			unset($path[1],$path[2],$path[3],$path[4]);
      			$path = implode('/', $path);                
             ?>
                 
                   <?php
             $totalc= $wpdb->get_results("SELECT COUNT(*) as totc FROM wp_cf7_vdata_entry WHERE value LIKE '$user_email' AND cf7_id = '49' ");
			  $totc = $totalc[0]->totc;
         ?>     
             <?php if ($totc > 0 && $user_email!=null){?>
                  <p><a href="<?php echo home_url();?><?php echo $path;?>" target="_blank" class="btn align-center mt-1 mb-4 px-4 py-3">Download your ticket</a></p>
                 <?php } else{?>
                 <p>Not found! Please <a href="<?php echo home_url();?>/select-participant">register here </a></p> 
                 <?php } ?>
                 
                 
     		
           
           <?php } ?>     
                 
		</div>
	</div>
	<div class="time-line">
		<div class="container py-2 mt-4 mb-4">
   			<div class="row">
        		<div class="col-md-12 text-center">
                    <h2>Carolsav Homecoming Concert Timeline</h2>
                    <h3>Various stages leading to the concert</h3>
        		</div>
  		  </div>

    <!-- timeline item 1 -->
    <div class="row no-gutters">
        <div class="col-sm">
            <!--spacer-->
        </div>
        <!-- timeline item 1 center dot -->
        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                <span class="badge badge-pill bg-light border">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <!-- timeline item 1 event content -->
        <div class="col-sm py-2">
            <div class="card">
                <div class="card-body">
                    <div class="float-right text-muted small">STAGE 1</div>
                    <h4 class="card-title">2022 Nov 5th - 2023 May 31st</h4>
                    <p class="card-text">Polling to select the Concert Repertoire</p>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
    <!-- timeline item 2 -->
    <div class="row no-gutters">
        <div class="col-sm py-2">
            <div class="card">
                <div class="card-body">
                    <div class="float-right small">STAGE 2</div>
                    <h4 class="card-title">2022 Dec 3rd - 2023 May 31</h4>
                    <p class="card-text"> Registration for Choir </p>
                </div>
            </div>
        </div>
        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                <span class="badge badge-pill bg-light border">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col-sm">
            <!--spacer-->
        </div>
    </div>
    <!--/row-->
    <!-- timeline item 3 -->
    <div class="row no-gutters">
        <div class="col-sm">
            <!--spacer-->
        </div>
        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                <span class="badge badge-pill bg-light border">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col-sm py-2">
            <div class="card">
                <div class="card-body">
                    <div class="float-right text-muted small">STAGE 3</div>
                    <h4 class="card-title">2023 June 1 - Nov 30</h4>
                    <p>Online Rehearsals</p>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
    <!-- timeline item 4 -->
    <div class="row no-gutters">
        <div class="col-sm py-2">
            <div class="card">
                <div class="card-body">
                    <div class="float-right text-muted small">STAGE 4 </div>
                    <h4 class="card-title">2023 Dec 26 </h4>
                    <p>On-site Rehearsal with the Orchestra</p>
                </div>
            </div>
        </div>
        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                <span class="badge badge-pill bg-light border">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col-sm">
            <!--spacer-->
        </div>
    </div>
    <!--/row-->
    <!-- timeline item 5 -->
    <div class="row no-gutters">
        <div class="col-sm">
            <!--spacer-->
        </div>
        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2">
                <span class="badge badge-pill bg-light border">&nbsp;</span>
            </h5>
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col-sm py-2">
            <div class="card">
                <div class="card-body">
                    <div class="float-right text-muted small">STAGE 5</div>
                    <h4 class="card-title">2023 Dec 27</h4>
                    <p> Final Rehearsal and Concert</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="time-line">
<div class="container py-2 mt-4 mb-4">
	<h3 class="pb-3">
		Please check out all the exciting Carolsav releases, free Music Scores, SATB tutorials, Karaoke Tracks and Videos
	</h3>
	<a target="_blank" href="https://www.ziondigitalstudio.com/malayalam-carolsav/" class="btn mr-3 p-3">Carolsav Malayalam</a>
	<a target="_blank" href="https://www.ziondigitalstudio.com/tamil-carolsav/" class="btn  mr-3  p-3">Carolsav Tamil</a>
	<a target="_blank" href="https://www.ziondigitalstudio.com/carolsav-club/" class="btn  mr-3  p-3">Carolsav Club Membership</a>

	</div></div>
			
            
            
    <?php endwhile; endif;?> 
    <?php get_footer();?>