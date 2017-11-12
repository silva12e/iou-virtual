<template>
	<div class="row">
    	<div class="panel" style="margin-top:40px;padding-top:20px;">
	    	<div class="panel-heading">
	    		<h1 class="main-h"><i class="fa fa-user main-i"></i> Payees</h1>
	    	</div>
	    	<div class="panel-body">
			<div class="table-container">
                <table class="table-users table" border="0">
                    <thead>
                        <tr>
                        	<th>Full-Name </th>
                            <th>uernames</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="p in payees">
                            <td>{{ p.user.name }}</td>
                            <td>{{ p.username }}</td>
                            <td>{{ p.user.email }}</td>
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
                payees:[]
            }
        },
        mounted()
        {
            axios.get('/admin/payees/all')
            .then(response=>{
                this.payees = response.data.payees;
            })
        }
    }
</script>