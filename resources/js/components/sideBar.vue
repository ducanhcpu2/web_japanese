<template>
    <div class="container">
    	<div class="brand"></div>
    	<div class="path_list">
        <div class="menu">
          <nav>
            <ul>
              <li v-for="(route,index) in routes"><router-link :to="route.path" class="links">{{route.name}}</router-link></li>
            </ul>
          </nav>
        </div>
    	</div>
    </div>
</template>

<script>
    export default {
        name:'sideBar',
        components:{},
        data(){
            return {
                routes:[
                    {
                        name:'Users',
                        path:'/admin'
                    },
                    {
                        name:'New exam',
                        path:'/admin'
                    },
                    {
                        name:'Exam',
                        path:'/admin'
                    },
                    {
                        name:'Exam',
                        path:'/admin'
                    }
                ]
            }
        }
    }
</script>
<style scoped lang="scss">
	.container {
		position: fixed;
		left:0;
		width: 18%;
		background-color: #42d4f4;
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
