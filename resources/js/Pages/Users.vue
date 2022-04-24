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
<script>
import Layout from '../Shared/Layout.vue'
export default{
    layout: Layout,
}
props:{
     time:{
         type:String
         
     }
   
}
</script>



<style>

</style>