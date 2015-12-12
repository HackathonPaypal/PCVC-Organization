	<!-- Sub Nav End -->
	<?php $admin_name = ((isset($_COOKIE) && (isset($_COOKIE['admin_name']))) ? $_COOKIE['admin_name'] : "Admin") ; ?>

	<div class="sub-nav">
	  <ul>
		<li><a href="sw_dashboard.php">Welcome <?php echo $admin_name?></a></li>
		<li>
		  <a href="sw_dashboard.php" <?php if(strpos($_SERVER['REQUEST_URI'], 'sw_dashboard')) { echo 'class="selected"'; } ?> >Dashboard</a>
		</li>
		<li>
		  <a href="client_intake_form.php" <?php if(strpos($_SERVER['REQUEST_URI'], 'client_intake_form')) { echo 'class="selected"'; } ?> >Add Client</a>
		</li>
		<li>
		  <a href="client_report_view.php" <?php if(strpos($_SERVER['REQUEST_URI'], 'client_report_view')) { echo 'class="selected"'; } ?> >Reports</a>
		</li>
		<li>
		  <a href="logout_view.php">Logout</a>
		</li>
	  </ul>
	</div>
	<!-- Sub Nav End -->