<template>
  
  <Layout>
    Users
  </Layout>
  
  
  <div style="margin-top:400px">
     The current time isss-{{time}}
      
  </div>
 <Link 
 href="/users"
 preserve-scroll
 >
 Refresh
 </Link>
</template>
<script setup>
const props=defineProps({
  time:{
    type:String
  }
})
</script>



<style>

</style>