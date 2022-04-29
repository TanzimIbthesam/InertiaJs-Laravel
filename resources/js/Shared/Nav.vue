<template>
{{user.email}}
<ul class="flex justify-left">
   
    <li>
    <Navlink
     
     :href="route('home')"
    :active="$page.component==='Welcome'"> 
    Home
    </Navlink>
    
    </li>
    <li>
 
    <Navlink
      :href="route('settings')"
    :active="$page.component==='Settings'"> 
    Settings
    </Navlink>
    </li>
     <li> 
     

    </li>
    <li> 
        <Navlink
     :href="route('users.index')"
    :active="$page.component==='Users'"> 
    Users
    </Navlink>

    </li>
    <li> 
        <Navlink
        v-if="user.email==='tanzim@gmail.com'"
     :href="route('usercreate')"
    :active="$page.component==='Users/AdminCreate'"> 
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
import { computed } from '@vue/reactivity';
//import Link Not needed when using a Global component in app.js
import { usePage } from '@inertiajs/inertia-vue3'
import { Link } from '@inertiajs/inertia-vue3'
 import Navlink from './Navlink.vue';
  const user = computed(() => usePage().props.value.auth.user)
</script>

<style>

</style>