
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

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('List', require('./components/List.vue'));
Vue.component('text-block', require('./components/text-block.vue'));
Vue.component('image-vue', require('./components/image-vue.vue'));
Vue.component('recent-news', require('./components/recent-news.vue'));
Vue.component('hero-slider', require('./components/hero-slider.vue'));
Vue.component('news', require('./components/news.vue'));
Vue.component('player_cards', require('./components/player_cards.vue'));
Vue.component('form-comment', require('./components/form-comment.vue'));
Vue.component('all_players', require('./components/all_players.vue'));
Vue.component('all_countries', require('./components/all_countries.vue'));


const app = new Vue({
    el: '#layout'
});
