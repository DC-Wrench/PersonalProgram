<template>
	<div>
		<div class="banners" style='margin-bottom:0px;'>
			<div>
				<el-carousel type="card" :interval="4000" arrow="always">
					<el-carousel-item v-for="(v,i) in bannerlist" :key="i">
						<img style="width: 100%;height: 100%;" :src="v.img" alt="轮播图">
					</el-carousel-item>
				</el-carousel>
			</div>
		</div>
	</div>
</template>

<script>
	import b1 from "@/assets/banner1.jpg"
	import b2 from "@/assets/banner2.jpg"
	import b3 from "@/assets/banner3.jpg"
	import b4 from "@/assets/banner4.jpg"
	export default {
		components: {
			b1,b2,b3,b4
		},
		props: {
			title: {
				type: String,
				default: ''
			},
			bannerlist:{
				type:Array,
				default:[
					{
						img:b1
					},
					{
						img:b2
					},
					{
						img:b3
					},
					{
						img:b4
					}
				]
			}
		},
	}
</script>

<style scoped>
	/deep/ .el-carousel__container {
		height: 350px;
	}
	
	.el-carousel__item {
		background-position: center;
		background-repeat: no-repeat;
		background-size: 100% 100%;
	}
	
	.el-carousel__item:nth-child(2n) {
		background-color: #99a9bf;
	}
	
	.el-carousel__item:nth-child(2n+1) {
		background-color: #d3dce6;
	}
</style>