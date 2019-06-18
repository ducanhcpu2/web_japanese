<template>
  <div>
    Phần Ngữ pháp :
    <div>
      <tr v-for="(obj,index) in grammar">
        <th>{{obj.id_gra}}</th>
        <th>{{obj.content}}</th>
      </tr>
    </div>
    Phần từ vựng :</br>
    <div >
        <tr>
          <th>Id</th>
          <th>content</th>
          <th>mean</th>
          <th>kanji</th>
        </tr>
        <tr v-for="(obj,index) in voca">
          <th>{{obj.id_voca}}</th>
          <th>{{obj.content}}</th>
          <th>{{obj.mean}}</th>
          <th>{{obj.kanji}}</th>
        </tr>
    </div>
  </div>
</template>

<script>
  export default {
    name: "DetailLesson",
    data () {
      return {
        voca : [],
        grammar: [],
      }
    },
    mounted() {
      axios.get(('/api/getVocabularry'), {
        params: {
          id_lesson: this.$route.params.id,
        }
      })
        .then(response => (this.voca = response.data))
        .then(console.log(this.voca));

      axios.get(('/api/getGrammar'), {
        params: {
          id_lesson: this.$route.params.id,
        }
      })
        .then(response => (this.grammar = response.data))
        .then(console.log(this.grammar))
    },
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