<?php include 'includes/doc_head.php';?>
<div class="header">
	<div class="container">
		<div class="header__inner">
			<a class="header__logo-link" href="<?php echo get_home_url(); ?>">
				<img class="header__logo" src="<?php echo get_theme_mod('header-logo-image'); ?>" alt="Logo"/>
			</a>
			<ul class="header__nav">
				<li class="header__nav-item">
					<a class="header__nav-item-link" href="#">Community</a>
				</li>
				<li class="header__nav-item">
					<a class="header__nav-item-link" href="#">Games</a>
				</li>
				<li class="header__nav-item">
					<a class="header__nav-item-link" href="http://google.com">News</a>
				</li>
				<li class="header__nav-item">
					<a class="header__nav-item-link" href="#">Rules</a>
				</li>
			<!--<?php /* wp_nav_menu([
				'theme_location' => 'header-nav',
				'container' => false,
				'items_wrap' => '%3$s', // this removes the ul wrapper
				'li_classes' => 'header__nav-item',
				'a_classes' => 'header__nav-item-link'
			]); */?>-->
			</ul>
			<a class="btn btn--header" href="#"><?php echo get_theme_mod('header-btn-text'); ?></a>
			<button type="button" class="header__mobile-menu"></button>
		</div>
	</div>
</div>