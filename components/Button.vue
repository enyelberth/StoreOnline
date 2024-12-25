<template>  
    <div>
        <button v-if="buttonType === 'button'" :class="`${colorsButton[color]} ${sizeButton[size]} text-white rounded-md font-bold border-2  shadow-md`">{{ title }}</button>
        <NuxtLink v-else="buttonType === 'link'" to="/" :class="`${colorsButton[color]} ${sizeButton[size]} text-white rounded-md font-bold border-2  shadow-md`">{{ title }}</NuxtLink>        
    </div>
</template>
<script lang="ts"> 
import { NuxtLink } from '#build/components';
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
                small:"text-sm py-1 px-2",
                default:"text-md py-2 px-3",
                large:"text-xl py-3 px-4",
                extra_large:"text-2xl py-4 px-5"
            }
        }
    },
    props:{
        title:{
            type:String,
            default:"red"
        },
        color:{
            type:String as PropType<color>,
            default:"red"
        },
        size:{
            type:String as PropType<size>,
            required:true
        },
        buttonType:{
            type: String as PropType<'button' | 'link'>,
        }
    }
}
</script>