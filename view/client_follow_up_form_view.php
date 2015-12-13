<div class="widget">
	<div class="widget-header">
		<div class="title">Follow Up After Intake</div>
	</div>

	<form class="form-horizontal no-margin" enctype="multipart/form-data" method="post" action="client_follow_up_save_view.php" id="client_followup_form">
		<div class="widget-body">
			<div class="form-group">
				<label for="ClientId" class="col-sm-2 control-label">Client ID</label>
				<div class="col-sm-10">
					<input name="client_id" class="form-control" type="text" readonly value="<?php if(isset($_GET) && isset($_GET['client_id'])) { echo $_GET['client_id'];} ?>"> 
				</div>
			</div>
			<div class="form-group">
				<label for="AspectOriented" class="col-sm-2 control-label">Aspect Oriented</label>
				<div class="col-sm-10" style="text-align:left">
					<label><input name="client_aspect_oriented" id="oriented" type="checkbox" value="Aspect Oriented" checked=checked></label>
				</div>
				<div class="col-sm-10" style="text-align:left">
					1) Diet intake </br>
					2) Importance of hygiene </br>
					3) Importance of pressure garments </br>
					4) Emotional support </br>
					5) Assistance at recovery & healing center </br>
					6) Significance of physical excercise and physiotheraphy </br>
					7) Home visit </br>
					8) Follow-up after discharge from KMC
				</div>
			</div>
			<div class="form-group">
				<label for="PhysicalActivity" class="col-sm-2 control-label">Patients Physical Activity</label>
				<div class="col-sm-10" style="text-align:left">
					1) Mostly on Bed / Walks around / Does not walk around but sits up in bed. </br>
					2) Regular with excercises prescribed /reluctant to excercise </br>
					3) Progress on health and nutrition.                       </br>         
					4) in health / no improvement                 </br>      
					5) Able to eat well /does not eat /eats but not able to digest.</br>
					6) Dietician's opinion in nutriotional health of patient.
				</div>
			</div>			
			<div class="form-group">
				<label for="ClientActivities" class="col-sm-2 control-label">Client Physical Activities</label>
				<div class="col-sm-10">
					<textarea id="client_old_address" name="client_old_address" class="form-control" rows="5"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <input type="hidden" name="client_enrolled_by" value="<?php if((isset($_COOKIE) && (isset($_COOKIE['admin_name'])))) { echo  $_COOKIE['admin_name'] ; } ?>">
				  <button type="submit" id="saveForm" class="btn btn-info">Save the details</button>
				</div>
            </div>
        </div>
	</form>
</div>