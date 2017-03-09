<div class="modal fade" id="sendMsg" tabindex="-1" role="dialog" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
    		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Send Message</h4>
      		</div>
			<form action="messageSent.php" method="POST">
	     		<div class="modal-body">
	       			<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<input id="sndMsgTo" name="sndMsgTo" value="" type="hidden">
									<div class="col-xs-12 msg-from">
										<label>Your Email Address</label><br/>
										<input id="sndMsgFrom" name="sndMsgFrom" value="" type="text">
									</div>
									<div class="col-xs-12 msg-container">
										<label>Message</label><br/>
										<textarea></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
	      		</div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success pull-right">Send Message</button>
	      		</div>
			</form>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->