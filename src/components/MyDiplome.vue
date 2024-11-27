<template>
    <section>
        <div class="on-diplome">
            <div class="content-diplome">

                <img src="@/assets/images/MortarboardFill.png" alt="Logo diplôme">
                <ul>

                    <li>Diplômée en 2024, je quitte la région parisienne pour m’installer au Mans et entamer ma nouvelle
                        vie
                        d’auto-entrepreneuse, déterminée à apporter mes compétences et ma passion au service de votre
                        bien-être.</li>
                    <li>En 2023, j’intègre la formation CQP Instructeur Fitness double mention, concrétisant mon rêve de
                        devenir coach. En parallèle, j’obtiens la certification Pilates niveau 1, me permettant d’animer
                        des
                        séances Pilates pour débutants.</li>
                </ul>
            </div>
        </div>
    </section>
</template>
<script setup>
</script>
<style lang="scss">
.on-diplome {
    max-width: 1200px;
    margin: auto;

    .content-diplome {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 2rem;
        line-height: 1.2rem;
        position: relative;
        margin-left: 116.5px;

        img {
            position: absolute;
            top: -100px;
            left: -16px;
            transform: rotate(330deg);
        }

        .left-content {
            margin-left: 116.5px;
            position: relative;

        }

        &::before {
            content: '';
            height: 300px;
            width: 10px;
            border-radius: 10px;
            background-color: #05152e;
            margin-left: 45px;
        }

        ul {
            max-width: 800px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;

            li {
                display: flex;
                align-items: center;
                line-height: 1.5rem;

                &::before {
                    content: '';
                    width: 60px;
                    height: 10px;
                    background-color: #05152e;
                    border-radius: 10px;
                    position: absolute;
                    left: 0;
                    margin-left: 45px;
                }
            }
        }
    }
}
</style>