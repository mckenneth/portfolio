<?php
	$title = "M'c kenneth Licon - Kenton Magazine";
	$description = "KENTON magazine is a leading, global online fashion and lifestyle magazine for young professionals.  Bringing readers to the forefront of fashion, culture and society, KENTON magazine delivers original content from an industry insider’s perspective.";
	$project = 'kenton';
	include('header.php');
	include('inc/side.php')
?>

	<main role="main" class="main main--portfolio">
		<?php include('inc/wallpaper.php') ?>
		<article class="project project--<?php echo $project; ?>">
			<div role="heading" class="row--content">
				<div class="copy">
					<p class="h2">Re-imagining online publication for modern and mobile audience.</p>
					<div class="copy__brief text-col-2">
						<p>KENTON magazine is an online fashion and lifestyle magazine for young professionals.  Bringing readers to the forefront of fashion, culture and society, KENTON magazine delivers original content from an industry insider’s perspective.</p>

						<p>To celebrate a year of successful online publishing, I was commissioned to help redesign KENTON for their growing mobile users.</p>
					
						<p>The new website is fully responsive, featuring a refreshed editorial page, visually rich archive pages with featured article slides, and a non-intrusive related articles. These newly introduced features showed improved usability and overall engagement.
						</p>

						<p>KENTON was relaunched with a refreshed visual design and a sleek user interface, re-imagined for modern and mobile audience.</p>
					</div>	

					<div class="copy__moreinfo">
						<dl>	
							<dt>Roles</dt>
							<dd>Responsive Web Design, CMS Integration/Development</dd>

							<dt>Launched</dt>
							<dd>2013</dd>

							<dt>Link</dt>
							<dd><a href="http://kentonmagazine.com" target="_blank" title="Kenton Magazine">kentonmagazine.com</a></dd>
						</dl>
					</div>
				</div>
			</div>
	        <div class="row">
	        	<div class="image--lg">
	        		<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kenton/kenton_001.jpg">
	        	</div>
	        </div>
	        
			<div class="row">
				<div class="image--lg">
	        		<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kenton/kenton_002.jpg">
	        	</div>
	        </div>
			
			<div class="row">
				<div class="image image--md">
	        		<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kenton/kenton_003.jpg">
	        	</div>
	        </div>

	        <div class="row">
				<div class="image image--md">
	        		<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kenton/kenton_004.jpg">
	        	</div>
	        </div>

	        <div class="row">
	        	<div class="image browser">
	        		<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kenton/kenton_000.jpg">
	        	</div>
	        </div>

			<?php include('inc/scrollup.php') ?> 
		</article>
	</main>
<?php include('footer.php') ?>