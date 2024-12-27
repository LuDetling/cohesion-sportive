<template>
    <div class="banner-header">
        <div class="on-img">
            <img src="@/assets/images/logo-grey.webp" alt="Logo cohésion sportive" class="logo-header" width="300">
            <div class="right-content">
                <h1>Chloé Douguedroit</h1>
                <div class="text">Coach sportive diplômée</div>
                <div class="location">
                    Le Mans • En ligne
                </div>
                <a href="#contact" class="btn btn-border">Me contacter</a>
            </div>
        </div>
        <a href="#description" class="scroll-down">
            <img src="../assets/images/scroll-down.gif" alt="scroll down" width="50">
        </a>
    </div>
</template>
<script setup>

</script>
<style lang="scss" scoped>
.banner-header {
    position: relative;
    background-image: url("@/assets/images/header.webp");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    padding: 300px 0 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    max-height: 100vh;

    @media screen and (max-width: 929px) {
        padding: 100px 0 100px;
        width: 100%;
        height: 100%;
        background-attachment: scroll;
    }

    &::before {
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        background-color: rgba($color: #000000, $alpha: .5);
        z-index: 0;
    }

    .scroll-down {
        position: absolute;
        bottom: 2rem;

        img {
            width: 50px;
        }
    }

    .on-img {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        height: 100%;
        max-width: 1000px;
        margin: auto;
        position: relative;
        z-index: 1;
        padding: 3rem;
        row-gap: 3rem;

        .logo-header {
            width: 30%;
            padding-right: 1rem;
            min-width: 250px;

            @media screen and (max-width: 929px) {
                width: 200px;
                padding-right: 0;
                min-width: 100px;
            }
        }


        .right-content {
            padding-left: 2rem;
            border-left: 1px solid white;
            width: 70%;

            @media screen and (max-width: 900px) {
                border-left: none;
                padding-left: 0;
                width: 100%;
                text-align: center;
            }

            h1 {
                font-size: 55px;
                color: white;
                margin-bottom: 1rem;

                @media screen and (max-width: 500px) {
                    font-size: 40px;
                }

                span {
                    display: block;
                }
            }

            .text {
                color: #ad550f;
                font-size: 28px;
            }

            .location {
                margin-top: 2rem;
                font-size: 24px;
                color: white;
            }

            .btn {
                margin: 1rem 0 .5rem;

                @media screen and (max-width: 900px) {
                    display: block;
                    margin: 2rem auto;
                }
            }
        }
    }

}
</style>