<?php

get_header();
pageBanner(array(
	'title' => 'Our Campuses',
	'subtitle' => "We have several conveniently located campuses",
));

?>

<div class="container container--narrow page-section">
	<?php

	while (have_posts()) {

		the_post(); 
		

	}

	echo paginate_links();

	?>

	<hr class="section-break"></hr>

	<p>Looking for a recap of past events? <a href="<?php echo site_url('/past-events'); ?>">Checkout out past events archive</a></p>
</div>

<?php

get_footer();

?>