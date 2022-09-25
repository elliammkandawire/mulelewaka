
<div class="bodywrapper flexslider">
	<!--	<div id="0"></div>-->
	<!-- menu -->
	<!-- menu end -->
	<div class="mainheadlinewrapperpage wrapper100percent startAnimation animated" data-animate="fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="mainheadlinepage">
						<h1>News</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper100percent margintop2 startAnimation animated" data-animate="fadeInUp">
		<div class="container">
			<div class="row">
				<div id="masonrycontainer">
					<!-- blogpost one -->
					<?php foreach ($data as $article): ?>
					<article class="col-sm-6 col-xs-12 masonryselector">
						<div class="row">
							<div class="col-sm-12 marginbottom2">
								<div class="item">
									<img style="object-fit: cover; height: 300px" src="<?php  echo base_url() ?>images/news/<?php echo $article->picture_url ?>" alt="picture">
									<div class="owl-theme-inner">
										<div class="homeblogmeta">
											<p>By: <a href=""> <?php echo $article->author ?></a></p>
											<p class="no-border"> <a href="">
													<?php
													   $date=date_create($article->date);
													   echo date_format($date,"d M Y");
													?>
												</a></p>
										</div>
										<div class="owl-theme-inner-text">
											<h4><?php echo $article->title ?></h4>
											<p>
												<?php echo substr($article->content,0,200);  ?>...
											</p>
											<a href="<?php echo base_url()  ?>news/<?php echo $article->slug ?>" class="btn btn-2 btn-2b"><span>more</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
					<?php  endforeach; ?>
					<!-- blogpost one end -->
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

