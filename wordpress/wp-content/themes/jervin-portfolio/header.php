<?php
/**
 *	This template is for Header
 *
 * @package WordPress
 * @subpackage jervin-portfolio
 * @since Jervin Portfolio 1.0
 */

?>

<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>

<header>
	<nav class="navbar navbar-default mb-0">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Brand</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?= get_home_url(); ?>">Home</a></li>
					<li><a href="#about-cont-id">About Me</a></li>
					<li><a href="#portfolio-cont-id">Portfolio</a></li>
					<li><a href="#exp-cont-id">Experiences</a></li>
					<li><a href="#contact-cont-id">Contact Me</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>
</header>