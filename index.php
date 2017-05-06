
<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">

<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>

<!-- Begin Meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- -END- Meta -->

<!-- Begin Styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" />
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<!-- -END- Styles -->

<!-- Begin Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<!-- -END- Scripts -->

<!-- Begin FlexSlider -->
<script type="text/javascript" charset="utf-8">
	$(window).load(function() { //prepare function during window load
		$('.flexslider').flexslider(); //pull Flexslider Function
	});
</script>
<!-- -END- FlexSlider -->

<!-- Begin Navigation Drop-Down Function -->
<script type="text/javascript" charset="utf-8">
	$(window).load(function() { //prepare function during window load
		$("#toggle").click(function() { // when ID of 'toggle' is clicked
			$("#navigation").toggle(); // change CSS setting
		});
	});
</script>
<!-- -END- Navigation Drop-Down Function -->

<!-- Adobe Typekit Code -->
<script src="https://use.typekit.net/qwp8tzf.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- Adobe Typekit Code End -->

<!-- Begin WP Head Function -->
<?php wp_head(); ?>
<!-- -EBD- WP Head Function -->

</head>
<body <?php body_class(); ?>>

<!-- Begin Header -->
<div id="header">
	<h1 id="logo"><a href="main.html"><?xml version="1.0" encoding="utf-8"?>

