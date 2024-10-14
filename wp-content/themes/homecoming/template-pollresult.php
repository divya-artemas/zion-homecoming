<?php 
/* Template name: Poll Result */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 

     <div class="container">

<div class="block-three row text-center">
    <div class="col-md-12 text-center">
        <img src="<?php bloginfo("template_url")?>/img/logo.jpg" alt="">
    </div>
    <div class="col-md-6 d-flex justify-content-center align-content-center align-items-center ">
        <h2><span>The carolsav</span> REPERTOIRE</h2>
    </div>
    <!-- <div class="col-md-6 px-5 py-5  text-left">
 

<p> Poll Results </p>


    </div> -->
</div>
<div class="row d-flex justify-content-around  polling-form my-5">
<div class="col-md-5 indian">
        <div class="row">
            <div class="col-md-12">
                <h4>Indian Category</h4>				
            </div>
        </div>
      <p>&nbsp;</p>
       <table>
       <tr>
       <th>SN</th>
       <th>Song Name</th>
       <th>Results</th>
       </tr>

       <tr>
       <td>1</td>
       <td>Aadhyanthaheenan (M) <br/> Aathianthamilla (T)</td>
       <td> 
            <?php
            $ss= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Aadhyanthaheenan',value) > 0");
            ?>
           <b>&#10084; <?php echo $ss[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>2</td>
       <td>Immanuel Jaathanai (M) <br/> Immanuel Paalani (T)</td>
       <td> 
       <?php
            $ss1= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Immanuel Jaathanai',value) > 0");

        ?>
         <b>&#10084; <?php echo $ss1[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>3</td>
       <td>Aahlaadha Punchiri (M) <br/> Aahaayam Punnahai Malarum (T)</td>
       <td> 
       <?php
                $ss2= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Aahlaadha Punchiri',value) > 0");
           ?>
            <b>&#10084; <?php echo $ss2[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>4</td>
       <td>Arunima Nirayum (M) <br/> Nadunisi Vaanam (T)</td>
       <td> 
       <?php
                $ss3= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Arunima Nirayum',value) > 0");
           ?>
           <b>&#10084; <?php echo $ss3[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>5</td>
       <td>Bethlehem Ephraatha (M) <br> Bethlehem Eppraathaa (T)</td>
       <td> 
        <?php
                $ss4= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Bethlehem Ephraatha',value) > 0");
                ?>  
                 <b>&#10084; <?php echo $ss4[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>6</td>
       <td>Mookamaam Raaviloru Ulsavamelam (M) <br> Mownitha Raavil (T)</td>
       <td> 
       <?php
                $ss5= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Mookamaam Raaviloru Ulsavamelam',value) > 0");
                ?>
                <b>&#10084; <?php echo $ss5[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>7</td>
       <td>Ambilimuttam (M) <br> Vinnin (T)</td>
       <td> 
       <?php
                $ss6= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Ambilimuttam',value) > 0");
                ?>
                <b>&#10084; <?php echo $ss6[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>8</td>
       <td>Vidarunnu (M) <br> Uthikkirathu (T) </td>
       <td> 
            <?php
                $ss7= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Vidarunnu',value) > 0");
                ?>
            <b>&#10084;  <?php echo $ss7[0]->tot;?>
        </td>
       </tr>

       <tr>
       <td>9</td>
       <td>Aaghosham (M) <br> Kondaattam (T)</td>
       <td> 
            <?php
                $ss8= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Aaghosham',value) > 0");
            ?>
            <b>&#10084;  <?php echo $ss8[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>10</td>
       <td>Puthiyoru Gaanam (M) <br> Puthiyoru Paadal (T)</td>
       <td> 
            <?php
                $ss9= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Puthiyoru Gaanam',value) > 0");
            ?>
            <b>&#10084; <?php echo $ss9[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>11</td>
       <td>Doore Oru Thaarakam (M) <br> Tholaivil Oru Natchathram (T) </td>
       <td> 
            <?php
                $ss10= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Doore Oru Thaarakam',value) > 0");
            ?>
		   <b>&#10084; <?php echo $ss10[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>12</td>
       <td> Kaalam Randai (M) <br> Kaalam Randai (T)</td>
       <td> 
            <?php
                $ss11= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Kaalam Randai',value) > 0");
            ?>
            <b>&#10084; <?php echo $ss11[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>13</td>
       <td>Maruvinu Mazhayai (M) <br> Mannin Mazhayai (T)</td>
       <td> 
       <?php
                $ss12= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Maruvinu Mazhayai',value) > 0");
                ?>
            <b>&#10084; <?php echo $ss12[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>14</td>
       <td>Vismayam Poondu (M) <br> Aacharyam Nirainthu (T)</td>
       <td> 
       <?php
                $ss13= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Vismayam Poondu',value) > 0");
                ?>
            <b>&#10084; <?php echo $ss13[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>15</td>
       <td>Santhosha Sudinamitha (M) <br> Santhosha Subathinam (T)</td>
       <td> 
       <?php
                $ss14= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Santhosha Sudinamitha',value) > 0");
                ?>
            <b>&#10084; <?php echo $ss14[0]->tot;?></b>
        </td>
       </tr>

       </table>
       
