<style>
	label {
		margin-top: 5px;
	}
</style>
<form enctype="multipart/form-data" action="../controllers/addNew.php" method="POST">
	<div class="modal fade" id="addNew" tabindex="-1" role="dialog" data-backdrop="static">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Create New Listing</h4>
	      </div>
	      <div class="modal-body">
	        <div class="container-fluid addnew">
				<div class="row">
					<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12 title-container">
										<label for="addNew_title">Listing Title</label><br/>
										<input id="addNew_title" name="addNew_title" class="form-control" type="text">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 content-container">
										<label for="addNew_content">Listing Description</label><br/>
										<textarea id="addNew_content" name="addNew_content" class="form-control" style="resize: vertical; min-height: 300px;"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 createdBy-container">
										<label for="addNew_createdBy">Created By</label><br/>
										<input id="addNew_createdBy" name="addNew_createdBy" class="form-control" type="text">
									</div>
								</div>
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