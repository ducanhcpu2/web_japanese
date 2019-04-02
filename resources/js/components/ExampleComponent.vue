<template>
    <div class="container">
        HIHIHI

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
