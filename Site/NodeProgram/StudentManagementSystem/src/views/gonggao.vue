<template>
	<div>
		<div>
			<div class="top_">
				<div style="display: flex;align-items: center;justify-content: space-between;">
					<h3>公告管理</h3>
					<div>
						<el-button plain color="#3f8cd3" @click="showModel"><el-icon class="icon_right"><el-icon><Plus /></el-icon></el-icon><text>新增公告</text></el-button>
					</div>
				</div>
			</div>
		</div>
		<!-- 轮播图 -->
		<el-card class="box-card" style='margin-bottom:40px;'>
			<Banner></Banner>
		</el-card>
		<!-- 公告列表 -->
		<el-card class="box-card">
			<div style="padding-bottom: 10px;">
				<span style="font-size: 14px;">标题：</span>
				<el-input style="width: 300px;margin: 0 20px;" v-model="data.input1" />
				<el-button color="#3f8cd3" @click="sousuo">搜索</el-button>
				<el-button @click="chongzhi">重置</el-button>
			</div>
			<el-table :data="data.tableData" empty-text='暂无更多数据' style="width: 100%">
				<el-table-column prop='id' label="ID" width="120">
				</el-table-column>
				<el-table-column prop="title" label="公告标题" />
				<el-table-column prop="content" label="公告内容" />
				<el-table-column prop="create_time" label="创建时间" />
				<el-table-column label="操作">
					<template #default="scope">
						<el-button size="small" type="primary" @click="xiugai(scope.$index, scope.row)">修改</el-button>
						<el-button size="small" type="danger" @click="shanchu(scope.$index, scope.row)">删除
						</el-button>
					</template>
				</el-table-column>
			</el-table>
		</el-card>
		<!-- 弹框 -->
		<el-dialog v-model="data.models1" :title="data.model_title">
			<el-form :model="data.form">
				<el-form-item label="标题" :label-width="data.formLabelWidth">
					<el-input v-model="data.form.title" autocomplete="off" placeholder="请输入公告标题" />
				</el-form-item>
				<el-form-item label="内容" :label-width="data.formLabelWidth">
					<el-input v-model="data.form.content" autocomplete="off" placeholder="请输入公告内容"/>
				</el-form-item>
			</el-form>
			<template #footer>
				<span class="dialog-footer">
					<el-button @click="data.models1 = false">取消</el-button>
					<el-button color="#3f8cd3" type="primary" @click="queding">确定</el-button>
				</span>
			</template>
		</el-dialog>
	</div>
</template>

<script setup>
	import {gonggaoList,addgonggao,updategonggao,removegonggao} from '@/request/api.js'
	import moment from 'moment'
	import Banner from "@/components/banner.vue"
	import {
		ElMessage,ElMessageBox
	} from 'element-plus'
	import {
		reactive,onMounted
	} from 'vue'
	const data = reactive({
		index_:'',
		formLabelWidth: '140px',
		input1:"",
		models1:false,
		model_title:'添加公告',
		id_:'',
		// 表单
		form: {
			create_time:'',
			title: '',
			content: ''
		},
		// 公告列表
		tableData: []
	})
	onMounted(()=>{
		initTable()
	})
	// 搜索
	let sousuo = ()=>{
		let arr = []
		if(data.input1 == ''){
			initTable()
		}else{
			data.tableData.forEach((v,i)=>{
				if(v.title.indexOf(data.input1)!=-1){
					arr.push(v)
				}
			})
			data.tableData = arr
		}
	}
	// 重置
	let chongzhi = ()=>{
		data.input1 = ''
		initTable()
	}
	// 修改
	let xiugai = (i,v)=>{
		data.model_title = '修改公告'
		data.index_ = i
		data.models1 = true
		// data.form = v
		data.id_ = v.id
		data.form.title = v.title
		data.form.content = v.content
		data.form.create_time = v.create_time
		console.log(i,v)
	}
	// 删除
	let shanchu = (i,v)=>{
		console.log(i,v)
		ElMessageBox.alert('是否确认删除', '提示', {
		    confirmButtonText: '确定',
		    callback: (action) => {
				console.log(action)
				if(action=='cancel'){
					
				}else{
					removegonggao({id:v.id}).then(res=>{
						ElMessage({
						  type: 'success',
						  message: `删除成功`,
						})
						initTable()
					})
				}
		    }
		  })
	}
	// 加载表格
	let initTable = ()=>{
		data.models1 = false
		gonggaoList().then(res=>{
			console.log(res)
			data.tableData = res
		})
	}
	// 显示表单
	let showModel = ()=>{
		for(let i in data.form){
			data.form[i] = ''
		}
		data.model_title = '添加公告'
		data.models1 = true
	}
	// 添加公告和修改公告
	let queding = ()=>{
		if(data.model_title=='添加公告'){
			if(data.form.title==''){
				ElMessage({
					message: '标题不能为空',
					type: 'error',
				})
			}else{
				let p = data.form
				let create_time = moment().format("YYYY-MM-DD HH:mm:ss")
				p.create_time = create_time
				addgonggao(p).then(res=>{
					ElMessage({
						message: '添加成功',
						type: 'success',
					})
					initTable()
				})
			}
		}else{
			if(data.form.title==''){
				ElMessage({
					message: '标题不能为空',
					type: 'error',
				})
			}else{
				let p = JSON.parse(JSON.stringify(data.form))
				p.id = data.id_
				updategonggao(p).then(res=>{
					ElMessage({
						message: '修改成功',
						type: 'success',
					})
					initTable()
				})
			}
		}
		
	}
</script>

<style scoped>
	.top_{
		position: relative;
		margin-bottom: 30px;
	}
	.icon_right{
		margin-right: 4px;
	}
</style>
