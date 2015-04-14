<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
		echo link_tag("public/smartmenus/css/sm-core-css.css", 'stylesheet');
		echo link_tag("public/smartmenus/css/sm-blue/sm-blue.css", 'stylesheet');
		echo link_tag("public/owlcarousels/owl-carousel.css", 'stylesheet');
		echo link_tag("public/owlcarousels/owl-theme.css", 'stylesheet');
		echo link_tag("public/fullPage/jquery.fullPage.css", 'stylesheet');
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
		<script type="text/javascript" src="<?= base_url("public/fullPage/jquery.fullPage.min.js") ?>"></script>
		<script type="text/javascript" src="<?= base_url("public/smartmenus/libs/jquery-loader.js") ?>"></script>
		<script type="text/javascript" src="<?= base_url("public/smartmenus/jquery.smartmenus.min.js") ?>"></script>
		<script type="text/javascript" src="<?= base_url("public/smartmenus/addons/bootstrap/jquery.smartmenus.bootstrap.min.js") ?>"></script>
		<script type="text/javascript" src="<?= base_url("public/fullPage/vendors/jquery.slimscroll.min.js") ?>"></script>				
		<script type="text/javascript" src="<?= base_url("public/owlcarousels/owl-carousel.js") ?>"></script>
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
		
		<script>
  		// This is called with the results from from FB.getLoginStatus().
  		function statusChangeCallback(response) {
    		console.log('statusChangeCallback');
			console.log(response);
		
			// The response object is returned with a status field that lets the
			// app know the current login status of the person.
			// Full docs on the response object can be found in the documentation
			// for FB.getLoginStatus().
			if (response.status === 'connected') {
	  			// Logged into your app and Facebook.
	  			testAPI();
			} else if (response.status === 'not_authorized') {
	  			// The person is logged into Facebook, but not your app.
	  			document.getElementById('status').innerHTML = 'Please log ' + 'into this app.';
			} else {
	  			// The person is not logged into Facebook, so we're not sure if
	  			// they are logged into this app or not.
	  			document.getElementById('status').innerHTML = 'Please log ' + 'into Facebook.';
	    	}
  		}

  		// This function is called when someone finishes with the Login
  		// Button.  See the onlogin handler attached to it in the sample
  		// code below.
  		function checkLoginState() {
    		FB.getLoginStatus(function(response) {
      			statusChangeCallback(response);
    		});
  		}

  		window.fbAsyncInit = function() {
  			FB.init({
    			appId      : '1831342380425101',
				cookie     : true,  // enable cookies to allow the server to access 
        		// the session
				xfbml      : true,  // parse social plugins on this page
				version    : 'v2.2' // use version 2.2
	  		});
	
			// Now that we've initialized the JavaScript SDK, we call 
	  		// FB.getLoginStatus().  This function gets the state of the
	  		// person visiting this page and can return one of three states to
	  		// the callback you provide.  They can be:
	  		//
	  		// 1. Logged into your app ('connected')
	  		// 2. Logged into Facebook, but not your app ('not_authorized')
	  		// 3. Not logged into Facebook and can't tell if they are logged into
	  		//    your app or not.
	 		//
	  		// These three cases are handled in the callback function.
	
	  		FB.getLoginStatus(function(response) {
	    		statusChangeCallback(response);
	    		if (response.status === 'connected') {
			    	console.log(response.authResponse.accessToken);
			  	}
	  		});
	  		
	  		FB.logout(function(response) {
        		// Person is now logged out
    		});
  		};

		// Load the SDK asynchronously
  		(function(d, s, id) {
    		var js, fjs = d.getElementsByTagName(s)[0];
    		if (d.getElementById(id)) return;
    		js = d.createElement(s); js.id = id;
    		js.src = "//connect.facebook.net/en_US/sdk.js";
    		fjs.parentNode.insertBefore(js, fjs);
  		
  		}(document, 'script', 'facebook-jssdk'));

		// Here we run a very simple test of the Graph API after login is
  		// successful.  See statusChangeCallback() for when this call is made.
  		function testAPI() {
			FB.api('/me', function(response) {
  				console.log('Successful login for: ' + response.name);
  				//document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.name + '!';
    		});
  		}

		</script>
		<!-- <script type="text/javascript" src="<?= base_url("public/dataTables.bootstrap.js") ?>"></script> -->
