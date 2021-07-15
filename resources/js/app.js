require('./bootstrap');

const app = new Vue({
    el: "#app",
    data: {},
    methods: {
        cancel() {
            confirm('Sei sicuro di voler eliminare definitivamente questo fumetto?');
        }
    }
});
