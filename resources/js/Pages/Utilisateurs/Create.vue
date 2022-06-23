<template>
    <AppLayout>
        <!-- BACK -->

        <form class="flex h-screen" @submit.prevent="submit">
            <div class="m-auto">
                <!-- <label class="text-xl m-3" for="username">Username:</label> -->
                <input class="p-3" placeholder="Username" id="username" v-model="form.username" />
                <button
                    class="bg-red-700 p-3 rounded hover:bg-red-500"
                    type="submit"
                >
                    Submit
                </button>
            </div>
        </form>
    </AppLayout>
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

<style lang="scss" scoped>
form {
    label {
        color: white;
    }
    button {
        color: white;
    }
}
</style>
