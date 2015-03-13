<?php
$project = 'cityofvancouver';
include('header.php');
include('inc/side.php')
?>

<main role="main" class="main main--portfolio <?php echo $main_class ?>">
	<?php include('inc/wallpaper.php') ?>
	
	<article class="project" id="project--<?php echo $project; ?>">
		<div class="row--with-border">
			<div class="copy">
				<p>During my internship at Ion Brand Design, I was fortunate to have been involved in redesigning the new website for the City of Vancouver alongside few of the city's most talented designers.</p>

				<p>I worked closely with the lead designer to develop several prototypes for the new website: the interactive city map and a visually-rich animated event calendar system.</p>

				<p>The completed prototypes, along with the overall design concept were then presented to the city's stakeholders for approval before the final build.</p>

				<hr class="hr--mini"/>
				<dl>	
					<dt>Role</dt>
					<dd>Concept developer, Graphic Design Intern</dd>

					<dt>Agency</dt>
					<dd>Iondesign.ca</dd>

					<dt>Link</dt>
					<dd><a href="http://vancouver.ca" target="_blank" title="City of Vancouver">vancouver.ca</a></dd>
				</dl>
			</div>
		</div>

		<div class="row">
			<div class="image image--lg">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/cityofvancouver/cov_000.jpg">
			</div>
		</div>
		<?php include('inc/scrollup.php') ?> 
	</article>
</main>
<?php include('footer.php') ?>