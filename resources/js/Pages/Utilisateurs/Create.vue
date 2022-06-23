<template>
    <form @submit.prevent="submit">
        <label for="username">Username:</label>
        <input id="username" v-model="form.username" />
        <button type="submit">Submit</button>
    </form>
</template>

<script>
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";
import AppLayout from "../../Layouts/AppLayout.vue";

export default {
    components: {
        AppLayout,
    },
    props: ["user"],

    setup(props) {
        const form = reactive({
            username: null,
            user_id: props.user.id,
        });

        function submit() {
            Inertia.post("/create", form);
        }

        return { form, submit };
    },
};
</script>

<style lang="scss" scoped></style>
