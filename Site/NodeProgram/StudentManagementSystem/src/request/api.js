import { requst } from './request.js';

// 登录
export const login = (params) => { return requst("/admin", params,'get') };
// 获取用户
export const userList = (params) => { return requst("/user", params,'get') };
// 添加用户
export const addUser = (params) => { return requst("/user", params,'post') };
// 修改用户
export const updateUser = (params) => { return requst(`/user/${params.id}`, params,'put') };
// 删除用户
export const removeUser = (params) => { return requst(`/user/${params.id}`, params,'delete') };
// 获取学院
export const xueyuanList = (params) => { return requst("/xueyuan", params,'get') };
// 添加学院
export const addxueyuan = (params) => { return requst("/xueyuan", params,'post') };
// 修改学院
export const updatexueyuan = (params) => { return requst(`/xueyuan/${params.id}`, params,'put') };
// 删除学院
export const removexueyuan = (params) => { return requst(`/xueyuan/${params.id}`, params,'delete') };
// 获取班级
export const banjiList = (params) => { return requst("/banji", params,'get') };
// 添加班级
export const addbanji = (params) => { return requst("/banji", params,'post') };
// 修改班级
export const updatebanji = (params) => { return requst(`/banji/${params.id}`, params,'put') };
// 删除班级
export const removebanji = (params) => { return requst(`/banji/${params.id}`, params,'delete') };
// 根据学院id搜索对应的班级
export const banjiss = (params) => { return requst(`/banji?xueyuan_id=${params.id}`, params,'get') };
// 分数管理
// 获取分数
export const fenshuList = (params) => { return requst("/fenshu", params,'get') };
// 添加分数
export const addfenshu = (params) => { return requst("/fenshu", params,'post') };
// 修改分数
export const updatefenshu = (params) => { return requst(`/fenshu/${params.id}`, params,'put') };
// 删除分数
export const removefenshu = (params) => { return requst(`/fenshu/${params.id}`, params,'delete') };
// 公告管理
// 获取公告
export const gonggaoList = (params) => { return requst("/gonggao", params,'get') };
// 添加分数
export const addgonggao = (params) => { return requst("/gonggao", params,'post') };
// 修改分数
export const updategonggao = (params) => { return requst(`/gonggao/${params.id}`, params,'put') };
// 删除分数
export const removegonggao = (params) => { return requst(`/gonggao/${params.id}`, params,'delete') };