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
$container = $controller->load_all_client_form_details_for_report();

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

<link rel="stylesheet" href="css/bootstrap-table.min.css">
<link rel="stylesheet" href="css/bootstrap-editable.css">

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
			<div class="col-lg-12">
			<?php if (isset($container) && isset($container->client_form_details_array))
				{?>
				<div class="table-responsive">
				<div id="toolbar" class="widget-body"></div>
				<table id="client_details_form_table" class="col-md-12 table-bordered table-striped table-condensed" data-show-export="true" data-sortable="true">
				</table>
				</div>
			<?php	}?>
			</div>
		</div>
	  <!-- Row ends -->
	</div>
	<!-- Dashboard Wrapper End -->
  </div>
</div> 

<script src="js/bootstrap-table.min.js"></script>
<script src="js/locale/bootstrap-table-en-US.js"></script>
<script src="js/bootstrap-table-editable.js"></script>
<script src="js/bootstrap-editable.js"></script>
<script src="js/bootstrap-table-export.js"></script>
<script src="js/tableExport.js"></script>

<?php if (isset($container) && isset($container->client_form_details_array))
{?>
<script>
    var data = <?php echo json_encode($container->client_form_details_array, JSON_PRETTY_PRINT); ?>;

    $(function () {
        $('#client_details_form_table').bootstrapTable({
            data: data,
			pagination: true,
			paginationVAlign: 'top',			
			pageSize: 200,
			sortable: true,
			search: true,
			toolbar: '#toolbar',
			showColumns: true,
            columns: [
			{
                field: 'client_id',
                title: 'Client Id',
				sortable: true
            }, 
			{
                field: 'name',
                title: 'Client Name',
				sortable: true
            },
			{
                field: 'address',
                title: 'Client Address',
				sortable: true
            },
			{
                field: 'phonenumber',
                title: 'Phone Number',
				sortable: true
            },			
			{
                field: 'status',
                title: 'Status',
				sortable: true
            }, 
			{
                field: 'timestamp',
                title: 'Date',
				sortable: true
            },
			{
                field: 'form_json_data',
                title: 'Additional Data',
				visible: false
            }
			]
        });
    });
</script>
<?php } ?>
</body>
</html>
