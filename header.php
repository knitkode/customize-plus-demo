<!doctype html>
<html>
	<head><?php wp_head(); ?></head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<body <?php body_class(); ?>>
		 <nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Customize Plus demo</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo esc_url( get_permalink(1) ); ?>">Sample post</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<header class="jumbotron">
			<div class="container">
				<div class="media">
					<div class="media-left">
						<img class="pull-left" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/customize-plus__logo.png'); ?>">
					</div>
					<div class="media-body">
						<h1>Customize Plus Demo Theme</h1>
						<p>
							<a href="https://knitkode.com/products/customize-plus-premium" target="_blank" class="btn btn-lg btn-danger">View Premium version</a> &nbsp;
							<a href="https://github.com/knitkode/customize-plus" target="_blank" class="btn btn-lg btn-warning">View on Github</a> &nbsp;
							<a href="https://wordpress.org/knitkode/customize-plus" target="_blank" class="btn btn-lg btn-default">View on WordPress.org</a>
						</p>
						<p>Do you want to improve your development experience with the WordPress Customizer? Find out about <strong><a href="https://knitkode.com/products/customize-plus-builder" target="_blank">Customize Plus Builder</a></strong></p>
					</div>
				</div>
			</div>
		</header>
		<article class="container">
			<div class="row">
				<div class="col-xs-12">
					<p class="text-muted">Viewing this within the Customizer admin screen you will see a live a preview of each control and its associated settings</p>
					<p>&nbsp;</p>
				</div>