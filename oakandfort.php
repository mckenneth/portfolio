<?php
	$project = 'oakandfort';
	include('header.php');
	include('inc/side.php')
?>

	<main role="main" class="main main--portfolio <?php echo $main_class ?>">

		<?php include('inc/wallpaper.php') ?>

		<article class="project project--<?php echo $project; ?>">
			<div role="heading" class="row--with-border row-content">
				<div class="copy">
					
					<p>OAK + FORT is a retail brand dedicated to a fused culture of art, fashion and exploration.  The brand offers curated collections of minimal and thoughtfully designed garments for both men and women.  I had the privilege of working with OAK + FORT as an in-house Graphic designer and Web developer during the beginning of their establishment in Vancouver and Edmonton.</p>

			     	<p>My work consisted of brand strategy implementation, creative direction, web design and development including print productions.
					</p>

					<p>The company has a strong and clear message and my goal was to implement it prominently on the website. The final product is sleek, clean and approachable that extends the company's core aesthetic and values.</p>


					<hr class="hr--mini"/>
					<dl>	
						<dt>Roles</dt>
						<dd>Art direction &amp; design, User interface, Development</dd>

						<dt>Launched</dt>
						<dd>2011</dd>
					</dl>
				</div>
			</div>
			
			<div class="row">
				<div class="image">
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/oakandfort/home_imac.jpg">
				</div>
			</div>

			<div class="row alignright">
				<div class="image" style="margin-right:-40%;">
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/oakandfort/home_macbook.jpg">
				</div>
			</div>
		    
		    <div class="row">
		        <div class="image">
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