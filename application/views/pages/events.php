
  <body class="loading" data-spy="scroll"> 
    <div class="bodywrapper flexslider">
    <div id="0"></div> 
      <!-- menu -->
      <!-- menu end -->
      <div class="mainheadlinewrapperpage wrapper100percent startAnimation animated" data-animate="fadeInUp">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="mainheadlinepage">
                <h1>Events</h1>
              </div>
			</div>
          </div>
        </div>
      </div>
      <div class="wrapper100percent eventsinglewrapper startAnimation animated" data-animate="fadeInUp">
	    <!-- event list -->
        <div class="container eventsingle"> 
          <div class="row marginbottom2">

			  <?php foreach($data as $event): ?>
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
	  <!-- wrapper100percent eventsinglewrapper end -->

      <!-- one section end --> 
	  <!-- content is above this -->
      <div class="push"></div>
	</div><!-- bodywrapper end -->
