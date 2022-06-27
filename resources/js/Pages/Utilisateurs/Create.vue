<script setup></script>

<template>
    <AppLayout>
        <!-- BACK -->
        <a href="/movies">
            <h1 id="back">Back ➔</h1>
        </a>

        <form class="flex mt-6" @submit.prevent="submit">
            <div class="m-auto">
                <label class="block mb-1 mt-12 font-bold" for="username"
                    >Username:</label
                >
                <input
                    class="p-3"
                    placeholder="Username"
                    id="username"
                    v-model="form.username"
                />
                <button
                    class="bg-red-700 p-3 rounded hover:bg-red-500"
                    type="submit"
                >
                    Create
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
#back {
    font-size: 2rem;
    color: white;
    padding: 10px;
    border-radius: 10px;
    text-align: center;
    padding-top: 40px;
    margin-bottom: 25px;
    &:hover {
        opacity: 0.5;
    }
}
form {
    label {
        color: white;
    }
    button {
        color: white;
    }
}
</style>
