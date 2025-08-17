<script setup>
// import { reactive } from 'vue';
import { useForm } from '@inertiajs/vue3';
import TextInput from '../Components/TextInput.vue';    

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
               <TextInput 
                   name="name"
                   v-model="form.name"
                   :message="form.errors.name"
               />
            </div>

            <div>
               <TextInput 
                   name="email"
                   v-model="form.email"
                   :message="form.errors.email"
               />
            </div>

            <div>
               <TextInput 
                   name="password"
                   type="password"
                   v-model="form.password"
                   :message="form.errors.password"
               />
            </div>

            <div>
               <TextInput 
                   name="password_confirmation"
                   type="password"
                   v-model="form.password_confirmation"
                   
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