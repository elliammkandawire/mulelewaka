
   <header class="topslider">
	  <!-- flexslider -->
      <div class="flexslider wrapper100percent">
        <ul class="slides">
          <li><img src="<?php echo  base_url()?>images/slider-1.jpg" class="img-keep-aspect-ratio"></li>
          <li><img src="<?php echo  base_url()?>images/slider-2.jpg" class="img-keep-aspect-ratio"></li>
        </ul>
      </div>
	  <!-- flexslider end -->
	    <section class="slidertexthide slidertext startAnimation animated" data-animate="fadeInUp">
          <div class="slidertextinner">
            <img src="<?php echo  base_url()?>images/people2aicon.png" alt="">
              <h1>MULELEWAKA</h1>
              <h2>Welcome to Mulelewaka Foundation</h2>
          </div>
        </section>
    </header> 
	<!-- topslider end -->
    <div class="undersliderwrapper">  
      <div class="container"> 
        <div class="row"> 
          <section class="col-lg-12 underslider startAnimation animated" data-animate="fadeInUp">  
            <h3><?php echo $company_details->name  ?></h3>
            <h4><?php echo $company_details->motto ?>
			</h4>
	      </section> 
        </div> 
      </div>
    </div> 
	<!-- one section --> 
    <section class="wrapper100percent section1 serviceswrapper">
    <div class="sectionwrapper" id="1"></div> 
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="mainheadlinewrapper">
              <div class="mainheadline startAnimation animated" data-animate="fadeInUp">
                <h2>Vision and Mission</h2>
              </div>
            </div>
         </div>
        </div>
		<!-- icons columns --> 
        <div class="services">
        <div class="row servicecolumn">
		  <!-- one column --> 
          <div class="col-sm-6 servicecolumnone startAnimation animated" data-animate="slideInLeft">
            <a href="javascript:;"><img src="<?php echo  base_url()?>images/people1icon.png" alt=""></a>
            <h4><span>Vision</span></h4>
            <p><?php echo $company_details->vision; ?>
            </p>
          </div>
		  <!-- one column end--> 
		  <!-- one column --> 
          <div class="col-sm-6 servicecolumnone startAnimation animated" data-animate="fadeInUp">
            <a href="javascript:;"><img src="<?php echo  base_url()?>images/people2icon.png" alt=""></a>
            <h4><span>Mission</span></h4>
            <p><?php echo $company_details->mission; ?>
            </p>
          </div>
          <!-- one column end-->
		  <!-- one column -->
