<template>
<div>
    Producto

    {{ code }}

    {{ dato}}
</div>

</template>
<script setup>
const {code}  = useRoute().params;
const dato = useRouter().params;
</script>