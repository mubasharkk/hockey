/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
Vue.component('Regions', require('./components/Regions.vue'));
Vue.component('Clubs', require('./components/Clubs.vue'));

new Vue({
    el: '#root',
    data: {
        current: "regions",
        list: []
    },
    created: function () {
        this.switchToRegions();
    },
    methods: {
        switchToRegions: function () {
            var $this = this;
            axios.get('api/regions').then(function (res) {
                $this.list = res.data;
            });
            console.log(this.list);
        },
        switchToClubs: function (regionId) {
            axios.get('api/clubs/' + regionsId).then(function (res) {
                this.list = res.data;
            });
        }
    },
    components: ['Regions', 'Clubs'],
});