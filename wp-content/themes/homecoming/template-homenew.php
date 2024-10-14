<?php 
/* Template name: Home New */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 
  				
    <?php                      
// 		if(isset($_SESSION["rtype"])){
// 			 echo $r_type = $_SESSION["rtype"];
// 		}
?>

							  
	<div class="container">	 
		
 <!---------------------------- Popup starts here------------------------------------------->
		  <div class="popup" id="homec">
                <div class="popup__content">
                     <div class="popup__body">
                         <!--<button class="popup__close" type="button" id="pclose<?php echo $i;?>"></button>-->
                          <div class="popup__text">
							
						
                             <form method="POST" id="getReg" action="" > 
								   <div class="form-group-1">
									   <span class="wpcf7-form-control-wrap">
										   <div class="row text-center">
											     <div class="col-lg-6 col-6">
											  
												   <b>Individual Registration</b>	
													 <input type="radio" value="indiv" name="rtype" class="form-control">
										
													  </div>
											 <div class="col-lg-6 col-6">
								<b>Group Registration</b><input type="radio" value="group" name="rtype" class="form-control">
											   </div>
										   </div>
										 
						 	
									   </span>
									 <div class="row text-center">   
										  <div class="col-lg-12 col-12 mt-3">
<!-- 								 <p><input type="submit" value="SUBMIT" class="wpcf7-form-control has-spinner wpcf7-submit"></p> -->
											   <p><input type="submit" value="SUBMIT"></p>
										 </div>
									   </div>
								 </div>
							 </form>
						</div>
                      </div>
                    </div>
                 </div>
		 <!--------------------- Popup ends here-------------------------->

            <div class="row">
                <div class="col-md-12 text-center"><img src="<?php bloginfo("template_url")?>/img/image-1.png" alt=""></div>
			
		
            </div>
            <div class="row mt-5 text-left ">
				<div class="col-md-12 pb-5">
                    <h2>Be conducted by the most respected music maestros in India </h2>
                    <h3>
                    </h3>

                    <div class="row maestros">
						 <?php  
							$i=1;
                            while( have_rows('photos_and_contents') ): the_row();
                                $photo      =  get_sub_field('photo');
								$photo_name =  get_sub_field('photo_name'); 
								$content    =  get_sub_field('content');  
								$detailed_content   =  get_sub_field('detailed_content');  
                        ?>
                        <div class="col-lg-3 col-6">
                            <img src="<?php echo $photo;?>" alt="">
                            <h4><?php echo $photo_name;?></h4>
                            <p><?php echo $content; ?></p>

                            <a href="#click" class="popup-trigger" id="popen<?php echo $i;?>">Read more</a>
                            <div class="popup" id="click<?php echo $i;?>">
                                <div class="popup__content">
                                    <div class="popup__body">
                                        <button class="popup__close" type="button" id="pclose<?php echo $i;?>"></button>
                                        <div class="popup__text">
                                           <?php echo $detailed_content;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php $i++; endwhile; ?>
						<?php /*
                        <div class="col-lg-3 col-6">

                            <img src="<?php bloginfo("template_url")?>/img/rex-isaacs.jpg" alt="">
                            <h4>REX ISAACS </h4>
                            <p>the maestro who made a violin culture in Kerala is undoubtedly the master and mentor of most of the leading violinists in Kerala.</p>
                            <!--
                            <p>Rex and his elder brother Emile were so talented that they were invited to join the leading music club in Ernakulam -Azad Arts Club in their High School years itself.</p>
                            <p>
                                They were introduced to music directors and instrumentalists there. They formed the legendary singer Yesudas's Orchestra with other instrumentalists Jos and Paul.
                                Fr Abel, who was the Director of Christian Arts Club which was rechristened Kalabhavan, invited him to teach music there.

                            </p>
                            <p>He became the Principal there eventually and was involved in Ganamelas and music composition for albums. </p>
                            <p>During those days most musicians played by ear. He started imparting systematic western music notation to his students. </p>
                            <p>Since violin study books were rarely available then he composed tailor made etudes for each student which is unique to date. </p>
                            <p>He shifted to Cochin Arts and Communications in 1975 as its Principal. He was instrumental in creation of liturgical music in Malayalam during his tenure there.
                                He has associated with all famous music composers in South Indian film industry and has given his signature in all his works.
                                Rex Master's shishya parampara ranks among the finest violinists in India.
                            </p>
-->
                        </div>
                        <div class="col-lg-3 col-6">
                            <img src="<?php bloginfo("template_url")?>/img/augustine-paul.jpg" alt="">
                            <h4>AUGUSTINE PAUL </h4>
                            <p>is a music conductor, voice trainer and music teacher par excellence. </p>
                            <!--
                            <p>He holds a Licentiate Diploma in Music from Trinity College, London (L.MusTCL) and a Master's in English.
                            </p>
                            <p>He has been into teaching for over 30 years and has received the best teacher award from Trinity College of Music, Chennai Centre, a number of times.
                            </p>
                            <p>Augustine Paul has been the conductor of the Mellow Circle choir for over 15 years. He is the conductor of the (125 -years -old) MMA choir. He is the leader of Octet Cantabile.
                                Apart from shows in India, he has done various concert tours to UK, Italy, Austria, Australia, Singapore, Malaysia and the Gulf and is instrumental in forming the MMA symphony orchestra.
                            </p>
                            
-->

                        </div>
                        <div class="col-lg-3 col-6">
                            <img src="<?php bloginfo("template_url")?>/img/george.jpg" alt="">
                            <h4>FR.DR.M.P.GEORGE</h4>
                            <p>an exponent in Syriac Liturgy singing is a composer and
                                concert master.</p>
                            <!--
                                <p> He serves as a professor emeritus at Orthodox Theological
                                Seminary, Kottayam and Director of “Sruti School of Music” at Kottayam. He studied
                                western classical music and specialized in Harmony and Choir conduction from
                                Orthodox music academy in Russia. He holds a doctorate in West Syriac music. He
                                was the mastermind behind the symphony orchestra ‘The song of an Indian Cuckoo’,
                                a choral symphony by Zumoro choir accompanied by 80 musical instruments.
                            </p>
-->
                        </div>
                        <div class="col-lg-3 col-6">
                            <img src="<?php bloginfo("template_url")?>/img/pradeep.jpg" alt="">
                            <h4>PRADEEP SINGH </h4>
                            <p>is the Conductor of Cochin Chamber Orchestra and Cochin Youth Chamber Orchestra.
                            </p>
                            <!--
                               <p> During his stay in Canada he used to play violin for New Westminster Symphony Orchestra and Ambleside Orchestra.
                                He was the Concertmaster for the much-celebrated musical concerts like Somro ’15, Meshthooso ’17 and Sadhu Sopanam Symphony.
                            </p>
                            <p>
                                He teaches violin in Cochin Arts and Communications.
                            </p>
-->
                        </div>
                        <div class="col-lg-3 col-6">
                            <img src="<?php bloginfo("template_url")?>/img/albert.jpg" alt="">
                            <h4>ALBERT VIJAYAN</h4>
                            <p>is a master musician, refined keyboard artist and well-established composer with over thirty years of extensive experience.
                            </p>
                            <!--
                               <p>
                                He worked closely with Dr K J Yesudas and was an active part of the epic Tharangani team, scoring and conducting music for numerous popular Tharangani music albums and film songs.
                                Since then,his musical expedition reached its peak as he collaborated with various music personalities from the South Indian film industry and worked his magic in the field of devotional music.
                                His passion for music is ever growing and he has tutored a countless number of reputable and aspiring singers.

                            </p>
-->
                        </div>
                        <div class="col-lg-3 col-6">
                            <img src="<?php bloginfo("template_url")?>/img/chitty.jpg" alt="">
                            <h4>CHITTY PRAKASH DHYRIAM</h4>
                            <p>
                                Mr BMJ Dhyriam, known to many christians through his
								melodious music in the states of Andhra and Tamil Nadu </p>
                            <!--

<p> is an A grade composer in
                                All India Radio and a renowned music director at HMV and Colombia records. </p>
                               <p> His
                                son Chitty Prakash Dhyriam, followed the same footsteps and has composed
                                various christian devotional music for many including Father Berkmans, Octet
                                Cantabile, DGS Dinakaran and family. He also entered cine field at a very young age
                                as a bass guitarist and became a music conductor for various music directors in
                                southern India. He is currently working as an assistant music director for Devi Sri
                                Prasad.
                            </p>
-->
                        </div>
                        <div class="col-lg-3 col-6">
                            <img src="<?php bloginfo("template_url")?>/img/sajan.jpg" alt="">
                            <h4>REV SAJAN P. MATHEW</h4>
                            <p>an ordained priest of Malankara Marthoma church is a gifted musician. </p>
                            <!--
                               <p>He served as the director of Department of Sacred Music and
                                Communications for almost 9 years and was instrumental in setting up the DSMC HD Studio and producing number of
                                music collections through DSMC. He was also the leader and conductor of Maramon
                                Convention choir for many years. He has composed many songs including the
                                widely sung ‘’Oru mazhayum thorathirunitilla"
                            </p>
-->
                        </div>
                        <div class="col-lg-3 col-6">
                            <img src="<?php bloginfo("template_url")?>/img/faith.jpg" alt="">
                            <h4>FAITH RAGLAND</h4>
                            <p>is a violinist, cellist and music educator with a rich experience in choral conducting.
                            </p>
                            <!--
                               <p>
                                Over the years, Faith performed with two of India’s finest orchestras - The Delhi Symphony Orchestra and Indian National Youth Orchestra.

                            </p>

                            <p>In 2011, Faith Ragland founded Coimbatore Chamber Chorale and they have appeared at many prestigious venues including Tata Theatre Mumbai, Dubai Opera and Wiener Konzerthaus Vienna. </p>
                            <p>Among the choir’s benchmark interpretations are Handel’s Messiah, Mendelssohn’s Elijah, Mozart’s Coronation Mass and very recently Handel’s Israel in Egypt.
                                He has been guest conductor for Kuwait Chamber Chorale since its inception. He is the head of the music department in Stanes school, Coimbatore
                            </p>
-->
                        </div>
                        <div class="col-lg-3 col-6">
                            <img src="<?php bloginfo("template_url")?>/img/abraham.jpg" alt="">
                            <h4>PROF. ABRAHAM C. MATHEW</h4>
                            <p>is the founder director of the Kottayam Mixed Voices, the
                                oldest existing independent 60-member gospel choir group in Kottayam. </p>
                            <!--
                               <p> A retired
                                professor in Chemistry from C.M.S College, Kottayam, Prof Abraham was also the
                                choir master of CMS College choir for many years. He has composed many
                                Christmas songs and is known for his artistry in rearranging and harmonizing songs.

                            </p>
-->
                        </div>
                        <div class="col-lg-3 col-6">
                            <img src="<?php bloginfo("template_url")?>/img/clement.jpg" alt="">
                            <h4>CLEMENT VEDANAYAGAM SASTRIAR</h4>
                            <p>Clement Vedanayagam is a music evangelist who is largely recognized in the Indian Tamil Christian population and the world over.
                            </p>
                            <!--
                            <p>His interest in violin grew from a very early age. He accompanied his father in the Lord’s ministry to play the violin and this helped him to expand adequate confidence and experience in playing the violin for the songs of his forefather Venerable Vedanayaga Sastriar. Later he joined the Madras Guitar String Ensemble. He played the viola and the violin for this orchestra in various places. </p>
                            <p>Further his ardor for western classical urged him to try his hands on South Indian Classical Music and hence pursued his training for a short span of time under the guidance of Parur Venkataraman.
                                One can feel and experience the flair of that music in his orchestration where he brings together both the South Indian Carnatic Music and the Western Music. He has released a beautiful series of musical albums titled "Tuning with Clement"having 6 volumes. His last release "Clement Unplugged" is a unique blend of acoustic instruments.
                            </p>
-->
                        </div>
                        <div class="col-lg-3 col-6">
                            <img src="<?php bloginfo("template_url")?>/img/thomas.jpg" alt="">
                            <h4>THOMAS JACOB KAITHAYIL</h4>
                            <p>Music composer, producer and multi-instrumentalist at Zion Digital Studio with more than two decades of music production and a youtube channel viewership of more than 2 million.
                            </p>
                            <!--
                               <p> He has arranged the Orchestral Score for major Christian Concerts "La Moriyo Zegtho" in 2012 and "Somro-Choral Symphony" in 2015.</p>
                            <p>His compositions, from “Carolsav” Christmas Carol Series, which are loved and performed by numerous choirs across the globe, is into its 9th Season.T
                                The Carolsav Homecoming Concert which is scheduled for December 27th,2023 will be in celebration of the 10th anniversary.</p>
                            <p>The latest venture “Geethangalum Raagangalum” which is in progress is the first of its kind tutorial series to take Indian Raagas to the Christian music lovers.
                            </p>
-->
                        </div>
						
						*/ ?>
                    </div>
                </div>
				
				
			<div class="row">
				<div class="col-lg 12">
					<!--<a class="btn align-center mt-4 mb-4 px-4 py-3 mr-2" href="<?php //bloginfo("template_url")?>/img/CAROLSAV HOMECOMING  2nd PHASE REGISTRATION RATES.pdf" target="_blank">REGISTRATION RATES </a>-->
						<!--<a class="btn align-center mt-4 mb-4 px-4 py-3 mr-2" href="http://www.ziondigitalstudio.com/home-coming-live-concert/wp-content/uploads/2023/09/reg.-new-amounts-13-09.pdf" target="_blank">REGISTRATION RATES </a>
