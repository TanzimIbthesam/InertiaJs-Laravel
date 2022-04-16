<template>
  Users
  
  
  <Nav />
  <div style="margin-top:400px">
     The current time isss-{{time}}
      
  </div>
 <Link 
 href="/users"
 preserve-scroll
 >
 Refresh
 </Link>
</template>

<script setup>
import Nav from '../Shared/Nav.vue'
import { Link } from '@inertiajs/inertia-vue3'
const props=defineProps({
 time:{
     type:String
 }
});
</script>

<style>

</style>