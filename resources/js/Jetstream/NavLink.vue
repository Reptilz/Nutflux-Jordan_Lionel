<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    href: String,
    active: Boolean,
});

const classes = computed(() => {
    return props.active
        ? "inline-flex font-bold items-center px-1 pt-1 border-b-4 border-red-400 text-sm font-medium leading-5 text-red-700 focus:outline-none focus:border-indigo-700 transition"
        : "inline-flex font-bold items-center px-1 pt-1 border-b-4 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-400 hover:border-gray-300 focus:outline-none focus:text-gray-400 focus:border-gray-300 transition";
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
