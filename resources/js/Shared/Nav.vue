<template>
<ul class="flex justify-left">
   
    <li>
    <Navlink
     
     :href="route('home')"
    :active="$page.component==='Welcome'"> 
    Home
    </Navlink>
    
    </li>
    <li>
    <!-- <Navlink
      href='/settings'
    :active="$page.component==='Settings'"> 
    Settings
    </Navlink> -->
    <Navlink
      :href="route('settings')"
    :active="$page.component==='Settings'"> 
    Settings
    </Navlink>
    </li>
    <li> 
        <Navlink
     :href="route('users')"
    :active="$page.component==='Users'"> 
    Users
    </Navlink>

    </li>
    <!-- You can also write $page.url==='/users' -->
      <li> <Link class="text-blue-500 hover:underline" 
      :data="{foo:'bar'}"
      as="button" method="post" href="/logout">Logout</Link></li>
    
</ul>
  
</template>

<script setup>
//import Link Not needed when using a Global component in app.js
import { Link } from '@inertiajs/inertia-vue3'
 import Navlink from './Navlink.vue'
</script>

<style>

</style>