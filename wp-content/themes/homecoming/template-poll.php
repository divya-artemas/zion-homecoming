<?php 
/* Template name: Poll */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 
 <?php                      
		if(isset($_SESSION["rtype"])){
			$r_type = $_SESSION["rtype"];
		}
?>
     <div class="container">

<div class="block-three row text-center">
    <div class="col-md-12 text-center">
        <img src="<?php bloginfo("template_url")?>/img/logo.jpg" alt="">
    </div>
    <div class="col-md-6 d-flex justify-content-center align-content-center align-items-center ">
        <h2><span>The carolsav</span> REPERTOIRE</h2>
    </div>
    <div class="col-md-6 px-5 py-5  text-left">
 

<p> We invite all our dear friends, across the globe, to cast your votes to select the repertoire for the Carolsav Homecoming Live Concert-2023 </p>

<p>Listen to all of your favorite Carolsav songs! <b>Select 6 Indian</b> and <b>6 Western</b> Category songs to include in the Homecoming Concert. Win exciting prizes!
		</p>
<p>
	<b>By participating in this poll you stand to win the following prizes</b>
		</p>

		<p>1) A Bumper prize of Rs 10000/- (Winner will be announced on 30/06/2023) </p>

		<p> 2) 2 VIP Box concert tickets (Winners will be announced on the 5th of every month till the Polling is closed on 31/05/2023) </p>
		
		<p>
			<em>N.B Please note the Unique customer id that you receive in your email. The lucky prize winners will require that customer id to be verified to redeem the prizes</em>
		</p>
    </div>
