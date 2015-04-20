<?php
	$title = "M'c kenneth Licon - Pekarsky Stein";
	$description = "Pekarsky Stein is Western Canada's leading boutique search firm.";
	$project = 'pekarskystein';
	include('header.php');
	include('inc/side.php');
?>

<main role="main" class="main main--portfolio <?php echo $main_class ?>">
	<?php include('inc/wallpaper.php') ?>

	<article class="project project--<?php echo $project; ?>">
		<div class="row--content" data-midnight="white">
			<div class="copy">
				<p class="h2">Sophisticated tools connecting greats talents with equally great organizations.</p>
				
				<div class="copy__brief text-col-2">
				<p>Pekarsky Stein is Western Canada's leading boutique search firm. In collaboration with <a href="http://foundrycommunications.ca" target="_blank" title="Foundry Communications">Foundry Communications</a> and <a href="http://brightsidestudios.ca" target="_blank" title="Brightside Studios">Brightside Studios</a>, I was commissioned to develop a custom Wordpress site with a fully integrated job posting board.</p>
				
				<p>The website contains several content types and the goal was to create a backend that will make contents easily manageable by the client after deployment.  Pekarsky Stein also features a fully functional job posting board with a custom function for potential candidates to easily submit applications directly to the specific recruiter.</p>

				<p>The final result is a highly-customized website with fully manageable contents. The job board features filterable data and responsive tables for seamless desktop-to-mobile browsing.</p>
			
				</div>
				<div class="copy__moreinfo">
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
		</div>

		<div class="row">
			<div class="image--lg">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/pekarskystein/pekarskystein_001.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/pekarskystein/pekarskystein_002.jpg">
			</div>
		</div>
			
		<div class="row">
			<div class="image">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/pekarskystein/pekarskystein_003.jpg">
			</div>
		</div>

		<div class="row">
			<div class="image--sm">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/pekarskystein/pekarskystein_006.jpg">
			</div>
		</div>

		<?php include('inc/scrollup.php') ?>
	</article>
</main>
<?php include('footer.php') ?>