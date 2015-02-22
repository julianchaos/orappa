<?php 
$carrosselImgObj = get_field('carrossel_imagem') ?>
<div class="img-bg">
	<img src="<?php echo $carrosselImgObj['url'] ?>" width="<?php echo $carrosselImgObj['width'] ?>" height="<?php echo $carrosselImgObj['height'] ?>">
</div>
<img src="<?php echo $carrosselImgObj['url'] ?>" width="<?php echo $carrosselImgObj['width'] ?>" height="<?php echo $carrosselImgObj['height'] ?>">