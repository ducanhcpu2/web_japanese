<template>
  <div class="container">
    <table>
      <tr>
        <th>Id</th>
        <th>topic</th>
        <th>status</th>
        <th>level</th>
        <th>vào thi</th>
      </tr>
      <tr v-for="(obj,index) in allExams">
        <th>{{obj.id_exam}}</th>
        <th>{{obj.topic}}</th>
        <th>{{obj.status}}</th>
        <th>{{obj.level}}</th>
        <th></th>
      </tr>
    </table>
  </div>
</template>

<script>
    export default {
        name:'exams',
        data(){
            return {
                allExams:[],
            }
        },
        created() {
            axios
                .get('/api/getListExams')
                .then(response => (this.allExams = response.data))
                .then(console.log(this.allExams))
        }
    }
</script>
<style scoped>
  .container {
    position: absolute;
    right: 0;
    width: 81.9%;
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
