<!DOCTYPE HTML>
<html>
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,900|Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/font-awesome/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>
<body>
    <header id="head">
        <section id="headTop">
            <div class="container">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo">Minimalistic</a></h1>
                <nav id="nav">
                    <?php wp_nav_menu( array( 'menu' => 'Navigation' ) ); ?>
                </nav>
            </div>
        </section>
        <section id="headBottom">
            <div class="container">
                <h2><?php bloginfo('name'); ?> </h2>
                <p><?php bloginfo('description'); ?></p>
            </div>
        </section>
    </header>

    <div id="main" class="site-main">