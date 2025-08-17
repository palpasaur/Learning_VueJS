<script setup>
const model = defineModel({
     type: null,
     required: true,
})

defineProps({
    name:{
        type: String,
        required: true,
    },
    type:{
        type: String,
        default: 'Text',
    },
    message: String
})

</script>


<template>
    <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700 mb-1">{{ name }}</label>
        <input :type="type" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" 
        v-model="model" :class="{'!ring-red-500' : message}" />
        <small class="error text-red-500" v-if="message">{{ message }}</small>
    </div>
</template>