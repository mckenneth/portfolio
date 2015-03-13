<section class="wallpaper wallpaper--<?php echo $project; ?>">	
	<div class="project-logo">
		<h1><img alt="<?php echo $projTitle ?>" src="assets/<?php echo $project; ?>/<?php echo $project; ?>_logo.png"></h1>
	</div>
	
	<img style="width:100%; height:auto;" src="img/spacer_10x4.png">
	<section class="wallpaper__image-holder">
		<img class="wallpaper__image wallpaper__image-<?php echo $project; ?>" src="assets/<?php echo $project; ?>/<?php echo $project; ?>_wallpaper.jpg">
	</section>
</section>

<?php include('inc/pagination.php')?>
