<section id="content_carousel" class="content-carousel">
<?php
if( have_rows('carrossel')) :
	$totalImages = count(get_field('carrossel'));
?>
	<div id="carousel-generic" class="carousel slide hidden-xs" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
<?php
	for ($i = 0; $i < $totalImages; $i++) {
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
	while( have_rows('carrossel')) :
		the_row(); 
		$carrosselImgObj = get_sub_field('imagem_carrossel'); ?>
			<div class="item <?php if($i===0){echo 'active';}?>">
				<div class="img-bg">
					<img src="<?php echo $carrosselImgObj['url'] ?>" width="<?php echo $carrosselImgObj['width'] ?>" height="<?php echo $carrosselImgObj['height'] ?>">
				</div>
				<img src="<?php echo $carrosselImgObj['url'] ?>" width="<?php echo $carrosselImgObj['width'] ?>" height="<?php echo $carrosselImgObj['height'] ?>">
			</div>
			
<?php
		$i++;
	endwhile; ?>
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
<?php
endif;
?>
	<div class="visible-xs-block">
		<img src="<?php the_field('imagem_telas_pequenas') ?>" class="carousel-xs-img" />
	</div>
</section>