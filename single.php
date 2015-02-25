<?php
get_header();
if ( have_posts() ):
	while ( have_posts() ) : 
		the_post();
?>
<section id="post_<?php the_id() ?>" class="content-post post_<?php the_id() ?>">
	<div class="container">
		<div class="row">
			<h4 class="date"><?php echo get_the_date('j/m/Y') ?></h4>
			<h1><?php the_title() ?></h1>
			<p><?php the_content() ?></p>
		</div>
		<div class="row">
			<?php comments_template( '', true ); ?>
		</div>
	</div>
</section>
<?php
	endwhile;
endif;
get_footer();