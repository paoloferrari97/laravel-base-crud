require('./bootstrap');

const app = new Vue({
    el: "#app",
    data: {},
    methods: {
        cancel(event) {
            if (!confirm('Sei sicuro di voler eliminare definitivamente questo fumetto?')) {
                event.preventDefault();
            }
        }
    }
});
