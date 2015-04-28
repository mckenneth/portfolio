<?php 
	$title = "M'c kenneth Licon - KOKKO";
	$description ="KOKKO is a luxury retail boutique curating exclusive fashion, art and lifestyle pieces. With the company's growing demand for online shopping experience, I was brought on board to help launch the company's first digital storefront.";
	$project = 'kokko';
	$copyBrief = "<p>KOKKO is a luxury retail boutique curating exclusive fashion, art and lifestyle pieces. With the company's growing demand for online shopping experience, I was brought on board to help launch the company's first digital storefront.</p>

					<p>The website showcases a broad range of brands for both men and women, ranging from ready-to-wear, high-street-wear, to exclusive high-fashion.  The goal is to create a platform that will encompass all the brands while keeping Kokko's own unique identity intact.  Kokko's wide variety of product offerings presented a great challege. </p>

					 <p>My approach was to simplify the concept and focus on the key elements that KOKKO's consumer value the most: Products, Usability and Accessibility.  The concept utilizes enticing fashion images and clean typography to convey elegance and luxury.  The interface is kept bare and simple with familiar navigation patterns. 


<p>The result is an intuitive website that reflects the company's essence: minimal, inviting and fully shopable on every screen, across several currencies and languages.  KOKKO successfully expanded its business through its new digital storefront.</p>";

	$roles = "Art direction &amp; design, User interface design, Web development";
	$launched = "2013";
	$thelink = "kokko.me";

	include('header.php');
	include('inc/side.php');
?>
	<main role="main" class="main main--portfolio">
		<?php include('inc/wallpaper.php') ?>

		<article class="project project--<?php echo $project; ?>">	
			<div role="heading" class="row--content">					
				<div class="copy">
					<p class='h2'>Luxury online boutique for style savvy consumer.</p>
					<div class="copy__brief text-col-2">
						<?php echo $copyBrief; ?>
					</div>
					<div class="copy__moreinfo">
						<dl>	
							<dt>Roles</dt>
							<dd><?php echo $roles ?></dd>
							<dt>Launched</dt>
							<dd><?php echo $launched ?></dd>
						</dl>
					</div>
				</div>
			</div>			

			<div class="row">
				<div class="image--lg">
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kokko/kokko_index.jpg">
				</div>	
			</div>

			<div class="row">
				<div class="image image--md">
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kokko/kokko_mobile_home.jpg">
				</div>
			</div>
	
			<div class="row">
				<div class="image image--lg">
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kokko/kokko_cat.jpg">
				</div>
			</div>

			<div class="row">
				<div class="image image--lg">	
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kokko/kokko_blog_macbook-ipad.jpg">
				</div>
			</div>

			<div class="row">
				<div class="image image--cropped">		
						<img class="showImg lazy cropped" src="img/spacer.gif" data-original="assets/kokko/kokko_product_imac.jpg">
				</div>
			</div>

			<div class="row">
				<div class="image image--lg">	
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kokko/kokko_product_ipad.jpg">
				</div>
			</div>

			<div class="row">
				<div class="image image--sm">	
					<img class="showImg lazy" src="img/spacer.gif" data-original="assets/kokko/kokko_product_iphone.jpg">
				</div>
			</div>

			<?php include('inc/scrollup.php'); ?>
		</article>
	</main>
<?php include('footer.php') ?>