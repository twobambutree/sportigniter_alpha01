
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../bootstrap');

//var VueResource = require('vue-resource');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('../components/frontend/Example.vue'));
Vue.component('video-upload', require('../components/frontend/VideoUpload.vue'));

//Vue.use(VueResource);
//Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

const app = new Vue({
    el: '#app',
    data: window.sportigniter
});
