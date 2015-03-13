<?php 
	$project = 'kokko';
	include('header.php');
	include('inc/side.php');
?>
	<div class="scrolldown">
		<a href="#project" class="button scrollto">Scroll Down</a>
	</div>
	<main role="main" class="main main--portfolio">
		<?php include('inc/wallpaper.php') ?>

		<article class="project project--<?php echo $project; ?>" id="project">	
			<div role="heading" class="row--with-border">
				<div class="copy">
					<p>Kokko is a luxury retail boutique curating exclusive fashion, art and lifestyle pieces. </p>

					<p>With growing demand for online shopping experience, I was brought on board to help launch the company's first digital storefront.  The website showcases a broad range of brands for both men and women, from ready-to-wear, street-wear, to high-fashion.  My approach is to simplify the concept and focus on the key elements that consumers value the most: Products, Usability and Accessibility.</p>

					<p>The result is an intuitive website that reflects the company's essence: minimal, inviting and fully shopable on every screen.  KOKKO successfully expanded its business through its new digital storefront.</p>
					
					<hr class="hr--mini"/>
					<dl>	
						<dt>Roles</dt>
						<dd>Art direction &amp; design, User interface, Development</dd>

						<dt>Launched</dt>
						<dd>2013</dd>

						<dt>Link</dt>
						<dd><a href="http://kokko.me" target="_blank" title="KOKKO - Luxury Boutique">kokko.me</a></dd>
					</dl>
				</div>
			</div>			

			<div class="row">
				<div class="image">
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kokko/kokko_index.jpg">
				</div>	
			</div>

			<div class="row">
				<div class="image image--md">
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kokko/kokko_mobile_home.jpg">
				</div>
			</div>
	
			<div class="row">
				<div class="image image--md" style="padding: 5% 4% 5% 2%;">
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kokko/kokko_cat.jpg">
				</div>
			</div>

			<div class="row">
				<div class="image image--lg">	
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kokko/kokko_blog_macbook-ipad.jpg">
				</div>
			</div>

			<div class="row row--aligncenter">
				<div class="image image--cropped">		
						<img class="showImg lazy cropped" src="img/spacer.gif" data-original="assets/kokko/kokko_product_imac.jpg">
				</div>
			</div>

			<div class="row row--alignright">
				<div class="image image--md">	
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kokko/kokko_product_ipad.jpg">
				</div>
			</div>

			<div class="row">
				<div class="image image--sm">	
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kokko/kokko_product_iphone.jpg">
				</div>
			</div>

		<?php include('inc/scrollup.php') ?>
		</article>
	</main>
<?php include('footer.php') ?>