<template>
  <Head title="Users" />

  <h1 class="text-3xl">
    Users
  </h1>

  <ul v-for="user in users"
      :key="user.id">
    <li>{{user.name}}</li>
  </ul>
</template>

<script setup>
defineProps({ users: Array });
</script>