<template>
    <link
        rel="stylesheet"
        href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
    />
    <div
        class="flex flex-col w-56 bg-black ml-8 rounded-r-3xl border-r-2 border-red-700"
    >
        <ul class="flex flex-col py-4">
            <li>
                <a
                    href="#"
                    class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-red-700"
                >
                    <span
                        class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"
                        ><i class="bx bx-home"></i
                    ></span>
                    <span class="text-sm font-medium">Dashboard</span>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Sidebar",
    data() {
        return {
            categorieList: this.categories,
        };
    },
    props: ["categories"],
};
</script>

<style></style>
