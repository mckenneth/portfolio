<?php 
	$project = 'kokko';
	include('header.php');
	include('inc/side.php');
?>

	<main role="main" class="main main--portfolio <?php echo $main_class ?>">

		<?php include('inc/wallpaper.php') ?>

		<article class="project" id="<?php echo $project ?>">
		
			<div class="row--with-border">
				<div class="copy">
					<p>KOKKO is a luxury retail boutique curating exclusive fashion, art and lifestyle pieces.  With the company's growing demand for online shopping experience, I was brought on board to help launch the company's first digital storefront.</p>

					<p>The website showcases a broad range of brands for both men and women, from ready-to-wear, high- street-wear, to high-fashion.  My approach is to simplify the concept and focus on the key elements that KOKKO's consumers value the most: Products, Usability and Accessibility.</p>

					<p>The result is an intuitive website that reflects the company's essence -- minimal, inviting and fully shopable on every screen.  KOKKO successfully expanded its business through it's new digital storefront.</p>
				</div>
			</div>


			<div class="row">
				<div class="image">
					<?php showImg('assets/kokko/kokko_index.jpg'); ?>
				</div>
			</div>

			<div class="row row--alignright">
				<div class="image image--md">
					<?php showImg('assets/kokko/kokko_mobile_home.jpg'); ?>
				</div>
			</div>
	
			<div class="row">
				<div class="image image--md" style="padding: 5% 4% 5% 2%;">
					<?php showImg('assets/kokko/kokko_cat.jpg'); ?>
				</div>
			</div>

			<div class="row row--aligncenter">
				<div class="image image--cropped image--gray">
					<div class="cropped">
						<?php showImg('assets/kokko/kokko_product_imac.jpg'); ?>
					</div>
				</div>
			</div>

			<div class="row row--alignright">
				<div class="image image--md">	
					<?php showImg('assets/kokko/kokko_product_ipad.jpg'); ?>
				</div>
			</div>

			<div class="row">
				<div class="image image--sm">	
					<?php showImg('assets/kokko/kokko_product_iphone.jpg'); ?>
				</div>
			</div>

			<hr class="line">
			<div class="row">
				<div class="copy">
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
		<?php include('inc/pagination.php'); ?>
		</article>
	</main>
<?php include('footer.php') ?>