<?php
$project = 'pekarskystein';
include('header.php');
include('inc/side.php');
?>

<main role="main" class="main main--portfolio <?php echo $main_class ?>">
	<?php include('inc/wallpaper.php') ?>

	<article class="project" id="<?php echo $project ?>">	
	
		<div class="row--with-border">
			<div class="copy">
				<p>Pekarsky Stein is Western Canada's leading boutique job search firm. In collaboration with <a href="http://foundrycommunications.ca" target="_blank" title="Foundry Communications">Foundry Communications</a> and <a href="http://brightaidestudios.ca" target="_blank" title="Brightside Studios">Brightside Studios</a>, I was commissioned to develop a custom Wordpress site with a fully integrated job posting board.</p>
				
				<p>The website contains a several cwontent types and the goal was to create a backend that will make contents easily manageable by the client after deployment. Furthermore, Pekarsky Stein also features a fully functional job posting board.</p>

				<p>The final result is a customized Wordpress site with fully manageable contents. The job board features filterable data and responsive tables for seamless desktop-to-mobile browsing.</p>
			</div>
		</div>

		<div class="row">
			<div class="image">
				<?php showImg('assets/pekarskystein/pekarskystein_001.jpg'); ?>
			</div>
		</div>

		<div class="row">
			<div class="image">
				<?php showImg('assets/pekarskystein/pekarskystein_002.jpg'); ?>
			</div>
		</div>
			
		<div class="row">
			<div class="image">
				<?php showImg('assets/pekarskystein/pekarskystein_003.jpg'); ?>
			</div>
		</div>

		<div class="row">
			<div class="image image--sm">
				<?php showImg('assets/pekarskystein/pekarskystein_006.jpg'); ?>
			</div>
		</div>

		<hr class="line">
		<div class="row">
			<div class="copy">	
				<dl>	
					<dt>Roles</dt>
					<dd>Web development, CMS Implementation</dd>

					<dt>Launched</dt>
					<dd>2012</dd>

					<dt>Link</dt>
					<dd><a href="http://pekarskystein.com" target="_blank" title="Pekarsky Stein">pekarskystein.com</a></dd>
				</dl>
			</div>
		</div>
	<?php include('inc/pagination.php'); ?>  
	</article>
</main>
<?php include('footer.php') ?>