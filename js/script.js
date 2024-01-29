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
        apiPost(data){
            axios.post(this.apiUrl, data, {
                headers: {'Content-type': 'multipart/form-data'}
            }).then((response) => {

                this.todoList = response.data;
            })
        },
        deleteTask(index){
            let conf = confirm("Are you sure you want to delete this task?");
            if (conf) {
                const data = {
                    taskIndex: index
                }

                this.apiPost(data)
            }
        },
        addCheck(done, index){
            if (done == false) {
                const data = {
                    done: true,
                    index: index
                }

                this.apiPost(data)
            }
            else if (done == true){
                const data = {
                    done: false,
                    index: index
                }

                this.apiPost(data)
            }
        },
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