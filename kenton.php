<?php
	$project = 'kenton';
	include('header.php');
	include('inc/side.php')
?>

	<main role="main" class="main main--portfolio">
		
		<?php include('inc/wallpaper.php') ?>

		<article class="project project--<?php echo $project; ?>">
			<div role="heading" class="row--with-border row--content">
				<p class="h2" style="color:#fff;">
				Bringing readers to the forefront of fashion, culture and society
				</p>
				<div class="copy">
					<div class="copy__brief" style="color: rgba( 255, 255, 255, 0.5);">
				        <p>KENTON magazine is a leading global online fashion and lifestyle magazine for young professionals.  To celebrate a year of successful online publishing, I was commissioned to help redesign their website.</p>

						<p>KENTON was relaunched with a refreshed visual design, sophisticated backend technology and a sleek user interface, re-imagined for modern and mobile audience.</p>
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
	        	<div class="image">
	        		<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kenton/kenton_001.jpg">
	        	</div>
	        </div>
	        
			<div class="row">
				<div class="image image--lg">
	        		<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kenton/kenton_002.jpg">
	        	</div>
	        </div>
			
			<div class="row">
				<div class="image image--md">
	        		<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kenton/kenton_003.jpg">
	        	</div>
	        </div>

	        <div class="row--left">
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