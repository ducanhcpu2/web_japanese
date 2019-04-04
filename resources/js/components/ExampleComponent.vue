<template>
    <div class="container">
        <div v-for="(user,index) in users">
        <div>{{user.id}}</div>
        <div>{{user.email}}</div>
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
              .then(response => (this.users = response.data))
              .then(console.log(this.users))
        }
    }
</script>
