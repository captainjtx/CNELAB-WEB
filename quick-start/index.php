<!doctype html>
<html lang="en">
	<head>
		<?php include '../snippets/head.html';?>
	</head>
	<body>
		<header>
			<?php include '../snippets/header.html';?>
		</header>

		<div id="main-content"> 
			<div id="subpage">
				<div class="container">
					It is easy to use CNELab !		
				</div>
			</div>
			<div class="container doc-content" id="quick-start-content" >
				<div class="row">
					<div class="col-xs-9">
						<h1>Getting started with CNELab</h1>
						<p>Getting started with CNELab is fairly easy. It only took a few minutes to complete this tutorial step by step.</p>
						<section id="preparation">
							<h2>Preparations</h2>
							<p>We recommend using the latest Matlab release version, currently R2016a. However, most features of CNELab should be backward compatible up to R2014a. Starting R2014b, <a href="http://www.mathworks.com/help/matlab/graphics_transition/major-graphics-changes-in-r2014b.html" target="_blank">Matlab updated on its graphic system</a>. CNELab experienced a major performance drop (especially in plotting speed) in R2014b and R2015a. Thus, it is not recommended to use R2014b, R2015a or any version before R2014a.</p>
							<p>CNELab depends on several basic toolboxes of Matlab. Most of time they already come with your license. 
							<ul>
								<li><a href="http://www.mathworks.com/products/signal/" target="_blank">Signal Processing Toolbox.</a>
									<li><a href="http://www.mathworks.com/products/statistics/" target="_blank">Statistics and Machine Learning Toolbox.</a>
										<li><a href="http://www.mathworks.com/products/wavelet/" target="_blank">Wavelet Toolbox.</a>
							</ul>
							</p>
							<p>You can type <span class="code">ver</span> in Matlab command window to verify.</p>
						</section>
						<section id="installation">
							<h2>Install CNELab</h2>
							<p>If do not have CNELab yet, please refer to our <a href="download.html">download</a> page. Once you download the zip file, unzip it and put it anywhere you prefer.</p>
							<p>Change your <a href="http://www.mathworks.com/help/matlab/ref/pwd.html" target="_blank">current Matlab path</a> to the root folder of CNELab, where you can see files such as <span class="code">cnelab.m</span> and <span class="code">setup.m</span>.</p>
							<p>Run <span class="code">setup.m</span> by typing it in command window (ignore the prompt sign <span class="code">&gt;&gt;</span>):</p>
							<div class="code">
								<span>&gt;&gt; setup</span>
								<button class="copy-btn" data-clipboard-text="setup" data-toggle="tooltip" data-placement="top" title="Copy to clipboard" >
									<img src="../icon/clippy.svg" alt="Copy to clipboard">
								</button>
							</div>
							<p>If you receive no error message, congratulations !</p>
						</section>
						<section id="setup">
							<h2>More on setup.m</h2>
							<p>Although <span class="code">setup</span> automatically removes exsited CNELab from Matlab Path, it is always a good practice to manually delete the CNELab folder.</p>
							<p><span class="code">setup</span> will check if your java JVM version used in Matlab lands in <span class="code">1 . 7 . &#42;</span> . Most of time you should not worry about it as Matlab shipped its version with specific JVM after R2013b. Type <span class="code">version -java</span> to verify yourself.</p>
							<p><span class="code">setup</span> tries to recompile c++ mexfunctions in CNELab to your system environment. However, our release already contains compiled mexfunctions that can be immediately used in 64-bit of MacOS/Windows computer. Only if it is a unix or 32-bit system should you be careful. If you received a mex compile error, you would have to check your c++ compiler on maltab and manually compile them. Type <span class="code">mex -setup c++</span> to verify yourself.</p>
						</section>
						<section id="start">
							<h2>Start with demo</h2>
							<p>The best way to learn CNELab is to use it:</p>
							<div class="code">
								<span>&gt;&gt; cnelab</span> 
								<button class="copy-btn" data-clipboard-text="cnelab" data-toggle="tooltip" data-placement="top" title="Copy to clipboard" >
									<img src="../icon/clippy.svg" alt="Copy to clipboard">
								</button>
							</div>
							<p>Open <span class="code">$CNELAB_ROOT/demo/demo.cds</span> to explore yourself.</p>
						</section>
					</div>
					<nav class="col-xs-3 bs-docs-sidebar">
						<ul class="nav nav-stacked" data-spy="affix" data-offset-top="200" id="nav-sidebar">
							<li><a href="#preparation">Preparation</a></li>
							<li><a href="#installation">Install CNELab</a></li>
							<li><a href="#setup">More on setup.m</a></li>
							<li><a href="#start">Start with demo</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div id="info-page">
			<?php include '../snippets/info-page.html';?>
		</div>


		<footer>
			<?php include '../snippets/footer.html';?>
		</footer>

		<script src="../lib/node_modules/clipboard/dist/clipboard.min.js"></script>
		<script src="../bootstrap/js/jquery-2.2.3.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../js/cnelab.js"></script>
	</body>
</html>

