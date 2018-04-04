<template>
   <div>
       <!--<group>-->
           <!--<cell title="title" value="value">123333</cell>-->
       <!--</group>-->
       <div>
           <iframe frameborder="yes" border="4" marginwidth="0" marginheight="0" width=330 height=86
                   src="//music.163.com/outchain/player?type=2&id=27949692&auto=1&height=66"></iframe>
       </div>
       <div>
           <router-link to="/test">go to test</router-link>
           欢迎来到 Raybon 的Code 世界
       </div>
       <!--<embed src="//music.163.com/style/swf/widget.swf?sid=27949692&type=2&auto=1&width=320&height=66" width="340" height="86"  allowNetworking="all"></embed>-->

   </div>
</template>

<script>

  export default {
    name : "home",
    mounted() {
      console.log('home mounted.')
    }
  };
</script>

<style scoped lang="less">
    @import '~vux/src/styles/reset.less';
</style>
