<template>
    Welcomee-{{name}}
    <div v-for="framework in frameworks" :key="framework.id">
          {{framework}}
    </div>
</template>



 <script setup>
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