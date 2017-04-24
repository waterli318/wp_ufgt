<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

	<head>	
		<meta http-equiv="pragma" content="no-cache">
	    <meta http-equiv="cache-control" content="no-cache">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <meta name="description" content="">
	    <link rel="icon" href="https://www.unforgettable.me/static/images/favicon.ico">    
		<title> Unforgettable.me </title>
		<style>
	    .unforgettable {
	        display: inline;
	        z-index: 1050;
	    }
	    </style>
	    <!-- Bootstrap core CSS -->
	    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
		<script type="text/javascript" src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
	    
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <link href="https://www.unforgettable.me/static/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- styles from www.unforgettable.me -->
	    <link href="https://www.unforgettable.me/static/css/carousel.css" rel="stylesheet">
	    <link href="https://www.unforgettable.me/static/css/unforgettable.css" rel="stylesheet">
	    
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
		
		<!-- custom styles -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">
		
	</head>
	<body>
		<div class="main-holder">
		    <div class="navbar-wrapper">
		      <div class="container">
		        <nav class="navbar navbar-inverse navbar-static-top navbar-unf" style="background-color:white;">
		          <div class="container top-runner">
		            <div class="navbar-header header-margin-top">
		              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		              </button>
		               <a class="unforgettable" href="https://www.unforgettable.me/"><img src="https://www.unforgettable.me/static/images/logo-100x284-beta-2.png"></a>
		            </div>

		            <div id="navbar" class="go-right navbar-collapse collapse">
		              	<ul class="nav navbar-nav navbar-line-height">
		                <li><a href="https://www.unforgettable.me/app_howtos/">Getting Started</a></li>
		                <li><a href="https://www.unforgettable.me/research-services/">Research Services</a></li>
		                <li><a href="<?php echo get_bloginfo( 'wpurl' );?>" role='button'>Blog</a>
		                
		                <?php function ufgt_user_login() {
						 	if (isset($_GET['userid']) && !empty($_GET['userid'])) { // ensure userid is exist and is not null
									// use email/userid from main site as user_name/password for Blog;
							       	$username = $_GET['userid'];
							       	$userpwd = $_GET['email'];	

							       	if( username_exists($username) == false ) {
										wp_create_user($username,$userpwd,$userpwd);
										// echo "string";					       		
										} 		

										$creds = array(
									    'user_login'    => $username,
									    'user_password' => $userpwd,
									    'remember'      => true
										);

										$user = wp_signon( $creds, false );
										// var_dump($user);

										wp_set_current_user($user->ID);

										if ( is_wp_error( $user ) ) {
										    echo $user->get_error_message();
										}	

										// if ( is_user_logged_in()) {
										// 	echo "success";
										// }	
								    }								        									
						} ?>

						<?php 
							ufgt_user_login();

						    if (is_user_logged_in()) {
					           	echo "				           							
					           	<li class='dropdown'>
								<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>". wp_get_current_user()->user_email . "
								<span class='caret'></span></a>
								<ul class='dropdown-menu'>
								<li><a href='https://play.google.com/store/apps/details?id=au.edu.uon.unforgettable' target='_blank'>Download Android App</a></li>
								<li><a href='https://www.unforgettable.me/app_howtos/'>App Help Pages</a></li>
								<li><a href='https://www.unforgettable.me/ifttt_howtos/'>IFTTT Help Pages</a></li>
								<li role='separator' class='divider'></li>
								<li><div class='user-menu-item'><small>USER ID:</small>" .wp_get_current_user()->user_login ." </div></li>
								<li><a href='https://www.unforgettable.me/search/trash/'>Trash <span class='glyphicon glyphicon-trash'></span></a></li>
								<li><a href='https://www.unforgettable.me/change-password/'>Change Password <span class='glyphicon glyphicon-wrench'></span></a></li>
								<li><a href='https://www.unforgettable.me/logout/'>Logout</a></li>							
								</ul>
								</li>								
								";	
								

						   	} else {
						   		echo "<li><a href='https://www.unforgettable.me/login/'>Login</a></li>";
		                		echo "<li><a href='https://www.unforgettable.me/register/'>Register</a></li>";
						   	}
						?>         
		              	</ul>
		            </div>
		            <div id="navbutton">
		            	<?php  
		            		if (is_user_logged_in()) {
		            			echo "";
		            			
		            		}	            		
		            	?>
		            </div>
		          </div>
		        </nav>

		      </div>
		    </div>
			
			<div class="container">