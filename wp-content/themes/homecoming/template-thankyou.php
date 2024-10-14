<?php 
/* Template name: Thank You */
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
        <p>Thank you for spending your valuable time to be part of Stage 1 of the Carolsav Homecoming Concert. Please note the timeline with the important dates leading to the concert. Stay tuned for more updates regarding Prize winners announcement and other details.</p>
		<!--<a href="<?php echo home_url();?>/user-account/">Please download your ticket</a>-->
    </div>
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