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

    },
    mounted() {
        this.fetchToDo()
    }
}).mount('#app')