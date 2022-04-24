<template>
<div class="flex justify-between bg-gray-200  px-4 py-2 font-serif">
 Welcome-{{$page.props.auth.user.username}}
  <Nav />
</div>
<iframe
        class="mb-6"
        width="100%"
        frameborder="no"
        scrolling="no"
        seamless
        src="https://player.simplecast.com/fd0bd2ba-c553-466c-a060-b144797ce369?dark=false"
      />

  <!-- We can define global props in App\Http\Inertia Request middleware -->
 
  <slot />
</template>

<script setup>
import Nav from './Nav.vue'
</script>

<style>

</style>