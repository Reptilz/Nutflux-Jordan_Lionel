<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Jetstream/Welcome.vue";
</script>

<template>
    <AppLayout title="Dashboard">
        <Welcome :user="user" :utilisateurs="utilisateurs" />
    </AppLayout>
</template>

<script>
export default {
    name: "Dashboard",
    props: ["user", "utilisateurs"],
};
</script>
