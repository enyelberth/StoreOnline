<template>
        <div>


            <Button title="resgistrar" color="green" size="extra_large" buttonType="button"/>
                
            <form action="" class="m-5 mx-[20%] mt-5">
                <Label name="usuario" title="Usuario" />
                <Label name="password" title="Password" />
                <Button title="iniciar session" color="green" size="default" buttonType="button"/>
           
            </form>
            <Button title="volver" color="red" size="small" buttonType="link"/>
            <Modal />
        </div>
  </template>
  <script setup>

  definePageMeta({
    layout:"login"
  })
  </script>