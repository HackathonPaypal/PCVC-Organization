<?php
if(!isset($_SESSION)){
    session_start();
}
require_once 'controller/sw_login_controller.php';
require_once 'controller/client_intake_controller.php';

// Some redirect has happened and the flow reached here
// Get the error message to display in this page
if (isset($_SESSION["error_info"]))
{
	$error_info = $_SESSION["error_info"];
	
	if(isset($error_info["show_failure_message"]))
	{
		$show_failure_message = $error_info["show_failure_message"];
	}
	
	if(isset($error_info["failure_message"]))
	{
		$failure_message = $error_info["failure_message"];
	}
	
	unset($_SESSION["error_info"]);
}

if(!(isset($_COOKIE) && isset($_COOKIE['admin_name'])))
{
	$sw_login_controller = new SWLoginController();
	$container = $sw_login_controller->sw_user_login();

	if(isset($_SESSION["error_info"]))
	{
			header("Location: login_form.php");
	}
}

if (isset($_SESSION["error_info"]))
{
	$error_info = $_SESSION["error_info"];
	
	if(isset($error_info["show_failure_message"]))
	{
		$show_failure_message = $error_info["show_failure_message"];
	}
	
	if(isset($error_info["failure_message"]))
	{
		$failure_message = $error_info["failure_message"];
	}
	
	unset($_SESSION["error_info"]);
}

$controller = new ClientIntakeController();
$container = $controller->get_next_client_id();
?>

<html>
<head>

<?php  include 'inc_head.php'; ?>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"/></script>

<script>

$(document).ready(function() {

	$("#client_date_of_admission").datepicker({
		allowBlank: true,
		dateFormat: 'dd/mm/yy',
		changeYear: true,
		changeMonth: true,
		yearRange: '1925:'+(new Date).getFullYear()
	});

	$("#client_dob").datepicker({
		allowBlank: true,
		dateFormat: 'dd/mm/yy',
		changeYear: true,
		changeMonth: true,
		yearRange: '1925:'+(new Date).getFullYear()
	});
	
	$("#client_date_of_incident").datepicker({
		allowBlank: true,
		dateFormat: 'dd/mm/yy',
		changeYear: true,
		changeMonth: true,
		yearRange: '1925:'+(new Date).getFullYear()
	});	
	
	$('#client_intake_form input, #client_intake_form textarea').not([type="submit"]).addClass('required');
	$("#client_intake_form").validate({
		success: "valid",
		submitHandler: function(form) {
			form.submit();
		}		
	});	
});

</script>
</head>

<body>
<!-- Main Container start -->
<div class="dashboard-container">
  <div class="container">
	<?php include 'dashboard_navbar_view.php'; ?>

	<!-- Dashboard Wrapper Start -->
	<div class="dashboard-wrapper-lg">
		<div id="errors_div"></div>		
		<?php if( isset($show_failure_message) && isset($failure_message) ) { ?>
			<div class="alert alert-info homealert" role="alert" align="center">
			   <strong><?php echo $failure_message ?></strong>
			</div>
		<?php } ?>
		   
		  <!-- Row starts -->
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<?php include 'client_intake_form_view.php'; ?>
			</div>
		</div>
		  <!-- Row ends -->
	</div>
	<!-- Dashboard Wrapper End -->
  </div>
</div>
<script src="js/jquery.datetimepicker.js"></script>
</body>
</html>
