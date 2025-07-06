<template>
	<div>
		<div>
			<div class="top_">
				<div style="display: flex;align-items: center;justify-content: space-between;">
					<h3>班级管理</h3>
					<div>
						<el-button plain color="#3f8cd3" @click="showModel"><el-icon class="icon_right"><el-icon><Plus /></el-icon></el-icon><text>新增班级</text></el-button>
					</div>
				</div>
			</div>
		</div>
		<el-card class="box-card">
			<div style="padding-bottom: 10px;">
				<span style="font-size: 14px;">班级名称：</span>
				<el-input style="width: 180px;margin: 0 0px;" v-model="data.input1" />
				<el-select style="width: 180px;margin: 0 20px;" @change='change2' v-model="data.input2" placeholder="根据学院搜索班级">
					<el-option v-for='(v,i) in data.xueyuanData' :key="i" :label="v.title" :value="v.id" />
				</el-select>
				<el-button color="#3f8cd3" @click="sousuo">搜索</el-button>
				<el-button @click="chongzhi">重置</el-button>
			</div>
			<el-table :data="data.tableData" empty-text='暂无更多数据' style="width: 100%">
				<el-table-column prop='id' label="ID" width="120">
				</el-table-column>
				<el-table-column prop="title" label="班级名称" />
				<el-table-column prop="xueyuan_title" label="所属院系" />
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
				<el-form-item label="名称" :label-width="data.formLabelWidth">
					<el-input v-model="data.form.title" autocomplete="off" placeholder="请填写班级名称" />
				</el-form-item>
				<el-form-item label="院系" :label-width="data.formLabelWidth">
					<el-select @change='change' v-model="data.xueyuan_title" placeholder="请选择院系">
						<el-option v-for='(v,i) in data.xueyuanData' :key="i" :label="v.title" :value="v" />
					</el-select>
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
	import {banjiList,addbanji,updatebanji,removebanji,xueyuanList,banjiss} from '@/request/api.js'
	import moment from 'moment'
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
		input2:'',
		models1:false,
		model_title:'添加班级',
		id_:'',
		// 表单
		form: {
			create_time:'',
			title: '',
			content: ''
		},
		// 学院列表
		xueyuanData:[],
		// 所属学院
		xueyuan_id:'',
		xueyuan_title:'',
		// 班级列表
		tableData: []
	})
	onMounted(()=>{
		getXY()
		initTable()
	})
	// 学院选择框选中
	let change = (e)=>{
		data.xueyuan_id = e.id
		data.xueyuan_title = e.title
		console.log(e)
	}
	// 学院班级搜索框选中
	let change2 = (e)=>{
		banjiss({id:e}).then(res=>{
			console.log(res)
			data.tableData = res
		})
	}
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
		data.input2 = ''
		initTable()
	}
	// 修改
	let xiugai = (i,v)=>{
		data.model_title = '修改班级'
		data.index_ = i
		data.models1 = true
		// data.form = v
		data.id_ = v.id
		data.form.title = v.title
		data.form.content = v.content
		data.xueyuan_title = v.xueyuan_title
		data.xueyuan_id = v.xueyuan_id
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
					removebanji({id:v.id}).then(res=>{
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
	// 获取学院列表
	let getXY =()=>{
		xueyuanList().then(res=>{
			data.xueyuanData = res
		})
	}
	// 加载表格
	let initTable = ()=>{
		data.models1 = false
		banjiList().then(res=>{
			console.log(res)
			data.tableData = res
		})
	}
	// 显示表单
	let showModel = ()=>{
		for(let i in data.form){
			data.form[i] = ''
		}
		data.xueyuan_title = ''
		data.xueyuan_id = ''
		data.model_title = '添加班级'
		data.models1 = true
	}
	// 添加班级和修改班级
	let queding = ()=>{
		if(data.model_title=='添加班级'){
			if(data.form.title==''){
				ElMessage({
					message: '名称不能为空',
					type: 'error',
				})
			}else if(data.xueyuan_id==''||data.xueyuan_title==''){
				ElMessage({
					message: '请选择院系',
					type: 'error',
				})
			}else{
				let p = JSON.parse(JSON.stringify(data.form))
				p.xueyuan_title = data.xueyuan_title
				p.xueyuan_id = data.xueyuan_id
				addbanji(p).then(res=>{
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
					message: '名称不能为空',
					type: 'error',
				})
			}else if(data.xueyuan_id==''||data.xueyuan_title==''){
				ElMessage({
					message: '请选择院系',
					type: 'error',
				})
			}else{
				let p = JSON.parse(JSON.stringify(data.form))
				p.id = data.id_
				p.xueyuan_title = data.xueyuan_title
				p.xueyuan_id = data.xueyuan_id
				updatebanji(p).then(res=>{
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
