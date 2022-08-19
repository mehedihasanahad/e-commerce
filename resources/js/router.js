import Login from './pages/Auth/login.vue';
import Dashboard from './pages/dashboard.vue';
import Layout from './layout';
const routes = [
  {
    path: '/login',
    name: 'adminLogin', 
    component: Login
  },
  {
    path: '/',
    name: 'layout', 
    component: Layout,
    redirect: { path: '/dashboard' },
    children: [
      {
        path: 'dashboard',
        name: 'layout.adminLogin', 
        component: Dashboard
      },     
    ]
  },
]

export default routes;