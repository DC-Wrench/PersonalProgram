<template>
	<div>
		<div class="dingbu">
			<!-- 头部 -->
			<div class="header">
				<div class="logo">
					{{title}}
				</div>
				<div class="tui">
					<Tou></Tou>
					<span class='mg_r20'>{{username}}</span>
					<img style='cursor: pointer;width:30px;' @click="tuichu_click" src="../assets/tuichu.png" alt="">
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import Tou from '@/components/tou.vue'
	export default {
		components:{
			Tou
		},
		props:{
			title: {
				type: String,
				default: '后台管理系统'
			},
			username: {
				type: String,
				default: 'admin'
			}
		},
		methods:{
			// 退出
			tuichu_click(){
				this.$emit('tuichu_click')
			}
		}
	}
</script>

<style scoped>
	.header{
		color: #fff;
		background:#333;
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 30px 40px;
	}
	.logo{
		font-size: 24px;
		font-weight: bold;
	}
	.mg_r20{
		margin-right: 20px;
	}
	.tui{
		display:flex;
		align-items:center;
	}
</style>