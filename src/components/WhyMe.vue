<template>
    <section>
        <h2>
            Pourquoi me faire confiance ?
        </h2>
        <div class="content-why-me">
            <div>
                <h3>Accompagnement personnalisé</h3>
                <ul>
                    <li>Nous définissons ensemble vos objectifs et mettons en place un programme sur mesure.
                    </li>
                    <li>Mes programmes sont adaptés à vos besoins et objectifs spécifiques.
                    </li>
                    <li>Je rends vos séances complètes et sécurisées.
                    </li>
                    <li>Je choisis des mouvements adaptés à votre niveau et à vos capacités physiques.
                    </li>
                    <li>Je m'adapte à votre rythme et au mieux à vos disponibilités.</li>
                </ul>
            </div>
            <div>
                <h3>Expertise, sécurité et adaptation</h3>
                <ul>
                    <li>Diplômée CQP Instructeur Fitness double mention + certification Pilates niveau 1 et Cupping
                        Therapy
                    </li>
                    <li>Je vous enseigne des exercices sécurisés pour vous rendre autonome et confiant.</li>
                    <li>Je corrige vos mouvements et ajuste votre programme selon vos besoins.﻿</li>
                    <li>Je vous aide à progresser sans risque de blessures.
                    </li>
                </ul>
            </div>
            <div>
                <h3>Motivation, bienveillance et engagement</h3>
                <ul>
                    <li>Je vous aide à rester motivé.e, même dans les moments de doute ou de fatigue.
                    </li>
                    <li>Je reste disponible pour répondre à vos questions et vous accompagner au quotidien.</li>
                    <li>Je vous apporte un soutien pour atteindre vos objectifs étape par étape.
                    </li>
                    <li>Grâce à un suivi régulier, vous constatez des améliorations concrètes, renforçant votre
                        engagement.</li>
                </ul>
            </div>
            <div>
                <h3>Gain de temps etd'efficacité</h3>
                <ul>
                    <li>J'optimise les séances, chaque minute est utilisée efficacement.</li>
                    <li>Structure claire : Pas besoin de planifier ou de chercher des exercices, tout est préparé pour
                        vous.</li>
                    <li>Résultats concrets : Je vous guide vers une progression mesurable en un temps réduit.
                    </li>
                    <li>Nous fixons des objectifs réalistes.
                    </li>
                </ul>
            </div>
        </div>
    </section>
</template>
<script setup>

</script>
<style lang="scss" scoped>
#whyme {
    h2 {
        text-align: center;
        color: #C17C45;
        margin-bottom: 4rem;
    }

    .content-why-me {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        width: 100%;
        max-width: 1500px;
        margin: auto;
        row-gap: 3rem;

        >div {
            width: 25%;
            padding: .5rem 2rem;
            min-width: 340px;

            &:not(:first-child) {
                border-left: 1px solid #cad3d0;
            }

            h3 {
                margin-bottom: 2rem;
                font-size: 18px;
                font-weight: bold;
                text-align: center;
            }

            ul {
                li {
                    margin-bottom: 1.5rem;
                    line-height: 1.5;
                    font-size: 15px;
                }
            }
        }
    }
}
</style>