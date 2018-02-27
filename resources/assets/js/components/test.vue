<template>
   <div id="app">
       <p>
           <router-link to="/home">go to home</router-link>
       </p>
       <router-view></router-view>
       我的第一个Vue H5小应用
   </div>
</template>

<script>

  export default {
    name : "test"
  };
</script>

<style scoped lang="less">
    @import '~vux/src/styles/reset.less';
</style>
