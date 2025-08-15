<script setup>
// import {  Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <header class="bg-white shadow-md">
            <nav class="max-w-6xl mx-auto flex justify-between items-center py-4 px-6">
                <!-- Left Nav Links -->
                <div class="space-x-6">
                    <Link :href="route('home')" class="text-gray-700 hover:text-blue-600 font-medium transition">
                    Home
                    </Link>
                </div>

                <!-- Right Nav Links -->
                <div class="space-x-6">
                    <Link :href="route('register')" class="text-gray-700 hover:text-blue-600 font-medium transition">
                    Register
                    </Link>
                </div>
            </nav>
        </header>


        <main class="p-4">
            <slot />
        </main>
    </div>
</template>