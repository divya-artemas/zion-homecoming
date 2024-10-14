<?php 
/* Template name: Concert */
get_header(); 
if (have_posts()): while (have_posts()): the_post(); ?>	
		<div class="email_val">This email address is already registered!&nbsp;<b><a href="https://www.ziondigitalstudio.com/home-coming-live-concert/polling/?your-name=<?php echo $yname;?>&your-email=<?php echo $yemail;?>&whatsapp_number=<?php echo $ynumber;?>">Please Click here to VOTE</a></b></div>
		<div class="container"> 		
			<div class="row chance">
			<?php if (post_password_required()) { 
			echo '<div class="col-md-12">';
			echo get_the_password_form();			
			echo '</div>';
			} else {?>
				<div class="col-md-12 text-left">
					<?php /*** Audio Section Starts ***/?>
					<div class="row pw-section">
						<div class="col-md-12 mb-5 audio_section">
							<?php $audio_sec_title = get_field('audio_section_title');
							if($audio_sec_title):
								echo '<h3>'.$audio_sec_title.'</h3>';
							endif;						
							if (have_rows('concert_audio_set')):?>
								<ul>
									<?php 
										while (have_rows('concert_audio_set')):
										the_row();
										$audio_track = get_sub_field('concert_audio_player');
										$aud_description = get_sub_field('aud_description');
									?>
										<li><audio controls>
											<source src="<?php echo $audio_track;?>" type="audio/mpeg">
											</audio>
											<?php if($aud_description){	?>
											<h3><?php echo $aud_description; ?> </h3>
											<?php } ?>
										</li>									
									<?php endwhile;?> 
								</ul>
							<?php endif;?>						
						</div>
						<?php /*** End Audio Section ***/?>
						<?php /*** video Section Starts ***/?>
						<div class="col-lg-12 col-md-12 mb-5 video_section">
							<?php $video_sec_title = get_field('video_section_title');
							if($video_sec_title):
								echo '<h3>'.$video_sec_title.'</h3>';
							endif;		
							if (have_rows('concert_video_set')):?>						 
								<ul>
									<?php while (have_rows('concert_video_set')):
										the_row();
										$video_track = get_sub_field('video_iframe');
										$video_content = get_sub_field('video_description');
										?>
										<li><?php echo $video_track;?> 
										<?php if($video_content):
										echo '<h3>'.$video_content.'</h3>';
										endif;?>
										</li>															
									<?php endwhile;?> 
								</ul>
							<?php endif;?>						
						</div>
						<?php /*** End Video Section ***/?>
						<?php /*** PDF Section Starts ***/?>
						<div class="col-md-12 mb-5 pdf_section">
							<?php $pdf_sec_title = get_field('pdf_section_title');
							if($pdf_sec_title):
								echo '<h3>'.$pdf_sec_title.'</h3>';
							endif;		
							if (have_rows('concert_pdf_set')):?>
								<ul>
									<?php while (have_rows('concert_pdf_set')):
										the_row();
										$pdf_title = get_sub_field('concert_pdf_title');
										$pdf_file = get_sub_field('concert_pdf_file');
										if( $pdf_file ): ?>
											<li><span><?php echo $pdf_title;?></span><br><a class="btn" href="<?php the_sub_field('concert_pdf_file'); ?>" target="_blank">Download File</a></li>
										<?php endif; ?>			
									<?php endwhile;?> 
								</ul>
							<?php endif;?>						
						</div>
						<?php /*** End PDF Section ***/
						/*** Start Description Section ***/
						if (have_rows('description_section')):
							while (have_rows('description_section')):
								the_row();
								$content_title = get_sub_field('description_title');
								$desc_content = get_sub_field('description_content');
								?>
								<div class="col-md-12 mb-5 des_section">
									<?php if($content_title):
										echo '<h3>'.$content_title.'</h3>';
									endif;
									if($desc_content):
										echo $desc_content;
									endif;?>
								</div>
							<?php endwhile; endif;?>
							<?php /*** End Description Section ***/?>						
						</div>
					</div>
					<?php }?>
				</div>
			</div>
<?php endwhile; endif;?> 
<?php get_footer('concert');?>