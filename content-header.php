<header id="header">
	<div class="container">
		<nav class="navbar navbar-default row" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div id="headerimg" class="navbar-brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" alt="">
					</a>
				</div>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<div class="hidden-lg">
<?php
wp_nav_menu( array( 
	'theme_location' => 'primary',
	'depth' => 2,
	'container' => false,
	'menu_class' => 'nav navbar-nav',
	//process nav menu using our custom nav walker
	'walker' => new wp_bootstrap_navwalker() 
)); ?>
				</div>
				<div class="visible-lg-block">
<?php
wp_nav_menu( array( 
	'theme_location' => 'primary-large',
	'depth' => 2,
	'container' => false,
	'menu_class' => 'nav navbar-nav',
	//process nav menu using our custom nav walker
	'walker' => new wp_bootstrap_navwalker() 
)); ?>
				</div>
			</div><!-- #navbar-collapse -->
		</nav><!-- site-navigation -->
	</div>
</header>