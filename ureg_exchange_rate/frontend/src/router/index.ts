import { createRouter, createWebHistory } from 'vue-router'
import Forex from '@/views/Forex.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Forex',
      component: Forex,
    },
  ],
})

export default router
