<template>
<ul>
   
    <li>
    <Navlink
     href='/'
    :active="$page.component==='Welcome'"> 
    Home
    </Navlink>
    
    </li>
    <li>
    <Navlink
     href='/settings'
    :active="$page.component==='Settings'"> 
    Settings
    </Navlink>
    </li>
    <li> 
        <Navlink
     href='/users'
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
import { Link } from '@inertiajs/inertia-vue3'
 import Navlink from './Navlink.vue'
</script>

<style>

</style>