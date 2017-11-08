<template>
	<div id="main-container">
		<div class="panel">
			<div class="panel-heading">
                <h1 class="main-h"> <i class="fa fa-plus main-i" aria-hidden="true"></i> New Transaction</h1>
            </div>
			<div class="panel-body">
				<div class="row" style="padding-top:40px;">
					<div class="col-md-6">
						<form style="padding-left:20px;">
							<div class="form-group">
								<input placeholder="Payee Username" type="text" class="form-control" name="to">
							</div>
							<div class="form-group">
								<input placeholder="VC amount e.g 0.22" type="number" class="form-control" name="amount">
							</div>
							<div class="form-group">
								<textarea style="height:100px;" name="message" class="form-control">Optional message to payee(s)</textarea>
							</div>
							<div class="form-group" style="padding-top:20px;">
								<button class="btn btn-primary">Send VC</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script type="text/javascript">
	
	

</script>