
<div class="bodywrapper flexslider">
	<!--	<div id="0"></div>-->
	<!-- menu -->
	<!-- menu end -->
	<div class="mainheadlinewrapperpage wrapper100percent startAnimation animated" data-animate="fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="mainheadlinepage">
						<h1>Activism</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper100percent margintop2 startAnimation animated" data-animate="fadeInUp">
		<div class="container">
			<div class="row">
				<div id="masonrycontainer">
					<?php foreach($data as $activism): ?>
					<!-- blogpost one -->
					<article class="col-sm-6 col-xs-12 masonryselector">
						<div class="row">
							<div class="col-sm-12 marginbottom2">
								<div class="item">
									<img src="<?php echo  base_url()?>images/activism/<?php echo $activism->picture_url ?>" alt="picture">
									<div class="owl-theme-inner">
										<div class="homeblogmeta">
										</div>
										<div class="owl-theme-inner-text">
											<h4><?php echo $activism->title ?></h4>
											<p><?php echo substr($activism->content, 0, 200); ?> ...
											</p>
											<a href="<?php echo base_url() ?>activism/<?php echo $activism->slug ?>" class="btn btn-2 btn-2b"><span>more</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
					<!-- blogpost one end -->
					<?php endforeach; ?>


				</div>
				<!-- masonrycontainer end -->
			</div>
			<!-- row end -->
		</div>
		<!-- container end -->
	</div>
	<!-- wrapper100percent end -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 pagination">
				<a href="">3</a>
				<a href="">2</a>
				<a href="">1</a>
			</div>
		</div>
	</div>
	<!-- content is above this -->
	<div class="push"></div>
</div><!-- bodywrapper end -->

