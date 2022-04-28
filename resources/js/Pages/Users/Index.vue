<template>
  <Head title="Users" />

  <h1 class="text-3xl">
    <div class="flex justify-between">
      <div>Users</div>
        <Link v-if="can.createUser" :href="route('usercreate')" class="text-blue-500 text-sm ml-3">New User</Link>
    
      <div> <input  type="text" v-model="search" placeholder="Search..." class="border px-2 rounded-lg" /></div>
    </div>
  </h1>

  <!-- <ul v-for="user in users.data"
      :key="user.id">
    <li>{{user.name}}</li>
  </ul> -->
  <div class="bg-white">

<div class="overflow-x-auto border-x border-t">
   <table class="table-auto w-full">
      <thead class="border-b">
         <tr class="bg-gray-100">
          
            <th class="text-left p-4 font-medium">
               Name
            </th>
         </tr>
      </thead>
      <tbody>
         <tr class="border-b hover:bg-gray-50"
         v-for="user in users.data"
                 :key="user.id"
         
          >
            <td class="p-4">
               {{user.name}}
            </td>
            
           
         </tr>
         
      </tbody>
   </table>
</div>
</div>
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
  <!-- component -->

       


      
  <Pagination 
  :links="users.links"
  />
</template>

<script setup>
import Pagination from '../../Shared/Pagination.vue'
// defineProps({ users: Object });
import { ref, watch } from 'vue';
import { Inertia } from '@inertiajs/inertia';
let props = defineProps({
  users: Object,
  filters: Object,
  can:Object
});
let search = ref(props.filters.search);
watch(search, value => {
  Inertia.get(
    '/users',
    { search: value },
    {
      preserveState: true,
      replace: true,
    }
  );
});
</script>