<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 554.2 175.2" style="enable-background:new 0 0 554.2 175.2;" xml:space="preserve">
<style type="text/css">
	.st0{enable-background:new    ;}
	.st1{fill:#FFFFFF;}
</style>
<g>
	<g class="st0">
		<path class="st1" d="M174.4,114.5c2.9,0,5.3,0.3,7.2,2c2.1,1.8,2.6,4.4,2.6,6.2c0,4.1-2.5,8.1-9.1,8.1h-2.8v12.5h-3.2v-28.8H174.4
			z M172.4,127.7h2.6c3.8,0,6.1-1.9,6.1-5.2c0-4.6-4.3-5-6.3-5h-2.4V127.7z"/>
		<path class="st1" d="M216.1,114.5c1.9,0,4.8,0.1,7,1.6c1.7,1.1,3.1,3.3,3.1,6.4c0,4.4-2.9,7.6-7.2,7.9l9.1,12.9h-3.9l-8.8-12.6
			h-0.8v12.6h-3.2v-28.8H216.1z M214.7,127.8h2c4,0,6.3-1.9,6.3-5.3c0-1.6-0.5-3.2-2.3-4.2c-1.3-0.7-2.8-0.8-4.1-0.8h-1.9V127.8z"/>
		<path class="st1" d="M270.8,117.5H259v8.5h11.4v3H259v11.2h11.7v3h-14.9v-28.8h14.9V117.5z"/>
		<path class="st1" d="M312.2,120.2c-0.4-0.8-1-1.6-1.7-2.2c-0.6-0.4-1.6-1-3.2-1c-2.8,0-4.8,1.8-4.8,4.4c0,1.1,0.3,1.8,1.1,2.5
			c0.9,0.9,1.9,1.3,3,1.8l2.8,1.2c1.7,0.7,3.2,1.5,4.4,2.7c1.5,1.5,2.1,3.1,2.1,5.2c0,5.3-3.9,8.8-9.1,8.8c-1.9,0-4.3-0.4-6.3-2.3
			c-1.4-1.4-2.3-3.4-2.7-5.1l3.1-0.9c0.2,1.5,0.9,2.8,1.7,3.7c1.3,1.3,2.7,1.6,4.1,1.6c3.9,0,5.8-2.8,5.8-5.7c0-1.3-0.4-2.4-1.4-3.4
			c-0.8-0.8-1.9-1.3-3.4-2l-2.6-1.2c-1.1-0.5-2.5-1.1-3.8-2.4c-1.3-1.2-2-2.5-2-4.7c0-4.4,3.4-7.4,8.1-7.4c1.8,0,3.2,0.3,4.6,1.3
			c1.2,0.8,2.2,1.9,2.8,3.2L312.2,120.2z"/>
		<path class="st1" d="M356.3,120.2c-0.4-0.8-1-1.6-1.7-2.2c-0.6-0.4-1.6-1-3.2-1c-2.8,0-4.8,1.8-4.8,4.4c0,1.1,0.3,1.8,1.1,2.5
			c0.9,0.9,1.9,1.3,3,1.8l2.8,1.2c1.7,0.7,3.2,1.5,4.4,2.7c1.5,1.5,2.1,3.1,2.1,5.2c0,5.3-3.9,8.8-9.1,8.8c-1.9,0-4.3-0.4-6.3-2.3
			c-1.4-1.4-2.3-3.4-2.7-5.1l3.1-0.9c0.2,1.5,0.9,2.8,1.7,3.7c1.3,1.3,2.7,1.6,4.1,1.6c3.9,0,5.8-2.8,5.8-5.7c0-1.3-0.4-2.4-1.4-3.4
			c-0.8-0.8-1.9-1.3-3.4-2l-2.6-1.2c-1.1-0.5-2.5-1.1-3.8-2.4c-1.3-1.2-2-2.5-2-4.7c0-4.4,3.4-7.4,8.1-7.4c1.8,0,3.2,0.3,4.6,1.3
			c1.2,0.8,2.2,1.9,2.8,3.2L356.3,120.2z"/>
	</g>
	<g>
		<g>
			<path class="st1" d="M15.5,117.5C5,106.4,0,93.6,0,72.1c0-15.2,5.5-31.4,16-43.8c7.5-8.8,18.8-18.9,37.1-18.9
				c18.4,0,29.3,11,36.6,15.6s16.1,9.5,24.7,11.4c7.9,1.7,17.9,2,28-3.5c1.1-0.6,2.1-0.3,1.5,1c-1.2,2.8-13.4,8.6-28.3,7
				c-13-1.4-22.4-5.1-31-10.5c-5.2-3.3-19.9-8.8-30-8.8C34.4,21.6,16,48.2,16,72.1c0,18,2.5,27.5,12.5,38.3
				c10.7,11.7,23.8,12.5,33.3,10.2c8.3-2.1,16.5-7.4,27.7-6.9c11.7,0.5,20.2,7.1,24.7,13.2c0.6,1.3-0.1,2.9-1.6,1.6
				c-6.3-4.8-13-9-22-9c-14.4,0-19.1,13-41,12.9C32.3,132.3,24.3,126.5,15.5,117.5z"/>
			<path class="st1" d="M85.7,67.1c-0.2,1.1-0.4,2.9-0.4,5.6c0,11.4,7.2,20.1,16.6,20.1c7.1,0,12.1-4.1,14.1-7.9
				c0.2-0.5,0.7-0.7,1.1-0.6l1.5,0.8c0.4,0.1,0.6,0.5,0,1.8c-2.1,4.7-8.2,12.7-18.6,12.7c-6.7,0-14-2-18.3-8.3
				c-4.1-6-5.1-10.3-5.1-18.5c0-4.6,1.2-12.4,7.4-18.6c5-5.1,10.9-6.2,16.7-6.2c13.4,0,17.2,12.6,17.2,17.2c0,1.6-1.4,1.9-3.3,1.9
				H85.7z M104.3,63.6c2.2,0,3.2-0.6,3.2-1.6c0-2.7-1.4-10.4-9-10.4c-5.1,0-10,3.4-12.3,12H104.3z"/>
			<path class="st1" d="M134,65.1c0-2.8-0.8-4.4-4.2-6.3l-2.7-1.5c-0.8-0.4-0.8-0.7-0.8-1.1v-0.9c0-0.4,0.2-0.6,0.8-0.8l11.2-5.6
				c0.9-0.5,1.9-0.9,2.7-0.9c0.6,0,0.8,0.6,0.8,2.3l0.5,5.6h0.4c3.2-4.1,9.2-7.8,17-7.8c6,0,9.9,2.6,13.3,5.7
				c4.4,4.4,6.3,9.2,6.3,18.2c0,15.3-10.6,27.6-25.2,27.6c-3.2,0-8.1-0.5-11.7-2c0,0,0-10.4,0,23.4c0,20-5.1,27.8-16.9,32.7
				c-16.6,6.9-43.7-11.6-62.6-11.2c-20.7,0.5-27.8,10.3-27.8,10.3c-1.3,1.8-3.2,0.8-1.8-1.2c0.2-0.2,8.4-12.2,29.2-13.5
				c18.2-1.1,48.3,12.3,60.7,6.3c8.2-3.9,9.3-9.5,10-18.5c0.3-3.5,0.8-15.3,0.8-23.2L134,65.1L134,65.1z M142.4,86.5
				c0,2.6,0.2,4.7,2.5,6.2c3.3,2.3,6.9,3.2,11.7,3.2c6.7,0,13.5-5,13.5-19.5c0-16.3-7.4-22.9-15.2-22.9c-4.9,0-9.7,2.8-12.5,7.5
				V86.5z"/>
			<path class="st1" d="M387.4,65.1c0-2.8-0.8-4.4-4.2-6.3l-2.7-1.5c-0.8-0.4-0.8-0.7-0.8-1.1v-0.9c0-0.4,0.2-0.6,0.8-0.8l11.2-5.6
				c0.9-0.5,1.9-0.9,2.7-0.9c0.6,0,0.8,0.6,0.8,2.3l0.5,5.6h0.4c3.2-4.1,9.2-7.8,17-7.8c6,0,9.9,2.6,13.3,5.7
				c4.4,4.4,6.3,9.2,6.3,18.2c0,15.3-10.6,27.6-25.2,27.6c-3.2,0-8.1-0.5-11.7-2c0,0,0,9.4,0,43.2c0,20-5.1,27.8-16.9,32.7
				c-16.6,6.9-43.7-11.6-62.6-11.2c-20.7,0.5-25.3,9.3-26.7,11.2c-2.4,3.3-5.2,1.4-2.9-2c1.4-2,8.4-12.2,29.2-13.5
				c18.2-1.1,48.3,12.3,60.7,6.3c8.2-3.9,9.3-9.5,10-18.5c0.3-3.5,0.8-35.1,0.8-43L387.4,65.1L387.4,65.1z M395.8,86.5
				c0,2.6,0.2,4.7,2.5,6.2c3.3,2.3,6.9,3.2,11.7,3.2c6.7,0,13.5-5,13.5-19.5c0-16.3-7.4-22.9-15.2-22.9c-4.9,0-9.7,2.8-12.5,7.5
				V86.5z"/>
			<path class="st1" d="M191.4,34.5c0-7.1-1.2-22.4-13.8-23.6s-29.2,19.9-54.3,18.4C104.2,28.2,89,14.5,88.1,13.7
				c-1.7-1.5-0.8-2.9,1.3-1.2c1.1,0.9,15.7,10.7,34.6,12.3c18.7,1.5,36.2-20.3,50.7-20.3c11.5,0,25.2,1.9,25.2,29.3
				c0,6-0.1,12-0.1,14.5v7.5h0.6c4.1-4.9,10.9-7.6,16-7.6c4.9,0,8.3,1.5,11.6,4.7c5.3,4.9,5,10.9,5,17.2v6.7c0,6.5,0.2,13.8,0.2,16
				c0,1.4,1.9,1.8,4.3,1.8h2c0.9,0,1.3,0.2,1.3,1.1v1.8c0,0.9-0.2,1.4-0.9,1.4c-0.8,0-4.6-0.4-11.2-0.4c-5.7,0-9.9,0.4-11,0.4
				c-0.8,0-1.1-0.4-1.1-1.3v-2c0-0.6,0.1-0.9,0.8-0.9h2.7c2,0,4.3-0.2,4.4-2.2c0.1-1.6,0-7.8,0-11.6v-9.5c0-6.5-0.5-11.2-3.9-14.4
				c-2.3-2.2-4.8-3.3-7.7-3.3c-3.4,0-7.6,1.2-10.9,4.9c-1.1,1.3-2.3,3.6-2.3,5.7v25.5c0,3.7,0.4,4.8,2.6,4.8h3.5
				c0.8,0,1.3,0.2,1.3,0.9v2c0,0.8-0.2,1.3-0.9,1.3c-0.9,0-5.7-0.4-11.1-0.4c-5.8,0-10.3,0.4-11.3,0.4c-0.5,0-0.8-0.4-0.8-1.2v-2.1
				c0-0.8,0.5-0.9,1.8-0.9h2.5c1.9,0,3.6-0.5,3.9-1.9c0.4-2.2,0.4-15.1,0.4-22.7V34.5H191.4z"/>
			<path class="st1" d="M333.2,91.5c-5.4-6.4-6.4-10.7-6.4-19c0-6,3.2-13.4,10-18.8c6.1-4.7,11.8-5.6,15.6-5.6
				c6.4,0,12.8,3.3,16.3,6.8c5.3,5.4,7.9,11.4,7.9,19c0,12.7-11.4,25.7-25.8,25.7C345.3,99.6,338.1,97.3,333.2,91.5z M365.4,72.7
				c0-13-9.5-21.1-15.4-21.1c-3.2,0-6.2,0.7-9,3.7c-4.6,4.7-6.2,9.5-6.2,18.3c0,6.5,0.7,11,4.4,16.3c2.7,3.9,6.1,6.1,11.6,6.1
				C359.7,96.1,365.4,85.2,365.4,72.7z M460.5,61.3c6.7,0-0.1,5.6-0.1,12.5s8.1,12.5,0.1,12.5c-6.4,0-2.9-5.6-2.9-12.5
				S454,61.3,460.5,61.3z M344.7,61.3c6.7,0-0.1,5.6-0.1,12.5s8.1,12.5,0.1,12.5c-6.4,0-2.9-5.6-2.9-12.5S338.3,61.3,344.7,61.3z"/>
			<path class="st1" d="M448.3,91.5c-5.4-6.4-6.4-10.7-6.4-19c0-6,3.2-13.4,10-18.8c6.1-4.7,11.8-5.6,15.6-5.6
				c6.4,0,12.8,3.3,16.3,6.8c5.3,5.4,7.9,11.4,7.9,19c0,12.7-11.4,25.7-25.8,25.7C460.5,99.6,453.2,97.3,448.3,91.5z M480.5,72.7
				c0-13-9.5-21.1-15.4-21.1c-3.2,0-6.2,0.7-9,3.7c-4.6,4.7-6.2,9.5-6.2,18.3c0,6.5,0.7,11,4.4,16.3c2.7,3.9,6.1,6.1,11.6,6.1
				C474.8,96.1,480.5,85.2,480.5,72.7z"/>
		</g>
		<path class="st1" d="M420,17.6c-6.7,7.3-18.1,8.2-29,5.3C370,17.2,359.3,5,349.4,2.3c-8.7-2.3-21-5-31.8,4
			c-4.1,3.4-3.4,2.8-12.5,8.5c-4.2,2.6-3.7,1.7-7.6,3.4c-0.7,0.2-1.1,0.5-1.1,0.8v1c0,0.2,0.1,0.4,0.7,0.6l2.3,0.8
			c3.7,1.2,5.6,3,5.8,7c0.2,3,0.4,13.7,0.4,22v7.4c0,6.8,0,26.9-0.1,30.5c-0.1,2.1-1.3,2.9-2.6,2.9h-5.6c-1.3,0-1.5,0.2-1.5,1.1v2
			c0,0.7,0.2,1.2,0.8,1.2c1.1,0,5.7-0.4,13.2-0.4c7.2,0,12.4,0.4,13.2,0.4c0.5,0,0.7-0.5,0.7-1.2v-2c0-0.7-0.2-1.1-1.3-1.1h-5.3
			c-2.5,0-2.9-1.6-3-3.6C314,84,314,66.3,314,60.3v-9.2c0.1-0.4,0.1-0.9,0.1-1.7c-0.1-8.2,0.3-15.1,2.4-21.5
			C323,7.8,342.2,7,352.8,13.6c12.2,7.6,25.5,13.2,37,14.8c13.7,1.9,23.7-0.5,31.8-9C423.9,16.9,422.3,15.1,420,17.6z"/>
		<path class="st1" d="M554.1,94.3l-0.2-0.9c-0.2-0.6-0.7-0.7-2.3-0.8s-4.1-0.8-5.1-2c-0.9-1.2-1.2-6.3-1.2-10.6c0,0,0-39.4,0-51.5
			c0-18.7-15.8-29-32.7-22.9C501,9.8,494.4,15.4,483.8,21c-10.6,5.5-19.3,7-27.1,4.5c-5.5-1.8-9.8-4-11.6-11
			c-0.5-1.9-2.5-1.7-2.3,0.3c0.6,7.6,6.1,12.5,11.5,14.9c7.7,3.4,20.6,3.1,31.7-1.8c9.8-4.4,16.9-9.2,26.6-13.6
			c14.6-6.6,24.2,3,24.2,15.1v21.2c-3.5-1.1-7.7-1.8-12.5-1.8c-6.5,0-12.8,2.5-17.4,7.4c-5.5,5.5-8.2,12.6-8.2,19.9
			c0,7.8,1.4,13.1,7.4,18.9c5.5,5.6,9.9,5.4,13.8,5.4c6,0,13.4-2.6,17.2-6.3l1.5,5.1c0.2,0.8,0.8,1.2,1.5,0.9l13.2-4.4
			C554,95.4,554.2,95,554.1,94.3z M536.8,84.9c0,1.3-0.1,2.2-0.7,4c-1.2,3-6.2,6.4-12.7,6.4c-6.8,0-15.9-9.6-15.9-22.8
			c0-4.4,0.8-10.6,5.4-15.5c3-3.2,7-4.2,10.6-4.2c6.9,0,10.6,3.2,12.3,6.3c1.1,1.9,1.1,4.1,1.1,5.7L536.8,84.9L536.8,84.9z"/>
		<path class="st1" d="M291.5,91.7l-1.2-0.9c-0.5-0.4-0.7-0.1-1.2,0.5c-0.6,0.8-2.2,1.8-4.1,1.8c-2.1,0-3.5-2.1-3.5-8.8v-37
			c-0.1-10,0.8-16.1-0.1-22.8c-1.9-13.6-12.7-21-26.6-20c-12.2,0.9-21,9.9-20.8,21.8c0.1,5.5,2.4,9.5,4.2,12.1c2,2.8,6,6.3,8.7,8.4
			c1.5,1.1,4.5,3.2,5.7,4.7c0.6,1,1.2,1.9,1.8,2.9c2.8,4.4-2.6,10.8-6.6,6.6c-1.3-1.4-3-1.4-2.8,0.1c0.9,7.3,11.9,6.6,14.7,0.5
			c5.4-12-12-20-16.7-27.6c-5.1-8.3-0.1-19.5,7.8-21.4c11-2.7,20,3,22.1,13.7c1.3,6.5,0.3,11.4,0.1,18c0,0.1,0,1.9,0,2V69
			c-1.9,1.6-7.9,4.4-13.2,6.8c-9.2,4.1-11.7,8.8-11.7,14.1c0,7.4,4.2,9.7,7,9.7c2.6,0,4.7,0,6.9-0.7c5.3-1.8,9.1-4.2,11.6-7.1h0.2
			c1.1,4.8,4.1,7.8,8.3,7.8c6,0,8.2-4,9.1-5.7C292.1,92.7,291.9,92.1,291.5,91.7z M273.1,86.8c0,3.2-6.2,7.2-9.6,7.2
			c-3.5,0-6.1-2.1-6.1-6.4c0-9.7,11.4-12,15.6-15.2v14.4H273.1z"/>
	</g>
</g>
</svg>
</a>
</h1>
</div>
<!-- -END- Header -->

<!-- Begin NAVIGATION -->
  
<!-- OLD Navigation
<div class="navigation"> 
  <ul class="navigation-items">
    <li><a href="main.html"><div id="cart_icon"></div></a></li>
    <li><a href="main.html">Home</a></li>
	<li><a href="main.html">Blog</a></li>
	<li><a href="main.html">Store</a>
	<ul class="drop-down">
		<li><a href="main.html">Store</a></li>
		<li><a href="main.html">Custom Orders</a></li>
	</ul>
	<li><a href="main.html">About</a>	
	<ul class="drop-down">
        <li><a href="main.html">About Cephalopod Press</a></li>
		<li><a href="main.html">About Letterpress</a></li>
        <li><a href="main.html">Our Projects</a></li>
	</ul>
    </li>
    <li class="icon">
      <a href="javascript:void(0);" onclick="openMenu()"></a>
    </li>
  <a href="main.html"><div class="navlogo"></div></a>
  </ul>
</div>
<!-- -END- OLD NAVIGATION -->

<!-- Begin Wordpress Menu -->
<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_class' => 'navigation')); ?>
<!-- -END- Wordpress Menu -->

<!-- -END- Navigation -->

<!-- Begin Content -->
	<div class="maincontainer">
		<div id="page-aboutletterpress">

		  <section class="intro">
			<h2>About Cephalopod Press</h2>
			<hr>
			<article>
			  <p class="dropcase">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</article>
			<h3>Think On Your Feet</h3>
			<hr>
		  </section>

		<!-- GATEWAY -->
		<section class="feature" id="gateway">
			<h2>Why Letterpress?</h2>
			<h3>Why Cephalopods?</h3>
			<fr>
			<div class="gate">
			  <div class="gate_img">
			  <a href="file:///L|/incandescentideas.com/coursework/web170/template/aboutus-theshop.php"><img src="file:///L|/incandescentideas.com/coursework/web170/template/images/ink_knife.jpg" width="320" height="320" alt="Our Shop"/></a>
			  </div>
			  <h2>Our Shop</h2>
			</div>
			<div class="gate">
			  <div class="gate_img">
			  <a href="file:///L|/incandescentideas.com/coursework/web170/template/aboutus-adriene.php"><img src="file:///L|/incandescentideas.com/coursework/web170/template/images/03002c23.jpg" alt="Modern Letterpress" width="320" height="320"></a>
			  </div>
			  <h2>Adriene Woodworth</h2>
			</div>
			<div style="clear: both;">&nbsp;</div> <!-- clear fix hack-->
			<hr>
		  </section>
		<!-- /GATEWAY -->  

		<!-- BLOG MODULE -->
		<section id="module-blog">
		  <!-- NEWS MAIN -->
		  <div class="feature" id="blog">
			  <hr>
			  <div class="blog_entry">
			  <h2>The Cephalopod Blog</h2>
				  <p class="dropcase">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<hr>
		  </div>
		  <!-- NEWS MAIN -->
		  <!-- BLOGROLL -->
		  <div class="feature" id="blogroll">
			<h3>Older Entries</h3>
			<hr>
			<div class="blogroll_post">
			  <div class="blogroll_text">
				<hr>
				<h4>MM/DD/YY</h4>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
			  </div>
			  <div class="blogroll_img">
				<img src="file:///L|/incandescentideas.com/coursework/web170/template/images/404-in_press.jpg" alt=""/>
			  </div>
			</div>
			<hr>
			<div class="blogroll_post">
			  <div class="blogroll_text">
				<hr>
				<h4>MM/DD/YY</h4>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
			  </div>
			  <div class="blogroll_img">
				<img src="file:///L|/incandescentideas.com/coursework/web170/template/images/404-in_press.jpg" alt=""/>
			  </div>
			</div>
			<hr>
			<h3> Older still...</h3>
		  </div>
		  <div style="clear: both;">&nbsp;</div> <!-- clear fix hack-->
		  <!-- /BLOGROLL -->
		</section>
		  <!-- /BLOG MODULE -->


		</div>
	</div><!-- /MAIN CONTAINER -->

<!-- -END- Content -->

<!-- Container -->
<div class="maincontainer">
<footer>
  <div class="makersmark"><a href="http://cepalopod-industries.com" target="_blank"></a> <a href="http://cephalopod-industries.com" target="_blank"><img src="file:///L|/incandescentideas.com/coursework/web170/template/images/aw_full_logo_shameless.svg" alt=""/></a> 
  </div> 
  <div class="footer_column">
    <div class="social">
      <div class="square">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><title>logo_facebook</title><path d="M0,500V0H500V500H0Zm345,0V306.38h65l9.73-75.46H345V182.74c0-21.85,6.07-36.74,37.4-36.74l40,0V78.49c-6.91-.92-30.63-3-58.23-3-57.61,0-97.05,35.17-97.05,99.75v55.65H201.91v75.46h65.16V500H345Z" style="fill:#fff"/></svg>
      </div>
      <div class="square">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><title>logo_instagram</title><path d="M0,0V500H500L499.54,0.45ZM250,176.73A73.27,73.27,0,1,1,176.73,250,73.37,73.37,0,0,1,250,176.73h0ZM441.86,410.29c0,17.4-16.22,31.57-33.62,31.57H93c-17.44,0-34.84-14.17-34.84-31.57V252.67c0-17.44,17.4-31.74,34.84-31.74h17.58A11.51,11.51,0,0,1,122,234a125.11,125.11,0,0,0-1.09,16c0,71.17,57.92,129.08,129.09,129.08S379.09,321.18,379.09,250A125.11,125.11,0,0,0,378,234a11.72,11.72,0,0,1,2.77-9.13,11.59,11.59,0,0,1,8.67-3.91h18.8c17.44,0,33.62,14.3,33.62,31.74V410.29Zm0-290.65h0a31.54,31.54,0,0,1-31.52,31.52h-30a31.54,31.54,0,0,1-31.52-31.52v-30a31.54,31.54,0,0,1,31.52-31.52h30a31.54,31.54,0,0,1,31.52,31.52v30Zm0,0" style="fill:#fff"/></svg>
      </div>
      <div class="square">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><title>logo_pinterest</title><path d="M0,0V500H500V0H0ZM279.79,358.85c-24.12,0-46.78-13-54.58-27.85,0,0-13,51.49-15.74,61.44-4.72,17.18-51.29,102.06-51.29,102.06s2.33-98.23,6.35-115.14c4.27-18.16,28.73-121.8,28.73-121.8s-7.14-14.26-7.14-35.34c0-33.12,19.19-57.86,43.08-57.86,20.35,0,30.14,15.26,30.14,33.55,0,20.44-13,51-19.71,79.33-5.58,23.69,11.91,43,35.27,43,42.36,0,70.87-54.39,70.87-118.82,0-49-33-85.66-93-85.66-67.81,0-110,50.57-110,107,0,19.46,5.75,33.18,14.74,43.81,4.14,4.89,4.71,6.87,3.21,12.47-1.07,4.12-3.54,14-4.56,17.93-1.48,5.66-6.07,7.69-11.19,5.59-31.21-12.78-45.76-46.94-45.76-85.39,0-63.5,53.56-139.61,159.75-139.61,85.29,0,141.46,61.77,141.46,128C400.39,293.36,351.66,358.85,279.79,358.85Z" style="fill:#f7f8f8"/></svg>
      </div>
      <div class="square">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><title>logo_tumblr</title><path d="M0,0V500H500V0H0ZM177.13,338.82l0-119.69H132.52V163.22c33.74-9.61,62.86-45.46,73.56-83.48C210.21,63.2,210.65,52,210.65,52h63.43v102h74.21v64.34H273.67v37.24c0,25-.08,50,0,75,0,66.27,63.65,39.06,69.46,37.78l18.32,60.52C345.63,445.64,177.13,486.61,177.13,338.82Z" style="fill:#fff"/></svg>
      </div>
      <div class="square">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><title>logo_twitter</title><path d="M386.12,178.11q0.2,4.45.2,9c0,91.51-69.65,197-197,197A196,196,0,0,1,83.14,353a141,141,0,0,0,16.52,1,139,139,0,0,0,86-29.64A69.32,69.32,0,0,1,121,276.22,69.42,69.42,0,0,0,152.25,275a69.29,69.29,0,0,1-55.55-67.9c0-.29,0-0.58,0-0.87a69,69,0,0,0,31.37,8.66,69.33,69.33,0,0,1-21.43-92.45,196.6,196.6,0,0,0,142.73,72.35,69.29,69.29,0,0,1,118-63.16,138.65,138.65,0,0,0,44-16.81,69.45,69.45,0,0,1-30.45,38.31,138.43,138.43,0,0,0,39.77-10.9A140.74,140.74,0,0,1,386.12,178.11ZM500,0H0V500H500V0Z" style="fill:#fff"/></svg>
      </div>
    </div>
  </div>
    <div class="courtesy">
      <p><a>disclaimer</a> | <a>terms of use</a> | <a>legal</a></p>
    </div>
    <div class="copyright">
     <small>
       &copy; 2016 Cephalopod Press <br> All Rights Reserved <br> Authored by Adam Woodworth<br><a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~  
       <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
     </small>
    </div>
    <!-- Begin WP Footer -->
    <!-- -END- WP Footer -->
  </footer>
<section id="about" data-type="background" data-speed="20">
</section>
</div>
<!-- /Container -->
<script src="file:///L|/incandescentideas.com/coursework/web170/template/js/js.js"></script>
</body>
</html>