</div>


<div class="col-md-5 western">

<div class="row">
    <div class="col-md-12">
        <h4>Western Category </h4>
       
    </div>
</div>
<p>&nbsp;</p>
<table>
       <tr>
       <th>SN</th>
       <th>Song Name</th>
       <th>Results</th>
       </tr>

       <tr>
       <td>1</td>
       <td>Pirannu El Elyon (M) <br> Piranthaar El ELyon (T)</td>
       <td> 
            <?php
                $ssw1= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Pirannu El Elyon',value) > 0");
            ?>
           <b>&#10084; <?php echo $ssw1[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>2</td>
       <td>Ramaneeyam (M) <br> Yezhil Pongum (T)</td>
       <td> 
            <?php
                $ssw2= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Ramaneeyam',value) > 0");
            ?>
         <b>&#10084; <?php echo $ssw2[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>3</td>
       <td>Divya Manohara Thaaram (M) <br> Thivya Alahu Natchathram (T)</td>
       <td> 
                <?php
                $ssw3= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Divya Manohara Thaaram',value) > 0");
                ?>
            <b>&#10084; <?php echo $ssw3[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>4</td>
       <td>Mahonnathan Jaathanai (M) <br> Thaeva Paalan Jenmithaar (T)</td>
       <td> 
       <?php
                $ssw4= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Mahonnathan Jaathanai',value) > 0");
                ?>
           <b>&#10084; <?php echo $ssw4[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>5</td>
       <td>Vaathaayanangal Thurakku (M) <br> Vaayirkkathavu Thiranthu (T)</td>
       <td> 
            <?php
                $ssw5= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Vaathaayanangal Thurakku',value) > 0");
            ?>
            <b>&#10084; <?php echo $ssw5[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>6</td>
       <td>Snehapithaavin Krupaasanathinkal (M) <br> Snehapithaavin Kirubhaasanathundai (T)</td>
       <td> 
            <?php
                $ssw6= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Snehapithaavin Krupaasanathinkal',value) > 0");
                ?>
                <b>&#10084; <?php echo $ssw6[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>7</td>
       <td>Mahaathbhutham (M) <br> Mahaarpputham (T)</td>
       <td> 
       <?php
                $ssw7= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Mahaathbhutham',value) > 0");
                ?>
                <b>&#10084; <?php echo $ssw7[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>8</td>
       <td>Unnathangalil (M) <br> Unnathathile (T) </td>
       <td> 
                <?php
                $ssw8= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Unnathangalil',value) > 0");
                ?>
            <b>&#10084;  <?php echo $ssw8[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>9</td>
       <td>Nal Idayan (M) <br> Nal Meippar (T) </td>
       <td> 
               <?php
                $ssw9= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Nal Idayan',value) > 0");
                ?>
            <b>&#10084;  <?php echo $ssw9[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>10</td>
       <td>Orukkidaam (M) <br> Sevvai Seivom (T)</td>
       <td> 
                <?php
                $ssw10= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Orukkidaam',value) > 0");
                ?>
            <b>&#10084; <?php echo $ssw10[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>11</td>
       <td>Manimedayumilla (M) <br> Manimedayumillai (T) </td>
       <td> 
       <?php
                $ssw11= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Manimedayumilla',value) > 0");
                ?>
            <b>&#10084; <?php echo $ssw11[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>12</td>
       <td> Sathyavelicham (M) <br> Sathyavelicham (T)</td>
       <td> 
       <?php
                $ssw12= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Sathyavelicham',value) > 0");
                ?>
            <b>&#10084; <?php echo $ssw12[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>13</td>
       <td>Anantha Snehathin (M) <br>  Anaathi Snehathin (T)</td>
       <td> 
       <?php
                $ssw13= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Anantha Snehathin',value) > 0");
                ?>
            <b>&#10084; <?php echo $ssw13[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>14</td>
       <td>Rakshakan Jaathanai (M) <br> Amaithiyaam Kulir (T)</td>
       <td> 
                <?php
                $ssw14= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Rakshakan Jaathanai',value) > 0");
                ?>
            <b>&#10084;  <?php echo $ssw14[0]->tot;?></b>
        </td>
       </tr>

       <tr>
       <td>15</td>
       <td>Sundara Raathri (M) </td>
       <td> 
            <?php
                $ssw15= $wpdb->get_results("SELECT count(*) as tot FROM wp_cf7_vdata_entry WHERE find_in_set('Rakshakan Jaathanai',value) > 0");
            ?>
            <b>&#10084;  <?php echo $ssw15[0]->tot;?></b>
        </td>
       </tr>

       </table>
       
         
    </div>
</div>
</div>
           
                    

    <?php endwhile; endif;?> 
    <?php get_footer();?>