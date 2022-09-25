<?php $data=json_decode($data) ?>
  <body class="loading" data-spy="scroll">
    <div class="bodywrapper flexslider">
    <div id="0"></div>
      <!-- menu end -->
      <div class="mainheadlinewrapperpage wrapper100percent startAnimation animated" data-animate="fadeInUp">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="mainheadlinepage">
                <h1><?php  echo $data->title ?></h1>
              </div>
			</div>
          </div>
        </div>
      </div>
      <div class="wrapper100percent margintop2 startAnimation animated" data-animate="fadeInUp">
        <div class="container">
          <div class="row">
            <article class="col-sm-12 marginbottom2"> 
              <div class="item">
                <img style="object-fit: cover;height: 600px;width: 100%;" src="<?php echo base_url() ?>images/activism/<?php echo $data->picture_url ?>" alt="picture">
                <div class="owl-theme-inner">
                  <div class="owl-theme-inner-text">
                    <h4><?php echo $data->title ?></h4>
                    <p><?php echo $data->content ?></p>
                  </div>
                </div>
              </div>
		    </article> 
          </div>
    </div>
	  <!-- content is above this -->
      <div class="push"></div>
	</div><!-- bodywrapper end -->


