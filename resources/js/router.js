import Login from './pages/Auth/login.vue';
import Dashboard from './pages/dashboard.vue';
import Category from './pages/category.vue';
import Product from './pages/product.vue';
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
        name: 'layout.dashboard', 
        component: Dashboard
      },     
      {
        path: 'category',
        name: 'layout.category', 
        component: Category
      },  
      {
        path: 'product',
        name: 'layout.product', 
        component: Product
      },  
    ]
  },
]

export default routes;