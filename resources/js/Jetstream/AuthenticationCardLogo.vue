<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <Link :href="'/'">
        <h1>Back ➔</h1>
    </Link>
</template>

<style lang="scss" scoped>
h1 {
    font-size: 2rem;
    color: white;
    padding: 10px;
    border-radius: 10px;
    &:hover {
        opacity: 0.5;
    }
}
</style>
