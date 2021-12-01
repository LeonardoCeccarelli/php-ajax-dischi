"use strict"

Vue.config.devtools = true;

new Vue({
    el: "#root",
    data: {
        listSong: []
    },
    mounted() {
        axios.get("http://localhost/php-ajax-dischi/api/mainData.php").then(resp => {
            this.listSong = resp.data.response
        })
    }
})