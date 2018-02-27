import Vue from 'vue'
import VueRouter from 'vue-router';
import Home from '../components/home.vue';
import ExampleComponent from  '../components/ExampleComponent.vue';
 Vue.use(VueRouter)

// 实例化路由加载器
const route = new VueRouter({
  routes : [
    {
      path : '/',
      component : Home
    },
    {
      path : '/test',
      component : ExampleComponent
    }

  ]
});
export default route;

