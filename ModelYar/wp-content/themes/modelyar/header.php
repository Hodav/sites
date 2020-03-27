<html lang="ru">
	<?php wp_head(); ?>
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content ="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>ModelYar</title>
	 <script src="https://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/img/bg_about_us.jpg);">
<div class="topHeader">
	
	<header class="header">
    <div class="container">
    	<div class="header__body">
    		<div class="header__logo"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo.png" alt="логотип"></div>
    		<div class="header__burger">
    			<span></span>
    		</div>
    		<nav class="header__menu">
    			<ul class="header__list">
    				<?php wp_nav_menu(); ?>
    			</ul>
    		</nav>
		</div>
	</div>
  	</header>