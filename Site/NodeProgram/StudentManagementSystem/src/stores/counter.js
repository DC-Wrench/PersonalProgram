import { ref, computed,reactive } from 'vue'
import { defineStore } from 'pinia'

export const useCounterStore = defineStore('counter', () => {
  const count = ref(0)
  const data = reactive({
    userInfo:{
      username:'',
      password:''
    },
    user:[]
  })
  const doubleCount = computed(() => count.value * 2)
  function increment() {
    count.value++
  }

  return { count, doubleCount, increment,data }
})
