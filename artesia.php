<?php
$project = 'artesia';
$projTitle = 'Artesia';
include('header.php');
include('inc/side.php')
?>

<main role="main" class="main main--portfolio <?php echo $main_class ?>">
	<?php include('inc/wallpaper.php') ?>

	<article class="project" id="<?php echo $project ?>">	
		
		<div class="row--with-border">

			<div class="copy">

				<p>Artesia is an award winning Community developed by Heritage Pointe Properties. I was brought on board to build a custom Wordpress CMS site that will provide users an online platform to learn about Artesia in an interactive, informative and engaging way.</p>
				
				<p>As the lead developer, I worked closely with the graphic designer and user interface designer to develop an online platform, rich with beautiful contents, advanced features and functionalities.</p>

				<p>One of the main challenges is to implement a responsive community map that provides potential clients and future property owners with up-to-date information about the lots and it's availability through a visual tooltips. Other features implemented are smooth content scrolling, carousel gallery, dynamic sub-menu, customized newsletter system, and a blogging platform.</p>

				<p>The end result is informative, highly engaging and most importantly, easily manageable for the client.</p>
			</div>
		</div>

		<div class="row">
			<div class="image">
				<img src="assets/artesia/artesia_001.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image">
				<img src="assets/artesia/artesia_002.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image">
				<img src="assets/artesia/artesia_003.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image image--sm">
				<img src="assets/artesia/artesia_004.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image">
				<img src="assets/artesia/artesia_005.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image">
				<img src="assets/artesia/artesia_006.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image image--sm">
				<img src="assets/artesia/artesia_007.jpg">
			</div>
		</div>

		<hr class="line">
		<div class="row">
			<div class="copy">	
				<dl>	
					<dt>Role</dt>
					<dd>Web Development, Information Architecture</dd>

					<dt>Launched</dt>
					<dd>2012</dd>

					<dt>Link</dt>
					<dd><a href="http://liveatartesia.com" target="_blank" title="Artesia">liveatartesia.com</a></dd>
				</dl>
			</div>
		</div>
	<?php include('inc/pagination.php'); ?>  
	</article>
</main>
<?php include('footer.php') ?>