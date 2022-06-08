<template>
    <div class="hero">
        <img src="../../../public/assets/img/reflets-rose.jpg" alt="banniere" />
        <div class="text-container">
            <div class="text">
                <h1><span>Nutflux</span></h1>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Header",
};
</script>

<style lang="scss" scoped>
.hero {
    height: 400px;
    position: relative;
    @media (min-width: 750px) {
        height: 300px;
    }
    &::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.6);
    }
    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .text-container {
        z-index: 99;
        position: absolute;
        top: 0;
        margin: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        .text {
            padding: 0 16px;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
        }
        h1 {
            color: #c92502;
            text-align: center;
            font-size: 64px;
            font-weight: 200;
            @media (min-width: 750px) {
                font-size: 84px;
            }
            span {
                font-weight: 500;
            }
        }
        .nav {
            color: #fff;
        }
    }
}
</style>
