<?php
/**
 * Template Name: Redes Sociais
 */
?>
<section id="page_<?php the_id() ?>" class="content-redessociais page_<?php the_id() ?>">
	<div class="container">
		<div class="row">
			<h1 class="col-xs-12"><?php the_title() ?></h1>
		</div>
		<div class="row">
			<div class="visible-lg col-lg-12">
				<div class="rede-social-item">
					<h4>Soundcloud</h4>
					<div>
						<iframe width="100%" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/59484115&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-lg-6">
				<div class="row">
					<div class="col-xs-12 col-lg-6 rede-social-item">
						<h4>Twitter</h4>
						<div>
							<a class="twitter-timeline" href="https://twitter.com/ORappaoficial"
							   height="285" data-widget-id="565328120090476546">Tweets by @ORappaoficial</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
					</div>
					<div class="col-xs-12 col-lg-6 rede-social-item">
						<h4>Facebook</h4>
						<div>
							<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Forappa&amp;width&amp;height=395&amp;colorscheme=dark&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false&amp;appId=525999617415472" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:395px;" allowTransparency="true"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-lg-3">
				<div class="rede-social-item">
					<h4>Flickr</h4>
					<div>
						<div style='position: relative; padding-bottom: 101%; height: 0; overflow: hidden;'><iframe id='iframe' src='http://flickrit.com/slideshowholder.php?height=100&size=big&userId=orappa_oficial&thumbnails=0&transition=0&layoutType=responsive&sort=0' scrolling='no' frameborder='0'style='width:100%; height:100%; position: absolute; top:0; left:0;' ></iframe></div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-lg-3">
				<div class="rede-social-item">
					<h4>Instagram</h4>
					<div>
						<?php echo do_shortcode('[enjoyinstagram_mb_grid]') ?>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>