</div>
<div class="row d-flex justify-content-around  polling-form my-5">
       <?php 
			$url= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$parts = parse_url($url);
			parse_str($parts['query'], $query);
			$your_email =  $query['your-email'];
		?>
      <?php if($your_email!=""){?>
    	<?php
             $total_c= $wpdb->get_results("SELECT COUNT(*) as totc FROM wp_cf7_vdata_entry WHERE value LIKE '$your_email' AND cf7_id = '37' ");
			 $totc = $total_c[0]->totc;
         ?>
         <?php if($totc >= 2){?>
          		<h6>Your vote has already been recorded during your previous attempt. Thank you! Please proceed with stage 2 </h6>	

	<a class="btn  align-left mt-1 mb-4 px-4 py-3" href="<?php echo home_url();?>/stage2-registration"> Registration for Choir</a>
		 <?php } else {?>
    <div class="col-md-5 indian">
        <div class="row">
            <div class="col-md-12">
                <h4>Indian Category</h4>
				<span>
					(M) Malayalam&nbsp;&nbsp;(T) Tamil 
				</span>	
            </div>
        </div>
        <div class="row mt-5 pb-5 set">
<?php

        //session_start();
                       //$customregcode = $_GET['custom-reg-code'];

                       //$_SESSION['em'] = $your_email;
                        //$_SESSION['regcode'] = $customregcode;
                       
                       
                       //if(isset($_SESSION["em"])){
//$user_id = $_SESSION["em"];
//}

//echo "User email: " .$_SESSION["em"];
                     


?>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>1</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Aadhyanthaheenan" value="Aadhyanthaheenan" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
            <?php
            $ss= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Aadhyanthaheenan',value) > 0");
        ?>

                    <div class="col-md-4 mt-2 text-right"><b>&#10084; <?php echo $ss[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3>Aadhyanthaheenan (M)</h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/3MQOuubkhOLcEQvJOkCSFK?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3>Aathianthamilla (T)</h3>
                      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/5tdLFRCVzK3pj5UDRJX6vj?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>2</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Immanuel_Jaathanai" value="Immanuel Jaathanai" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
             <?php
            $ss1= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Immanuel Jaathanai',value) > 0");

        ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ss1[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Immanuel Jaathanai (M)</h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/6OS68uspp6vZuXMsMTO90b?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3> Immanuel Paalani (T)</h3>
                      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/0EpI4T0OuuQ05og4e5SaET?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

        </div>


        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>3</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Aahlaadha_Punchiri" value="Aahlaadha Punchiri" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
           <?php
                $ss2= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Aahlaadha Punchiri',value) > 0");
           ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ss2[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Aahlaadha Punchiri (M)</h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/7qVZlrZImhdV1weLLq4jHn?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3> Aahaayam Punnahai Malarum (T) </h3>
                      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/1e8944Ay3FmkDEFbvKgIkE?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

        </div>


        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>4</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Arunima_Nirayum" value="Arunima Nirayum" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
                <?php
                $ss3= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Arunima Nirayum',value) > 0");
           ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ss3[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Arunima Nirayum (M)</h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/3TDMOLwB5Armb48OshvjHQ?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3> Nadunisi Vaanam (T) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/7z46hxfMLKWQYEBB1IevsI?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>5</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Bethlehem_Ephraatha" value="Bethlehem Ephraatha" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
                <?php
                $ss4= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Bethlehem Ephraatha',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ss4[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Bethlehem Ephraatha (M) </h3>
                      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/36Y82YQGsxGSwRRsOo42Ze?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3> Bethlehem Eppraathaa (T) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/5GhYI1yMWx2vXUDRvABDUn?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>6</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="MookamaamRaaviloru_Ulsavamelam" value="Mookamaam Raaviloru Ulsavamelam" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
                    <?php
                $ss5= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Mookamaam Raaviloru Ulsavamelam',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ss5[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Mookamaam Raaviloru Ulsavamelam (M) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/7pwgQX9dz3aCYn4xypE34w?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3> Mownitha Raavil (T) </h3>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/3PuyW21oATZLdi9JLAJnuF?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>7</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Ambilimuttam" value="Ambilimuttam" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
                      <?php
                $ss6= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Ambilimuttam',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ss6[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Ambilimuttam (M) </h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/1bbOFznhME1wUdtZuT7Ie3?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3> Vinnin (T) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/3OmAu71zEhHyos16Ol9C20?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>8</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Vidarunnu" value="Vidarunnu" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
                    <?php
                $ss7= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Vidarunnu',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084;  <?php echo $ss7[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Vidarunnu (M) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/2VnuYE2ipWZCGySINVEEz5?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

                    </div>

                    <div class="col-md-12">
                        <h3> Uthikkirathu (T) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/7p2kaHLLgyivTzEKSfWzs0?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>9</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Aaghosham" value="Aaghosham" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
                     <?php
                $ss8= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Aaghosham',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084;  <?php echo $ss8[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Aaghosham (M)</h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/5g0QaiJnHnOag9A1tx0FF1?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3> Kondaattam (T) </h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/4BF6LD2aOlNDazkntkS0PT?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>10</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Puthiyoru_Gaanam" value="Puthiyoru Gaanam" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
                     <?php
                $ss9= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Puthiyoru Gaanam',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ss9[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Puthiyoru Gaanam (M)</h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/3jay2udccGqszm7bfkt5Y9?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3> Puthiyoru Paadal (T) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/17dqR62vvckhNLa1p5rZEu?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>11</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="DooreOru_Thaarakam" value="Doore Oru Thaarakam" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
                      <?php
                $ss10= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Doore Oru Thaarakam',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ss10[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Doore Oru Thaarakam (M) </h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/7386VB4m1vOy0xJQk1kt1J?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3> Tholaivil Oru Natchathram (T)</h3>
                      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/4ih5RS7NDtzNT0rj2Ri8jh?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>12</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Kaalam_Randai" value="Kaalam Randai" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
                    <?php
                $ss11= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Kaalam Randai',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ss11[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Kaalam Randai (M)</h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/1dyJzhYoga6XpzLXB8RCIp?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3> Kaalam Randai (T) </h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/6t7qTvnt2PhPnToy5MHE4H?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>13</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Maruvinu_Mazhayai" value="Maruvinu Mazhayai" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
                     <?php
                $ss12= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Maruvinu Mazhayai',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ss12[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Maruvinu Mazhayai (M)</h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/5xIhmQvaVfNQgFoVGfKGVV?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3> Mannin Mazhayai (T) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/3lvLT88wN9kWA7wMQJDQpk?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>14</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Vismayam_Poondu" value="Vismayam Poondu" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
                       <?php
                $ss13= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Vismayam Poondu',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ss13[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Vismayam Poondu (M) </h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/3vtuJuSX6gPgTyoBggN1MO?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3> Aacharyam Nirainthu (T) </h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/5xXeW0iSrESfc8GsExPy54?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>15</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Santhosha_Sudinamitha" value="Santhosha Sudinamitha" class="get_value" id="set_one"> <strong>Vote this song</strong>

                    </div>
                <?php
                $ss14= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Santhosha Sudinamitha',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ss14[0]->tot;?></b></div>

                    <div class="col-md-12">
                        <h3> Santhosha Sudinamitha (M) </h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/1RZBmLXvcsH6jO2WAQ4Ct2?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-12">
                        <h3> Santhosha Subathinam (T) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/4g5dKuc5gK6ZY98ggEjdP7?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="col-md-5 western">

        <div class="row">
            <div class="col-md-12">
                <h4>Western Category </h4>
				<span>
					(M) Malayalam &nbsp;&nbsp;(T) Tamil 
				</span>	
            </div>
        </div>
        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>1</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="PirannuEl_Elyon" value="Pirannu El Elyon" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                    <?php
                $ssw1= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Pirannu El Elyon',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ssw1[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Pirannu El Elyon (M)</h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/3MbuXhmPSsk0LrP109Gg2G?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-12">
                        <h3> Piranthaar El ELyon (T)</h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/3Kc2ml3GURDj8WeNnzu5vq?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>2</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Ramaneeyam" value="Ramaneeyam" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                     <?php
                $ssw2= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Ramaneeyam',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ssw2[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Ramaneeyam (M)</h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/5OeKMagltpcfgGbQdIf4bJ?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-12">
                        <h3> Yezhil Pongum (T) </h3>
                      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/1l65NDxhCZyeDkKFDK2qYB?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>3</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="DivyaManohara_Thaaram" value="Divya Manohara Thaaram" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                     <?php
                $ssw3= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Divya Manohara Thaaram',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ssw3[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Divya Manohara Thaaram (M) </h3>
                      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/5LGI0BFh21XToUtGl4BHVf?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-12">
                        <h3> Thivya Alahu Natchathram (T) </h3>
                      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/5B9sR3FcM0DP7YDKbJhLRf?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>4</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Mahonnathan_Jaathanai" value="Mahonnathan Jaathanai" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                     <?php
                $ssw4= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Mahonnathan Jaathanai',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ssw4[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Mahonnathan Jaathanai (M) </h3>
                      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/2X2Hj9vLF5D716hEYEpcis?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-12">
                        <h3> Thaeva Paalan Jenmithaar (T) </h3>
                      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/7uYE0GsWgc6yabaZWSnRvE?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>5</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Vaathaayanangal_Thurakku" value="Vaathaayanangal Thurakku" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                     <?php
                $ssw5= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Vaathaayanangal Thurakku',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ssw5[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3>Vaathaayanangal Thurakku (M)</h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/0RcWmbZzMAWASZNf9e0jyt?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-12">
                        <h3>Vaayirkkathavu Thiranthu (T)</h3>
                      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/5iufHgTSTf1JklzNnVSsqh?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>6</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Snehapithaavin_Krupaasanathinkal" value="Snehapithaavin Krupaasanathinkal" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                     <?php
                $ssw6= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Snehapithaavin Krupaasanathinkal',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ssw6[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Snehapithaavin Krupaasanathinkal (M)</h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/4ueMCfiQq5ka3150bXxCQr?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

                    </div>
                    <div class="col-md-12">
                        <h3> Snehapithaavin Kirubhaasanathundai (T)</h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/7xLxJTsRh5BDTKYEro6dZ5?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>7</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Mahaathbhutham" value="Mahaathbhutham" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                      <?php
                $ssw7= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Mahaathbhutham',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ssw7[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Mahaathbhutham (M) </h3>
                      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/19fG66ktr8fyxviRoplGZT?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-12">
                        <h3> Mahaarpputham (T) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/4Ulyzfmstlph9ZEAFDfR79?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>8</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Unnathangalil" value="Unnathangalil" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                       <?php
                $ssw8= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Unnathangalil',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ssw8[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Unnathangalil (M) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/3pPIqYhmauZIxxo9TvMPWX?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-12">
                        <h3> Unnathathile (T) </h3>
                     <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/3CTVlUiTom1O6FuQaUyAuS?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>9</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Nal_Idayan" value="Nal Idayan" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                     <?php
                $ssw9= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Nal Idayan',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ssw9[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Nal Idayan (M) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/0JCYyS7iP3mvm8LLZFYFSx?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-12">
                        <h3> Nal Meippar (T) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/1ApToYnSqpJUUGxT69aTl9?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>10</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Orukkidaam" value="Orukkidaam" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                    <?php
                $ssw10= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Orukkidaam',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ssw10[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Orukkidaam (M) </h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/1qhJuZNbBYWmbb9jDGWxg0?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-12">
                        <h3> Sevvai Seivom (T) </h3>
                      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/4e0HAGITLXfC1DNi5hEr41?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>11</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Manimedayumilla" value="Manimedayumilla" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                    <?php
                $ssw11= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Manimedayumilla',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ssw11[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Manimedayumilla (M) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/7pL63c5sB1vgH76ainshw9?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-12">
                        <h3> Manimedayumillai (T) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/5mcMGWQFRGfXj1WXgwdEIn?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>12</b></div>
                    <div class="col-md-7 mt-2"> <input type="checkbox" name="Sathyavelicham" value="Sathyavelicham" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                      <?php
                $ssw12= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Sathyavelicham',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ssw12[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Sathyavelicham (M) </h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/0w6dS12fJJ1XdmkH9NH5RQ?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-12">
                        <h3> Sathyavelicham (T) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/04ofJGB4UNfZ4VpIjiqgdS?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>13</b></div>
                    <div class="col-md-7 mt-2"><input type="checkbox" name="Anantha_Snehathin" value="Anantha Snehathin" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                     <?php
                $ssw13= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Anantha Snehathin',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084; <?php echo $ssw13[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Anantha Snehathin (M) </h3>
                     <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/4eNR4T6WPNl5XxkATXAqjZ?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-12">
                        <h3> Anaathi Snehathin (T) </h3>
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/3fdA9rGdQXVvcVUdDYrfVC?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>14</b></div>
                    <div class="col-md-7 mt-2"><input type="checkbox" name="Rakshakan_Jaathanai" value="Rakshakan Jaathanai" class="get_value" id="set_two"><strong>Vote this song</strong>
                    </div>
                     <?php
                $ssw14= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Rakshakan Jaathanai',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084;  <?php echo $ssw14[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Rakshakan Jaathanai (M) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/17Ws3iTFb2pzAT8hO7xbuw?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-12">
                        <h3> Amaithiyaam Kulir (T) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/2n2wXKqNk8iBcEAzqvwgzx?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-5 set">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1"><b>15</b></div>
                    <div class="col-md-7 mt-2"><input type="checkbox" name="Sundara_Raathri" value="Sundara Raathri" class="get_value" id="set_two"> <strong>Vote this song</strong>
                    </div>
                      <?php
                $ssw15= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Rakshakan Jaathanai',value) > 0");
                ?>
                    <div class="col-md-4 text-right"><b>&#10084;  <?php echo $ssw15[0]->tot;?></b></div>
                    <div class="col-md-12">
                        <h3> Sundara Raathri (M) </h3>
                       <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/2A3hs9HwrJUA0Q67JJIdo9?utm_source=generator&theme=0" width="100%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
   <?php /*   
<input type="hidden" id="regname" name="regname">
    <input type="hidden" id="regemail" name="regemail">
    <input type="hidden" id="regwnumber" name="regwnumber"> 
    
            
    <div class="col-md-12 text-center"> <a class="btn align-center mt-5 mb-4 px-4 py-3" href="#" id="songs_poll">SUBMIT INFORMATION</a> </div>
*/ ?>

          
           

            <?php echo do_shortcode('[contact-form-7 id="37" title="poll register"]');?>   
                
                
                <?php
              

     // session_start();
                        $customregcode = $_REQUEST['custom-reg-code'];
						$your_name = $_GET['your-name'];
                        $whatsapp_number = $_GET['whatsapp_number'];
                       
                       
                       $_SESSION['em'] = $your_email;
                       $_SESSION['regcode'] = $customregcode;
                       $_SESSION['nm'] = $your_name;
                       $_SESSION['wn'] = $whatsapp_number;
                       
                       
                      if(isset($_SESSION["em"])){
$user_id = $_SESSION["em"];
}

//echo "User email: " .$_SESSION["em"];
                       //echo "User name: " .$_SESSION["nm"];
                       //echo "User number: " .$_SESSION["regcode"];
                       
    
                     


?>
                
                
          <?php } ?>
	
	<?php } else{ ?>
		<h6><a href="<?php echo home_url();?>/select-participant">Please enter your details</a></h6>	
	
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
                    <p class="card-text">Polling to select the Concert Repertoire 
                    </p>
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
                    <p class="card-text"> Registration for Choir</p>
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
            <script type='text/javascript' src="<?php bloginfo("template_url")?>/js/jquery-3.2.1.min.js"></script>         
                     <script>
                 /* var reg_name = sessionStorage.getItem("reg_name");
				  var reg_email = sessionStorage.getItem("reg_email");
				  var reg_wnumber = sessionStorage.getItem("reg_wnumber");
                  console.log(reg_name);  
                  $("#regname").val(reg_name);
 				  $("#regemail").val(reg_email);
 				  $("#regwnumber").val(reg_wnumber);*/
                    
                    
                   

                </script>
                    
                     <script>
 
     $(document).ready(function () {


      
         var reg_name =  $("input[name=your-name]").val();    
         var reg_email =  $("input[name=your-email]").val();
    
   
        sessionStorage.setItem("reg_name", reg_name);
        sessionStorage.setItem("reg_email", reg_email);
        //sessionStorage.setItem("reg_wnumber", reg_wnumber);
      
     //location.href = "https://www.ziondigitalstudio.com/home-coming-live-concert/reg/";
       console.log(reg_name);  
       
        return false; 
    

});

    </script>           
                    

    <?php endwhile; endif;?> 
    <?php get_footer();?>