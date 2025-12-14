<script setup>
// import {  Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <header>
            <nav>
                <!-- Left Nav Links -->
                <div class="space-x-6">
                    <Link :href="route('home')" class="nav-link"> Home </Link>
                </div>

                <div v-if="$page.props.auth.user">
                    <p>Welcome, {{ $page.props.auth.user.name }}</p>
                    <Link
                        :href="route('logout')"
                        method="post"
                        as="button"
                        type="button"
                        class="nav-link"
                    >
                        Logout
                    </Link>
                </div>

                <!-- Right Nav Links -->
                <div v-else class="space-x-6">
                    <Link :href="route('register')" class="nav-link">
                        Register
                    </Link>
                    <Link :href="route('login')" class="nav-link"> Login </Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>
