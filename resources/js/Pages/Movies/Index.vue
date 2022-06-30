<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <Head title="Movies" />
    <AppLayout>
        <!-- COMPONENT HEADER -->

        <!-- CATEGORIES SECTION -->
        <div class="list-category mt-20">
            <div class="mb-10">
                <button
                    v-for="cat in this.categorieList.slice(0, 7)"
                    :key="cat.id"
                    type="button"
                    class="text-white bg-gradient-to-br bg-red-700 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-red-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                    @click="selectedCat(cat.id)"
                >
                    {{ cat.name }}
                </button>

                <div class="group-cat group inline-block relative">
                    <button
                        class="bg-red-700 text-white font-semibold py-2 px-4 rounded inline-flex items-center hover:bg-red-500"
                    >
                        <span class="mr-1">...</span>
                        <svg
                            class="fill-current h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                            />
                        </svg>
                    </button>
                    <ul
                        class="absolute hidden text-white pt-1 group-hover:block z-10"
                    >
                        <li
                            class="cat"
                            v-for="(cat, index) in this.categorieList"
                            :key="index"
                            @click="selectedCat(cat.id)"
                        >
                            <a
                                class="rounded-t bg-red-700 hover:bg-red-500 py-2 px-4 block whitespace-no-wrap"
                                href="#"
                                >{{ cat.name }}</a
                            >
                        </li>
                    </ul>
                </div>

                <!-- SEARCHBAR -->
                <form>
                    <label
                        for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300"
                        >Search</label
                    >
                    <div class="relative">
                        <div
                            class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                        >
                            <svg
                                class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                ></path>
                            </svg>
                        </div>
                        <input
                            v-model="searchKey"
                            type="search"
                            id="default-search"
                            class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-700 focus:border-red-700 dark:bg-gray-500 dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-gray-500 dark:focus:border-red-500"
                            placeholder="Search Movies..."
                            required
                        />
                    </div>
                </form>
            </div>
        </div>

        <!-- LIST MOVIES -->
        <div class="movies mx-16">
            <div
                v-for="movie in filterList"
                :key="movie.id"
                class="cards-movie pb-8 mr-4"
            >
                <div>
                    <div
                        class="flex max-w-sm w-full bg-black shadow-md rounded-lg overflow-hidden mx-auto"
                    >
                        <div class="w-2 bg-gray-800"></div>

                        <div
                            class="overflow-hidden rounded-xl relative transform hover:-translate-y-2 transition ease-in-out duration-500 shadow-lg hover:shadow-2xl movie-item text-white movie-card"
                            data-movie-id="438631"
                        >
                            <div
                                class="absolute inset-0 z-10 transition duration-300 ease-in-out bg-gradient-to-t from-black via-gray-900 to-transparent"
                            ></div>
                            <div
                                class="relative cursor-pointer group z-10 px-10 pt-10 space-y-6 movie_info"
                                data-lity=""
                                href="https://www.youtube.com/embed/aSHs224Dge0"
                            >
                                <div class="poster__info align-self-end w-full">
                                    <div class="h-32"></div>
                                    <div class="space-y-6 detail_info">
                                        <div
                                            class="flex flex-col space-y-2 inner"
                                        >
                                            <a
                                                class="relative flex items-center w-min flex-shrink-0 p-1 text-center text-white bg-red-700 rounded-full group-hover:bg-red-500"
                                                data-unsp-sanitized="clean"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="w-10 h-10"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM9.555 7.168A1 1 0 0 0 8 8v4a1 1 0 0 0 1.555.832l3-2a1 1 0 0 0 0-1.664l-3-2z"
                                                        clip-rule="evenodd"
                                                    ></path>
                                                </svg>
                                                <div
                                                    class="absolute transition opacity-0 duration-500 ease-in-out transform group-hover:opacity-100 group-hover:translate-x-16 text-xl font-bold text-white group-hover:pr-2"
                                                >
                                                    Trailer
                                                </div>
                                            </a>

                                            <h3
                                                class="text-2xl font-bold text-white"
                                                data-unsp-sanitized="clean"
                                            >
                                                {{ movie.title }}
                                            </h3>
                                            <!-- Category Tags -->
                                            <div class="text-center">
                                                <a
                                                    v-for="categorie in movie.categories"
                                                    :key="categorie.id"
                                                    href="#"
                                                    class="mx-2 hover:bg-gray-600 text-gray-300 text-xs font-semibold bg-gray-700 px-2 py-1 rounded-full"
                                                >
                                                    {{ categorie.name }}
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="flex flex-row justify-between datos"
                                        >
                                            <div
                                                class="flex flex-col datos_col"
                                            ></div>
                                            <div
                                                class="flex flex-col datos_col"
                                            >
                                                <div class="release">
                                                    {{ movie.rating }}/10
                                                </div>
                                                <div
                                                    class="text-sm text-gray-400"
                                                >
                                                    Rating:
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col datos_col"
                                            >
                                                <div class="release">
                                                    {{ movie.dateReview }}
                                                </div>
                                                <div
                                                    class="text-sm text-gray-400"
                                                >
                                                    Release date:
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col datos_col"
                                            >
                                                <div class="release">
                                                    {{ movie.duration }}
                                                </div>
                                                <div
                                                    class="text-sm text-gray-400"
                                                >
                                                    Runtime:
                                                </div>
                                            </div>
                                        </div>

                                        <!-- OVERVIEW -->
                                        <div class="flex flex-col overview">
                                            <div class="flex flex-col"></div>
                                            <div
                                                class="text-xs text-gray-400 mb-2"
                                            >
                                                Overview:
                                            </div>
                                            <p
                                                class="text-xs text-gray-100 mb-4"
                                                v-if="
                                                    movie.overview.length > 200
                                                "
                                            >
                                                {{
                                                    movie.overview.substring(
                                                        0,
                                                        200
                                                    ) + "..."
                                                }}
                                            </p>
                                            <p
                                                class="text-xs text-gray-100 mb-4"
                                                v-else
                                            >
                                                {{ movie.overview }}
                                                
                                            </p>
                                        </div>

                                        <div class="actor-director">
                                            <!-- ACTORS -->
                                            <div class="flex flex-col actors">
                                                <div
                                                    class="flex flex-col"
                                                ></div>
                                                <div
                                                    class="text-xs text-gray-400 mb-2"
                                                >
                                                    Actors:
                                                </div>
                                                <p
                                                    v-for="actor in movie.actors"
                                                    :key="actor.id"
                                                    class="text-xs text-gray-100"
                                                >
                                                    {{ actor.firstname }}
                                                    {{ actor.lastname }}
                                                </p>
                                            </div>

                                            <!-- DIRECTORS -->
                                            <div
                                                class="flex flex-col mr-7 directors"
                                            >
                                                <div
                                                    class="flex flex-col"
                                                ></div>
                                                <div
                                                    class="text-xs text-gray-400 mb-2"
                                                >
                                                    Directors:
                                                </div>
                                                <p
                                                    v-for="director in movie.directors"
                                                    :key="director.id"
                                                    class="text-xs text-gray-100"
                                                >
                                                    {{ director.firstname }}
                                                    {{ director.lastname }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img
                                class="absolute inset-0 transform w-full -translate-y-4"
                                :src="
                                    require('../../../../public/images/' +
                                        movie.image).default
                                "
                                :alt="`${movie.title}`"
                                style="filter: grayscale(0)"
                            />
                            <div
                                class="poster__footer flex flex-row relative pb-10 space-x-4 z-10"
                            >
                                <a
                                    class="flex items-center py-2 px-4 rounded-full mx-auto mt-8 text-white bg-red-700 hover:bg-red-500"
                                    target="_blank"
                                    data-unsp-sanitized="clean"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                        ></path>
                                    </svg>
                                    <Link
                                        :href="
                                            route('movies.show', {
                                                id: movie.id,
                                            })
                                        "
                                    >
                                        <div class="text-sm text-white ml-2">
                                            Show
                                        </div>
                                    </Link>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NO RESULT SEARCH -->
            <div
                class="no-search text-white text-center col-span-3"
                v-if="filterList.length == []"
            >
                <h3 class="text-6xl mb-6 mt-8">Sorry :(</h3>
                <p class="text-3xl mb-12">No result found...</p>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "./../../Layouts/AppLayout.vue";
import Header from "./../../components/Header.vue";

export default {
    name: "Movie",
    components: {
        AppLayout,
        Header,
    },

    data() {
        return {
            movieList: this.movies,
            categorieList: this.categories,
            actorList: this.actors,
            directorList: this.directors,
            searchKey: "",
            selectedCategory: "",
            
        };
    },
    methods: {
        selectedCat(id) {
            this.selectedCategory = id;
        },
    },
    computed: {
        filterList() {
            return this.movieList.filter((movie) => {
                return movie.title
                    .toLowerCase()
                    .includes(this.searchKey.toLowerCase());
            });
        },

        filterCategory() {
            return this.movieList.filter(
                (movie) => movie.categories[0].id == this.selectedCategory
            );
        },
    },

    props: ["movies", "categories", "actors", "directors"],
};
</script>

<style lang="scss" scoped>
.movies {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
}
.list-category {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-evenly;
}

.actor-director {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-between;
    align-items: baseline;
    align-content: stretch;
}
</style>
