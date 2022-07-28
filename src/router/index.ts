import { createRouter, createWebHistory } from 'vue-router'
import Principal from '../components/Principal.vue'
import Home from '../views/Home.vue'
import AboutView from'../views/AboutView.vue'
import FAQ from '../views/FAQ.vue'
import Email from '../views/app-email.vue'
import aemail from '../views/app-event-calender.vue'
import cal from '../views/uc-calendar.vue'
import log from '../views/page-login.vue'
import reg from '../views/page-register.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/p',
      name: 'prin',
      component: Principal
    },
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      component: AboutView
    },
    {
      path: '/faq',
      name: 'faq',
      component: FAQ
    },
    {
      path: '/email',
      name: 'email',
      component: Email
    },
    {
      path: '/aemail',
      name: 'aemail',
      component: aemail
    },
    {
      path: '/c',
      name: 'calendar',
      component: cal
    },
    {
      path: '/log',
      name: 'log',
      component: log
    },
    {
      path: '/reg',
      name: 'reg',
      component: reg
    },
    
  ]
})

export default router
