require('./bootstrap');

import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import 'popper.js';
import 'bootstrap';
import 'slick-carousel';

import slick from './partials/slick';
import menu from './partials/menu';
import employees from './partials/employees';

($ => {
    $(() => {
        // Jquery Functions
        slick();
        menu();
        employees();
    });
})(jQuery);

import Vue from 'vue';

Vue.component('example', require('./components/Example.vue').default);

const app = new Vue({
    el: '#app'
});
