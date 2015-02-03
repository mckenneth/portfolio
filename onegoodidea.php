<?php
$project = 'onegoodidea';
include('header.php');
include('inc/side.php')
?>

<main role="main" class="main main--portfolio <?php echo $main_class ?>">
	<?php include('inc/wallpaper.php') ?>

	<article class="project" id="<?php echo $project; ?>">	
		<div class="row--with-border">
			<div class="copy">
				<p>One Good Idea&#8482; is a non-profit charity contest created by Ion Brand Design to give back to the community by helping sustainable organizations develop a tangible product or service that will contribute to the well-being of our world today.</p>

				<p>While interning at Ion Brand Design, I was given the opportunity to design and develop a website for One Good Idea&#8482;.</p>

				<p>The goal is to communicate One Good Idea's message, inform potential candidates of the requirements and criteria, and also provide users with a tool to submit their entries online. The website must also showcase previous awardees.</p>

				<p>The result is a functional, informative website that follows Ion Brand Design's design DNA, combined with my personal obsession with grid layouts and white spaces.</p>
			</div>
		</div>
		
		<div class="row">
			<div class="image image--lg">
			<?php showImg('assets/onegoodidea/onegoodidea_000.jpg'); ?>
			</div>
		</div>

		<div class="row">
			<div class="image browser">
			<?php showImg('assets/onegoodidea/onegoodidea_004.jpg'); ?>
			</div>
		</div>

		<hr class="line">
		<div class="row">
			<div class="copy">	
				<dl>	
					<dt>Roles</dt>
					<dd>Art direction &amp; Design, User interface, Development</dd>

					<dt>Launched</dt>
					<dd>2011</dd>

					<dt>Link</dt>
					<dd><a href="http://onegoodidea.ca" target="_blank" title="One Good Idea">onegoodidea.ca</a></dd>
				</dl>
			</div>
		</div>
	<?php include('inc/pagination.php'); ?>  
	</article>
</main>
<?php include('footer.php') ?>