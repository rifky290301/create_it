import Home from '../views/Home'
import About from '../views/About'
import Contact from '../views/Contact'

import Request from '../views/project/Create.vue'
import TableOfProject from '../views/project/Read.vue'
import ShowTheProject from '../views/project/Show.vue'


import TableFeedback from '../views/feedback/Read.vue'

import Login from '../views/auth/Login'
import VueRouter from 'vue-router'


export default {

  mode: 'history',
  // class yang diberikan vue untuk link yang sedang aktif
  linkActiveClass: 'active',

  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
      // meta: { title: home }
    },
    {
      path: '/about',
      name: 'pages.about',
      component: About
    },
    {
      path: '/contact',
      name: 'pages.contact',
      component: Contact
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
  ]
}


// const cek = new VueRouter({ routes })

// cek.beforeEach((to, from, next) => {
//   // document.title = to.meta.title
//   console.log("tes");
// })