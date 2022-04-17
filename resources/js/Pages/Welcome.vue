<template>
    
    <Layout>
        Welcomee-{{name}}
    </Layout>
</template>



 <script setup>
 import Layout from '../Shared/Layout.vue'
const props=defineProps({
    name:{
        type:String,
        required:true
    },
    frameworks:{
        type:Array
    }
})


</script>