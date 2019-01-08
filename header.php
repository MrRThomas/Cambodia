<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	             <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
             <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
             <link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700' rel='stylesheet' type='text/css'>
             <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
             <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="style.css">

	 <title><?php wp_title(''); ?></title>
	 <?php wp_head();?>
</head>
<body>
	<header>
		
		<h1><?php bloginfo( 'name' ); ?></h1>
		<?php
        
            $defaults = array(
              'container' => nav,
              'theme_location' => 'primary-menu',
              'menu_class' => 'main-nav'
            );
            
            wp_nav_menu( $defaults );
        
        ?>
</header>		