<!-- 					<a class="btn align-center mt-4 mb-4 px-4 py-3 mr-2" href="<?php //bloginfo("template_url")?>/img/Polling & Registration Guide.pdf" target="_blank">POLLING & REGISTRATION GUIDE </a> -->
					<!--<a class="btn align-center mt-4 mb-4 px-4 py-3 mr-2" href="https://linktr.ee/Carolsavhomecomingconcert2023" target="_blank">QUICK REGISTRATION </a>
					<a class="btn align-center mt-4 mb-4 px-4 py-3 mr-2" href="https://www.ziondigitalstudio.com/home-coming-live-concert/results/" target="_blank">LIVE POLLING RESULTS </a>-->
					
					<a class="btn align-center mt-4 mb-4 px-4 py-3 mr-2" href="https://www.ziondigitalstudio.com/carolsav-homecoming-concert-2023/" target="_blank">BUY TICKETS</a>
				</div>
				
				<!--<div class="col-md-6 py">
mr-2
				my-2 or 3
					<a class="btn align-center mt-4 mb-4 px-4 py-3" href="<?php bloginfo("template_url")?>/img/CAROLSAV HOMECOMING REGISTRATION RATES .pdf" target="_blank">REGISTRATION RATES </a>
				</div>
				<div class="col-md-6 py">
					<a class="btn align-center mt-4 mb-4 px-4 py-3" href="<?php bloginfo("template_url")?>/img/Polling & Registration Guide.pdf" target="_blank">POLLING & REGISTRATION GUIDE </a>
				</div>
				<div class="col-md-6 py">
					<a class="btn align-center mt-4 mb-4 px-4 py-3" href="https://www.ziondigitalstudio.com/home-coming-live-concert/results/" target="_blank">LIVE POLLING RESULTS </a>
				</div> -->
				
				</div>	
		<div class="row chance">
                <div class="col-md-5">
                    <img src="<?php bloginfo("template_url")?>/img/thumbs-up-with-golden-stars-illustration-review-give-feedback-reward-icon-concept-white-isolated_138676-639.webp" alt="">
                </div>
                <div class="col-md-7 text-center">

                    <h3>We invite all our dear friends, across the globe, to cast your votes to select the repertoire for the Carolsav Homecoming Live Concert-2023.</h3>
                    <a class="btn align-center mt-4 mb-4 px-4 py-3" href="<?php echo home_url();?>/select-participant">POLL &amp; REGISTER NOW   </a>
                    <p>
						Win exciting prizes!
					</p>
