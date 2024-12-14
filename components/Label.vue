<template>
    <div class="m-2">
        <label :for="props.name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{props.title}}</label>
        <input type="text" :id="props.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :placeholder="`Ingrese el ${props.title}`" required />
    </div>
</template>
<script setup>
import {ref} from 'vue';
const name = ref('');

const props =defineProps({
  name: {
      type: String,
      required: true,
  },
  title:{
    type:String,
    required:true,
  }
});

</script>