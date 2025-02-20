import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Calendar from '../views/TakeAppointementView.vue'
import Register from '../views/RegisterView.vue'
import Login from '../views/loginView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
      meta: {
        title: 'Cohésion Sportive | Coach Personnel',
        description: 'Coaching sportif personnalisé au Mans. Programmes sur mesure, suivi personnalisé et résultats garantis.',
        keywords: 'coach sportif, personal trainer, fitness, remise en forme'
      },
    },
    {
      path: '/calendar',
      name: 'calendar',
      component: Calendar,
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/TakeAppointementView.vue'),
    },
    {
      path: '/register',
      name: 'Register',
      component: Register,
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/RegisterView.vue'),
    },
    {
      path: '/login',
      name: 'Login',
      component: Login,
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/LoginView.vue'),
    },
  ],
})

router.beforeEach((to, from, next) => {
  document.title = to.meta.title

  // Mise à jour des meta tags
  updateMetaTags(to.meta)

  next()
})

function updateMetaTags(meta) {
  // Description
  let descriptionTag = document.querySelector('meta[name="description"]')
  if (!descriptionTag) {
    descriptionTag = document.createElement('meta')
    descriptionTag.setAttribute('name', 'description')
    document.head.appendChild(descriptionTag)
  }
  descriptionTag.setAttribute('content', meta.description)

  // Keywords
  let keywordsTag = document.querySelector('meta[name="keywords"]')
  if (!keywordsTag) {
    keywordsTag = document.createElement('meta')
    keywordsTag.setAttribute('name', 'keywords')
    document.head.appendChild(keywordsTag)
  }
  keywordsTag.setAttribute('content', meta.keywords)
}

export default router
