<template>
  

  <div class="max-w-sm rounded overflow-hidden shadow-lg">
 <div class="font-bold text-xl mb-2">Name-{{user.name}}</div>
 <div v-for="userPost in userPosts" :key="userPost.index">
  <div class="px-6 py-4 mb-4" >
    <div class="font-bold text-xl ">{{userPost.title}}</div>
    <p class="text-gray-700 text-base">
      {{userPost.description}}
    </p>
  </div>
  
</div>
</div>
</template>

<script setup>
defineProps({
    user:{
        type:Object
    },
    userPosts:{
        type:Object
    }
})
</script>

<style>

</style>