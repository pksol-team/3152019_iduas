<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lato.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom_style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="content-wrapper">
<header id="header" role="banner">
<div class="container">
	<div class="row">
		<div class="col-sm-5 col-md-5 logo"><?php dynamic_sidebar( 'logo' ); ?></div>
		<div class="col-sm-7 col-md-7 menu">
			<div class="row">
				<div class="col-md-8">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</div>
				<div class="col-md-4">
					<span class="header-search fright">
					    <a title="Search" class="search-link"><i class="fa fa-search"></i></a>
					    <div class="search-area">
						    <span class="tip home-icon"></span>
						    <div class="searcharea-inner">
						        <div class="ms-mpSearchBox">
						            <div class="search">
						               <form role="search" method="get" class="search-form" action="http://saudi.test/">
						                  <label>
						                  <input type="search" class="search-field searchtxt fleft" placeholder="Search..." value="" name="s">
						                  <button type="submit" class="searchbtn fright"><i class="fa fa-search"></i></button>
						                  </label>
						               </form>
						            </div>
						        </div>
						    </div>
						</div>
					</span>
					<?php dynamic_sidebar('header_right'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
</header>
<div id="container">