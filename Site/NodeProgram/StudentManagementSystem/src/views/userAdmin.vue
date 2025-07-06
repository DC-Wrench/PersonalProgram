<template>
	<div>
		<div>
			<div class="top_">
				<div style="display: flex;align-items: center;justify-content: space-between;">
					<h3>用户管理</h3>
					<div>
						<el-button plain color="#3f8cd3" @click="showModel"><el-icon class="icon_right"><el-icon><Plus /></el-icon></el-icon><text>新增用户</text></el-button>
					</div>
				</div>
			</div>
		</div>
		<el-card class="box-card">
			<div style="padding-bottom: 10px;">
				<span style="font-size: 14px;">姓名：</span>
				<el-input style="width: 300px;margin: 0 20px;" v-model="data.input1" />
				<el-button color="#3f8cd3" @click="sousuo">搜索</el-button>
				<el-button @click="chongzhi">重置</el-button>
			</div>
			<el-table :data="data.tableData" empty-text='暂无更多数据' style="width: 100%">
				<el-table-column prop='id' label="ID" width="120">
				</el-table-column>
				<el-table-column prop="username" label="账号" />
				<el-table-column prop="password" label="密码" />
				<el-table-column prop="name" label="姓名" />
				<el-table-column prop="sex" label="性别" />
				<el-table-column prop="age" label="年龄" />
				<el-table-column prop="xueyuan" label="所在学院" />
				<el-table-column prop="banji" label="所在班级" />
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
				<el-form-item label="账号" :label-width="data.formLabelWidth">
					<el-input v-model="data.form.username" autocomplete="off" placeholder="请输入账号" />
				</el-form-item>
				<el-form-item label="密码" :label-width="data.formLabelWidth">
					<el-input v-model="data.form.password" autocomplete="off" placeholder="请输入密码"/>
				</el-form-item>
				<el-form-item label="姓名" :label-width="data.formLabelWidth">
					<el-input v-model="data.form.name" autocomplete="off" placeholder="请输入姓名"/>
				</el-form-item>
				<el-form-item label="性别" :label-width="data.formLabelWidth">
					<el-select v-model="data.form.sex" placeholder="请选择性别">
						<el-option label="男" value="男" />
						<el-option label="女" value="女" />
					</el-select>
				</el-form-item>
				<el-form-item label="年龄" :label-width="data.formLabelWidth">
					<el-input type="number" v-model="data.form.age" autocomplete="off" placeholder="请输入年龄"/>
				</el-form-item>
				<el-form-item label="院系" :label-width="data.formLabelWidth">
					<el-select v-model="data.form.xueyuan" placeholder="请选择院系">
						<el-option v-for='(v,i) in data.xueyuanData' :key="i" :label="v.title" :value="v.title" />
					</el-select>
				</el-form-item>
				<el-form-item label="班级" :label-width="data.formLabelWidth">
					<el-select v-model="data.form.banji" placeholder="请选择班级">
						<el-option v-for='(v,i) in data.banjiData' :key="i" :label="v.title" :value="v.title" />
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
	import {userList,addUser,updateUser,removeUser,xueyuanList,banjiList} from '@/request/api.js'
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
		models1:false,
		model_title:'添加用户',
		id_:'',
		// 表单
		form: {
			create_time:'',
			username: '',
			name: '',
			password: '',
			sex: '',
			age: '',
			xueyuan:'',
			banji:''
		},
		// 学院列表
		xueyuanData:[],
		// 班级列表
		banjiData:[],
		// 用户列表
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
				if(v.name.indexOf(data.input1)!=-1){
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
		data.model_title = '修改用户'
		data.index_ = i
		data.models1 = true
		// data.form = v
		data.id_ = v.id
		data.form.username = v.username
		data.form.name = v.name
		data.form.password = v.password
		data.form.sex = v.sex
		data.form.age = v.age
		data.form.xueyuan = v.xueyuan
		data.form.banji = v.banji
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
					removeUser({id:v.id}).then(res=>{
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
		xueyuanList().then(res=>{
			data.xueyuanData = res
		})
		banjiList().then(res=>{
			data.banjiData = res
		})
		userList().then(res=>{
			console.log(res)
			data.tableData = res
		})
	}
	// 显示表单
	let showModel = ()=>{
		for(let i in data.form){
			data.form[i] = ''
		}
		data.model_title = '添加用户'
		data.models1 = true
	}
	// 添加用户和修改用户
	let queding = ()=>{
		if(data.model_title=='添加用户'){
			if(data.form.name==''){
				ElMessage({
					message: '姓名不能为空',
					type: 'error',
				})
			}else{
				let p = data.form
				let create_time = moment().format("YYYY-MM-DD HH:mm:ss")
				p.create_time = create_time
				addUser(p).then(res=>{
					ElMessage({
						message: '添加成功',
						type: 'success',
					})
					initTable()
				})
			}
		}else{
			if(data.form.name==''){
				ElMessage({
					message: '姓名不能为空',
					type: 'error',
				})
			}else{
				let p = JSON.parse(JSON.stringify(data.form))
				p.id = data.id_
				updateUser(p).then(res=>{
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
