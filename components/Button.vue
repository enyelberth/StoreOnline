<template>
    <div class="bg-red-500">
        <nav class="bg-blue-500 p-2 flex justify-between">
        <div>
            logo
        </div>
        <div class="bg-purple-700 w-[400px] rounded-xl p-2 flex ">
            <label for="" class="flex ">
                <input type="search">
                <span class="bg-red-400 ml-3 rounded-full ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l5.6 5.6q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-5.6-5.6q-.75.6-1.725.95T9.5 16m0-2q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14"/></svg>
                </span>
            </label>
        </div>
      <ul class="flex justify-end flex-row">
        <li v-for="item in menuItems" :key="item.id" class="ml-2 text-white font-bold">
          <a :href="item.link">{{ item.name }}</a>
     <!-- 
        <ul v-if="item.subItems">
            <li v-for="subItem in item.subItems" :key="subItem.id">
                <a :href="subItem.link">{{ subItem.name }}</a>
            </li>
        </ul>
    -->
    </li>
      </ul>
    </nav>
    </div>
</template>
<script setup>

</script>