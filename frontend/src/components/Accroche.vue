<template>
    <section>
        <div class="on-accroche">
            <h2>
                Prêt.e à transformer votre corps et votre esprit ?
            </h2>
            <div class="me">
                <p>Coach sportive passionnée et engagée, j'accompagne celles et ceux qui souhaitent améliorer leur
                    condition physique, renforcer leur confiance en eux et cultiver un bien-être durable, tant pour le
                    corps que pour l'esprit.</p>
                <p>Ensemble, nous définissons vos objectifs et mettons en place un programme sur mesure, adapté à votre
                    mode de vie et à vos disponibilités. Mon ambition est de vous guider avec expertise et motivation
                    vers une transformation positive et durable.</p>
            </div>
        </div>
    </section>
</template>
<script setup>

</script>
<style lang="scss">
.on-accroche {
    max-width: 1000px;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 48px;

    @media screen and (max-width: 900px) {
        padding: 0;
    }

    h2 {
        color: #ad550f;
        width: 30%;
        padding: .5rem 2rem .5rem 0;
        text-align: right;
        text-transform: uppercase;
        font-size: 1.5rem;
        line-height: 2rem;

        @media screen and (max-width: 900px) {
            width: 100%;
            text-align: left;
        }
    }

    .me {
        line-height: 1.5rem;
        width: 70%;
        padding: .5rem 0 .5rem 2rem;
        border-left: 1px solid #cad3d0;

        @media screen and (max-width: 900px) {
            width: 100%;
            border: none;
            padding: 0;
            margin-top: 1rem;
        }

        p:first-child {
            margin-bottom: 1.5rem;
        }
    }
}
</style>