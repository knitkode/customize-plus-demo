<!doctype html>
<html>
	<head><?php wp_head(); ?></head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<body <?php body_class(); ?>>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Customize Plus demo</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo esc_url( get_permalink(1) ); ?>">Sample post</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<header class="jumbotron">
			<div class="container">
				<div class="row">
					<div class="col d-none d-sm-block">
						<img class="img-fluid" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/customize-plus__logo.png'); ?>">
					</div>
					<div class="col-12 col-sm-9 col-md-10">
						<div class="d-flex align-items-center">
							<img class="mr-2 d-sm-none" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/customize-plus__logo.png'); ?>" width="70" height="70">
							<h1>Customize Plus Demo Theme</h1>
						</div>
						<p class="text-muted"><small>by <a href="https://knitkode.com">KnitKode</a></small></p>
						<p>
							<a href="https://knitkode.com/products/customize-plus-premium" target="_blank" class="btn d-block d-md-inline-block btn-outline-primary">View Premium version</a> &nbsp;
							<a href="https://github.com/knitkode/customize-plus" target="_blank" class="btn d-block d-md-inline-block btn-outline-secondary">View on Github</a> &nbsp;
							<a href="https://wordpress.org/knitkode/customize-plus" target="_blank" class="btn d-block d-md-inline-block btn-outline-secondary">View on WordPress.org</a>
						</p>
						<p>Do you want to <strong>improve</strong> your <strong>development experience</strong> with the WordPress Customizer? Find out about:<br><a class="btn btn-lg d-block d-md-inline-block btn-primary mt-3" href="https://knitkode.com/products/customize-plus-builder" target="_blank">Customize Plus Builder</a></p>
					</div>
				</div>
			</div>
		</header>
		<article class="container">
			<div class="row">
				<div class="col-12">
					<p class="text-muted pb-3">Viewing this within the Customizer admin screen you will see a live a preview of each control and its associated settings</p>
				</div>
			</div>