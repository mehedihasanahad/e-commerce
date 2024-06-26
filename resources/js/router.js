import Login from './pages/Auth/login.vue';
import Dashboard from './pages/dashboard.vue';
import Category from './pages/catalog/category.vue';
import categoryCreate from './pages/catalog/CategoryCreate.vue';
import Product from './pages/catalog/product.vue';
import productCreate from './pages/catalog/productCreate.vue';
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
        path: 'category/create',
        name: 'layout.categoryCreate',
        component: categoryCreate
      },
      {
        path: 'product',
        name: 'layout.product',
        component: Product
      },
      {
        path: 'product/create',
        name: 'layout.productCreate',
        component: productCreate
      },
    ]
  },
]

export default routes;
