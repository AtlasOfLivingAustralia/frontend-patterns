<!DOCTYPE html><html lang="en-gb">

<head>
	<title>Pattern Primer - ALA UI Pattern Library</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="_css/styles.css" type="text/css"/>

	<!-- Bootstrap -->
  <link href="_css/bootstrap.min.css" rel="stylesheet">
  <link href="_css/bootstrap-theme.min.css" rel="stylesheet">
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

	<style>
		.pattern {
			margin-top:4em;
		}
		details.primer {
			margin-top:2.5em;
			background-color:#e9e9e9;
			border-bottom:4px solid #e9e9e9;
			position:relative;
		}
		details.primer summary {
			font-size: 1.5em;
			line-height: 1;
			text-shadow: 0 1px 0 #fff;
			background-color: #e9e9e9;
			padding: 0.1em 0.65em;
			overflow: hidden;
			position: absolute;
			right: 0;
			top: -1em;
			cursor: pointer;
		}
		details.primer summary::-webkit-details-marker {
			display:none;
		}
		details.primer section {
			padding:1.5%;
			overflow:hidden;
		}
		details.primer .caption {
			margin-left:0;
			margin-bottom:0;
		}
		@media screen and (min-width:40em) {
			details.primer textarea {
				width:58%;
				float:left;
			}
			details.primer .caption {
				width:38%;
				float:right;
			}
		}

	</style>
</head>

<body>
	<main role="main">
		<div class="container">
			<header>
				<nav role="navigation" class="breadcrumb-nav">
					<a href="../">ALA UI Pattern Library</a> /
				</nav><!--/.breadcrumb-nav-->
				<h1>Pattern Primer</h1>
				<p class="lede">Common snippets of markup</p>
			</header>

<?php
    require 'Parsedown.php';
	$files = array();
	$patterns_dir = "_patterns";
	$handle = opendir($patterns_dir);
	$Parsedown = new Parsedown();
	while (false !== ($file = readdir($handle))):
		if(stristr($file,'.html')):
			$files[] = $file;
		endif;
	endwhile;
	sort($files);
	foreach ($files as $file):
		echo '<section class="pattern">';
		include($patterns_dir.'/'.$file);
		echo '<details class="primer">';
		echo '<summary title="Show markup and usage">&#8226;&#8226;&#8226;</summary>';
		echo '<section>';
		echo '<textarea rows="10" cols="30" class="input code">'.htmlspecialchars(file_get_contents($patterns_dir.'/'.$file)).'</textarea>';
		// echo '<p class="caption"><strong>Usage:</strong> '.@file_get_contents($patterns_dir.'/'.str_replace('.html','.txt',$file)).'</p>';
		//echo '<p class="caption"><strong>Usage:</strong> '.htmlspecialchars(@file_get_contents($patterns_dir.'/'.str_replace('.html','.txt',$file))).'</p>';
		echo '<div class="caption"> '.$Parsedown->text(@file_get_contents($patterns_dir.'/'.str_replace('.html','.md',$file))).'</div>';
		echo '</section>';
		echo '</details><!--/.primer-->';
		echo '</section><!--/.pattern-->';
	endforeach;
?>

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
  <script>
  	$('#myModal').on('shown.bs.modal', function () {
		  $('#myInput').focus()
		})
  </script>

</body>
</html>
