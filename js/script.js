const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todoList: [],
            newTask: '',
        }
    },
    mounted() {
        this.getTodoList();
    },
    methods: {
        getTodoList(){
            axios.get(this.apiUrl).then((response) => {
                console.log(response.data);
                this.todoList = response.data;
            })
        }
    },
}).mount('#app')