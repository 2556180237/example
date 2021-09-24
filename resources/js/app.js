require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue'
import Message from './components/MessageComponent.vue'


// creating a vue instance
const app = new Vue({
    el: '#app',
    components: {
        "message-vue": Message
    }
});
