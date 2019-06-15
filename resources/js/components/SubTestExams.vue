<template>
  <div>
    <table>
      <tr>
        <th>Id</th>
      </tr>
      <tr v-for="(qs,index) in question">
        <th>{{qs.id_task}}</th>
      </tr>
    </table>
  </div>
</template>

<script>
    export default {
        name: "sub_test_exams",
      props: {
        id: {
          default: -1
        },
      },
      data() {
        return {
          question:[],
        }
      },
      mounted() {
          this.$route.params.id;
        axios
          .get(('/api/getListQuestion') ,{params: {
              id_exam : this.$route.params.id,
            }})
          .then(response => (this.question = response.data))
          .then(console.log(this.question))
      }
    }

</script>

<style scoped>

</style>