require('./bootstrap');

const app = new Vue({
    el: "#app",
    data: {},
    methods: {
        cancel(event) {
            /* if (event) {
                event.preventDefault();
            }
            confirm('Sei sicuro di voler eliminare definitivamente questo fumetto?'); */

            if (!confirm('Sei sicuro di voler eliminare definitivamente questo fumetto?')) {
                event.preventDefault();
            }
        }
    }
});
