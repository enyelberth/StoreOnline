<template>
        <div>


            <Button title="Registrate" color="green" />
                
            <form action="" class="m-5 mx-[20%] mt-5">
                <Label name="usuario" title="Usuario" />
                <Label name="password" title="Password" />
                <button class="bg-green-500 px-4 p-2 rounded-md border-2 border-black/60 text-white font-bold hover:scale-105">Iniciar session</button>
           
            </form>

        </div>
  </template>
  <script setup>

  definePageMeta({
    layout:"login"
  })
  </script>