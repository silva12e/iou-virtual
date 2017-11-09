<template>
	<div class="row">
    	<div class="panel" style="margin-top:40px;padding-top:20px;">
	    	<div class="panel-heading">
	    		<h1 class="main-h"><i class="fa fa-calendar main-i"></i> Transaction Log</h1>
	    	</div>
	    	<div class="panel-body">
			<div class="table-container">
                <table class="table-users table" border="0">
                    <thead>
                        <tr>
                            <th>To</th>
                            <th>Amount (VC)</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="t in transactions">
                            <td>{{ t.user.username }}</td>
                            <td>{{ t.amount }}</td>
                            <td>{{ t.status }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
	    </div>
    </div>
</div>
</template>
<script type="text/javascript">
    export default {

        data() {
            return {
                transactions:[]
            }
        },
        mounted()
        {
            axios.get('/admin/transactions/user-transactions')
            .then(response=>{
                this.transactions = response.data.transactions;
            })
        }
    }
</script>