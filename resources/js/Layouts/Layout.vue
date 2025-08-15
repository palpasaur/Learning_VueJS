<script setup>
// import {  Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <header>
            <nav>
                <div class="space-x-6">
                    <!-- <Link :href="route('home')">Home</Link>
                    <Link :href="route('about')">About</Link> -->
                    <Link :href="route('home')" class="nav-link">Home</Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>