<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="public/images/Image001.ico">
		<title>Food Suggestion</title>
		<?php	
		echo link_tag("public/bootstrap/css/bootstrap.css", 'stylesheet');
		echo link_tag("public/jquery/ui/1.11.1/jquery-ui.css", 'stylesheet');
		echo link_tag("public/css/media-queries.css", "stylesheet");
		echo link_tag("public/fullPage/jquery.fullPage.css", 'stylesheet');
		echo link_tag("public/smartmenus/css/sm-core-css.css", 'stylesheet');
		echo link_tag("public/smartmenus/css/sm-blue/sm-blue.css", 'stylesheet');
		echo link_tag("public/css/style.css", 'stylesheet');
		
		?>
		
		<style type="text/css">
			#main-menu {
				position:relative;
				z-index:9999;
				width:auto;
			}
			#main-menu ul {
				width:12px; /* fixed width only please - you can use the "subMenusMinWidth"/"subMenusMaxWidth" script options to override this if you like */
			}
		</style>
	</head>
	<body>
		<script type="text/javascript" src="<?= base_url("public/jquery/jquery-1.11.1.min.js") ?>"></script>
		<script type="text/javascript" src="<?= base_url("public/jquery-ui.js") ?>"></script>
		<script type="text/javascript" src="<?= base_url("public/smartmenus/libs/jquery-loader.js") ?>"></script>
		<script type="text/javascript" src="<?= base_url("public/smartmenus/jquery.smartmenus.min.js") ?>"></script>
		<script type="text/javascript" src="<?= base_url("public/smartmenus/addons/bootstrap/jquery.smartmenus.bootstrap") ?>"></script>
		<script type="text/javascript" src="<?= base_url("public/fullPage/jquery.fullPage.min.js") ?>"></script>
		<script type="text/javascript" src="<?= base_url("public/fullPage/vendors/jquery.slimscroll.min.js") ?>"></script>				
		
		<script type="text/javascript" src="<?= base_url("public/bootstrap/js/bootstrap.js") ?>"></script>	
		<script type="text/javascript" src="<?= base_url("public/script.js") ?>"></script>		
			
		<script type="text/javascript">
			$(function() {
				$('#main-menu').smartmenus({
					subMenusSubOffsetX: 6,
					subMenusSubOffsetY: -8
				});
			});
		</script>
		<!-- <script type="text/javascript" src="<?= base_url("public/dataTables.bootstrap.js") ?>"></script> -->
