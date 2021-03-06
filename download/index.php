<!doctype html>
<html lang="en">
	<head>
		<?php include '../snippets/head.html';?>
	</head>
	<body>
		<header><?php include '../snippets/header.html';?></header>

		<div id="main-content"> 
			<div id="subpage">
				<div class="container">
					Download
				</div>
			</div>
			<div class="container" id="download-container">
				<div class="row">	
					<div class="col-md-8 col-lg-8 doc-content" id="download-content">
						<h1>
							How to get CNELab
						</h1>
						<p>CNELab is a free open source <a href="https://www.mathworks.com" target="_blank">Matlab</a> software under <a href=https://github.com/captainjtx/CNELAB/blob/master/COPYING target="_blank">GNU license (GPLv3)</a>. Make sure you have the <a href="quick-start.html">suggested Matlab version</a> installed.</p>
						<h2> Option 1: Get the latest release version </h2> 
						<p>
						The latest release version is
						<a id="cnelab-download-link" href="https://github.com/captainjtx/CNELAB/releases" download>
							CNELab
						</a>
						. Or visit 
						<a href="https://github.com/captainjtx/CNELAB/releases" target="_blank">
							GitHub 
						</a>
						for more release versions. 
			
						</p>
						<h2> Option 2: Get the development version</h2>
						<p> If you are an experienced user, try our latest development version on
						<a href="https://github.com/captainjtx/CNELAB" target="_blank">GitHub</a>. It is consistently updated and we need your help on making it bug free. <a href="https://git-scm.com/" target="_blank">Git</a> is the most popular free and open source version control system. You can find a lot of tutorials on <a href=""> <a href="https://git-scm.com/docs/gittutorial" target="_blank">how to use Git</a>.</p>
						<p>If you have good Matlab programming skill, <a href="https://git-scm.com/docs/git-clone" target="_blank">clone </a> the repository and create your own <a href="https://git-scm.com/docs/git-branch" target="_blank">branch</a>. This way, you can easily keep your customization while updating with our future changes.</p>
						<p> To clone the repository using shell command: </p>
						<div class="code">
							<span id="clone">git clone https://github.com/captainjtx/CNELAB</span>
							<button class="copy-btn" data-clipboard-target="#clone" data-toggle="tooltip" data-placement="top" title="Copy to clipboard" >
								<img src="../icon/clippy.svg" alt="Copy to clipboard">
							</button>
						</div>
						<p>You can also download the <a href="https://github.com/captainjtx/CNELAB/archive/master.zip">zip archive</a> on the <a href="https://github.com/captainjtx/CNELAB" target="_blank">repository's home page</a>. It reflects the latest updates we made. 
					</div>
					<div class="col-md-4 col-lg-4" id="side-bar"></div>
				</div>
			</div>
		</div>

		<div id="info-page">
			<?php include '../snippets/info-page.html';?>
		</div>


		<footer><?php include '../snippets/footer.html';?></footer>

		<script src="../lib/node_modules/clipboard/dist/clipboard.min.js"></script>
		<script src="../bootstrap/js/jquery-2.2.3.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../js/cnelab.js"></script>
		<script src="../js/download.js"></script>
	</body>
</html>

