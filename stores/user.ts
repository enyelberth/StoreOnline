import { defineStore } from "pinia";

export const useUserStore = defineStore('user',{
    state: () => (
        { 
            count: 0,
            users: [],
            name: '',
            username: '',
            password: '',
        }
    ),
    getters: {
      doubleCount: (state) => state.count * 2,
    },
    actions: {
      async increment() {
        this.count++
      },
    },
})