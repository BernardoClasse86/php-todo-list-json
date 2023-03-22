const { createApp } = Vue

console.log('hello world')

createApp({

    data() {
        return {
            toDoList: [],
            newTask: '',
        }
    },

    methods: {

        fetchToDo() {
            axios
                .get('./server.php')
                .then((res) => {
                    // console.log(res.data)
                    this.toDoList = res.data
                    // console.log(this.toDoList[0])
                })
                .catch((err) => {
                    console.log(err)
                    this.toDoList = []
                })
        },

        addTask() {

            const task = {
                text: this.newTask,
                status: true,
            }

            console.log(this.newTask)

            axios
                .post('./server.php', task, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                })
                .then((res) => {
                    this.toDoList = res.data
                    console.log(this.toDoList)
                    this.newTask = ''
                })
                .catch((err) => {
                    console.log(err)
                })
        }

    },
    mounted() {
        this.fetchToDo()
    }
}).mount('#app')