/*const Home = () => import('./components/Home.vue')
const Contacto = () => import('./components/Contacto.vue')*/
import Home from './components/Home.vue'
import Contacto from './components/Contacto.vue'
//importamos los componentes para datper
/*const Mostrar = () => import('./components/datper/Mostrar.vue')
const Crear = () => import('./components/datper/Crear.vue')
const Editar = () => import('./components/datper/Editar.vue')*/
import Mostrar from './components/datper/Mostrar.vue'
import Crear from './components/datper/Crear.vue'
import Editar from './components/datper/Editar.vue'

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'mostrarDatper',
        path: '/datper',
        component: Mostrar
    },
    {
        name: 'crearDatper',
        path: '/crear',
        component: Crear
    },
    {
        name: 'editarDatper',
        path: '/editar/:id',
        component: Editar
    },
     {
        name: 'contacto',
        path: '/contacto',
        component: Contacto
    }
]