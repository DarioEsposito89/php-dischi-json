const { createApp } = Vue;
createApp({
    data() {
        return {
            apiURL: "./server.php",
            diskList: [],
        }
    },
    methods: {
        // Chiamata API
        getAPI() {
            axios.get(this.apiURL)
            .then((response) => {
                this.diskList = response.data;
            });
        },
    },
    created() {
        this.getAPI();
    },
}).mount('#app');
