import axios from 'axios'
const server = axios.create({
	baseURL:'http://127.0.0.1:3000',
	timeout:60000,
	headers:{
		'Content-Type':'application/json',
	}
})
// 请求拦截器
server.interceptors.request.use((config)=>{
	return config
},(error)=>{
	console.log(error)
	return Promise.reject(error)
})
server.interceptors.response.use(
	function (response) {
		const dataAxios = response.data
		const code = dataAxios.reset
		return dataAxios
	},
	function (error) {
		console.log(error)
		return Promise.reject(error)
	}
)
const requst = (url,params,method='GET')=>{
	return server({
		url:url,
		data:params,
		method:method
	}).then(res=>res)
}
export {requst}