<!-- 					<p>
						<em>Subsequent to participation in the poll, register to be part of the 2000-member choir.</em> 
					</p>
					 <a class="btn align-center mb-4 px-4 py-3" href="<?php // echo home_url();?>/stage2-registration"> REGISTER NOW </a> -->
                </div>
            </div>		
			<!--<img src="<?php //bloginfo("template_url")?>/img/image_footer_new.jpg" alt='Zion Digital Studio' class="pb-5"/>-->
				<img src="<?php echo get_field("registration_image");?>" alt='Zion Digital Studio' class="pb-5"/>
	        <br><br><br><br>
                
                <div class="col-md-12 pb-5">
                    <h2>Be part of the 2000 member choir</h2>
                    <h3>Choral music is not one of life’s frills. </h3>
					<p>
						Its something that goes to the very heart of our humanity, our sense of community, and our souls. When a choir sings, members not only synchronize their voice and breath, but their heart rates also become synchronized as well. When you get together with a group of other singers, it becomes more than the sum of the parts. It brings in ripples of happiness and joy through and through.Four parts harmony is a traditional system of organizing chords for four voices. The first voice often has the melody, and each additional member of the group provides harmony and countermelody with their parts. The vocal parts that comprise fourpart harmony are soprano, alto, tenor, and bass. Soprano and alto designate respectively high and low female voices. Tenor and bass designate high and low male voices.The Carolsav Homecoming Concert will feature a 2000 member choir singing in four part harmony consisting of 650 Sopranos,450 Altos, 450 Tenors and 450 Basses.It will indeed be a heavenly experience! Truly a “once in a lifetime opportunity!”
					</p>
