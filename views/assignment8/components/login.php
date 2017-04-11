<style>
	.modal {
		background-color: rgba(0, 0, 0, 0.25);
	}
</style>
<div class="modal fade" id="login" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title">Login</h2>
      </div>
      <form id="login_frm" action="components/authenticate.php" method="POST">
      	<div class="modal-body">
        	<div class="container-fluid">
        		<div class="row">
        			<div class="col-xs-12">
	        			<label for="login_Uname" class="form-label">Username</label>
	        			<input id="login_Uname" name="login_Uname" class="form-control" value="" required type="text" />
	        		</div>
	        		<div class="col-xs-12">
	        			<label for="login_psswrd" class="form-label">Password</label>
	        			<input id="login_psswrd" name="login_psswrd" class="form-control" value="" required type="password" />
	        		</div>
	        		<label class="loginFail" style="display: block; text-align: center; color: red;">Invalid UserName and Password</label>
        		</div>
        	</div>
      	</div>
      	<div class="modal-footer">
      		<button type="submit" id="login_submit" class="btn btn-primary pull-right">Submit</button>
        	<button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Cancel</button>
      	</div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->