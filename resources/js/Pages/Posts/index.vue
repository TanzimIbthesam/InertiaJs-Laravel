<template>
  Posts
 
  <div v-for="post in posts.data" :key="post.id">
   
    <div class="container mx-auto p-6  bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 space-y-3">
    <Link
    :href="route('posts.show',{id: post.id})"
    >
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{post.title}}</h5>
    </Link>
    <div class="flex">
       <Link 
       v-if="post.user_id===user.id"
        @click="destroy(post.id)"
    class="bg-red-600 text-white px-4 py-1 rounded-md"
    

    >Delete</Link>
   
       <Link 
        v-if="post.user_id===user.id"
       :href="route('posts.edit',{id: post.id})"
    class="bg-green-600 text-white px-4 py-1 rounded-md"
    

    >Edit</Link>
    </div>
    <Link 
      
       :href="route('users.show',{id: post.user.id})"
       class="text-blue-600 font-serif pointer"
    

    >{{post.user.name}}</Link>
  
    
    </div>
</div>
</template>

<script setup>
import Pagination from '../../Shared/Pagination.vue'
// defineProps({ users: Object });
import { computed, ref, watch } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { usePage } from '@inertiajs/inertia-vue3';
const user = computed(() => usePage().props.value.auth.user)
let props = defineProps({
  posts: Object,
  layout:null,
  can:Object
 
});
const destroy=(id)=>{
 
    Inertia.delete(route("posts.destroy",id));
}

</script>

<style>

</style>