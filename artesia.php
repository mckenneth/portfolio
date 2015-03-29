<?php
$project = 'artesia';
$projTitle = 'Artesia';
include('header.php');
include('inc/side.php')
?>

<main role="main" class="main main--portfolio <?php echo $main_class ?>">
	<?php include('inc/wallpaper.php') ?>

	<article class="project" id="project--<?php echo $project; ?>">
		<div class="row--with-border" style="background:rgba(40,40,64,0.8); height: 100vh; color: #fff;">
			<p class="h2">Artesia is an award winning Community developed by Heritage Pointe Properties.</p>
			<div class="copy">
				<section class="copy__brief" style="color: #fff; opacity:0.4;">
				<p>Artesia is an award winning Community developed by Heritage Pointe Properties. I was brought on board to build a custom Wordpress CMS site that provides users an online platform to learn about Artesia in an informative and engaging way.</p>
				
				<p>As the lead developer, I worked closely with the graphic designer and user interface designer to develop an online platform, rich with beautiful contents, advanced features and functionalities.</p>

				<p>One of the main challenges is to implement a responsive community map that provides potential clients and future property owners with up-to-date information about the lots and it's availability through a visual tooltips. Other features implemented are smooth content scrolling, carousel gallery, dynamic sub-menu, customized newsletter system, and a blogging platform.</p>

				<p>The end result is informative, highly engaging and most importantly, easily manageable for the client.</p>

				</section>
				<section class="copy__moreinfo">
				<dl>	
					<dt>Role</dt>
					<dd>Web Development</dd>

					<dt>Launched</dt>
					<dd>2012</dd>

					<dt>URL</dt>
					<dd><a href="http://liveatartesia.com" target="_blank" title="Artesia">liveatartesia.com</a></dd>
				</dl>
				</section>
			</div>
		</div>

		<div class="row">
			<div class="image">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/artesia/artesia_001.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/artesia/artesia_002.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/artesia/artesia_003.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image image--sm">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/artesia/artesia_004.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/artesia/artesia_005.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/artesia/artesia_006.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image image--sm">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/artesia/artesia_007.jpg">
			</div>
		</div>

		<?php include('inc/scrollup.php') ?>
	</article>
</main>
<?php include('footer.php') ?>