<p>	If you need help to identify your vocal part/range please use our help videos to do so.</p>
					<p>
						<a href="https://youtube.com/playlist?list=PL59tdxi_x-ZSQ8ObZjyAf3R_Z-Gn7LPoM" target="_blank"><u>Vocal Part Identifier Videos-For Audition</u></a>
					</p>
                </div>
     <div class="col-md-12 pb-5">
                    <h2>Be accompanied by a full fledged orchestra of 100 members</h2>
                    <h3>The 100 member Orchestra will feature some of the finest musicians from abroad and India.It will consist of the following elements</h3>
				  <div class="row hundred-sec">
                        <div class="col-md-6">
                            <h4>
                                STRING SECTION: (60)
                            </h4>
                            <p>
                                The string section is composed of bowed instruments belonging to the violin family. It normally consists of first and second violins, violas, cellos, and double basses. It is the most numerous group in the standard orchestra.
                            </p>
                            <div class="row mt-4">
                                <div class="col-lg-4 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/violin.jpg" alt="">
                                    <b>
                                        First violin: (20)
                                    </b>
                                    <!--
                                     <p>
							  First violin has the lead or primary violin role in an orchestra or other ensemble, or in a musical composition, that typically contains the melody and is often more technically demanding than the second violin.It is played by a first violinist, typically the best violinist in the orchestra.
						  </p>
