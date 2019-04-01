<template>
    <div class="container">
        <sideBar></sideBar>
        <div class="content">
            <div class="btn_exit">Exit</div>
            <div class="router_content">
            <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>

    import sideBar from './sideBar.vue';
    export default {
        name:'app',
        components: {
            sideBar,
        }
    }
</script>
<style scoped>
    .content {
        position: absolute;
        right: 0;
        width: 80%;
    }
</style>
