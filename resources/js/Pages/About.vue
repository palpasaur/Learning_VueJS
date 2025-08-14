<script setup>
defineProps({
    user: String
});
</script>

<template>
    <Head title=" | About" />
    
    <div>
        <h1>About</h1>
        <p>User: {{ user }}</p>
    </div>
</template>