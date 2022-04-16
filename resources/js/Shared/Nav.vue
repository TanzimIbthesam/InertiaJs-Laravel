<template>
<ul>
    <li><Link class="text-blue-500 hover:underline" href="/">Home</Link></li>
    <li><Link class="text-blue-500 hover:underline" href="/settings">Settings</Link></li>
    <li> <Link class="text-blue-500 hover:underline" href="/users">Users</Link></li>
      <li> <Link class="text-blue-500 hover:underline" 
      :data="{foo:'bar'}"
      as="button" method="post" href="/logout">Logout</Link></li>
    
</ul>
  
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'

</script>

<style>

</style>