<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <AppLayout>
        <!-- BACK -->
        <Link :href="'/movies'">
            <h1 id="back">Back ➔</h1>
        </Link>

        <div class="details bg-black  pt-10">
            <img
                class="float-left ml-20 pr-10 transform h-64 w-80 transition duration-500 hover:scale-110"
                src="../../../../public/images/harry_potter_6.jpg"
                alt=""
            />
            <div>
                <h1 class="text-3xl">Harry Potter 6</h1>
                <ul class="info">
                    <li class="pr-7 pt-5 pb-7">⭐ 9/10</li>
                    <li class="pr-7 pt-5 pb-7">|</li>
                    <li class="pr-7 pt-5 pb-7">2020 / 02 / 22</li>
                    <li class="pr-7 pt-5 pb-7">|</li>
                    <li class="pr-7 pt-5 pb-7">Fantasy</li>
                </ul>

                <p class="py-10 w-3/4">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Aspernatur minus exercitationem odio facere, necessitatibus
                    autem. Sunt obcaecati eum odit facere neque et rem
                    distinctio, suscipit officiis vitae, fuga atque nam. Itaque
                    obcaecati nobis quo sit mollitia porro, blanditiis earum
                    consequuntur saepe ab. Sunt laboriosam impedit, sint ab
                    voluptatem illum quidem nobis recusandae non earum quos
                    officiis natus laborum rerum necessitatibus.
                </p>

                <div class="actors-directors">
                    <div class="mr-10">
                        <div>Actors :</div>
                        <p>Emma Watson</p>
                    </div>
                    <div>
                        <div>Directors :</div>
                        <p>Sam Raimi</p>
                    </div>
                </div>
            </div>

            <button
                type="button"
                class="text-white bg-gradient-to-br bg-red-700 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-10 mr-2 mb-2"
            >
                Play Trailer
            </button>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "./../../Layouts/AppLayout.vue";

export default {
    name: "Show",
    components: {
        AppLayout,
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
    padding-top:40px;
    margin-bottom: 25px;
    &:hover {
        opacity: 0.5;
    }
}

div {
    color: white;
}

img {
    height: 500px;
    width: 400px;
    
}

.info {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: baseline;
    align-content: stretch;
}
.actors-directors {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: baseline;
    align-content: stretch;
}
</style>
