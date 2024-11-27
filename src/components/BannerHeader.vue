<template>
    <div class="banner-header">
        <div class="on-img">
            <img src="@/assets/images/logo-grey.webp" alt="Logo cohésion sportive">
            <div class="right-content">
                <h1>Chloé Douguedroit</h1>
                <div class="text">Coach sportive diplômée</div>
                <div class="location">
                    Le Mans • En ligne
                </div>
                <a href="#contact" class="btn btn-border">Me contacter</a>
            </div>
        </div>
    </div>
</template>
<script setup>

</script>
<style lang="scss" scoped>
.banner-header {
    position: relative;
    background: url("@/assets/images/header.webp");
    background-attachment: fixed;
    padding: 400px 0 200px;

    &::before {
        content: '';
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        background-color: rgba($color: #000000, $alpha: .5);
        // backdrop-filter: blur(7px);

        z-index: 0;
    }

    .on-img {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 3rem;
        height: 100%;
        max-width: 1000px;
        margin: auto;
        position: relative;
        z-index: 1;
        padding: 3rem;
        img {
            max-width: 250px;
            height: 100%;
            margin-right: 1rem;
        }

        .right-content {
            padding: 0 2rem;
            border-left: 1px solid white;

            h1 {
                font-size: 55px;
                color: white;
                margin-bottom: 1rem;
                span {
                    display: block;
                }
            }

            .text {
                color: #C17C45;
                font-size: 28px;
            }

            .location {
                margin-top: 2rem;
                font-size: 24px;
                color: white;
            }

            .btn {
                margin: 1rem 0 .5rem;
            }
        }
    }

}
</style>