<!--          <div class="col-sm-4 servicecolumnone startAnimation animated" data-animate="slideInRight">-->
<!--            <a href="javascript:;"><img src="images/people3icon.png" alt=""></a>-->
<!--			<h4><span>Goal Three</span></h4>-->
<!--			<p>Sed non neque elit. Sed ut imperdiet nisi.  Sed nisi proin condimentum fermentum nibhquise vel velit auctor aliquet. Aenean solli citudin.-->
<!--            </p>-->
<!--          </div>-->
          <!-- one column end-->  
        </div>
        </div>
	    <!-- icon columns end -->
      </div>
	  <!-- container end --> 
    </section>
    <!-- one section end -->
	<!-- one section --> 
    <section class="wrapper100percent section2">
    <div id="2" class="sectionwrapper"></div> 
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="mainheadlinewrapper">
              <div class="mainheadline  textleft startAnimation animated" data-animate="fadeInUp">
                <h2>Upcoming events</h2>
              </div>
            </div>
          </div>
        </div>
		  <div class="wrapper100percent eventsinglewrapper startAnimation animated" data-animate="fadeInUp">
			  <!-- event list -->
			  <div class="container eventsingle">
				  <div class="row marginbottom2">

					  <?php foreach($events as $event): ?>
						  <?php $timestamp = strtotime($event->occation_date); ?>
						  <!-- one event -->
						  <div class="oneevent col-sm-6">
							  <div class="eventsdate">
								  <p><span><?php echo date('d', $timestamp); ?></span></p>
								  <p><?php echo date('M', $timestamp); ?></p>
								  <p><?php echo date('Y', $timestamp); ?></p>
							  </div>
							  <div class="eventstext">
								  <h4><?php echo $event->name; ?></h4>
								  <ul>
									  <li>Place: <b><?php echo $event->place; ?></b></li>
									  <li>Time: <b><?php echo $event->time; ?></b></li>
								  </ul>
								  <p><?php echo $event->content; ?>
								  </p>
								  <a class="eventslink" href="#">click to see event <i class="fa fa-chevron-right"></i>
								  </a>
							  </div>
						  </div>
						  <!-- one event end -->
					  <?php endforeach; ?>

				  </div>
			  </div>
		  </div>
		<!-- row end --> 
      </div>
	  <!-- container end --> 
    </section>
	<!-- one section end -->


   <!-- one section -->
   <section class="wrapper100percent section1" id="11">
	   <div class="sectionwrapper"></div>
	   <div class="row">
		   <div class="col-lg-12">
			   <div class="mainheadlinewrapper">
				   <div class="mainheadline startAnimation animated" data-animate="fadeInUp">
					   <h2>Meet the <span>team</span></h2>
				   </div>
			   </div>
		   </div>
	   </div>
	   <div class="container">
		   <div class="row teamcolumnwrapper">
			   <div class="col-lg-3 col-md-3 col-sm-3 teamcolumn startAnimation animated" data-animate="slideInLeft">
				   <img src="images/dunstan.jpg" alt="">
				   <div class="teamcolumninner">
					   <h3>Dunstan Chunda</h3>
					   <p>Executive Director</p>
					   <a href="../../../../../login/index.htm"><i class="fa fa-facebook"></i></a>
					   <a href="#"><i class="fa fa-twitter"></i></a>
					   <a href="#"><i class="fa fa-linkedin"></i></a>
					   <a href="#"><i class="fa fa-dribbble"></i></a>
				   </div><!--/teamcolumninner end-->
			   </div><!--/teamcolumn end-->
			   <div class="col-lg-3 col-md-3 col-sm-3 teamcolumn startAnimation animated" data-animate="fadeInUp">
				   <img src="images/natalia.jpg" alt="">
				   <div class="teamcolumninner">
					   <h3>Natalie Choo</h3>
					   <p>Executive Secretary</p>
					   <a href="../../../../../login/index.htm"><i class="fa fa-facebook"></i></a>
					   <a href="#"><i class="fa fa-twitter"></i></a>
					   <a href="#"><i class="fa fa-linkedin"></i></a>
					   <a href="#"><i class="fa fa-dribbble"></i></a>
				   </div><!--/teamcolumninner end-->
			   </div><!--/teamcolumn end-->
			   <div class="col-lg-3 col-md-3 col-sm-3 teamcolumn startAnimation animated" data-animate="fadeInUp">
				   <img src="images/thom.jpg" alt="">
				   <div class="teamcolumninner">
					   <h3>Thom Phiri</h3>
					   <p>Child Protection Officer</p>
					   <a href="../../../../../login/index.htm"><i class="fa fa-facebook"></i></a>
					   <a href="#"><i class="fa fa-twitter"></i></a>
					   <a href="#"><i class="fa fa-linkedin"></i></a>
					   <a href="#"><i class="fa fa-dribbble"></i></a>
				   </div><!--/teamcolumninner end-->
			   </div><!--/teamcolumn end-->
			   <div class="col-lg-3 col-md-3 col-sm-3 teamcolumn startAnimation animated" data-animate="slideInRight">
				   <img src="images/wilson.jpg" alt="">
				   <div class="teamcolumninner">
					   <h3>Wilson J. M Banda</h3>
					   <p>Project Coordinator</p>
					   <a href="../../../../../login/index.htm"><i class="fa fa-facebook"></i></a>
					   <a href="#"><i class="fa fa-twitter"></i></a>
					   <a href="#"><i class="fa fa-linkedin"></i></a>
					   <a href="#"><i class="fa fa-dribbble"></i></a>
				   </div><!--/teamcolumninner end-->
			   </div><!--/teamcolumn end-->

			   <div class="col-lg-3 col-md-3 col-sm-3 teamcolumn startAnimation animated" data-animate="slideInRight">
				   <img src="images/jimmy.jpg" alt="">
				   <div class="teamcolumninner">
					   <h3>Jimmy Mussa</h3>
					   <p>Project Officerr</p>
					   <a href="../../../../../login/index.htm"><i class="fa fa-facebook"></i></a>
					   <a href="#"><i class="fa fa-twitter"></i></a>
					   <a href="#"><i class="fa fa-linkedin"></i></a>
					   <a href="#"><i class="fa fa-dribbble"></i></a>
				   </div><!--/teamcolumninner end-->
			   </div><!--/teamcolumn end-->


			   <div class="col-lg-3 col-md-3 col-sm-3 teamcolumn startAnimation animated" data-animate="slideInRight">
				   <img src="images/toss.jpg" alt="">
				   <div class="teamcolumninner">
					   <h3>Tess James</h3>
					   <p>Trustee</p>
					   <a href="../../../../../login/index.htm"><i class="fa fa-facebook"></i></a>
					   <a href="#"><i class="fa fa-twitter"></i></a>
					   <a href="#"><i class="fa fa-linkedin"></i></a>
					   <a href="#"><i class="fa fa-dribbble"></i></a>
				   </div><!--/teamcolumninner end-->
			   </div><!--/teamcolumn end-->

			   <div class="col-lg-3 col-md-3 col-sm-3 teamcolumn startAnimation animated" data-animate="slideInRight">
				   <img src="images/john.jpg" alt="">
				   <div class="teamcolumninner">
					   <h3>John Chunda</h3>
					   <p>Monitoring and Evaluation Officer</p>
					   <a href="../../../../../login/index.htm"><i class="fa fa-facebook"></i></a>
					   <a href="#"><i class="fa fa-twitter"></i></a>
					   <a href="#"><i class="fa fa-linkedin"></i></a>
					   <a href="#"><i class="fa fa-dribbble"></i></a>
				   </div><!--/teamcolumninner end-->
			   </div><!--/teamcolumn end-->


		   </div><!--/row end-->
	   </div><!--/container end-->
   </section><!--/one section end-->

   <!-- one section -->
   <section class="wrapper100percent section2" id="6">
	   <div class="sectionwrapper"></div>
	   <div class="container">
		   <div class="row startAnimation animated" data-animate="fadeInUp">
			   <div class="col-lg-12">
				   <div class="mainheadlinewrapper">
					   <div class="mainheadline textleft startAnimation animated" data-animate="fadeInUp">
						   <h2>Partners</h2>
					   </div>
				   </div>
			   </div>
		   </div>
	   </div>
	   <div class="container startAnimation animated" data-animate="fadeInUp">
		   <div class="row">
			   <!-- one row -->
			   <div class="onelist col-lg-6">
				   <div class="faqicon">
					   <p>01.</p>
				   </div>
				   <div class="eventstext">
					   <h4>BASW</h4>
					   <p>British Assossiation of Social Workers
					   </p>
				   </div>
			   </div>
			   <!-- one row end -->
			   <!-- one row -->
			   <div class="onelist col-lg-6">
				   <div class="faqicon">
					   <p>02.</p>
				   </div>
				   <div class="eventstext">
					   <h4>CFIF</h4>
					   <p>Children and Families International Foundation
					   </p>
				   </div>
			   </div>
			   <!-- one row end -->
			   <!-- one row -->
			   <div class="onelist col-lg-6">
				   <div class="faqicon">
					   <p>03.</p>
				   </div>
				   <div class="eventstext">
					   <h4>CFT</h4>
					   <p>Citizens for Transformation (CFT)
					   </p>
				   </div>
			   </div>
			   <!-- one row end -->
			   <!-- one row -->
			   <div class="onelist col-lg-6">
				   <div class="faqicon">
					   <p>04.</p>
				   </div>
				   <div class="eventstext">
					   <h4>UNICEF</h4>
					   <p>UNICEF - Malawi
					   </p>
				   </div>
			   </div>
			   <!-- one row end -->
			   <!-- one row -->
			   <div class="onelist col-lg-6">
				   <div class="faqicon">
					   <p>05.</p>
				   </div>
				   <div class="eventstext">
					   <h4>Ministry of Gender</h4>
					   <p>Ministry of Gender, Children and Social Welfare - Malawi
					   </p>
				   </div>
			   </div>
			   <!-- one row end -->
			   <!-- one row -->
			   <div class="onelist col-lg-6">
				   <div class="faqicon">
					   <p>06.</p>
				   </div>
				   <div class="eventstext">
					   <h4>MPS</h4>
					   <p>Malawi Prison Services
					   </p>
				   </div>
			   </div>
			   <!-- one row end -->
		   </div>
	   </div>
   </section>
   <!-- one section end -->


   <section class="wrapper100percent section1" id="3">
    <div class="sectionwrapper"></div> 
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="mainheadlinewrapper">
              <div class="mainheadline startAnimation animated" data-animate="fadeInUp">
                <h2>COVID-19 OUTREACH PROGRAM</h2>
				  <p class="no-border">On 1st May 2021 Mulelewaka in conjunction with Minister of Civic Education and National Unity reached out to communities in Nkhatabay. Buckets, Soap and bags of Cement were donated in schools to help in sanitation. Many activities were carried out to sensitize children on COVID-19. All items were donated by Mulelewaka Foundation with funding from British Social Workers Association (BASW) and Children and Families International Foundation.</p>
			  </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container startAnimation animated" data-animate="fadeInUp">
        <div class="row bloghomepage" id="owl-demo1">

			<?php foreach($covids as $covid): ?>
		  <!-- one item --> 
          <div class="col-lg-12">
            <div class="item">
              <img src="<?php echo base_url() ?>images/covid/<?php echo $covid->picture_url ?>" alt="picture">
              <div class="owl-theme-inner">
                <div class="homeblogmeta">
                </div>
                <div class="owl-theme-inner-text">				 
                  <h4><?php echo $covid->name ?></h4>
                  <p>
					  <?php echo substr($covid->content, 0, 200); ?> ...
                  </p>
                  <a href="#">more</a>
                </div>
              </div>
            </div>
          </div>
		  <!-- one item end -->
			<?php endforeach; ?>

	    </div>
        <div class="row marginbottom1">
          <div class="col-lg-12 textcenter">
            <a class="btn btn-2 btn-2b" href="#"><span>see more news</span></a>
          </div>
        </div>
      </div>
	  <!-- container end --> 
    </section>
	<!-- one section end --> 
	<!-- one section --> 
    <section class="wrapper100percent section2">
	<div class="sectionwrapper" id="4"></div> 
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="mainheadlinewrapper">
              <div class="mainheadline textleft startAnimation animated" data-animate="fadeInUp">
                <h2>Mulelewaka Foundation's Activities</h2>
              </div>
            </div>
          </div>
		  <!-- col-lg-12 end--> 
        </div>
		<!-- row end --> 
        <div class="row startAnimation animated" data-animate="fadeInUp">
          <div class="col-sm-6">
		    <!-- one row --> 
            <div class="onelist">
              <div class="aboutusleft">
                <i class="fa fa-arrow-right"></i>
              </div>
              <div class="eventstext">
                <h4>Child Protection</h4>
                <p>Representing Juveniles and protecting their rights while in Police custody.
					Formation and training of child protection committees, community dialogue meetings, and support to community led initiatives on child protection. Supporting formal education on youth and children who are marginalized both inside and outside police custody
                </p>
              </div>
            </div>
		    <!-- one row end --> 
			<!-- one row --> 
            <div class="onelist">
              <div class="aboutusleft">
                <i class="fa fa-arrow-right"></i>
              </div>
              <div class="eventstext">
                <h4>Livelihoods Support</h4>
                <p>Provision of sustainable and profitable means of livelihoods, training of Income Generating Activities and financial management to children and youth by supporting them to attain vocational skills and provision of basic start up tool kits.
			    </p>
              </div>
            </div>


			<!-- one row end --> 
          </div>
		  <!-- col-sm-6 end --> 
          <div class="col-sm-6">
			  <div class="onelist">
				  <div class="aboutusleft">
					  <i class="fa fa-arrow-right"></i>
				  </div>
				  <div class="eventstext">
					  <h4>Mental Health</h4>
					  <p>MF seeks for funding for this project. It will be implemented through: guidance and counseling, radio talk shows, Youth rehabilitation and skills promotion/capacity building center and community outreach for youth who were formerly detained.
					  </p>
				  </div>
			  </div>

			  <div class="onelist">
				  <div class="aboutusleft">
					  <i class="fa fa-arrow-right"></i>
				  </div>
				  <div class="eventstext">
					  <h4>Education</h4>
					  <p>This is a cross-cutting activity in all the programs of MF. It is an integrated activity. MF will be seeking funds for marginalized children by provision of scholastic materials, school fees and basic materials.
					  </p>
				  </div>
			  </div>
			  <!-- one row end -->
			  <!-- one row -->
			  <div class="onelist">
				  <div class="aboutusleft">
					  <i class="fa fa-arrow-right"></i>
				  </div>
				  <div class="eventstext">
					  <h4>Relief</h4>
					  <p>Provision of food aid, training in food security and agricultural rehabilitation to juvenile centers across the country.
					  </p>
				  </div>
			  </div>
