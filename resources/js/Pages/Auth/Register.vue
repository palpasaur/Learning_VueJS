<script setup>
// import { reactive } from 'vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

const submit = () => {
    form.post(route("register"), {
        onError: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <Head :title="` | ${$page.component}`" />

    <h1 class="text-2xl font-bold text-center mb-8">Register a new account</h1>

    <div class="w-full max-w-md mx-auto bg-white shadow-lg rounded-lg p-6">
        <form @submit.prevent="submit" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                <input 
                    type="text" 
                    v-model="form.name"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
                <small class="text-red-500">{{ form.errors.name }}</small>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input 
                    type="text" 
                    v-model="form.email"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
                <small class="text-red-500">{{ form.errors.email }}</small>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input 
                    type="password" 
                    v-model="form.password"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
                <small class="text-red-500">{{ form.errors.password }}</small>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input 
                    type="password" 
                    v-model="form.password_confirmation"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
            </div>

            <div class="flex flex-col items-center">
                <p class="text-sm text-gray-600 mb-3">
                    Already a user? 
                    <a href="#" class="text-blue-600 hover:underline">Login</a>
                </p>
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition duration-200"
                    :disabled="form.processing">
                    Register
                </button>
            </div>
        </form>
    </div>
</template>