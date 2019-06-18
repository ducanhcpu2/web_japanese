<template>
  <div class="container1">
    <div class="brand"></div>
    <div class="path_list">
      <div class="menu">
        danh sách bài học :
        <nav>
          <ul>
            <li v-for="(obj,index) in lesson"><router-link :to="{ name: 'DetailLesson' ,params :{id : obj.id_lesson} }" class="links">{{obj.lesson_name}}</router-link></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

<!--  <div class="">-->
<!--    -->
<!--    <ul>-->
<!--      <li v-for="(obj,index) in lesson"><router-link :to="{ name: 'DetailLesson' ,params :{id : obj.id_lesson} }">{{obj.lesson_name}}</router-link></li>-->
<!--    </ul>-->
<!--  </div>-->
</template>

<script>
  export default {
    name:'ListLesson',
    components:{},
    data(){
      return {
        lesson: [],
      }
    },
    created() {
      axios
        .get('/api/getListLesson')
        .then(response => (this.lesson = response.data))
        .then(console.log(this.lesson))
    }
  }
</script>
<style scoped lang="scss">
  .container1 {
    position: fixed;
    left:0;
    width: 18%;
    background-color: #D84F31;
    height: 100%;

    .path_list {
      position: relative;
      height: inherit;
      width: 100%;

      .menu{
        width: inherit;
        height:inherit;
        position: relative;
        z-index: 10;
        top: 0px;
        transition: all .6s ease-in-out;

        nav{
          ul{
            padding: 0;

            li {
              width: 100%;
              list-style-type: none;
              text-align: center;
              transition: all .5s ease;

              .links {
                padding: 10px 0;
                display:block;
                width: 100%;
                text-decoration: none;
                color: white;
                font-weight: 800;
                background-color: transparent;

                &:hover {
                  background-color: #3b5998;
                }

              }
            }/*end of li*/
          }/*end of ul*/
        }/*end of nav*/
      }/*end of menu-hide*/
    }
  }
</style>
