<template>
  <Head>
    <meta
      type="description"
      content="Information about my app"
      head-key="description"
    >
  </Head>
<div class="flex justify-between bg-gray-200  px-4 py-2 font-serif">
 Welcome-{{$page.props.auth.user.username}}
  <Nav />
</div>
<!--   -->

  <!-- We can define global props in App\Http\Inertia Request middleware -->
 
  <slot />
</template>

<script setup>
import Nav from './Nav.vue'
</script>

<style>

</style>