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
        console.log(todoList);
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