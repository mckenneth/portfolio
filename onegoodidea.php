<?php
$project = 'onegoodidea';
include('header.php');
include('inc/side.php')
?>

<main role="main" class="main main--portfolio <?php echo $main_class ?>">
	<?php include('inc/wallpaper.php') ?>

	<article class="<?php echo $project_class ?>" id="<?php echo $project; ?>">	
		<h2>
			<img class="<?php echo $project_logo ?>" src="assets/<?php echo $project; ?>/<?php echo $project; ?>_logo.png">
		</h2>

		<div class="">
		
		<p>One Good IdeaTM is a non-profit charity contest created by Ion Branding + Design to give back to the community by helping sustainable organizations develop a tangible product or service that will contribute to the well-being of our world today.</p>

		<p>While interning at Ion Branding + Design, I was given the opportunity to design and develop a website for One Good IdeaTM.</p>

		<p>The scope: Communicate One Good Idea's message, inform potential candidates of the requirements and criteria, and also provide users with a tool to submit their entries online. The website must also showcase previous awardees.</p>

		<p>The result is a functional, informative website that follows Ion Branding + Design's design DNA, combined with my personal obsession with grid layouts and white spaces.</p>
</div>
		
		<img src="assets/onegoodidea/onegoodidea_001.png">
		<img src="assets/onegoodidea/onegoodidea_002.png">
		<img src="assets/onegoodidea/onegoodidea_003.png">
		<img src="assets/onegoodidea/onegoodidea_004.png">		
	</article>
</main>
<?php include('footer.php') ?>