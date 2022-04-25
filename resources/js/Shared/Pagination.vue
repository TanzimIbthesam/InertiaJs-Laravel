<template>
  <Component
  :is="link.url ? 'Link':'span'"
  v-for="link in links" 
  :key="link.id"
  :href="link.url"
  v-html="link.label"
  class="px-1"
  :class="{'text-gray-600': !link.url,'font-bold':link.active}"
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