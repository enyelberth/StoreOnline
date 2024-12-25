
<template>
    <div class="bg-gray-300 w-full h-full">
    <div>
        <Navbar :menuItems="menuData" />
    </div>
        <NuxtPage />
        <Footer/>
    </div>
    
</template>
<script >
export default {

  data() {
    return {
      menuData: [
        {
          id: 1,
          name: 'Inicio',
          link: '/',
        },
        {
          id: 2,
          name: 'Productos',
          link: '/productos'
        },
        {
          id: 3,
          name: 'Login',
          link: '/login'
        }
      ]
    };
  }
}
</script>