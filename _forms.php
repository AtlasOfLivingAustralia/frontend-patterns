<!DOCTYPE html><html lang="en-gb">

<head>
	<title>Form Example - ALA UI Pattern Library</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="_css/styles.css" type="text/css"/>

	<!-- Bootstrap -->
  <link href="_css/bootstrap.min.css" rel="stylesheet">
  <link href="_css/ala-pattern-library-styles.css" rel="stylesheet">

  <!-- FontAwesome -->
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
	<main role="main">
		<div class="container">
			<header>
				<nav role="navigation" class="breadcrumb-nav">
					<a href="/">ALA UI Pattern Library</a> /
				</nav><!--/.breadcrumb-nav-->
				<h1>Form Example</h1>
				<p class="lede">Basic form styles</p>
			</header>
			<p>The <code>fieldset</code> element enables you to group related fields within a form, and each one should contain a corresponding <code>legend</code>. The <code>label</code> element ensures field descriptions are associated with their corresponding form widgets.</p>

			<fieldset>
				<!-- <legend>Legend</legend>
				<p><small class="caption">Required fields are marked <abbr title="Required">*</abbr></small></p> -->
        <div class="margin-bottom-2"><?php include('_patterns/form-01-basic-example.html'); ?></div>
        <div class="margin-bottom-2"><?php include('_patterns/form-02-inline-form.html'); ?></div>
        <div class="margin-bottom-2"><?php include('_patterns/form-03-horizontal-form.html'); ?></div>
        <div class="margin-bottom-2"><?php include('_patterns/form-04-inputs.html'); ?></div>
        <div class="margin-bottom-2"><?php include('_patterns/form-05-supported-control.html'); ?></div>
        <div class="margin-bottom-2"><?php include('_patterns/form-06-static-control.html'); ?></div>
        <div class="margin-bottom-2"><?php include('_patterns/form-07-states.html'); ?></div>
        <div class="margin-bottom-2"><?php include('_patterns/form-08-help-text.html'); ?></div>
        <div class="margin-bottom-2"><?php include('_patterns/form-09-control-sizing.html'); ?></div>
			</fieldset>
		</div><!--/container-->
	</main><!--@main-->

	<footer role="contentinfo">
		<div class="container">
			<p><small>Based on <a href="https://github.com/paulrobertlloyd/barebones">BareBones</a> by <a href="http://paulrobertlloyd.com">Paul Robert Lloyd</a>. Code covered by the <a rel="license" href="http://paulrobertlloyd.mit-license.org/">MIT license</a>.</small></p>
		</div><!--/container-->
	</footer><!--/@contentinfo-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="_js/bootstrap.min.js"></script>
  <!-- <script src="_js/ala-wp-common.js"></script> -->
</body>
</html>