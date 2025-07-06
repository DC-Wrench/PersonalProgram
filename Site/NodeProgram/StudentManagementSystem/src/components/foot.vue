<template>
	<div>
		<div class="footers">
			<div>
				<div class="foot_item">
					<span style='font-size: 20px;font-weight: bold;'>{{title}}</span>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		props: {
			title: {
				type: String,
				default: ''
			},
		},
	}
</script>

<style scoped>
	.footers {
		width: 100%;
		height: 100px;
		background: #409EFF;
		color: #fff;
		font-size: 14px;
		text-align: center;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
	}
	
	.foot_item {
		padding: 6px 0;
	}
</style>