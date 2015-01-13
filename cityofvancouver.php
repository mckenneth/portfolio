<?php
$project = 'cityofvancouver';
$wallpaper_bg = '#004986';
// $wallpaper_height = 56; /* in rem */
include('header.php');
include('inc/side.php')
?>

<main role="main" class="main main--portfolio <?php echo $main_class ?>">
	<?php include('inc/wallpaper.php') ?>
	<article class="<?php echo $project_class ?>" id="<?php echo $project ?>">	
		<h2>
			<img class="<?php echo $project_logo ?>" src="assets/<?php echo $project ?>/<?php echo $project ?>_logo.png">
		</h2>

		<div class="copy">
			<p class="copy__text">During my internship at Ion Branding + Design, I was very fortunate to have been involved in designing a new website for the City of Vancouver, alongside the city's most talented designers.</p>

<p class="copy__text">While working closely with the lead designer, I was tasked to develop a couple of prototypes for the new website: the interactive city map and a visually-rich animated event calendar system.</p>

<p class="copy__text">My immediate approach was to conduct a research, gather possible options and then select the best solution in implementing the requested functionalities.</p>

<p class="copy__text">The completed prototypes, along with the overall design concept were then presented to the city's stakeholders for approval before the final build.</p>

		</div>

		<img src="assets/cityofvancouver/cov_001.png">

<!-- 		<img src="assets/cityofvancouver/cov_002.png"> -->

		<img src="assets/cityofvancouver/cov_003.png">
		
	</article>
</main>
<?php include('footer.php') ?>