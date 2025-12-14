<script setup>
// import { reactive } from 'vue';
import { useForm } from "@inertiajs/vue3";
import TextInput from "../Components/TextInput.vue";

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
    avatar: null,
});

const change = (e) => {
    form.avatar = e.target.files[0];
};

const submit = () => {
    form.post(route("register"), {
        onError: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <Head :title="` | ${$page.component}`" />

    <h1 class="title">Register a new account</h1>

    <div class="w-2/4 mx-auto">
        <form @submit.prevent="submit" class="space-y-6">
            <div>
                <label for="avatar">Avatar</label>
                <input type="file" id="avatar" @input="change" />

                <p>{{ form.errors.avatar }}</p>
            </div>

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

            <div class="flex flex-col">
                <p class="text-slate-600 mb-2">
                    Already a user?
                    <a :href="route('login')" class="text-link">Login</a>
                </p>
                <button
                    type="submit"
                    class="primary-btn"
                    :disabled="form.processing"
                >
                    Register
                </button>
            </div>
        </form>
    </div>
</template>
