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
								<select v-validate="'required'" data-vv-as="Payee" v-model="selectedPayees" name="to_user_id" class="form-control" multiple>
									 <option v-for="p in payees" v-bind:value="p.id">{{ p.username }}</option>
								</select>
								<span style="color:red" class="error" v-show="errors.has('to_user_id')">{{ errors.first('to_user_id') }}</span>
							</div>
							<div class="form-group">
								<label class="form-label">Amount (VC) <small>Current Balance({{ authUser.balance }})</small></label>
								<money v-validate="'required'" data-vv-as="VC Balance"  v-model="amount"  class="form-control" v-bind="money"></money> 
								<input type="hidden" name="amount" v-model="amount">
								<span style="color:red" class="error" v-show="errors.has('amount')">{{ errors.first('amount') }}</span>
							</div>
							<div class="form-group">
								<label class="form-label">Message (optional)</label>
								<textarea style="height:100px;" name="message" class="form-control"></textarea>
							</div>
							<div class="form-group" style="padding-top:20px;">
								<input type="hidden" name="from_user_id" v-model="authUser.id">
								<div v-if="!validBalance">
									<p style="color:red"> {{ balanceErrorMessage }} </p>
								</div>
								<div v-else>
									<button class="btn btn-primary">Send VC</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import {Money} from 'v-money';
export default 
{
    data() 
    {
        return {
			payees:[],
			authUser:'',
			selectedPayees:[],
			showSendButton:true,
			amount:0.00,
			userBalance:0,
      balanceErrorMessage:'',

			money: {
	          decimal: '.',
	          thousands: ',',
	          prefix: '',
	          precision: 2,
	          masked: true
	        }
        }
    },
    components: {Money},
    mounted()
    {
    	axios.get('/admin/payees/all/')
    	.then(response =>
    	{
    		this.payees = response.data.payees;
    		this.authUser = response.data.authUser;
    		this.userBalance = response.data.authUser.balance;
    	})
    },
    computed:
    {
    	validBalance: function()
    	{
    		if(this.amount > this.userBalance)
        {
          this.balanceErrorMessage = " Insufficient funds"
    			return false;
        }
    		return true;
    	}
    },
    methods:
    {
    	submit(event)
    	{
    		let formData = new FormData(event.target);
    		

    		this.$validator.validateAll().then((result) => {
                 if (result) {

                $("form").find('button[type="submit"]').addClass("disabled");
            	axios.post('/admin/transactions/store', formData)
                .then(response => {
                    console.log(response)
                    this.error = false
                    this.success = true

                    $("form").find('button[type="submit"]').removeClass("disabled");

                    if(response.data.userFound){
                    swal({
                      title: 'Error!',
                      text:  'Please, Fix errors on form',
                      type: 'error',
                      timer: 5000
                    }).then(
                      function () {

                      },
                      function (dismiss) {
                        if (dismiss === 'timer')
                        {
                        }
                    });

                    }else{
                    swal({
                      title: 'Success!',
                      text:  'Your transaction has been made',
                      type: 'success',
                      timer: 5000
                    }).then(
                      function () {
                        window.location.href = '/admin/transactions/';
                      },
                      function (dismiss) {
                        if (dismiss === 'timer')
                        {
                          window.location.href = '/admin/transactions/create';
                        }
                    });

                    }
                }).catch(error => {
                    console.log(error)
                    this.error = true
                    this.success = false
                    this.responseMessage = error.statusText
                });
              }
           	});
    	},
    }
}
</script>