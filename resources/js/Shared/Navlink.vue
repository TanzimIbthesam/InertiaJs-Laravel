<template>
  
         <Link 
    class="text-blue-500 hover:underline" 
    
    :class="{ 'font-bold underline':active}"
    
    ><slot /></Link>
      
 
</template>

<script setup>
//import Link Not needed when using a Global component in app.js

const props=defineProps({
   active:{
       
       type:String
   }
    
})
</script>

<style>

</style>