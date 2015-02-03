<?php
$project = 'stringamdenecky';
$projTitle = 'Stringam Denecky';
include('header.php');
include('inc/side.php')
?>

<main role="main" class="main main--portfolio <?php echo $main_class ?>">
	<?php include('inc/wallpaper.php') ?>

	<article class="project" id="<?php echo $project; ?>">	
		
		<div class="row--with-border">
			<div class="copy">
				<p>Stringam Denecky is a Canadian boutique law firm committed in providing the very best legal services for over a hundred year. With offices located in Lethbridge, Medicine Hat, Brooks, Fort McMurray, Taber and Raymond, Stringam works with experienced team, handling a variety of cases in all areas of law, from family and divorce to business, agriculture, and personal injury.</p>

				<p>In early 2013, I was commissioned to develop a custom Wordpress website for Stringam Denecky -- taking the initial web design and turning it into a fully functioning responsive website.</p>

				<p>The final product is a sophisticated, highly customizable with fully manageable contents.</p>
			</div>
		</div>

		<div class="row">
			<div class="image">
				<?php showImg('assets/stringamdenecky/stringam_000.jpg'); ?>
			</div>
		</div>

		<div class="row">
			<div class="image">
				<?php showImg('assets/stringamdenecky/stringam_001.jpg'); ?>
			</div>
		</div>

		<div class="row">
			<div class="image">
				<?php showImg('assets/stringamdenecky/stringam_002.jpg'); ?>
			</div>
		</div>

		<div class="row">
			<div class="image">			
				<?php showImg('assets/stringamdenecky/stringam_003.jpg'); ?>
			</div>
		</div>

		<div class="row">
			<div class="image image--md">			
				<?php showImg('assets/stringamdenecky/stringam_003a.jpg'); ?>
			</div>
		</div>

		<div class="row">
			<div class="image">
				<?php showImg('assets/stringamdenecky/stringam_004.jpg'); ?>
			</div>
		</div>

		<div class="row">
			<div class="image">
				<?php showImg('assets/stringamdenecky/stringam_005.jpg'); ?>
			</div>
		</div>

		<div class="row">
			<div class="image">
				<?php showImg('assets/stringamdenecky/stringam_006.jpg'); ?>
			</div>
		</div>

		<div class="row">
			<div class="image image--md">
				<?php showImg('assets/stringamdenecky/stringam_007.jpg'); ?>
			</div>
		</div>

		<div class="row">
			<div class="image image--sm">
				<?php showImg('assets/stringamdenecky/stringam_008.jpg'); ?>
			</div>
		</div>

		<hr class="line">
		<div class="row">
			<div class="copy">	
				<dl>	
					<dt>Roles</dt>
					<dd>Web Development</dd>

					<dt>Launched</dt>
					<dd>2013</dd>

					<dt>Link</dt>
					<dd><a href="http://stringam.ca" target="_blank" title="Stringam Denecky">stringam.ca</a></dd>
				</dl>
			</div>
		</div>
 	<?php include('inc/pagination.php'); ?>  
	</article>
</main>
<?php include('footer.php') ?>