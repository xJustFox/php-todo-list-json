const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            newTask: '',
            todoList: [],
        }
    },
    mounted() {
        this.getTodoList();
    },
    methods: {
        addTask(){
            const data = {
                text: this.newTask
            }

            axios.post(this.apiUrl, data, {
                headers: {'Content-type': 'multipart/form-data'}
            }).then((response) => {
                this.newTask = '';

                this.todoList = response.data;
            })
        },
        getTodoList(){
            axios.get(this.apiUrl).then((response) => {
                console.log(response.data);
                this.todoList = response.data;
            })
        }
    },
}).mount('#app')