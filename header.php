<html <?php language_attributes(); ?> style="margin-top:0!important;">
<head>
	<?php wp_head(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#000000">


</head>
<body>
<header>
    <nav class="navbarsite " id="navbarId">
        <div class="logo-container"><a class="logo" href="#">
                <img class="logo-image" src="<?php echo get_template_directory_uri() . "/assets/images/kalid.svg"; ?>">
            </a></div>
        <a href="#" class='toggle-button'>
            <div class="bar bar-1"></div>
            <div class="bar bar-2"></div>
            <div class="bar bar-3"></div>
        </a>
        <div class="menu-container">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary' ) ); ?>
        </div>
    </nav>

</header>
