import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Home from '../views/Home'
import NotFound from '../views/NotFound'

import Request from '../views/project/Create.vue'
import TableOfProject from '../views/project/Read.vue'
import ShowTheProject from '../views/project/Show.vue'


import TableFeedback from '../views/feedback/Read.vue'

import Login from '../views/auth/Login'


const routes = [
  {
    path: '/',
    name: 'home',
    component: Home,
    // meta: { title: home }
  },
  {
    path: '/login',
    name: 'pages.login',
    component: Login
  },

  {
    path: '/request',
    name: 'request',
    component: Request
  },
  {
    path: '/project-table',
    name: 'project.table',
    component: TableOfProject
  },
  {
    // :noteSlug digunakan untuk parameter di file Table.vue pada router-link
    path: '/show/:projectSlug',
    name: 'project.show',
    component: ShowTheProject
  },
  {
    path: '/feedback',
    name: 'feedback',
    component: TableFeedback
  },
  {
    path: '*',
    component: NotFound
  }
]

const router = new VueRouter({
  linkActiveClass: 'active',
  mode: 'history',
  routes
});

// dynamic title
// router.beforeEach((to, from, next) => {
//   // document.title = to.meta.title
//   console.log("tes");
// })


export default router