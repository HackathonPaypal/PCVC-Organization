<?php
if(!isset($_SESSION)){
    session_start();
}
require_once 'controller/sw_login_controller.php';
require_once 'controller/client_report_controller.php';

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

$controller = new ClientReportController();
$container = $controller->load_client_details();

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
?>

<html>
<head>
<?php  include 'inc_head.php'; ?>

<script>
function invokeForms(selectObj, client_id_str)
{
	var selected_val = $('#' + selectObj).val();
	var target_action = '404_page_not_found';
	
	if(selected_val == "HOSPITAL_FOLLOWUP")
		target_action = 'client_follow_up_form';
	else if(selected_val == "HOSPITAL_DISCHARGE")
		target_action = 'client_hospital_discharge_form';
	else if(selected_val == "PHONE_FOLLOWUP")
		target_action = 'client_phone_followup_form';
	else if(selected_val == "HOME_VISIT")
		target_action = '404_page_not_found';
	else if(selected_val == "FEEDBACK")
		target_action = '404_page_not_found';
		
	window.location.href = target_action + ".php?client_id=" + client_id_str;
}

</script>
</head>

<body>
 <!-- Main Container start -->
<div class="dashboard-container">
  <div class="container">
	<?php include 'dashboard_navbar_view.php'; ?>

	<!-- Dashboard Wrapper Start -->
	<div class="dashboard-wrapper-lg">
	<div class="row">
		<div class="col-lg-12">
			<h1 style="color:#000">Associated Client Details</h1>
		</div>
	</div>
	<div id="errors_div"></div>		
	<?php if( isset($show_failure_message) && isset($failure_message) ) { ?>
		<div class="alert alert-info homealert" role="alert" align="center">
		   <strong><?php echo $failure_message ?></strong>
		</div>
	<?php } ?>
	   
	  <!-- Row starts -->
	<div class="row">
		<div class="col-lg-12">
		<?php if (isset($container) && isset($container->client_details_array)) { ?>
			<div class="table-responsive">
				<table class="col-md-12 table-bordered table-striped table-condensed">
					<tr>
						<th class="table-bordered">Client Id</th>
						<th class="table-bordered">Client Name</th>
						<th class="table-bordered">Client Address</th>
						<th class="table-bordered">Client Phone Number</th>
						<th class="table-bordered">Client Enrollment Status</th>
						<th class="table-bordered">Actions</th>
					</tr>
				<?php foreach($container->client_details_array as $row){ ?>
					<tr>
						<td class="table-bordered"><?php echo $row->m_client_id; ?></td>
						<td class="table-bordered"><?php echo $row->m_name; ?></td>
						<td class="table-bordered"><?php echo $row->m_address; ?></td>
						<td class="table-bordered"><?php echo $row->m_phonenumber; ?></td>
						<td class="table-bordered"><?php echo $row->m_status; ?></td>
						<td class="table-bordered">
							<select name="client_action" class="form-group" id="client_action_<?php echo $row->m_client_id; ?>" >
								<option value="HOSPITAL_FOLLOWUP">Hospital follow-up</option>
								<option value="HOSPITAL_DISCHARGE">Hospital discharge</option>
								<option value="PHONE_FOLLOWUP">Phone follow-up</option>
								<option value="HOME_VISIT">Home visit</option>
								<option value="FEEDBACK">Feedback</option>
							</select>
							<input type="button" value="Open" class="btn btn-sm btn-info" onclick="return invokeForms('client_action_<?php echo $row->m_client_id; ?>', '<?php echo $row->m_client_id; ?>')"/>
						</td>
					</tr>
				<?php } // end for loop ?>
				</table>
			</div>
		<?php } // end if condition ?>
		</div>
	</div>
	  <!-- Row ends -->
	</div>
	<!-- Dashboard Wrapper End -->
  </div>
</div>
    <!-- Main Container end -->
<script src="js/bootstrap-table.min.js"></script>
<script src="js/locale/bootstrap-table-en-US.js"></script>
<script src="js/bootstrap-table-editable.js"></script>
<script src="js/bootstrap-editable.js"></script>

</body>
</html>