-->

                                </div>
                                <div class="col-lg-4 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/violin.jpg" alt="">
                                    <b>
                                        Second Violin: (16)
                                    </b>
                                    <!--
                                     <p>
							  Second violin play a supportive role harmonically and rhythmically to the first violins. Although the two sections play different parts, all members share in the responsibility of blending seamlessly together as one unit.
						  </p>
-->

                                </div>
                                <div class="col-lg-4 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/viola.jpg" alt="">
                                    <b>
                                        Viola: (12)
                                    </b>
                                    <!--
                                    <p>
                                        Viola is a musical instrument of the violin family that is intermediate in size and compass between the violin and cello and is tuned a fifth below the violin. It is the tenor of the violin family. The viola’s tone is darker, weightier, and warmer than that of the violin. The modern symphony orchestra contains from 6 to 10 violas.
                                    </p>
-->
                                </div>
                                <div class="col-lg-4 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/cello.jpg" alt="">
                                    <b>
                                        Cello: (8)
                                    </b>
                                    <!--
                                    <p>
                                        Cello is a musical instrument with four strings that looks like a large violin. It produces a deep, rich, and vibrant sound and reaches the lowest pitch in the traditional string quartet. It’s one of the only instruments that can easily accommodate sheet music written in any clef — bass, tenor, or treble — making it one of the most versatile instruments in the orchestra.
                                    </p>
-->
                                </div>
                                <div class="col-lg-4 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/double-bass.jpg" alt="">
                                    <b>
                                        The Double Bass: (4)
                                    </b>
                                    <!--
                                    <p>
                                        The DoubleBass is the largest and lowest-pitched bowed (or plucked) string instrument in the modern symphony orchestra. It is played by sliding a bow across the strings or by plucking the stringsin a technique called pizzicato.It is part of the string section and supports the orchestra with its warm, deep tone.The double bass is a tough master – demanding strength, stamina, and proper technique from its player.
                                    </p>
-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>
                                WOODWIND SECTION: (10)
                            </h4>
                            <p>
                                Woodwinds are the least homogeneous section of the orchestra.The sound of each instrument is quite unique – while the instruments in the string section are built in the same way and they just get bigger, in case of the winds, instruments are built in a different way. Flutes and piccolos are non-reed instruments, they play by blowing the air across the mouthpiece’s hole. A clarinet is a single-reed instrument, and oboe is a double-reed instrument. A bassoon also is a double-reed. Thus, the way the sound is made is a bit different in case of each of these three groups, so the instrument’s timbre varies.
                            </p>

                            <div class="row mt-4">
                                <div class="col-lg-4 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/piccolo.jpg" alt="">

                                    <b>
                                        Piccolo: (1)

                                    </b>
                                    <!--
                                    <p>
                                        the smallest instrument, the high soprano voice – consider it a very small version of a flute. Depending on the orchestra, it is played by a separate player, or by the flute player who picks it up when needed. It is a side-blown flute made of metal and has a very high pitch. It can be used to add accents, quick runs or very dynamic decorative melodies and fast passages.
                                    </p>
-->
                                </div>
                                <div class="col-lg-4 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/flute.jpg" alt="">
                                    <b>
                                        Flute: (3)

                                    </b>
                                    <!--
                                    <p>
                                        Flute is a woodwind instrument, generally of a tubular shape, that is played by blowing across a specially shaped opening and is considered as one of the earliest instruments.They are used in many ensembles including concert bands, orchestras, flute ensembles.
                                    </p>
-->
                                </div>
                                <div class="col-lg-4 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/oboe.jpg" alt="">
                                    <b>
                                        Oboe: (2)
                                    </b>

                                    <!--
                                    <p>
                                        Oboe is a double-reed woodwind instrument with a brilliant penetrating and nasal tone. It plays a tuning note at the beginning of orchestra concerts.The tone produced by the oboe can be heard distinctly, making it perfect for solo lines and featured parts.
                                    </p>
