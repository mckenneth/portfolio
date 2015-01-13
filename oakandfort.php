<?php
	$project = 'oakandfort';
	$wallpaper_bg = '#b4b5b7';
	include('header.php');
	include('inc/side.php')
?>

	<main role="main" class="main main--portfolio <?php echo $main_class ?>">

		<?php include('inc/wallpaper.php') ?>

		<article class="<?php echo $project_class ?>" id="<?php echo $project ?>"><!-- 	
			<section class="content-gray">
			</section>	 -->	

			<h2>
				<img class="<?php echo $project_logo ?>" src="assets/<?php echo $project; ?>/<?php echo $project ?>_logo.png">
			</h2>

			<section class="copy">
				<div class="copy__text">
			<p>OAK + FORT is a retail brand dedicated to a fused culture of art, fashion and exploration.  The brand offers curated collections of minimal and thoughtfully designed garments for both men and women.  I had the privilege of working with OAK + FORT as an in-house Graphic Designer and Web Developer during the beginning of their establishment in Vancouver and Edmonton.</p>

	     	<p>
				My work consisted of brand strategy implementation, creative direction, web design and development, including print productions.
			</p>
			<p>The company has a strong and clear message and my goal was to implement it prominently on the website. The final product is sleek, clean and approachable that extends the company's core aesthetic and values.</p>
			</div>
			</section>

			<div class="image-frame image-frame--cropped">
			<img src="assets/oakandfort/home_imac.png">
			</div>
		        


			<div class="frame">
	        <img src="assets/oakandfort/home_browser.png">
	        </div>

	        <div class="frame">
	        <img src="assets/oakandfort/category_browser.png">
	        </div>

	        <div class="image-frame">
	        <img src="assets/oakandfort/productzoom_macbook.png">
	        </div>
			
	
			
		</article>
	</main>

<? include('footer.php') ?>