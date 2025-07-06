<template>
	<div class="content">
		<div class="dingbu">
			<!-- 头部 -->
			<Head @tuichu_click='data.tuichu_click' :username="data.username" title='学生信息后台管理系统'></Head>
		</div>
		<!-- 左面菜单 -->
		<LeftNav @navIndex_click='data.navIndex_click' :navIndex='data.navIndex' :list='data.navList'></LeftNav>
		<!-- 右面页面 -->
		<div class="mains">
			<div style="padding: 30px 40px;">
				<router-view></router-view>
			</div>
		</div>
	</div>
</template>

<script>
	import {reactive,onMounted} from 'vue'
	import {useRouter} from 'vue-router'
	import { ElMessage } from 'element-plus'
	import Head from '@/components/head.vue'
	import LeftNav from '@/components/leftnav.vue'
	export default {
		components:{Head,LeftNav},
		setup() {
			onMounted(()=>{
				data.username = localStorage.getItem('username_')?localStorage.getItem('username_'):'admin'
			})
			const router = useRouter()
			const data = reactive({
				navIndex:0,
				username:'',
				navList:[
					{
						title:'用户管理',
						url:'/',
						icon:'User'
					},
					{
						title:'学院管理',
						url:'/xueyuan',
						icon:'School'
					},
					{
						title:'班级管理',
						url:'/banji',
						icon:'Memo'
					},
					{
						title:'分数管理',
						url:'/fenshu',
						icon:'Calendar'
					},
					{
						title:'公告管理',
						url:'/gonggao',
						icon:'ChatDotRound'
					}
				],
				navIndex_click:(params)=>{
					data.navIndex = params.index
					router.push({
						path:params.v.url
					})
				},
				tuichu_click:()=>{
					ElMessage({
					    message: '退出成功',
					    type: 'success',
					  })
					  localStorage.removeItem('isLogin_')
					  localStorage.removeItem('username_')
					setTimeout(()=>{
						router.push({
							path:'/login'
						})
					},1500)  
				}
			})
			return {
				data
			}
		}
	}
</script>

<style scoped>
	.content{
		/* background: #F0F2F5; */
		padding: 115px 0 60px 0;
		text-align: left;
		display: flex;
		position: relative;
	}
	.dingbu{
		position: absolute;
		top: 0px;
		width: 100%;
		background: #fff;
	}
	.mains{
		/* max-width: 1660px; */
		/* max-width: 1960px; */
		width: 100%;
		margin: 0 auto;
		/* background: #F0F2F5; */
	}
</style>