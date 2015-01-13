<?php
	if ($wallpaper_bg !='') {
		$wpbg = 'style="background:'. $wallpaper_bg .'"';
	}
?>

<section class="wallpaper" <?php echo $wpbg ?>>
	<img style="width:100%; height:auto;" src="img/spacer_10x4.png">
	<section class="wallpaper__image-holder">
		<img class="wallpaper__image" src="assets/<?php echo $project; ?>/<?php echo $project; ?>_wallpaper.jpg">
	</section>
</section>