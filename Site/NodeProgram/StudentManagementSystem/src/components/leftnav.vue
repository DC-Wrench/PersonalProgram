<template>
	<div class="navList">
		<div @click="navIndex_click(i,v)" class="nav_items" :class="navIndex==i?'navIndex':''" v-for="(v,i) in list" :key="i">
			<el-icon style='margin-right:4px;' :size="18">
				<component :is='v.icon'/>
			  </el-icon>
			<span>{{v.title}}</span>
		</div>
	</div>
</template>

<script>
	export default {
		props: {
			navIndex: {
				type: Number,
				default: 0
			},
			list: {
				type: Array,
				default: []
			},
		},
		methods:{
			navIndex_click(i,v){
				let p = {
					index:i,
					v:v
				}
				this.$emit('navIndex_click',p)
			}
		}
	}
</script>

<style scoped>
	.navList{
		height:calc(100vh - 160px) ;
		/* min-height: 100vh; */
		min-width: 200px;
		width: 200px;
		background: #fff;
		padding: 0px;
		border-right: 1px solid #f1f1f1;
	}
	.nav_items{
		display: flex;
		align-items: center;
		cursor: pointer;
		background: #fff;
		padding: 25px 40px;
		border-bottom: 1px solid #f1f1f1;
	}
	.navIndex{
		color: #fff;
		font-weight: bold;
		font-size: 16px;
		/* background: #3f8cd3; */
		color: #3f8cd3;
	}
</style>