-->
                                </div>
                                <div class="col-lg-4 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/clarinet.jpg" alt="">
                                    <b>Clarinet: (2)</b>
                                    <!--
                                    <p>
                                        Clarinet is asingle-reed woodwind instrument used orchestrally and in military and brass bands and possessing a distinguished solo repertory. It can produce both a tear-jerking melancholy sound and warm, comical-sounding notes. It is named from the word clarinetto, which means “little trumpet”.
                                    </p>
-->

                                </div>
                                <div class="col-lg-4 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/bassoon.jpg" alt="">
                                    <b>Bassoon: (1)</b>
                                    <!--
                                    <p>
                                        Bassoon is a double-reed woodwind instrumentknown for its distinctive tone color, versatility and has got a rich, growling timbre of its low notes. It is one of the most difficult instruments in the orchestra to play.
                                    </p>
-->
                                </div>
                                <div class="col-lg-4 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/saxophone.jpg" alt="">
                                    <b>Saxophone: (1)</b>
                                    <!--
                                    <p>
                                        The saxophone (often referred to colloquially as the sax) is a type of single-reed woodwind instrument with a conical body, usually made of brass. Though the saxophone is made of metal,
                                        it generates sound with a single reed, and so it is classified as a woodwind rather than as a brass instrument

                                    </p>
-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pt-5">
                            <h4>
                                BRASS SECTION: (11)
                            </h4>
                            <p>
                                Brass is quite a homogeneous section of the orchestra. Almost all brass instruments work in the same way, and thus they have a similar timbre. An exception is a French Horn, which, considered to be a woodwind, can produce a slightly different timbre than other brass instruments. </p>
                            <p>
                                While many orchestral scores show us that brass can play loud, aggressive and powerful parts, it is very important to know that brass is also capable of very soft dynamics. The overall dynamic range of this section is incredible, as it can offer you so many various textures. It can play emotional, soaring melodies with horns and trombones in unison. It can shape the feeling of militaristic heroism with trumpets. It can create dark textures with low brass instruments. It can play melancholic melodies with soft horns. It is a very lyrical section.

                            </p>

                            <div class="row mt-4">
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/trumpet.jpg" alt="">
                                    <b>
                                        Trumpet: (2)
                                    </b>
                                    <!--
                                    <p>
                                        Trumpet is a brass wind musical instrument sounded by lip vibration against a cup mouthpiece. It is constructed of brass tubing bent twice into a rounded oblong shape. It is an important instrument which boosts and stimulates the brain and increases memory.
                                    </p>
-->
                                </div>
								            <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/trombone.jpg" alt="">
                                    <b>
                                        Trombone: (4)
                                    </b>
                                    <!--
                                    <p>
                                        Trumpet is a brass wind musical instrument sounded by lip vibration against a cup mouthpiece. It is constructed of brass tubing bent twice into a rounded oblong shape. It is an important instrument which boosts and stimulates the brain and increases memory.
                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/horn.jpg" alt="">
                                    <b>
                                        Horn:(4)

                                    </b>
                                    <!--
                                    <p>
                                        As the name indicates, people originally used horn to blow on the actual horns of animals before starting to emulate them in metal or other materials. They are also often used as a solo instrument and are featured prominently in many pieces of classical and popular music. It has got soft resonant timbre that allows it to harmonize well with both brass and woodwind instruments.

                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/tuba.jpg" alt="">
                                    <b>
                                        Tuba: (1)


                                    </b>
                                    <!--
                                    <p>
                                        Tuba, low deep-pitched brass wind instrument with valves and wide conical bore make a rich sound which often anchors the harmony. The low note of tuba supports an orchestra's complete sound, keep the rhythm, and are powerfully rewarding to play.

                                    </p>
