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
    background: rgb(228, 228, 228);
    padding: 10px;
    border-radius: 10px;
    &:hover {
        background: rgb(196, 196, 196);
    }
}
</style>
