<div class="widget">
	<div class="widget-header">
		<div class="title">Phone Follow-Up Check List</div>
	</div>
	
	<form class="form-horizontal no-margin" enctype="multipart/form-data" method="post" action="client_phone_followup_save_view.php" id="client_phone_followup_form">
		<div class="widget-body">
			<div class="form-group">
				<label for="ClientId" class="col-sm-2 control-label">Client ID</label>
				<div class="col-sm-10">
					<input name="client_id" class="form-control" type="text" readonly value="<?php if(isset($_GET) && isset($_GET['client_id'])) { echo $_GET['client_id'];} ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="FollowUpDate" class="col-sm-2 control-label">Phone Follow Up Date</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="phone_date" name="phone_date" readonly value="<?php echo date('d/m/Y')?>">
				</div>
			</div>
			<div class="form-group">
				<label for="FollowUpDate" class="col-sm-2 control-label">Last Called Date</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="last_phone_date" name="last_phone_date" readonly value="<?php echo date('d/m/Y')?>">
				</div>
			</div>
			<div class="form-group">
				<label for="conversation" class="col-sm-2 control-label">Conversation Held With (Name & Relation)</label>
				<div class="col-sm-10">
					<input name="conversation" class="form-control" type="text" value=""> 
				</div>
			</div>
			<div class="form-group">
				<label for="ConversationStatus" class="col-sm-2 control-label">Status Of Phone Conversation</label>
				<div class="col-sm-10">
					<textarea name="conversation_status" class="form-control" rows="5"></textarea>
				</div>
			</div>
		</div>

		<div class="widget-header">
			<div class="title">Medical History</div>
		</div>

		<div class="widget-body">		
			<div class="form-group">
				<label for="WoundRecovery" class="col-sm-2 control-label">Wound Recovery</label>
				<div class="col-sm-2" style="text-align:left">
					<div class="checkbox">
						<label><input name="client_wound_recovery" type="checkbox" value="Presence of open wounds">Presence of open wounds</label><br>
						<label><input name="client_wound_recovery" type="checkbox" value="Wounds healed">Wounds healed</label><br>
						<label><input name="client_wound_recovery" type="checkbox" value="Formation/Thickening of scars">Formation/Thickening of scars</label><br>
						<label><input name="client_wound_recovery" type="checkbox" value="Contractures">Contractures</label><br>
                    </div>					
				</div>
			</div>
		</div>

		<div class="widget-header">
			<div class="title">Psychological History</div>
		</div>

		<div class="widget-body">		
			<div class="form-group">
				<label for="SleepingPattern" class="col-sm-2 control-label">Sleeping Pattern</label>
				<div class="col-sm-10">
					<select class="form-control" name="client_sleeping_pattern"> 
						<option value="Disturbed Sleep">Disturbed Sleep</option>
						<option value="Nightmares">Nightmares</option>
						<option value="Excess Sleeping">Excess Sleeping</option>
						<option value="Normal Sleep" selected="selected">Normal Sleep</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="EmotionalStatus" class="col-sm-2 control-label">Emotional Status</label>
				<div class="col-sm-10">
					<select class="form-control" name="client_emotional_status"> 
						<option value="Feels low">Feels low</option>
						<option value="Cries offten">Cries offten</option>
						<option value="Remains isolated">Remains isolated</option>
						<option value="Aggressive">Aggressive</option>
						<option value="Normal" selected="selected">Normal</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="HomeVisit" class="col-sm-2 control-label">Home Visit</label>
				<div class="col-sm-1" style="text-align:left">
					<div class="radio">
						<label><input name="client_home_visit" class="radio" type="radio" value="Yes">Yes</label><br>
                        <label><input name="client_home_visit" class="radio" type="radio" value="No">No</label>
                    </div>					
				</div>
			</div>
			<div class="form-group">
				<label for="RemarksSummary" class="col-sm-2 control-label">Remarks & Summary</label>
				<div class="col-sm-10">
					<textarea name="client_remarks" class="form-control" rows="5"></textarea>
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