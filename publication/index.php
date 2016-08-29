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
					Pulbication 
				</div>
			</div>
			<div class="container"  >
				<div class="row">
					<div class="col-md-8 col-lg-8 doc-content">
						<h1>Cite us if you found CNELab useful</h1>
						<p>CNELab is a free and open-soure software. You can support it simply by citing it if it is used in your research.
						</p>
						<h2>Official publication of CNELab software</h2>
						<p>Under preparation, coming soon...</p>
						<h2>Publications using CNELab</h2>
						<table id="pubTable" class="display"></table>
						<h2>Others from our lab</h2>
					</div>
					<div class="col-md-4 col-lg-4" id="side-bar"></div>
				</div>
			</div>
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
		<script src="publication.js"></script>
	</body>
</html>

