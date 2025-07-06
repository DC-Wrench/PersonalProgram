<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <RouterView />
</template>

<style>
* {
	margin: 0;
	padding: 0;
}
html,body{
	margin: 0;
	padding: 0;
}
.w100{
	width: 100%;
}
.flex{
	display: flex;
}
.between{
	justify-content: space-between;
}
.jst_center{
	justify-content: center;
}
.items_center{
	align-items: center;
}
.pd_tb40 {
	padding-top: 40px;
	padding-bottom: 40px;
}

.pd_tb20 {
	padding-top: 20px;
	padding-bottom: 20px;
}

.pd_tb10 {
	padding-top: 10px;
	padding-bottom: 10px;
}
.pd_tb15 {
	padding-top: 15px;
	padding-bottom: 15px;
}
.mg_tb20{
	margin-top: 20px;
	margin-bottom: 20px;
}
.mg_t10 {
	margin-top: 10px;
}
.mg_t20 {
	margin-top: 20px;
}
.mg_t30 {
	margin-top: 30px;
}
.mg_t40 {
	margin-top: 40px;
}
.mg_r20{
	margin-right: 20px;
}
.pointer{
	cursor: pointer;
}
.font12{
	font-size: 12px;
}
.font14{
	font-size: 14px;
}
.font16{
	font-size: 16px;
}
.font18{
	font-size: 18px;
}
.font20{
	font-size: 20px;
}
.font22{
	font-size: 22px;
}
</style>
