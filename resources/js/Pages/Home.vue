<script setup>
import { Link } from "@inertiajs/vue3";
import PaginationLinks from "./Components/PaginationLinks.vue";
defineProps({
    users: Object,
});

//format date
const getDate = (date) =>
    new Date(date).toLocaleDateString("en-PH", {
        year: "numeric",
        month: "long",
        day: "numeric",
    });
</script>

<template>
    <Head :title="` | ${$page.component}`" />
    <h1 class="text-2xl font-bold">Home</h1>

    <!-- <h1>hello {{ $page.props.auth.user }}</h1> -->
    <!-- <Link class="mt-[600px] block" href="/" preserve-scroll>Refresh</Link> -->
    <!-- using preserve-scroll preserves the scroll position when navigating -->

    <div>
        <table>
            <thead>
                <tr class="bg-slate-300">
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users.data" :key="user.id">
                    <td>
                        <img
                            :src="
                                user.avatar
                                    ? 'storage/' + user.avatar
                                    : 'storage/avatars/default.png'
                            "
                            alt="avatar"
                        />
                    </td>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>
                        {{ getDate(user.created_at) }}
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- pagination links -->
        <PaginationLinks :paginator="users" />
    </div>
</template>
