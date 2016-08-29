<!doctype html>
<html lang="en">
	<head>
		<?php include 'common/snippets/head.html';?>
	</head>
	<body>
		<header>
			<?php include 'common/snippets/header.html';?>
		</header>

		<div id="main-content"> 

			<div id="subpage">
				<div class="container">
					Freely available under GPL 3.0 license !	
				</div>
			</div>
			<div class="container">
				<div class="jumbotron">
					<div id="banner">
						CNELab can visualize data in a highly customized way,<br> and help you better understand it. 
					</div>
					<br>
					<a id="button-start" class="btn btn-primary center-block" href="../quick-start" role="button">Get started now</a>
					<div class="hidden-xs hidden-sm" id="banner-img">
					</div>
				</div>
			</div>

			<div class="container marketing" id="home-marketing">
				<!-- Three columns of text below the carousel -->
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<img class="img-circle" src="common/images/pro.png" alt="Generic placeholder image" width="100" height="100">
						<h2>Professional</h2>
						<p>CNELab has professional interface to visualize and analyze clinical signal.</p>
						<p><a class="btn btn-default" href="#feature-professional" role="button">View details &raquo;</a></p>
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-4 col-md-4 col-sm-4">
						<img class="img-circle" src="common/images/fast.png" alt="Generic placeholder image" width="100" height="100">
						<h2>Fast</h2>
						<p>CNELab is extremely fast in terms of data visualization and processing.</p>
						<p><a class="btn btn-default" href="#feature-fast" role="button">View details &raquo;</a></p>
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-4 col-md-4 col-sm-4">
						<img class="img-circle" src="common/images/scale.png" alt="Generic placeholder image" width="100" height="100">
						<h2>Scalable</h2>
						<p>You can easily extend the app library in CNELab to do customized research.</p>
						<p><a class="btn btn-default" href="#feature-scalable" role="button">View details &raquo;</a></p>
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->

				<!-- START THE FEATURETTES -->

				<hr class="featurette-divider">

				<div class="row featurette" id="feature-professional">
					<div class="col-md-7">
						<h2 class="featurette-heading"> Professional interface. <span class="text-muted">Easy to use.</span></h2>
						<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>
					<div class="col-md-5">
						<img class="featurette-image img-responsive center-block" src="common/images/feature1.png" alt="Professional">
					</div>
				</div>

				<hr class="featurette-divider">

				<div class="row featurette" id="feature-fast">
					<div class="col-md-7 col-md-push-5">
						<h2 class="featurette-heading">Extremely fast. <span class="text-muted">Optimized behind the scenes</span></h2>
						<p class="lead">The performance of CNELab has been the top priority throughout its development. The multithreaded filter engine (c++ mex function) of BioSigPlot has been redeveloped to accomodate both windows and unix system. Multiple filters can be cascaded and cusomized in each channel. In terms of data reviewing, the speed of channel scrolling and time roaming are optimized in Matlab GUI plot. In addition, large scale data review is optimized by automatically sub-sample the signal.  </p>
					</div>
					<div class="col-md-5 col-md-pull-7">
						<img class="featurette-image img-responsive center-block" src="common/images/feature2.jpg" alt="Fast">
					</div>
				</div>

				<hr class="featurette-divider">

				<div class="row featurette" id="feature-scalable">
					<div class="col-md-7">
						<h2 class="featurette-heading">Scalable is the goal. <span class="text-muted">Write customized app.</span></h2>
						<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>
					<div class="col-md-5">
						<img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
					</div>
				</div>

				<hr class="featurette-divider">
			</div>

			<!-- /END THE FEATURETTES -->
		</div>

		<div id="info-page">
			<?php include 'common/snippets/info-page.html';?>
		</div>


		<footer>
			<?php include 'common/snippets/footer.html';?>
		</footer>

		<script src="common/node_modules/clipboard/dist/clipboard.min.js"></script>
		<script src="common/bootstrap/js/jquery-2.2.3.min.js"></script>
		<script src="common/bib-publication-list/build/bib-list-min.js"></script>
		<script src="common/bootstrap/js/bootstrap.min.js"></script>
		<script src="common/js/cnelab.js"></script>
	</body>
</html>

