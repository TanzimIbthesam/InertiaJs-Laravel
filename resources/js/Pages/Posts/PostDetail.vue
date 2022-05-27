<template>
  <div class="container mx-auto p-6  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{post.data.title}}</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{post.data.description}}</p>
    <div v-if="post.data.image">
       <img :src="`http://127.0.0.1:8000/storage/product_images/${post.data.image}`" alt="Girl in a jacket" width="500" height="600"> 
    </div>
    
</div>
</template>

<script setup>
import {ref} from 'vue'
let url=ref('http://127.0.0.1:8000/storage/product_images');
defineProps({
    post:{
        type:Object
    }
})
</script>

<style>

</style>