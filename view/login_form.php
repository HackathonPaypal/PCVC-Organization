<?php 

if(!isset($_SESSION)){
    session_start();
}

require_once 'controller/sw_login_controller.php';

if(isset($_SESSION["error_info"]))
{
	$error_info = $_SESSION["error_info"];
	$show_failure_message = $error_info["show_failure_message"];
	if (isset($error_info["failure_message"]))
	{
		$failure_message = $error_info["failure_message"];
	}
	unset($_SESSION["error_info"]);
}
else if(isset($_POST) && isset($_POST['password']))
{
	$sw_login_controller = new SWLoginController();
	$container = $sw_login_controller->sw_user_login();

	if(isset($admin_session_check_container->sw_user_loggedin) && 
				($admin_session_check_container->sw_user_loggedin == true))
	{
		header("Location: sw_dashboard.php");
	}
}


if(isset($_SESSION["error_info"]))
{
	$error_info = $_SESSION["error_info"];
	$show_failure_message = $error_info["show_failure_message"];
	if (isset($error_info["failure_message"]))
	{
		$failure_message = $error_info["failure_message"];
	}
	unset($_SESSION["error_info"]);
}
?>

<html> 
<head>
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
<link rel="icon" sizes="192x192"  href="images/android-icon-192x192.png">
<link rel="shortcut icon" sizes="96x96" href="images/favicon-96x96.png">
<link rel="manifest" href="images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/ms-icon-310x310.png">
<meta name="theme-color" content="#ffffff">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/login-form-elements.css">
<link rel="stylesheet" href="css/login-style.css">
<link rel="stylesheet" href="css/font-awesome.css">

<style>
body
{
     background: url(images/vidiyal_logo.png) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  height:50%;
  width:100%;
	 
}
</style>

</head>
<body>
	<?php
	if( isset($show_failure_message) ) { ?>
	<br/>
	   <?php if( isset($failure_message) ) { ?>
		   <div class="alert alert-danger homealert" role="alert" align="center">
			   <strong><?php echo $failure_message ?></strong>          
		   </div>
		   <?php } else { ?>
			<div class="alert alert-danger homealert" role="alert" align="center">
			   <strong><?php echo "We are unable to process your request. Sorry for the inconvenience." ?></strong>          
		   </div>
		<?php } ?>
	<br/>
	<?php } else { ?>
	<br/>
		<?php if( isset($info_message) ) { ?>
		   <div class="alert alert-success homealert" role="alert" align="center">
			   <strong><?php echo $info_message ?></strong>          
		   </div>
		<?php } else if (isset($warning_message)) { ?>
		   <div class="alert alert-danger homealert" role="alert" align="center" style="color:red;width:94%"><?php echo $warning_message ?>
			</div>
		<?php } ?>
	<br/>
	<?php } ?>

        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 sm-offset-12 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Welcome to Vidiyal</h3>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="glyphicon glyphicon-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
								<form name="user_login" id="user_login" action="sw_login_view.php" method="post" role="form" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="user_name" placeholder="Username..." class="form-username form-control" id="user_name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
			                        </div>
									<button type="submit" class="btn">Sign in</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <!-- End container -->

<script src="js/jquery-1.10.2.min.js"/></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
jQuery(document).ready(function() {   
    /*
        Form validation
    */
    $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.login-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    });   
});
</script>
 </body> 
</html>
