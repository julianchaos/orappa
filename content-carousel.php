<?php
$imagemTelasPequenas = get_field('imagem_telas_pequenas');
$args = array('post_type' => 'carrossel-item');
$the_query = new WP_Query($args);
$totalCarrosselItem = $the_query->post_count;

?>
<section id="content_carousel" class="content-carousel">
	<div id="carousel-generic" class="carousel slide hidden-xs" data-ride="carousel">

		<!-- Indicators -->
		<ol class="carousel-indicators">
<?php
for ($i = 0; $i < $totalCarrosselItem; $i++) {
	echo "<li data-target='#carousel-generic' data-slide-to='$i' ";
	if($i===0) {echo "class='active'";}
	echo "></li>";
}
?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
<?php
$i = 0;
while ($the_query->have_posts()):
	$the_query->the_post(); 
?>
			<div class="item <?php if($i===0){echo 'active';}?>">
<?php
	get_template_part('carrossel', get_field('tipo_item'));
?>
			</div>
			
<?php
	$i++;
endwhile;
?>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="visible-xs-block">
		<img src="<?php echo $imagemTelasPequenas ?>" class="carousel-xs-img" />
	</div>
</section>