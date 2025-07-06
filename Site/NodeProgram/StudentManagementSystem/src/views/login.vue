<template>
	<div class="content">
		<div>
			<el-card class="box-card">
				<Title title='学生信息后台管理系统'></Title>
				<div class="pd_tb60">
					<div class="pd_tb10">
						<el-input v-model="data.username" size="large" placeholder="请输入账号"
							prefix-icon="User" />
					</div>
					<div class="pd_tb10">
						<el-input type="password" v-model="data.password" size="large" placeholder="请输入密码"
							prefix-icon="Unlock" />
					</div>
				</div>
				<div class="mg_t0">
					<el-button @click="data.denglu_click" style="width: 100%;padding: 20px 0pt;" color="#3f8cd3" type="primary">登录
					</el-button>
				</div>
			</el-card>
		</div>
	</div>
</template>

<script setup>
	import { useCounterStore } from '@/stores/counter.js'
	const store = useCounterStore()
	import Title from '@/components/title.vue'
	import {
		reactive,onMounted
	} from 'vue'
	import {
		useRouter
	} from 'vue-router'
	import {
		ElMessage
	} from 'element-plus'
	const router = useRouter()
	const data = reactive({
		username: '',
		password: '',
		// 登录
		denglu_click: () => {
			let $state = store.$state
			if(data.username==''||data.password==''){
				ElMessage({
					message: '请填写账号或密码',
					type: 'error',
				})
			}else if(data.username=='admin'||data.password=='123456'){
				let userInfo = {
					username:data.username,
					password:data.password
				}
				$state.data.userInfo = userInfo
				localStorage.setItem('isLogin_',1)
				localStorage.setItem('username_',data.username)
				ElMessage({
					message: '登录成功',
					type: 'success',
				})
				setTimeout(() => {
					router.push({
						path: '/'
					})
				}, 1500)
			}else{
				ElMessage({
					message: '账号密码不正确',
					type: 'error',
				})
			}
		}
	})
</script>

<style scoped>
	.content {
		width: 100vw;
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
		background-position: center;
		background-repeat: no-repeat;
		background-size: 100% 100%;
		background-image: url('../assets/bjt.jpeg');
	}

	.box-card {
		padding-top: 40px;
		padding-bottom: 40px;
		padding-left: 40px;
		padding-right: 40px;
		width: 520px;
		margin: auto;
	}
	.pd_tb60{
		padding: 60px 0;
	}
</style>
