import Vue from 'vue'
import VueRouter from 'vue-router';
import Home from '../components/home.vue';
 Vue.use(VueRouter)

// 实例化路由加载器
const route = new VueRouter({
  routes : [
    {
      path : '/home',
      component : Home
    },

  ]
});
export default route;

