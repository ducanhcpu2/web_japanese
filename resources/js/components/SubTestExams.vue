<template>
  <div style="right: 20px">
    <table>
      <div>
        <tr v-for="(qs,index) in question">
          <div id="">
            <div>câu số : {{qs.id_task}}</div>
            <br>
            <div>{{qs.content}}</div>
            từ trong chỗ trống : {{qs.key_text}} <br>
            <input type="radio" :name="`question_${index}`" value="a" v-model="picked[index]"> {{qs.sub_task_a}}<br>
            <input type="radio" :name="`question_${index}`" value="b" v-model="picked[index]"> {{qs.sub_task_b}}<br>
            <input type="radio" :name="`question_${index}`" value="c" v-model="picked[index]"> {{qs.sub_task_c}}<br>
            <input type="radio" :name="`question_${index}`" value="d" v-model="picked[index]"> {{qs.sub_task_d}}<br>
          </div>
        </tr>
      </div>
    </table>
    <div>
      Chấm bài <button @click="submit()">Submit</button> <br>
      Điểm của bạn là : {{totalScore}}
    </div>

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
        question: [],
        qs: [],
        index: 0,
        picked: [],
        totalScore: 0,
      }
    },
    mounted() {
      axios.get(('/api/getListQuestion'), {
        params: {
          id_exam: this.$route.params.id,
        }
      })
        .then(response => (this.question = response.data))
        .then(console.log(this.question))
    },
    methods: {
      async submit () {
        const { data } = await axios.get('/api/point', {
          params: {
            picked: this.picked,
            id_exam: this.$route.params.id,
          },
        });

        console.log('data', data);
        this.totalScore = data;
      },
    },
  }

</script>

<style scoped>

</style>
