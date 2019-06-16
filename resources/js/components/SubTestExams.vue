<template>
  <div>
    <table>

      <tr v-for="(qs,index) in question">
        <div id="">
          <div>{{qs.id_task}}</div> <br>
          <div>{{qs.content}}</div>
          từ trong chỗ trống : {{qs.key_text}} <br>


          <input type="radio"  id="a" value="a" v-model="index"> {{qs.sub_task_a}}<br>
          <input type="radio"  id="b" value="b" v-model="index"> {{qs.sub_task_b}}<br>
          <input type="radio"  id="c" value="c" v-model="index"> {{qs.sub_task_c}}<br>
          <input type="radio"  id="d" value="d" v-model="index"> {{qs.sub_task_d}}<br>
          <span>{{index}}</span>
        </div>

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
          qs:[],
          index: 0,
          picked :[],

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