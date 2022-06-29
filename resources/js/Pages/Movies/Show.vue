<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <AppLayout>
        <!-- BACK -->
        <Link :href="'/movies'">
            <h1 id="back">Back ➔</h1>
        </Link>

        <div class="details bg-black pt-10">
            <img
                class="float-left ml-20 pr-10 transform h-64 w-80 transition duration-500 hover:scale-110"
                :src="
                    require('../../../../public/images/' + movies.image).default
                "
                alt=""
            />
            <div>
                <h1 class="text-3xl">{{ movies.title }}</h1>
                <ul class="info">
                    <li class="pr-7 pt-5 pb-7">⭐ {{ movies.rating }}/10</li>
                    <li class="pr-7 pt-5 pb-7">|</li>
                    <li class="pr-7 pt-5 pb-7">{{ movies.dateReview }}</li>
                    <li class="pr-7 pt-5 pb-7">|</li>
                    <li
                        class="pr-7 pt-5 pb-7"
                        v-for="movie in movies.categories"
                        :key="movie.id"
                    >
                        {{ movie.name }}
                    </li>
                </ul>

                <p class="py-10 w-3/4">
                    {{ movies.overview }}
                </p>

                <div class="actors-directors">
                    <div class="mr-10">
                        <div>Actors :</div>
                        <p v-for="movie in movies.actors" :key="movie.id">
                            {{ movie.firstname }} {{ movie.lastname }}
                        </p>
                    </div>
                    <div>
                        <div>Directors :</div>
                        <p v-for="movie in movies.directors" :key="movie.id">
                            {{ movie.firstname }} {{ movie.lastname }}
                        </p>
                    </div>
                </div>
            </div>

            <button
                class="trigger mt-10 bg-red-700 p-3 rounded hover:bg-red-500"
            >
                Play Trailer
            </button>
            <div class="modal">
                <span class="close-button  mb-2">×</span>
                <div class="modal-content">
                    
                   <iframe src="https://videos.cineserie.com/player/index/172418/3/19" width="590" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
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
    mounted() {
        // let run = document.getElementById("run");

        // run.addEventListener("click", () => {
        //     const div = document.createElement("div");
        // });
        const modal = document.querySelector(".modal");
        const trigger = document.querySelector(".trigger");
        const closeButton = document.querySelector(".close-button");

        function toggleModal() {
            modal.classList.toggle("show-modal");
        }

        function windowOnClick(event) {
            if (event.target === modal) {
                toggleModal();
            }
        }

        trigger.addEventListener("click", toggleModal);
        closeButton.addEventListener("click", toggleModal);
        window.addEventListener("click", windowOnClick);
    },
    props: ["movies", "categories", "actors", "directors"],
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
.modal {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0.9;
    visibility: hidden;
    transform: scale(1.1);
    transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
}

.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgb(185 28 28 );
    padding: 5px;
    width: 600px;
    border-radius: 0.5rem;
    
}

.modal-content:hover{
    background-color: rgb(239 68 68);
}

.close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: rgb(185 28 28 );
    margin : 10px;
    position: absolute;
    top: 20%;
    left: 80%;

}

.close-button:hover {
    background-color: rgb(239 68 68);
}

.show-modal {
    opacity: 1;
    visibility: visible;
    transform: scale(1);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
}
</style>
