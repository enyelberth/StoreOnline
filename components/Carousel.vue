<template>
    <div>
      <div id="animation-carousel" class="relative w-full" >
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
          <!-- Item 1 -->
          <div v-for="(item, index) in dataCarousel" :key="index" class="duration-200 ease-linear" 
               v-show="currentIndex === index" >
            <img
              :src="item.src"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
              alt="Imagen del carrusel"
            />
            {{ index }}
          </div>
        </div>
        <!-- Slider controls -->
        <button
          type="button"
          class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          @click="prevSlide"
          aria-label="Previous slide"
        >
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg
              class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 6 10"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M5 1 1 5l4 4"
              />
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button
          type="button"
          class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          @click="nextSlide"
          aria-label="Next slide"
        >
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg
              class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 6 10"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m1 9 4-4-4-4"
              />
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted, onBeforeUnmount } from 'vue';
  
  const dataCarousel = ref([
      { name: "img1", src: "/1.png" },
      { name: "img2", src: "/2.png" },

  ]);
  
  const currentIndex = ref(0);
  
  // Cambia a la imagen anterior
  const prevSlide = () => {
    console.log((currentIndex.value - 1 + dataCarousel.value.length)%dataCarousel.value.length) 
    console.log(dataCarousel.value.length) 
    currentIndex.value = (currentIndex.value - 1 + dataCarousel.value.length) % dataCarousel.value.length;
        console.log(currentIndex.value )
    };
  
  // Cambia a la imagen siguiente
  const nextSlide = () => {
      currentIndex.value = (currentIndex.value + 1) % dataCarousel.value.length;
  };
  
  // Cambia automáticamente la imagen cada 5 segundos
  let intervalId;
  
  onMounted(() => {
      intervalId = setInterval(nextSlide, 3000); // Cambia cada 5000 ms (5 segundos)
  });
  
  onBeforeUnmount(() => {
      clearInterval(intervalId); // Limpia el intervalo al desmontar el componente
  });
  </script>
  