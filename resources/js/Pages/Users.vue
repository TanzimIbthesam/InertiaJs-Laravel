<template>
  <Head title="Users" />

  <h1 class="text-3xl">
    Users
  </h1>

  <ul v-for="user in users.data"
      :key="user.id">
    <li>{{user.name}}</li>
  </ul>
  Paginator
  <!-- <Component
  :is="link.url ? 'Link':'span'"
  v-for="link in users.links" 
  :key="link.id"
  :href="link.url"
  v-html="link.label"
  class="px-1 text-red-300"
  :class="link.url ? 'text-blue-600': 'text-gray-600'"
  /> -->
  <Pagination 
  :links="users.links"
  />
</template>

<script setup>
import Pagination from '../Shared/Pagination.vue'
defineProps({ users: Object });
</script>