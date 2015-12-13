<div class="widget">
	<div class="widget-header">
		<div class="title">Hospital Discharge Form</div>
	</div>
	
	<form class="form-horizontal no-margin" enctype="multipart/form-data" method="post" action="client_hospital_discharge_save_view.php" id="client_hospital_discharge_form">
		<div class="widget-body">
			<div class="form-group">
				<label for="ClientId" class="col-sm-2 control-label">Client ID</label>
				<div class="col-sm-10">
					<input name="client_id" class="form-control" type="text" readonly value="<?php if(isset($_GET) && isset($_GET['client_id'])) { echo $_GET['client_id'];} ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="DischargeDate" class="col-sm-2 control-label">Date Of Discharge</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="hospital_discharge_date" name="hospital_discharge_date" readonly value="<?php echo date('d/m/Y')?>">
				</div>
			</div>
			<div class="form-group">
				<label for="Duration" class="col-sm-2 control-label">Duration of Stay</label>
				<div class="col-sm-10">
					<input name="hospital_stay_duration" class="form-control" type="text" value=""> 
				</div>
			</div>
			<div class="form-group">
				<label for="DischargeAddress" class="col-sm-2 control-label">Address After Discharge</label>
				<div class="col-sm-10">
					<textarea name="hospital_discharge_address" class="form-control" rows="5"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="BurnsImage" class="col-sm-2 control-label">Image of burns</label>
				<div class="col-sm-10">
					<input name="Hospital_Dischanrge_Images" class="form-control" type="file">
				</div>
			</div>
			<div class="form-group">
				<label for="DischargeCritical" class="col-sm-2 control-label">Discharge Critical</label>
				<div class="col-sm-1" style="text-align:left">
					<div class="radio">
						<label><input name="client_discharge_critical" class="radio" type="radio" value="Yes">Yes</label><br>
                        <label><input name="client_discharge_critical" class="radio" type="radio" value="No">No</label><br>
                    </div>					
				</div>
			</div>
			<div class="form-group">
				<label for="DischargeSummary" class="col-sm-2 control-label">Discharge Summary</label>
				<div class="col-sm-10">
					<textarea name="hospital_discharge_summary" class="form-control" rows="5"></textarea>
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