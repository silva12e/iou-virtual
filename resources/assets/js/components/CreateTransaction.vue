<template>
	<div id="main-container">
		<div class="panel">
			<div class="panel-heading">
                <h1 class="main-h"> <i class="fa fa-plus main-i" aria-hidden="true"></i> New Transaction</h1>
            </div>
			<div class="panel-body">
				<div class="row" style="padding-top:40px;">
					<div class="col-md-6">
						<form @submit.prevent="submit" style="padding-left:20px;">
							<div class="form-group">
								<label class="form-label">Payee (username)</label>
								<select v-model="selectedPayees" name="to_user_id" class="form-control" multiple>
									 <option v-for="p in payees" v-bind:value="p.id">{{ p.username }}</option>
								</select>
							</div>
							<div class="form-group">
								<label class="form-label">Amount (VC)</label>
								<input type="number" class="form-control" name="amount">
							</div>
							<div class="form-group">
								<label class="form-label">Message (optional)</label>
								<textarea style="height:100px;" name="message" class="form-control"></textarea>
							</div>
							<div class="form-group" style="padding-top:20px;">
								<input type="hidden" name="from_user_id" v-model="user">
								<button class="btn btn-primary">Send VC</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	export default {

        data() {
            return {
    			payees:[],
    			user:'',
    			selectedPayees:[]
            }
        },
        mounted()
        {
        	axios.get('/admin/payees/all/')
        	.then(response=>{
        		this.payees = response.data.payees;
        		this.user = response.data.user;
        	})
        },
        methods:
        {
        	submit(event)
        	{
        		let formData = new FormData(event.target);
        		axios.post('/admin/transactions/store', formData).then
        		(response => console.log('payee has been added'));
        	}
        }
    }

</script>