-->

                                </div>
							</div>
							 <div class="row mt-4">
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/grand-piano.jpg" alt="">
                                    <b>
                                        Acoustic Grand Piano: (1)



                                    </b>
                                    <!--
                                    <p>
                                        The grand piano is the mother of all musical instruments. Encompassing over seven octaves, its pitch range covers the entire symphony orchestra, from the lowest notes of the harp to the highest notes of piccolo.

                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/acoustic-guitar.jpg" alt="">
                                    <b>
                                        Acoustic Guitar: (2)</b>
                                    <!--
                                    <p>
                                        An acoustic guitar is a very versatile instrument and is vital in a variety of genres ranging from pop, rock, country, gospel, jazz, blues, reggae, etc. and so is one of the most popular instruments on earth. An acoustic electric guitar has electronic components to amplify its sound and let shape its tone.
                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/bass-guitar.jpg" alt="">
                                    <b>
                                        Bass Guitar: (1)
                                    </b>
                                    <!--
                                    <p>
                                        Acoustic bass guitar helps to get a warm and rich low-end. They are usually made for playing blues, country, or rock music in unplugged situations.
                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/sitar.jpg" alt="">
                                    <b>
                                        Sitar: (1)

                                    </b>
                                    <!--
                                    <p>
                                        The sitar is a plucked stringed instrument, originating from the Indian subcontinent, used in Hindustani classical music. The instrument was invented in medieval India, flourished in the 18th century, and arrived at its present form in 19th-century India.

                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/veena.jpg" alt="">
                                    <b>
                                        Veena: (1)


                                    </b>
                                    <!--
                                    <p>
                                        Veena is a stringed instrument. It consists of a large body hollowed out of a block of wood. The stem of the instrument is also made of wood. The bridge is placed on the flat top of the body of the veena and the neck attached to the stem is usually carved into weird figure like the head of the dragon
                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/bansuri.jpg" alt="">
                                    <b>
                                        Bansuri: (1)


                                    </b>
                                    <!--
                                    <p>
                                        A bansuri is an ancient side blown flute originating from the Indian subcontinent. It is an aerophone produced from bamboo and metal like material used in Hindustani classical music.


                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/santoor.jpg" alt="">
                                    <b>
                                        Santoor: (1)



                                    </b>
                                    <!--
                                    <p>
                                        The Indian santoor instrument is a trapezoid-shaped hammered dulcimer, and a variation of the Iranian santur. The instrument is generally made of walnut and has 25 bridges. Each bridge has 4 strings, making for a total of 100 strings.
                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/sarod.jpg" alt="">
                                    <b>
                                        Sarod: (1)



                                    </b>
                                    <!--
                                    <p>
                                        The sarod is a stringed instrument, used in Hindustani music on the Indian subcontinent. Along with the sitar, it is among the most popular and prominent instruments

                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/tabla.jpg" alt="">
                                    <b>
                                        Tabla: (2)

                                    </b>
                                    <!--
                                    <p>
                                        Tabla is themost evolved percussion instrument in the world and the most famous drum of India. It is composed of a pair of drums: the dayan which is higher pitch drum and the bayan which is lower pitch drum.


                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/dholak.jpg" alt="">
                                    <b>Dholak: (2)</b>
                                    <!--
                                    <p>
                                        Dholak is a folk drum of northern India, Pakistan, and Bangladesh. It is a bigger rendition of dholak. It is barrel moulded, sometimes also cylindrical, with skin on both sides. The two sides consist of lower and higher pitches.

                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/mridangam.jpg" alt="">
                                    <b>Mridangam: (1)</b>
                                    <!--
                                    <p>
                                        Mridangam is a double-sided drum bodied instrument. It is one of the most ancient rhythmic instruments of India. It is the main percussion instrument used in classical South Indian music, usually accompanied with Ghatam, Kanjira and Morsing.


                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/ghatam.jpg" alt="">
                                    <b>Ghatam: (1)</b>
                                    <!--
                                    <p>
                                        Ghatam is one of the oldest percussion instruments in India. Ghatam is played by using one’s palms and fingers. It is the best when playing a tempo, and it is very exciting whenever a fast-paced folk song is played.


                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/morsing.jpg" alt="">
                                    <b>Morsing: (1)</b>
                                    <!--
                                <p>
                                    Morsing is an Indian variant of the ‘jaw harp’. They can be used to make amusing sounds like swaying, fluttering and other onomatopoeic sounds. It aids musicians and listeners in understanding the established rhythm of other percussion instruments like mridangam.

                                </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/mani.jpg" alt="">
                                    <b>
                                        Mani: (1)
                                    </b>
                                    <!--
                                    <p>
                                        The Bells (Mani) are a series of copper bells strung vertically. The sound is produced by hitting the bells with a wooden stick. They are mostly used in religious temples and ancient Indian folk music.

                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="<?php bloginfo("template_url")?>/img/shakers.jpg" alt="">
                                    <b>
                                        Shakers: (1)</b>
                                    <!--
                                    <p>
                                        Shakers are creative add on to any percussion rig. They are easy to play and create a wide spectrum of unique sounds.

                                    </p>
-->
                                </div>
                                <div class="col-lg-2 col-6">

                                    <img src="<?php bloginfo("template_url")?>/img/tambourine.jpg" alt="">

                                    <b>
                                        Tambourine: (1) </b>
                                    <!--
                                    <p>
                                        Tambourines are a staple of multiple genres of music. They can compliment your music with its quintessential jangle.

                                    </p>
