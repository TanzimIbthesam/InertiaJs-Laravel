<template>
  <Component
  :is="link.url ? 'Link':'span'"
  v-for="link in links" 
  :key="link.id"
  :href="link.url"
  v-html="link.label"
  class="px-1 text-red-300"
  :class="link.url ? 'text-blue-600': 'text-gray-600'"
  />
</template>

<script setup>
 defineProps({
     links:{
         type:Array
     }
 })
</script>

<style>

</style>