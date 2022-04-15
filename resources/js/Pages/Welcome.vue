<template>
    Welcomee-{{name}}
    <Nav />
</template>



 <script setup>
 import Nav from '../Shared/Nav.vue'
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