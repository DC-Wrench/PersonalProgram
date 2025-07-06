import {
	createRouter,
	createWebHistory
} from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
	history: createWebHistory(
		import.meta.env.BASE_URL),
	routes: [{
			path: '/',
			name: 'home',
			component: HomeView,
			children: [{
					path: '/',
					component: () => import("../views/userAdmin.vue"),
				},
				{
					path: '/banji',
					component: () => import("../views/banjiAdmin.vue"),
				},
				{
					path: '/xueyuan',
					component: () => import("../views/xueyuanAdmin.vue"),
				},
				{
					path: '/fenshu',
					component: () => import("../views/fenshuAdmin.vue"),
				},
				{
					path: '/gonggao',
					component: () => import("../views/gonggao.vue"),
				}
			]
		},
		{
			path: '/login',
			name: 'login',
			component: () => import('../views/login.vue')
		}
	]
})
// 路由守卫
router.beforeEach((to,from,next)=>{
	if(to.path=='/'){
		if(localStorage.getItem('isLogin_')){
			next()
		}else{
			next({path:'/login'})
		}
	}
	next()
})
export default router