<!--            <a class="btn btn-5 btn-5a icon-chevron-right" href="javascript:;"><span>see more</span></a>-->
          </div>
		  <!-- col-sm-6 end --> 
        </div>
		<!-- row end --> 
      </div>
	  <!-- container end --> 
    </section>
	<!-- one section end -->





	 <!-- one section --> 
     <section class="wrapper100percent section1" id="7">
     <div class="sectionwrapper"></div> 
       <div class="container">
         <div class="row">
           <div class="col-lg-12">
             <div class="mainheadlinewrapper">
               <div class="mainheadline startAnimation animated" data-animate="fadeInUp">
                 <h2>Contact information</h2>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="wrapper100percent">
         <div class="container">
           <div class="row">
             <div class="col-sm-4 address">
               <i class="fa fa-map-marker"></i>
               <ul>
                 <li><h4>Address</h4>
					 <p><?php echo $company_details->physical_location; ?></p>
				 </li>
               </ul>
             </div>
             <div class="col-sm-4 address">
               <i class="fa fa-phone"></i>
               <ul><li><h4>Phone</h4><p><a href="callto:123"><?php echo $company_details->phone; ?></a></p></li>
               </ul>
             </div>
             <div class="col-sm-4 address">
               <i class="fa fa-clock-o"></i>
               <ul><li><h4>Working Time</h4>
					   <p>Mon - Fri: 07:30 - 17:00 H 00</p>
					   <p>Sat: 07:30 - 11:00 H 00</p>
					   <p>Sun: Closed</p>
				   </li>
               </ul>
             </div>
           </div>
         </div>
       </div>
       <div class="wrapper100percent map">
       <div class="wrapper100percent">
         <div class="container startAnimation animated" data-animate="fadeInUp">
           <div class="row">
             <div class="col-sm-12 textcenter">
               <h4>Send email</h4>
               <!-- comment-form -->
               <div>
                 <form action="#" onsubmit="return mySubmitFunction()">
                   <div>
	                 <div id="main">
                       <div class="col-sm-6">
                         <div class="contact1">
                           <p><input type="text" placeholder="Your name" name="name" id="name" class="commentfield">
						   </p>
						 </div>
                           <div class="contact2">
                             <p> <input type="text" placeholder="Your e-mail address" name="email" id="email" class="commentfield">
							 </p>
						   </div>
                         <div class="contact2">
                           <p> <input type="text" placeholder="Subject" name="subject" id="subject" class="commentfield">
						   </p>
						 </div>
                       </div>
                       <div class="col-sm-6">
                         <p><textarea name="comments" placeholder="Your message" id="comments" rows="12" cols="5" class="textarea"></textarea>
						 </p>
                         <div class="buttoncontactwrapper">
                           <p><input type="button" name="submit" id="submit" value="Send!" class="buttoncontact" />
                           </p>
						 </div>
                       </div>
                       <ul class="col-sm-12" id="response"></ul>
                     </div>
				   </div>
                 </form>
			   </div>
			 </div>
             <!-- comment-form-end -->
           </div>
         </div>
       </div>
     </section>
   <script>
	   function mySubmitFunction(e) {
		   e.preventDefault();
		   return false;
	   }
   </script>



