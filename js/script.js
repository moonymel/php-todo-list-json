const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todoList: [],
        }
    },
    mounted() {
        this.getList();
    },
    methods: {
        getList() {
            axios.get(this.apiUrl).then((response) => {
                console.log(response.data);
                this.todoList = response.data;
            })

        }
    }
}).mount('#app')