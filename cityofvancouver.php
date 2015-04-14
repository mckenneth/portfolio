<?php
$project = 'cityofvancouver';
include('header.php');
include('inc/side.php')
?>

<main role="main" class="main main--portfolio <?php echo $main_class ?>">
	<?php include('inc/wallpaper.php') ?>
	
	<article class="project project--<?php echo $project; ?>">
		<div class="row--content">
			
			<div class="copy">
				<p class="h2">Redesigning Vancouver's home on the World Wide Web</p>

				<div class="copy__brief text-col-2">
				<p>During my internship at Ion Brand Design, I was fortunate to have been involved in redesigning the new website for the City of Vancouver alongside few of the city's most talented designers.</p>

				<p>I worked closely with the lead designer to develop several prototypes for the new website: the interactive city map and a visually-rich animated event calendar system.</p>

				<p>On the footer section of every page, the city's neighboorhoods are listed in alphabetical order with its corresponding map on the right.  The map is hightlighted when hovering over its corresponding name and vice versa.  On the other hand, the event calender was an absolute visual treat. Rich coloured dots corrrespond to different types of event, and they pile up accrodingly like a stack of pin balls.</p>

				<p>The completed prototypes, along with the overall design concept were then presented to the city's stakeholders for approval before the final build.</p>


				</div>

				<div class="copy__moreinfo">
				<dl>	
					<dt>Role</dt>
					<dd>Concept developer, Graphic Design Intern</dd>

					<dt>Agency</dt>
					<dd><a href="http://iondesign.ca" target="_blank">Iondesign.ca</a></dd>

					<dt>Link</dt>
					<dd><a href="http://vancouver.ca" target="_blank" title="City of Vancouver">vancouver.ca</a></dd>
				</dl>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="image image--lg">
				<img class="showImg lazy" src="img/spacer.gif" data-original="assets/cityofvancouver/cov_000.jpg">
			</div>
		</div>
		<?php include('inc/scrollup.php'); ?>
	</article>
</main>
<?php include('footer.php') ?>