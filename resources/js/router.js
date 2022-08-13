import ExampleComponent from './components/ExampleComponent.vue';
import Login from './components/Auth/login.vue';
const routes = [
  {
    path: '/login',
    name: 'adminLogin', 
    component: Login
  },
]

export default routes;