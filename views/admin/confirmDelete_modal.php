<form action="deleteSuccessful.php" method="POST">
	<div class="modal fade" id="deleteEmp" tabindex="-1" role="dialog" data-backdrop="static">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Delete Employee</h4>
	      </div>
	      <div class="modal-body">
	        <div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<h3>Are you sure you want to delete <span id="delete_empName"></span></h3>
						<input id="delete_empID" name="delete_empID" value="" type="hidden">
						<input id="delete_img" name="delete_img" value="" type="hidden">
					</div>
				</div>
			</div>
	      </div>
	      <div class="modal-footer">
					<button type="button" class="btn btn-warning pull-right" data-dismiss="modal">No</button>
					<button type="submit" class="btn btn-danger pull-left">Yes</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</form>