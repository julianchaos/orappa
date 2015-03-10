<?php
/**
 * Template Name: News
 */
?>
<section id="page_<?php echo $post->post_name ?>" class="content-news page_<?php the_id() ?> visible-lg-block">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-3">
				<h1><?php the_title() ?></h1>
			</div>
		</div>
		<div class="row">
<?php
$args = array("post_type" => "post", "order" => "DESC", "orderby" => "date", "posts_per_page" => 3);
$the_query = new WP_Query($args);

if (have_posts()):
	while ($the_query->have_posts()):
		$the_query->the_post(); ?>
			<div class="col-lg-4">
				<div class="post-image">
					<?php the_post_thumbnail('home-news-thumb') ?>
				</div>
				<div class="post-date"><?php the_date('j/m/Y') ?></div>
				<h2><?php the_title() ?></h2>
				<p><?php the_excerpt() ?></p>
				<a href="<?php the_permalink() ?>" class="permalink colorbox">&gt; Leia mais</a>
			</div>
		
<?php		
	endwhile;
endif;
?>
		</div>
	</div>
</section>