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
				<h1>Customize Plus Demo Theme</h1>
				<p>Preview of each control and its associated setting</p>
				<a href="https://github.com/knitkode/customize-plus" target="_blank" class="btn btn-lg btn-warning">View on Github</a>
			</div>
		</header>
		<article class="container">
			<div class="row">