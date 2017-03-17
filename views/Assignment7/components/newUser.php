<style>
	.modal {
		background-color: rgba(0, 0, 0, 0.25);
	}
</style>
<div class="modal fade" id="newUser" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title">Create New User</h2>
      </div>
      <form action="components/addNewUser.php" method="POST">
      	<div class="modal-body">
        	<div class="container-fluid">
        		<div class="row">
        			<div class="col-xs-12">
	        			<label for="newUser_Fname" class="form-label">First Name</label>
	        			<input id="newUser_Fname" name="newUser_Fname" class="form-control" value="<?php if(!empty($Fname)) echo $Fname; ?>" required type="text" />
	        		</div>
	        		<div class="col-xs-12">
	        			<label for="newUser_Lname" class="form-label">Last Name</label>
	        			<input id="newUser_Lname" name="newUser_Lname" class="form-control" value="<?php if(!empty($Lname)) echo $Lname; ?>" required type="text"/>
	        		</div>
	        		<div class="col-xs-12">
	        			<label for="newUser_Uname" class="form-label">User Name</label>
	        			<input id="newUser_Uname" name="newUser_Uname" class="form-control" value="<?php if(!empty($Uname)) echo $Uname; ?>" required type="text" />
	        			<label class="UnameFail" style="display: block; text-align: center; color: red;">User Name Unavailable</label>
	        		</div>
	        		<div class="col-xs-12">
	        			<label for="newUser_psswrd" class="form-label">Password</label>
	        			<input id="newUser_psswrd" name="newUser_psswrd" class="form-control" value="" required type="password"/>
	        		</div>
	        		<div class="col-xs-12">
	        			<label for="newUser_psswrd_cnfrm" class="form-label">Confirm Password</label>
	        			<input id="newUser_psswrd_cnfrm" name="newUser_psswrd_cnfrm" class="form-control" value="" required type="password"/>
	        		</div>
        		</div>
        	</div>
	      </div>
	      <div class="modal-footer">
	      	<button type="submit" id="submitNewUser pull-right" class="btn btn-primary">Submit</button>
	        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Cancel</button>
	      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->