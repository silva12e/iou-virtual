require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import swal from 'sweetalert';
import VeeValidate from 'vee-validate';
import money from 'v-money';

Vue.use(money, {precision: 4});
Vue.use(VeeValidate);

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('transaction-log', require('./components/TransactionLog.vue'));
Vue.component('create-transaction', require('./components/createTransaction.vue'));
Vue.component('account-summary', require('./components/AccountSummary.vue'));
Vue.component('payees-index', require('./components/Payee.index.vue'));
Vue.component('account-summary', require('./components/AccountSummary.vue'));

const app = new Vue({
    el: '#app'
});
