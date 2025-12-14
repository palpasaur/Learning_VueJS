<script setup>
// import { reactive } from 'vue';
import { useForm } from "@inertiajs/vue3";
import TextInput from "../Components/TextInput.vue";

const form = useForm({
    email: null,
    password: null,
    remember: null,
});

const submit = () => {
    form.post(route("login"), {
        onError: () => form.reset("password"),
    });
};
</script>

<template>
    <Head :title="` | ${$page.component}`" />

    <h1 class="title">Login to your account</h1>

    <div class="w-2/4 mx-auto">
        <form @submit.prevent="submit" class="space-y-6">
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

            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center gap-2">
                    <input
                        type="checkbox"
                        v-model="form.remember"
                        id="remember"
                    />
                    <label for="remember">Remember me</label>
                </div>

                <p class="text-slate-600">
                    Need an account?
                    <a :href="route('register')" class="text-link">Register</a>
                </p>
            </div>

            <div class="flex flex-col">
                <button
                    type="submit"
                    class="primary-btn"
                    :disabled="form.processing"
                >
                    Login
                </button>
            </div>
        </form>
    </div>
</template>
