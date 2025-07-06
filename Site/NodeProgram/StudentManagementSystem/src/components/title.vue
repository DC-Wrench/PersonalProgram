<template>
	<div>
		<div class="title">
			{{title}}
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
	.title{
		text-align: center;
		font-size: 26px;
		font-weight: bold;
	}
</style>