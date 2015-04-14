<?php
	$project = 'oakandfort';
	include('header.php');
	include('inc/side.php')
?>

	<main role="main" class="main main--portfolio <?php echo $main_class ?>">

		<?php include('inc/wallpaper.php') ?>

		<article class="project project--<?php echo $project; ?>">
			<div role="heading" class="row--content">
				<div class="copy">
					<p class="h2">Modern minimalism inspired by art, culture, fashion and exploration.</p>
					<div class="copy__brief text-col-2">
					<p>OAK + FORT is a retail brand dedicated to a fused culture of art, fashion and exploration.  The brand offers curated collections of minimal and thoughtfully designed garments for both men and women.</p>

					<p>I had the privilege of working with OAK + FORT as an in-house Graphic designer and Web developer during the beginning of their establishment in Vancouver and Edmonton.</p>

			     	<p>Working in small team, my work consisted of brand strategy implementation, creative direction, web design and development including print design and marketing.
					</p>

					<p>The company has a strong and clear message and my goal was to implement it across all mediums, prominently on the website. The final product is sleek, clean and approachable that extends the company's core aesthetic and values.</p>
					</div>


					<div class="copy__moreinfo">
					<dl>	
						<dt>Roles</dt>
						<dd>Art direction &amp; design, User interface, Web Development</dd>

						<dt>Launched</dt>
						<dd>2011</dd>
					</dl>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="image--lg">
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/oakandfort/home_imac.jpg">
				</div>
			</div>

			<div class="row">
				<div class="image--lg">
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/oakandfort/home_macbook.jpg">
				</div>
			</div>
		    
		    <div class="row">
		        <div class="image--lg">
		        	<img class="showImg lazy" src="img/spacer.gif" data-original="assets/oakandfort/productzoom_macbook.jpg">
		        </div>
		    </div>

			<div class="row">
				<div class="image browser">
		        	<img class="showImg lazy" src="img/spacer.gif" data-original="assets/oakandfort/home_browser.jpg">
		        </div>
		    </div>

		    <div class="row">
		        <div class="image browser">
		        	<img class="showImg lazy" src="img/spacer.gif" data-original="assets/oakandfort/category_browser.jpg">
		        </div>
		    </div>

		    <div class="row">
		        <div class="image browser">
		        	<img class="showImg lazy" src="img/spacer.gif" data-original="assets/oakandfort/product_browser.jpg">
		        </div>
		    </div>

			<?php include('inc/scrollup.php') ?>
		</article>
	</main>
<? include('footer.php') ?>