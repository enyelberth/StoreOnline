<template>  
    <div>
        <button :class="`${colorsButton[color]} text-white px-3 py-2 rounded-md font-bold border-2  shadow-md`">{{ title }}</button>
    </div>
</template>
<script lang="ts"> 
import type { PropType } from 'vue';


type color =  "red"|"blue"|"green";
type size = "small"|"default"|"large"|"extra_large";
export default{
    data(){
        return{
            colorsButton:{
                red: "bg-red-500 hover:bg-red-600 border-red-700",
                blue:"bg-blue-500 hover:bg-blue-600 border-blue-700",
                green:"bg-green-500 hover:bg-green-600 border-green-700"
            },
            sizeButton:{
                small:"",
                default:"",
                large:"",
                extra_large:""
            }
        }
    },
    props:{
        title:{
            type:String,
            Required:true
        },
        color:{
            type:String as PropType<color>,
            Required:true
        },
        size:{
            type:String as PropType<size>,
            required:true
        }
    }
}
</script>