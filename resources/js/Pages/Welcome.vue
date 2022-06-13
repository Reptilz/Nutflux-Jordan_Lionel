<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <!-- TEMPLATE WELCOME PAGE -->
    <div class="welcome-page">
        <div
            class="template-netflix h-screen flex justify-center items-center bg-cover bg-center"
        >
            <div class="text-red-600 text-6xl absolute top-0 left-0 mt-5 ml-5">
                <h1 id="logo">Nutflux</h1>
            </div>
            <Link :href="route('login')">
                <button
                    class="absolute bg-red-600 hover:bg-red-700 text-white p-3 top-0 right-0 mt-3 mr-5"
                >
                    Sign In
                </button>
                <Link :href="route('register')">
                    <button
                        class="absolute bg-red-600 hover:bg-red-700 text-white p-3 top-0 right-20 mt-3 mr-5"
                    >
                        Register
                    </button>
                </Link>
            </Link>
            <div class="space-y-5">
                <p
                    class="text-white font-bold text-5xl flex flex-col items-center"
                >
                    <span>Unlimited movies, TV <br /></span>
                    <span> shows and more. </span>
                </p>
                <p
                    class="text-white font-semibold text-3xl flex flex-col items-center"
                >
                    Watch anywhere. Cancel anytime.
                </p>
                <p class="text-white text-lg flex flex-col items-center">
                    Ready to watch? Create your account now!
                </p>
                <div class="flex flex-row items-center justify-center">
                    <Link :href="route('register')">
                        <button
                            class="p-4 text-l font-semibold bg-red-600 hover:bg-red-700 text-white"
                        >
                            Register now
                        </button>
                    </Link>
                </div>
            </div>
        </div>
        <hr />
        <div class="h-screen flex items-center justify-center bg-black p-5">
            <div class="space-y-5 p-5">
                <p class="text-white font-bold text-4xl">Enjoy on your TV.</p>
                <p class="text-white font-semiboldbold text-xl">
                    Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV,
                    Blu-ray players and more.
                </p>
            </div>
            <div>
                <img
                    alt="TV"
                    src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png"
                />
            </div>
        </div>
        <hr />
        <div class="h-screen flex items-center justify-center bg-black p-5">
            <div>
                <img
                    alt=""
                    class="our-story-card-img"
                    src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/mobile-0819.jpg"
                    data-uia="our-story-card-img"
                />
            </div>
            <div class="space-y-5">
                <p class="text-white font-bold text-4xl">
                    Download your shows to watch offline.
                </p>
                <p class="text-white font-semiboldbold text-xl">
                    Save your favourites easily and always have something to
                    watch.
                </p>
            </div>
        </div>
        <hr />
        <div class="h-screen flex items-center justify-center bg-black p-5">
            <div class="space-y-5 p-5">
                <p class="text-white font-bold text-4xl">Watch everywhere.</p>
                <p class="text-white font-semiboldbold text-xl">
                    Stream unlimited movies and TV shows on your phone, tablet,
                    laptop, and TV.
                </p>
            </div>
            <div>
                <img
                    alt=""
                    class="our-story-card-img"
                    src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/device-pile-in.png"
                    data-uia="our-story-card-img"
                />
            </div>
        </div>
        <hr />
    </div>
</template>

<style lang="scss" scoped>
.template-netflix {
    background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 60%)),
        url("https://assets.nflxext.com/ffe/siteui/vlv3/c0a32732-b033-43b3-be2a-8fee037a6146/2fe6e3c0-5613-4625-a0c1-3d605effd10b/IN-en-20210607-popsignuptwoweeks-perspective_alpha_website_large.jpg");
}
#logo {
    text-shadow: 1px 1px 1px #9e6b6b;
}
</style>
