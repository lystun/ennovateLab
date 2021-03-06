/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import router from './helpers/router'

import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
    color: '#ffcc03',
    failedColor: 'red',
    height: '2px'
})

import VueTypedJs from 'vue-typed-js'
Vue.use(VueTypedJs)

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

import swal from 'sweetalert2';
window.swal = swal;

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 5000
})
window.toast = toast

import CKEditor from '@ckeditor/ckeditor5-vue';
Vue.use( CKEditor );


// Require Froala Editor js file.
require('froala-editor/js/froala_editor.pkgd.min.js')

// Require Froala Editor css files.
require('froala-editor/css/froala_editor.pkgd.min.css')
require('froala-editor/css/froala_style.min.css')

import VueFroala from 'vue-froala-wysiwyg'
Vue.use(VueFroala)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('app-home', require('./components/AppHome.vue').default);
Vue.component('app-admin', require('./components/AppAdmin.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
