<template>
    <div class="container">
        <sideBar></sideBar>
        <div class="content">
            <div class="btn_exit">Exit</div>
            <div class="router_content">
            <!-- <router-view></router-view> -->
                <userList></userList>
            </div>
        </div>
    </div>
</template>

<script>
    import sideBar from './sideBar.vue'
    import userList from './user.vue'
    import allExams from './exams.vue'
    export default {
        name:'ExampleComponent',
        components: {
            sideBar,
            userList,
        }
    }
</script>
<style>
  body {
    margin: 0;
  }
</style>

