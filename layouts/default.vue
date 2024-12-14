
<template>
    <div class="bg-red-400 w-full h-full">
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
          link: '#producto',
          subItems: [
            { id: '1-1', name: 'Sub Home 1', link: '#subhome1' },
            { id: '1-2', name: 'Sub Home 2', link: '#subhome2' }
          ]
        },
        {
          id: 2,
          name: 'Productos',
          link: '#productos'
        },
        {
          id: 3,
          name: 'Login',
          link: '#login'
        }
      ]
    };
  }
}
</script>