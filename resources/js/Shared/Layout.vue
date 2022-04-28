<template>
  <Head>
    <meta
      type="description"
      content="Information about my app"
      head-key="description"
    >
  </Head>
<div class="flex justify-between bg-gray-200  px-4 py-2 font-serif">
 Welcome-{{username.name}}
  <Nav />
</div>
<!--   -->

  <!-- We can define global props in App\Http\Inertia Request middleware -->
 
  <slot />
</template>

// 
<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/inertia-vue3'

import Nav from '../Shared/Nav.vue'

 const username = computed(() => usePage().props.value.auth.user)
</script>
