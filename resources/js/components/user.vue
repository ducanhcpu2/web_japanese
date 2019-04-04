<template>
    <div class="container">
       <table>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Create at</th>
            <th>Upadte at</th>
          </tr>
          <tr v-for="(user,index) in users">
              <th>{{user.id}}</th>
              <th>{{user.name}}</th>
              <th>{{user.email}}</th>
              <th>{{user.created_at}}</th>
              <th>{{user.updated_at}}</th>
          </tr>
        </table>
    </div>
</template>

<script>
    export default {
        name:'user',
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
<style scoped> 
    .container {
        width: 80%;
    }
    
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
</style>
