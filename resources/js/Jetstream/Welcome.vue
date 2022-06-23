<script setup>
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <div class="bg-black h-screen flex flex-col items-center justify-center">
        <!-- Title -->
        <h1 class="text-gray-200 text-5xl">Who's watching?</h1>

        <!-- Profiles Card -->
        <div class="flex flex-row flex-wrap gap-5 mt-8">
            <!-- Profil -->
            <Link :href="route('movies.index')">
                <div
                    class="flex flex-col items-center group gap-2"
                    v-for="utilisateur in utilisateurs"
                    :key="utilisateur.id"
                >
                    <img
                        class="rounded border-2 border-transparent group-hover:border-2 group-hover:border-gray-300"
                        :src="`https://picsum.photos/seed/${generateRandomLetter()}/150/150`"
                    />
                    <p class="text-gray-500 group-hover:text-gray-300">
                        {{ utilisateur.username }}
                    </p>
                </div>
            </Link>

            <!-- Add Profile -->
            <Link
                v-if="utilisateurs.length < 3"
                :href="route('utilisateurs.create')"
                class="flex flex-col items-center group gap-3"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-[150px] w-[150px] group-hover:bg-gray-300 border-2 border-transparent"
                    viewBox="0 0 20 20"
                    fill="#6b7280"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                        clip-rule="evenodd"
                    />
                </svg>
                <p class="text-gray-500 group-hover:text-gray-300">
                    Add Profile
                </p>
            </Link>
        </div>

        <!-- Manage Profiles -->
        <button
            class="border-2 border-gray-600 text-gray-600 px-4 py-1 mt-20 hover:border-gray-400 hover:text-gray-400"
        >
            Manage Profiles
        </button>
    </div>
</template>

<script>
export default {
    name: "Welcome",
    props: ["user", "utilisateurs"],

    methods: {
        generateRandomLetter() {
            const alphabet = "abcdefghijklmnopqrstuvwxyz";
            return alphabet[Math.floor(Math.random() * alphabet.length)];
        },
    },
};
</script>
