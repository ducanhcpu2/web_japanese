<template>
    <div class="container">
        <div v-for="(user,index) in users">
            <div class="email">{{user.email}}</div>
            <div class="name">{{user.name}}</div>
            <div class="id_exam">{{user.id_exam}}</div>
        </div>
    </div>
</template>

<script>
    export default {
        name:'ExampleComponent',
        data(){
            return {
                users:[],
            }
        },
        created() {
            axios
              .get('/api/admin/list-users')
              .then(response => (this.users = response))
              .then(console.log(this.users))
        }
    }
</script>
