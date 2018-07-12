<?php
/**
 * Template Name: Homepage
 */
$page_data = new TRP_Homepage_Page();
get_header();
?>

<div class="hero" style="background-image: url('<?php echo $page_data->get_hero_image(); ?>')">
	<div class="container">
		<div class="hero__inner">
			<div class="hero__inner-block"></div>
			<div class="hero__inner-block user-generated-content">
				<h1><?php echo $page_data->get_hero_heading(); ?></h1>
				<p><?php echo $page_data->get_content(); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="pg-home">
	<div class="pg-home__spotlight">
		<div class="pg-home__spotlight-inner">
			<div class="pg-home__spotlight-block pg-home__spotlight-block--text user-generated-content">
				<h2><?php echo $page_data->get_spotlight_heading(); ?></h2>
				<p><?php echo $page_data->get_spotlight_content(); ?></p>
			</div>
			<div class="pg-home__spotlight-block">
				<div class="pg-home__spotlight-block-image" style="background-image: url('<?php echo $page_data->get_spotlight_image(); ?>')"></div>
			</div>
		</div>
	</div>
	<div class="pg-home__games">
		<div class="container">
			<div class="pg-home__games-inner">
				<?php if(!empty($page_data->get_game_one_heading())) { ?>
					<div class="pg-home__games-block">
						<?php if(!empty($page_data->get_game_one_image())) { ?>
							<div class="pg-home__games-block-image" style="background-image: url('<?php echo $page_data->get_game_one_image(); ?>')"></div>
						<?php } ?>
						<h2 class="heading heading--alt heading--games-block"><?php echo $page_data->get_game_one_heading(); ?></h2>
						<?php if(!empty($page_data->get_game_one_content())) { ?>
							<div class="pg-home__games-block-content user-generated-content"><?php echo $page_data->get_game_one_content(); ?></div>
						<?php } ?>
					</div>
				<?php } ?>
				<?php if(!empty($page_data->get_game_two_heading())) { ?>
					<div class="pg-home__games-block">
						<?php if(!empty($page_data->get_game_two_image())) { ?>
							<div class="pg-home__games-block-image" style="background-image: url('<?php echo $page_data->get_game_two_image(); ?>')"></div>
						<?php } ?>
						<h2 class="heading heading--alt heading--games-block"><?php echo $page_data->get_game_two_heading(); ?></h2>
						<?php if(!empty($page_data->get_game_two_content())) { ?>
							<div class="pg-home__games-block-content user-generated-content"><?php echo $page_data->get_game_two_content(); ?></div>
						<?php } ?>
					</div>
				<?php } ?>
				<?php if(!empty($page_data->get_game_three_heading())) { ?>
					<div class="pg-home__games-block">
						<?php if(!empty($page_data->get_game_three_image())) { ?>
							<div class="pg-home__games-block-image" style="background-image: url('<?php echo $page_data->get_game_three_image(); ?>')"></div>
						<?php } ?>
						<h2 class="heading heading--alt heading--games-block"><?php echo $page_data->get_game_three_heading(); ?></h2>
						<?php if(!empty($page_data->get_game_three_content())) { ?>
							<div class="pg-home__games-block-content user-generated-content"><?php echo $page_data->get_game_three_content(); ?></div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="pg-home__news">
		<div class="container">
			<div class="pg-home__news-inner">
				<h1 class="heading">News</h1>
				<div class="excerpt">
					<div class="excerpt__image" style="background-image: url('//static1.squarespace.com/static/568e2c9925981db074af4a32/568e342169492e195466ac69/5695950c841aba21e9dee64f/1452643644577/?format=1500w')"></div>
					<div class="excerpt__block">
						<div class="excerpt__details">
							<h3 class="excerpt__details-title">News Article Title</h3>
							<div class="excerpt__details-credits">
								<h4 class="excerpt__details-credits-author">Bob Blogwriter</h4>
								<p class="excerpt__details-credits-date">July 12th, 2018</p>
							</div>
						</div>
						<div class="excerpt__content user-generated-content">Morbi dapibus tortor quis risus venenatis, nec gravida est finibus. Sed ornare fermentum arcu, quis vestibulum tortor volutpat in. Donec turpis massa, bibendum sit amet dui vitae, tempus faucibus tellus. Morbi finibus mollis neque in dignissim. Suspendisse tempor dignissim mauris scelerisque finibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque quam nisl, vestibulum ac ipsum id, facilisis consequat lectus. Aenean vestibulum, orci et posuere dapibus, mi augue tincidunt erat, sit amet molestie mauris urna eget nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed laoreet urna id lectus interdum, ut dignissim nunc vulputate. Donec facilisis iaculis tellus eu tempor. Nulla at nulla nec lectus interdum ullamcorper. Vivamus euismod quis magna vitae consequat. Sed elementum vehicula sapien feugiat iaculis. Vivamus consequat sem in massa congue, id rutrum augue porttitor. </div>
					</div>
				</div>
				<div class="excerpt">
					<!-- hide with php if there is no featured image -->
					<!--<div class="excerpt__image" style="background-image: url('')"></div>-->
					<div class="excerpt__block">
						<div class="excerpt__details">
							<h3 class="excerpt__details-title">News Article Title</h3>
							<div class="excerpt__details-credits">
								<h4 class="excerpt__details-credits-author">Bob Blogwriter</h4>
								<p class="excerpt__details-credits-date">July 12th, 2018</p>
							</div>
						</div>
						<div class="excerpt__content user-generated-content">Morbi dapibus tortor quis risus venenatis, nec gravida est finibus. Sed ornare fermentum arcu, quis vestibulum tortor volutpat in. Donec turpis massa, bibendum sit amet dui vitae, tempus faucibus tellus. Morbi finibus mollis neque in dignissim. Suspendisse tempor dignissim mauris scelerisque finibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque quam nisl, vestibulum ac ipsum id, facilisis consequat lectus. Aenean vestibulum, orci et posuere dapibus, mi augue tincidunt erat, sit amet molestie mauris urna eget nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed laoreet urna id lectus interdum, ut dignissim nunc vulputate. Donec facilisis iaculis tellus eu tempor. Nulla at nulla nec lectus interdum ullamcorper. Vivamus euismod quis magna vitae consequat. Sed elementum vehicula sapien feugiat iaculis. Vivamus consequat sem in massa congue, id rutrum augue porttitor. </div>
					</div>
				</div>
				<div class="excerpt">
					<!-- hide with php if there is no featured image -->
					<!--<div class="excerpt__image" style="background-image: url('')"></div>-->
					<div class="excerpt__block">
						<div class="excerpt__details">
							<h3 class="excerpt__details-title">News Article Title</h3>
							<div class="excerpt__details-credits">
								<h4 class="excerpt__details-credits-author">Bob Blogwriter</h4>
								<p class="excerpt__details-credits-date">July 12th, 2018</p>
							</div>
						</div>
						<div class="excerpt__content user-generated-content">Morbi dapibus tortor quis risus venenatis, nec gravida est finibus. Sed ornare fermentum arcu, quis vestibulum tortor volutpat in. Donec turpis massa, bibendum sit amet dui vitae, tempus faucibus tellus. Morbi finibus mollis neque in dignissim. Suspendisse tempor dignissim mauris scelerisque finibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque quam nisl, vestibulum ac ipsum id, facilisis consequat lectus. Aenean vestibulum, orci et posuere dapibus, mi augue tincidunt erat, sit amet molestie mauris urna eget nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed laoreet urna id lectus interdum, ut dignissim nunc vulputate. Donec facilisis iaculis tellus eu tempor. Nulla at nulla nec lectus interdum ullamcorper. Vivamus euismod quis magna vitae consequat. Sed elementum vehicula sapien feugiat iaculis. Vivamus consequat sem in massa congue, id rutrum augue porttitor. </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





<?php get_footer(); ?>