-->
                                </div>



                            </div>

                        </div>
                    </div>
					
                </div>
                <div class="col-md-12 pb-5">
                    <h2>Be guided by expert music professionals</h2>
                   <h3>	All the support for seamless training,including the music scores and vocal recordings will be provided beginning from June 1st, 2023 onwards.</h3>
					
					<p>
					
Guidance will be provided by our expert team leaders throughout the process. During final rehearsal the choir will be groomed by one of the most sought after Vocal trainer Mr. Binu John Mathews. </p>

					<div class="row">
						<div class="col-lg-2 col-6 mb-3">  <img class="binu" src="<?php bloginfo("template_url")?>/img/binu.jpg" alt=""></div>	
		<div class="col-md-10">	
<p>
Mr.Binu is a vocal trainer, performer, lyricist and composer by profession.He has been training over 20 leading playback singers in the South Indian music industry. Currently he trains singers from 6 countries. He is well versed in Carnatic music and Western Classical music. He is the lyricist and composer of more than 30 Christian devotionals in Malayalam. He was a member of the faculty at Chetana National Institute of Vocology, Thrissur. He was also a vocal trainer at a number of institutions such as Jerry Amaldev Foundation, Kalabhavan in Ernakulam, and MCBS KalaGramam in Trivandrum.He has worked in voice rehabilitation programs along with the renowned Consultant Laryngologist Dr Jayakumar R Menon.

					</p></div>	
							</div>
                </div>
            </div>
            <div class="row chance">
                <div class="col-md-5">
                    <img src="<?php bloginfo("template_url")?>/img/thumbs-up-with-golden-stars-illustration-review-give-feedback-reward-icon-concept-white-isolated_138676-639.webp" alt="">
                </div>
                <div class="col-md-7 text-center">

                    <h3>We invite all our dear friends, across the globe, to cast your votes to select the repertoire for the Carolsav Homecoming Live Concert-2023.</h3>
                    <a class="btn align-center mt-4 mb-4 px-4 py-3" href="<?php echo home_url();?>/select-participant">POLL &amp; REGISTER NOW   </a>
                    <p>
						Win exciting prizes!
					</p>
<!-- 					<p>
						<em>Subsequent to participation in the poll, register to be part of the 2000-member choir.</em> 
					</p>
					 <a class="btn align-center mb-4 px-4 py-3" href="<?php // echo home_url();?>/stage2-registration"> REGISTER NOW </a> -->
                </div>
            </div>
            <div class="block-three row text-center">
                <div class="col-md-6 d-flex justify-content-center align-content-center align-items-center ">
                    <h2><span>THE CAROLSAV</span> JOURNEY</h2>
                </div>
                <div class="col-md-6 px-5 py-5  text-left">

                    <p>In the year 2014, the unique Christmas project “Carolsav” was launched by Zion Digital Studio. The background behind this venture was the need among the various churches and choral groups to have access to new compositions in both eastern and western traditions of music. The idea was to ensure that necessary support was given to the various groups by sharing of background karaoke tracks, vocal files for easy learning and of course the scores.

                    </p>
                </div>
            </div>
            <div class="block-three no-border reverse row text-center">

                <div class="col-md-6 px-5 py-5 text-left">

                    <p>These scores and the learning and performance resources have been vastly used by many choirs across the globe in the last 9 years. People across the globe were also part of the virtual recordings held in 2020 in the midst of the pandemic. Members of various church choirs and other choral groups who have performed the Carolsav songs have become a family connected by the common thread of music. Till date a total of 36 songs have been composed in Malayalam; and translated versions in Tamil are also available.



                    </p>
                </div>
                <div class="col-md-6  d-flex justify-content-center align-content-center align-items-center ">
                    <h2><span>THE CAROLSAV</span> FAMILY</h2>
                </div>
            </div>
            <div class="block-three row text-center">
                <div class="col-md-6  d-flex justify-content-center align-content-center align-items-center ">
                    <h2><span>A DECADE OF</span> JOYFUL SINGING!!
                    </h2>
                </div>
                <div class="col-md-6 px-5 py-5  text-left">

                    <p>To mark the 10th anniversary of the Carolsav festival, we intend to organize a grand homecoming of all the singers, across the globe, who have been part of Carolsav songs since the year 2014. A homecoming musical event will be organized during Christmas 2023, and the plan is to have 2000 choristers accompanied by a 100 strong orchestra. The event is being planned in Kerala.Considering the magnitude of the proposed event, an attempt is also being made to enter into record books.



                    </p>
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
                                <h4 class="card-title">2022 Dec 3rd- 2023 Sep 30</h4>
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
                                <div class="float-right text-muted small">STAGE 4</div>
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

    <?php endwhile; endif;?> 
    <?php get_footer();?>