<?php
	$project = 'arrivehome';
	include('header.php');
	include('inc/side.php')
?>

<main role="main" class="main main--portfolio <?php echo $main_class ?>">
	<?php include('inc/wallpaper.php') ?>

	<article class="project" id="project--<?php echo $project; ?>">
		<div class="row--with-border">
			<div class="copy">
				
				<p>Arrive is a Calgary-based home development company known for their energy conscious building techniques. Devoted to environmental friendly practices, Arrive uses green materials and pushes for energy and water saving features in their home designs.</p>

				<p>I was hired to develop a custom Wordpress site for Arrive, with an intuitive backend system to manage custom content types.</p>

				<p>The result is a fully functional and easily manageable website with a sophisticated backend that the client was very pleased with.</p>
				
				<hr class="hr--mini"/>
				<dl>	
					<dt>Roles</dt>
					<dd>Front-end Development, CMS Integration</dd>

					<!-- <dt>Credits</dt>
					<dd><a href="http://crystaloicle.com/">Art Direction &amp; Design: Crystal Oicle</a></dd> -->

					<dt>Launched</dt>
					<dd>2013</dd>

					<dt>Link</dt>
					<dd><a href="http://arrivehome.ca" target="_blank" title="Arrive Home">arrivehome.ca</a></dd>
				</dl>			
			</div>
		</div>

		<div class="row">
			<div class="image">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/arrivehome/arrivehome_001.jpg">
			</div>
		</div>
		
		<div class="row">
			<div class="image image--lg image--cropped">
				<div class="cropped">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/arrivehome/arrivehome_002.jpg">
				</div>
			</div>
		</div>
		
		<div class="row row--alignleft">
			<div class="image" style="margin-left:-20%;">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/arrivehome/arrivehome_003.jpg">
			</div>
		</div>	
		
		<div class="row">
			<div class="image">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/arrivehome/arrivehome_004.jpg">
			</div>
		</div>	

		<div class="row">
			<div class="image browser">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/arrivehome/arrivehome_index.jpg">
			</div>
		</div>

		<?php include('inc/scrollup.php') ?> 
	</article>
</main>
<?php include('footer.php') ?>