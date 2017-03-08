<form action="addSuccessful.cfm" method="POST">
	<div class="modal fade" id="addNew" tabindex="-1" role="dialog" data-backdrop="static">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Add New Employee</h4>
	      </div>
	      <div class="modal-body">
	        <div class="container-fluid addnew">
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-4 image-container">
										<div class="profile-img-wrapper">
											<img alt="" src="../../assets/img/profile/default_color.png"/>
										</div>
									</div>
									<div class="col-xs-8">
										<div class="row">
											<div class="col-xs-12 empName-container">
												<label for="addNew_empName">Employee Name</label><br/>
												<input id="addNew_empName" name="addNew_empName" class="form-control" type="text">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 empEmail-container">
												<label for="addNew_empEmail">Email Address</label><br/>
												<input id="addNew_empEmail" name="addNew_empEmail" class="form-control" type="text">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 empPhone-container">
												<label for="addNew_empPhone">Phone Number</label><br/>
												<input id="addNew_empPhone" name="addNew_empPhone" class="form-control" type="text">
											</div>
										</div>
									</div>
								</div>
								<div class="row addphoto-row">
									<div class="col-xs-12">
										<label for="addNew_empImage">Add Profile Image</label><br/>
										<input id="addNew_empImage" name="addNew_empImage" class="form-control" type="file">
									</div>
								</div>
								<div class="row expertise-row">
									<div class="col-xs-12">
										<label for="addNew_empExpertise">Area of Expertise</label><br/>
										<select id="addNew_empExpertise" name="addNew_empExpertise" class="form-control" type="text">
											<option value="0" selected disabled>-- Select Area of Expertise --</option>
											<option value="Chemistry">Chemistry</option>
											<option value="Physics">Physics</option>
											<option value="Computer Science">Computer Science</option>
										</select>
									</div>
								</div>
								<div class="row specialization-row">
									<div class="col-xs-12">
										<label for="addNew_specialization">Area of Specialization</label><br/>
										<input id="addNew_specialization" name="addNew_specialization" class="form-control" type="text">
									</div>
								</div>
								<div class="row bio-row">
									<div class="col-xs-12">
										<label for="addNew_empBio">Bio</label><br/>
										<textarea id="addNew_empBio" name="addNew_empBio" class="form-control" ></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success pull-right">Submit</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</form>