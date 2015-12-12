<div class="widget">
	<div class="widget-header">
		<div class="title">Client Intake Form
		  <span class="mini-title">Associate new client with you!!!</span>
		</div>
	</div>
	<br>
	<div class="widget-header">
		<div class="title">CLIENT PROFILE</div>
	</div>
	
	<form class="form-horizontal no-margin" enctype="multipart/form-data" method="post" action="client_intake_save_view.php" id="client_intake_form">
		<div class="widget-body">
			<div class="form-group">
				<label for="ClientId" class="col-sm-2 control-label">Client ID</label>
				<div class="col-sm-10">
					<input name="client_id" class="form-control" type="text" readonly value="<?php if(isset($container) && isset($container->next_client_id)) { echo $container->next_client_id; } ?>"> 
				</div>
			</div>
			<div class="form-group">
				<label for="ClientName" class="col-sm-2 control-label">Client Name</label>
				<div class="col-sm-10">
					<input name="client_name" class="form-control" type="text" value=""> 
				</div>
			</div>
			<div class="form-group">
				<label for="AdmissionDate" class="col-sm-2 control-label">Date of Admission</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="client_date_of_admission" name="client_date_of_admission" readonly value="<?php echo date('d/m/Y')?>">
				</div>
			</div>
			<div class="form-group">
				<label for="MobileNumber" class="col-sm-2 control-label">Mobile Number</label>
				<div class="col-sm-10">
					<input name="client_phonenumber" class="form-control" type="text" value="">
				</div>
			</div>
			<div class="form-group">
				<label for="AddressBeforeIncident" class="col-sm-2 control-label">Address before the incident</label>
				<div class="col-sm-10">
					<textarea name="client_old_address" class="form-control" rows="5"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="AddressAfterIncident" class="col-sm-2 control-label">Address before the incident</label>
				<div class="col-sm-10">
					<textarea name="client_new_address" class="form-control" rows="5"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="DOB" class="col-sm-2 control-label">Date of birth</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="client_dob" name="client_dob" readonly value="">
				</div>
			</div>
			<div class="form-group">
				<label for="EduQual" class="col-sm-2 control-label">Educational Qualification</label>
				<div class="col-sm-10">
					<select class="form-control" name="client_qualifiaction"> 
						<option value="Uneducated">Uneducated</option>
						<option value="5th and above">5th and above</option>
						<option value="10th and above">10th and above</option>
						<option value="Graduate">Graduate</option>
						<option value="Post graduate and above">Post graduate and above</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="Occupation" class="col-sm-2 control-label">Client Occupation</label>
				<div class="col-sm-10">
					<select class="form-control" name="client_occupation"> 
						<option value="Student">Student</option>
						<option value="Housewife">Housewife</option>
						<option value="Teacher">Teacher</option>
						<option value="Farmer">Farmer</option>
						<option value="Domestic worker">Domestic worker</option>
						<option value="Tailor">Tailor</option>
						<option value="Others">Others</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="MaritalStatus" class="col-sm-2 control-label">Marital status</label>
				<div class="col-sm-10">
					<select class="form-control" name="client_marital_status"> 
						<option value="Married">Married</option>
						<option value="Single">Single</option>
						<option value="Seperated">Seperated</option>
						<option value="Divorced">Divorced</option>
						<option value="Widowed">Widowed</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="PartnerDuration" class="col-sm-2 control-label">Length of the relationship with partner</label>
				<div class="col-sm-10">
					<input name="client_relationship_period" class="form-control" type="text" value=""> 
				</div>
			</div>
			<div class="form-group">
				<label for="Children" class="col-sm-2 control-label">Children details</label>
				<div class="col-sm-10">
					<textarea name="client_children" class="form-control" rows="2"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="Religion" class="col-sm-2 control-label">Religion</label>	
				<div class="col-sm-10">
					<select class="form-control" name="client_religion"> 
						<option value="Hindu">Hindu</option>
						<option value="Muslim">Muslim</option>
						<option value="Christian">Christian</option>
						<option value="Others">Others</option>
					</select>
				</div>
			</div>
		</div>

		<div class="widget-header">
			<div class="title">CARE TAKER PROFILE</div>
		</div>

		<div class="widget-body">
			<div class="form-group">
				<label for="Caretaker" class="col-sm-2 control-label">Caretaker</label>	
				<div class="col-sm-10">
					<select class="form-control" name="client_caretaker"> 
						<option value="Spouse">Spouse</option>
						<option value="Parent">Parent</option>
						<option value="Guardian">Guardian</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="CaretakerName" class="col-sm-2 control-label">Caretaker Name</label>
				<div class="col-sm-10">
					<input name="client_caretaker_name" class="form-control" type="text" value="">
				</div>
			</div>
			<div class="form-group">
				<label for="Occupation" class="col-sm-2 control-label">Caretaker Occupation</label>
				<div class="col-sm-10">
					<select class="form-control" name="client_caretaker_occupation"> 
						<option value="Student">Student</option>
						<option value="Unemployed">Unemployed</option>
						<option value="Teacher">Teacher</option>
						<option value="Domestic worker">Domestic worker</option>
						<option value="Driver">Driver</option>
						<option value="Farmer">Farmer</option>
						<option value="Labor">Labor</option>
						<option value="Others">Others</option>
					</select>
				</div>
			</div>	
		</div>
		
		<div class="widget-header">
			<div class="title">DETAILS OF INCIDENT</div>
		</div>

		<div class="widget-body">
			<div class="form-group">
				<label for="IncidentDate" class="col-sm-2 control-label">Date of incident</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="client_date_of_incident" name="client_date_of_incident" readonly value="">
				</div>
			</div>		
			<div class="form-group">
				<label for="CausativeReason" class="col-sm-2 control-label">Causative Reason</label>
				<div class="col-sm-10">
					<select class="form-control" name="client_causative_reason"> 
						<option value="Kerosene">Kerosene</option>
						<option value="Petrol">Petrol</option>
						<option value="Acid">Acid</option>
						<option value="Hot liquids">Hot liquids</option>
						<option value="Flame">Flame</option>
						<option value="Chemicals">Chemicals</option>
						<option value="Electricity">Electricity</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="IncidentCause" class="col-sm-2 control-label">Cause of the incident</label>
				<div class="col-sm-10">
					<select class="form-control" name="client_incident_cause"> 
						<option value="Accident">Accident</option>
						<option value="Attempt to murder">Attempt to murder</option>
						<option value="Attempt to suicide">Attempt to suicide</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="OffenderVictimRelationship" class="col-sm-2 control-label">Offender-victim-relationship</label>
				<div class="col-sm-10">
					<input name="client_offender_relationship" class="form-control" type="text" value="">
				</div>
			</div>
			<div class="form-group">
				<label for="DVinFamily" class="col-sm-2 control-label">Prevalence of DV in the family</label>
				<div class="col-sm-10">
					<select class="form-control" name="client_dv_reason"> 
						<option value="Physical">Physical</option>
						<option value="Verbal">Verbal</option>
						<option value="Emotional">Emotional</option>
						<option value="Threats">Threats</option>
						<option value="Financial">Financial</option>
						<option value="Sexual">Sexual</option>
						<option value="None">None</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="ReportedToPolice" class="col-sm-2 control-label">Incident reported to police</label>
				<div class="col-sm-1" style="text-align:left">
					<div class="radio">
						<label><input name="client_reported_to_police" class="radio" type="radio" value="Yes">Yes</label><br>
                        <label><input name="client_reported_to_police" class="radio" type="radio" value="No">No</label>
                    </div>					
				</div>
			</div>
			<div class="form-group">
				<label for="AdmissionToHospital" class="col-sm-2 control-label">Admission to hospital via</label>
				<div class="col-sm-10">
					<select class="form-control" name="client_admitted_person"> 
						<option value="Police">Police</option>
						<option value="Family, family-members">Family, family-members</option>
						<option value="Friends, acquaintances">Friends, acquaintances</option>
						<option value="Emergency ambulance">Emergency ambulance</option>
						<option value="PCVC">PCVC</option>
						<option value="Others">Others</option>
					</select>
				</div>
			</div>
		</div>

		<div class="widget-header">
			<div class="title">MEDICAL PROFILE</div>
		</div>

		<div class="widget-body">
			<div class="form-group">
				<label for="BurnsImage" class="col-sm-2 control-label">Image of burns</label>
				<div class="col-sm-10">
					<input name="client_burns_image" class="form-control" type="file">
				</div>
			</div>
			<div class="form-group">
				<label for="BurningDegrees" class="col-sm-2 control-label">Degrees of burning</label>
				<div class="col-sm-1" style="text-align:left">
					<div class="radio">
						<label><input name="client_degrees_of_burning" class="radio" type="radio" value="I">I</label><br>
                        <label><input name="client_degrees_of_burning" class="radio" type="radio" value="II">II</label><br>
                        <label><input name="client_degrees_of_burning" class="radio" type="radio" value="III">III</label>
                    </div>					
				</div>
			</div>
		</div>

		<div class="widget-header">
			<div class="title">Physical Symptoms post trauma</div>
		</div>

		<div class="widget-body">		
			<div class="form-group">
				<label for="PhysicalTrauma" class="col-sm-2 control-label">Physical Symptoms post trauma</label>
				<div class="col-sm-2" style="text-align:left">
					<div class="checkbox">
						<label><input name="client_physical_symptoms" type="checkbox" value="Mobility on bed">Mobility on bed</label><br>
                        <label><input name="client_physical_symptoms" type="checkbox" value="Lying to sitting">Lying to sitting</label><br>
                        <label><input name="client_physical_symptoms" type="checkbox" value="Sitting to standing">Sitting to standing</label><br>
                        <label><input name="client_physical_symptoms" type="checkbox" value="Standing to squatting">Standing to squatting</label><br>
                        <label><input name="client_physical_symptoms" type="checkbox" value="Eating">Eating</label><br>
                        <label><input name="client_physical_symptoms" type="checkbox" value="Walking">Walking</label><br>
                        <label><input name="client_physical_symptoms" type="checkbox" value="Walking independent">Walking independent</label><br>
                        <label><input name="client_physical_symptoms" type="checkbox" value="Walking dependent">Walking dependent</label><br>
                    </div>					
				</div>
			</div>
		</div>
		
		<div class="widget-header">
			<div class="title">Phychosocial Symptoms post trauma</div>
		</div>

		<div class="widget-body">			
			<div class="form-group">
				<label for="PhychosocialTrauma" class="col-sm-2 control-label">Phychosocial Symptoms post trauma</label>
				<div class="col-sm-2" style="text-align:left">
					<div class="checkbox">
						<label><input name="client_psychosocial_symptoms" type="checkbox" value="Feeling isolated">Feeling isolated</label><br>
						<label><input name="client_psychosocial_symptoms" type="checkbox" value="Attending seeking behaviour">Attending seeking behaviour</label><br>
						<label><input name="client_psychosocial_symptoms" type="checkbox" value="Blaming herself for the mishap">Blaming herself for the mishap</label><br>
						<label><input name="client_psychosocial_symptoms" type="checkbox" value="Tried to harm herself">Tried to harm herself</label><br>
						<label><input name="client_psychosocial_symptoms" type="checkbox" value="Tired to harm others">Tired to harm others</label><br>
						<label><input name="client_psychosocial_symptoms" type="checkbox" value="Complete change in behaviour">Complete change in behaviour</label><br>
                    </div>
					<label for="client_psychosocial_symptoms[]" class="error">This field is required.</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <input type="hidden" name="client_enrolled_by" value="<?php if((isset($_COOKIE) && (isset($_COOKIE['admin_name'])))) { echo  $_COOKIE['admin_name'] ; } ?>">
				  <button type="submit" id="saveForm" class="btn btn-info" name="submit">Save the details</button>
				</div>
            </div>			
        </div>
	</form>	
</div>
