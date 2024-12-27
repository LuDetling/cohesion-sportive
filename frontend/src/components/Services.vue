<template>
    <section>
        <h2>Découvrez mes services & tarifs</h2>
        <div class="flex-content">
            <div class="left-content">
                <div class="left-content-background">
                    <div class="content">
                        <h3>Coaching à domicile</h3>
                        <a href="#contact" class="btn btn-border">Réserver</a>
                        <div class="arrow">↓</div>
                        <div class="accordion">
                            <button @click="(isExpandedLeftTop = !isExpandedLeftTop) && (isExpandedLeftBottom = false)"
                                :class="{ collapse: isExpandedLeftTop }">
                                <h4>Votre accompagnement en détail</h4>
                                <div class="content-plus">
                                    <div class="plus"></div>
                                    <div class="moins"></div>
                                </div>
                            </button>
                            <Collapse :when="isExpandedLeftTop">
                                <ul>
                                    <li>Appel avant la première séance : Un échange pour cerner vos objectifs, vos
                                        besoins
                                        spécifiques, et définir ensemble une séance qui vous convient.</li>
                                    <li>Encadrement en présentiel à chaque séance : Bénéficiez de corrections précises,
                                        d'ajustements de mouvements et de conseils pour améliorer chaque exercice en
                                        toute
                                        sécurité.</li>
                                    <li>Disponibilité par mails, SMS, réseaux sociaux : Astuces pour l’échauffement, la
                                        récupération, la mobilité...
                                    </li>
                                    <li>Appel de fin de programme (ou directement après la dernière séance) : Évaluation
                                        de
                                        vos progrès et discussion sur les prochaines étapes pour prolonger vos succès.
                                    </li>
                                </ul>
                            </Collapse>
                        </div>
                        <div class="accordion">
                            <button
                                @click="(isExpandedLeftBottom = !isExpandedLeftBottom) && (isExpandedLeftTop = false)"
                                :class="{ collapse: isExpandedLeftBottom }">
                                <h4>Pourquoi choisir cette préstation ?</h4>
                                <div class="content-plus">
                                    <div class="plus"></div>
                                    <div class="moins"></div>
                                </div>
                            </button>
                            <Collapse :when="isExpandedLeftBottom">
                                <ul>
                                    <li>Le premier avantage du coaching à domicile, c’est ma présence pour vous soutenir
                                        à
                                        chaque séance. Vous bénéficiez d’une motivation en temps réel, vous permettant
                                        d’être constant dans votre routine.</li>
                                    <li>En vous accompagnant, je m’assure de la bonne exécution de vos mouvements sur
                                        les
                                        différents exercices. Je m’adapte selon votre forme du jour.</li>
                                    <li>Avec son travail et sa vie de famille, il peut être difficile de libérer du
                                        temps
                                        pour s’entraîner. Profitez d'un coaching sur-mesure et sans déplacements,
                                        intégrable
                                        facilement à votre quotidien.</li>
                                    <li>De plus, si vous ne sentez pas à l’aise dans une salle de sport, s’entraîner à
                                        domicile est tout à fait adapté. Loin du regard des autres, vous restez
                                        concentré
                                        sur votre séance et vos sensations. La progression est assurée.</li>
                                    <li>La possibilité d’être coaché avec un membre de sa famille, un ami, met l’accent
                                        sur
                                        la convivialité et la cohésion de groupe. Cela permet de renforcer les liens
                                        tout en
                                        restant actif.
                                    </li>
                                </ul>
                            </Collapse>
                        </div>
                    </div>
                </div>
                <div class="tarifs">
                    <div class="left-tarifs-content">
                        <h3>Solo</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Packs</th>
                                    <th>Tarifs</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Séance Individuelle</td>
                                    <td>40 euros HT</td>
                                </tr>
                                <tr>
                                    <td>Pack 5 séances</td>
                                    <td>180 euros HT</td>
                                </tr>
                                <tr>
                                    <td>Pack 10 séances</td>
                                    <td>340 euros HT</td>
                                </tr>
                                <tr>
                                    <td>Pack 20 séances</td>
                                    <td>600 euros HT</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text">
                            <p>Programme + 15 euros HT</p>
                            <p>Facilités de paiement (paiement en 3 fois)</p>
                            <p>Chaque séance sera limitée à 1 heure maximum.</p>
                        </div>
                        <a href="#contact" class="btn btn-border-brown">Demander un devis</a>
                    </div>
                    <div class="right-tarifs-content">
                        <h3>Duo</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Packs</th>
                                    <th>Tarifs/pers.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Séance Individuelle</td>
                                    <td>25 euros HT</td>
                                </tr>
                                <tr>
                                    <td>Pack 5 séances</td>
                                    <td>112,5 euros HT</td>
                                </tr>
                                <tr>
                                    <td>Pack 10 séances</td>
                                    <td>212,5 euros HT</td>
                                </tr>
                                <tr>
                                    <td>Pack 20 séances</td>
                                    <td>375 euros HT</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text">
                            <p>Programme + 15 euros HT</p>
                            <p>Facilités de paiement (paiement en 3 fois)</p>
                            <p>Chaque séance sera limitée à 1 heure maximum.</p>
                        </div>
                        <a href="#contact" class="btn btn-border-brown">Demander un devis</a>
                    </div>
                </div>
            </div>
            <div class="right-content">

                <div class="right-content-background">
                    <div class="content">
                        <h3>Coaching en ligne</h3>
                        <a href="#contact" class="btn btn-border">Réserver</a>
                        <div class="arrow">↓</div>
                        <div class="accordion">
                            <button
                                @click="(isExpandedRightTop = !isExpandedRightTop) && (isExpandedRightBottom = false)"
                                :class="{ collapse: isExpandedRightTop }">
                                <h4>Votre accompagnement en détail</h4>
                                <div class="content-plus">
                                    <div class="plus"></div>
                                    <div class="moins"></div>
                                </div>
                            </button>
                            <Collapse :when="isExpandedRightTop">
                                <ul>
                                    <li>Appel de début de programme : Un premier échange pour comprendre vos objectifs,
                                        votre mode de vie et définir le plan qui vous convient.</li>
                                    <li>Suivi régulier : Des suivis hebdomadaires ou bimensuels pour ajuster le
                                        programme en
                                        fonction de vos progrès, corriger vos exécutions et répondre à toutes vos
                                        questions.
                                    </li>
                                    <li>Disponibilité par mails, SMS, réseaux sociaux : Astuces pour l’échauffement, la
                                        récupération, la mobilité...
                                    </li>
                                    <li>Appel de fin de programme : Pour faire le point sur les progrès réalisés et
                                        envisager la suite de votre parcours sportif.
                                    </li>
                                </ul>
                            </Collapse>
                        </div>
                        <div class="accordion">
                            <button
                                @click="(isExpandedRightBottom = !isExpandedRightBottom) && (isExpandedRightTop = false)"
                                :class="{ collapse: isExpandedRightBottom }">
                                <h4>Pourquoi choisir cette préstation ?</h4>
                                <div class="content-plus">
                                    <div class="plus"></div>
                                    <div class="moins"></div>
                                </div>
                            </button>
                            <Collapse :when="isExpandedRightBottom">
                                <ul>
                                    <li>Le coaching en ligne vous permet d’organiser vos séances en fonction de votre
                                        rythme
                                        et de votre emploi du temps.</li>
                                    <li>De plus, selon vos préférences, vous choisissez le lieu d’entraînement qui vous
                                        convient (salle de sport, en extérieur ou à domicile). Un programme personnalisé
                                        est
                                        conçu pour vous, selon vos besoins et vos objectifs.</li>
                                    <li>La communication via les outils numériques permet un suivi régulier de vos
                                        progrès.
                                    </li>
                                    <li>Je me rends disponible pour répondre à vos questionnements, corriger vos
                                        postures,
                                        vos exécutions.
                                    </li>
                                    <li>Grâce à mes messages d’encouragements, vous gardez la motivation. Votre coach
                                        est là
                                        pour encourager, remotiver en cas de baisse d'énergie, et célébrer chaque étape
                                        franchie vers votre objectif.
                                    </li>
                                </ul>
                            </Collapse>
                        </div>
                    </div>
                </div>
                <div class="tarifs">
                    <div>
                        <h3>Abonnement</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Engagement</th>
                                    <th>Tarifs</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>3 mois</td>
                                    <td>345 euros HT (Soit 115 euros/mois)</td>
                                </tr>
                                <tr>
                                    <td>6 mois</td>
                                    <td>660 euros HT (Soit 110 euros/mois)</td>
                                </tr>
                                <tr>
                                    <td>1 an</td>
                                    <td>1200 euros HT (Soit 100 euros/mois)</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text">
                            <p>Programme inclut.</p>
                            <p>Facilités de paiement (paiement en 3, 6 ou 12 fois).</p>
                        </div>
                        <a href="#contact" class="btn btn-border-brown">Demander un devis</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
import { ref } from 'vue'
import { Collapse } from 'vue-collapsed'

const isExpandedLeftTop = ref(false)
const isExpandedLeftBottom = ref(false)
const isExpandedRightTop = ref(false)
const isExpandedRightBottom = ref(false)
</script>
<style lang="scss" scoped>
section {
    max-width: 1500px;
    width: 100%;
    margin: auto;

    h2 {
        color: #ad550f;
        text-align: center;
        text-transform: uppercase;
        font-size: 1.5rem;
        line-height: 2rem;
        margin-bottom: 3rem;
    }

    .flex-content {
        display: flex;
        gap: 4rem;
        flex-wrap: wrap;

        .right-content,
        .left-content {
            width: calc(50% - 2rem);

            @media screen and (max-width: 1200px) {
                width: 100%;
            }
        }

        .left-content-background,
        .right-content-background {
            margin-right: auto;
            margin-left: auto;
            padding: 200px 50px;
            position: relative;
            margin-bottom: 3rem;
            background-attachment: fixed;
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            position: relative;
            border-radius: 16px;
            overflow: hidden;

            @media screen and (max-width: 929px) {
                background-attachment: scroll;
            }

            @media screen and (max-width: 600px) {
                padding: 200px 25px;
            }

            &::after {
                content: '';
                width: 100%;
                height: 100%;
                background-color: rgba($color: #000000, $alpha: .7);
                position: absolute;
                top: 0;
                left: 0;
            }

            .content {
                position: relative;
                z-index: 1;

                h3 {
                    text-align: center;
                    margin-bottom: 1rem;
                }

                .btn {
                    margin: auto;
                }

                .arrow {
                    font-size: 3rem;
                    text-align: center;
                    margin: 3rem 0;
                }

                .accordion {
                    margin-bottom: 1rem;

                    button {
                        cursor: pointer;
                        border: none;
                        padding: 0;
                        border: none;
                        background-color: transparent;
                        display: flex;
                        align-items: center;
                        column-gap: 1rem;
                        justify-content: space-between;
                        width: 100%;
                        padding: 1rem;
                        border-bottom: 1px solid white;
                        margin-bottom: 1rem;

                        h4 {
                            color: white;
                        }

                        .content-plus {
                            position: relative;
                            width: 14px;

                            .plus,
                            .moins {
                                width: 14px;
                                height: 1px;
                                background-color: white;
                                position: absolute;
                                left: 0;
                                transition: .5s;
                            }

                            .plus {
                                transform: rotate(90deg);
                            }

                        }

                        &.collapse {
                            .plus {
                                transform: rotate(270deg);
                                opacity: 0;
                            }

                            .moins {
                                transform: rotate(180deg);
                            }
                        }
                    }

                    >div {
                        padding: 1rem;

                        ul {
                            padding: 0 40px;
                            list-style: disc;

                            @media screen and (max-width: 600px) {
                                padding: 0 20px;
                            }

                            li {
                                margin-bottom: 1.5rem;
                                line-height: 1.4;
                                font-size: 15px;
                            }
                        }
                    }
                }

            }

        }

        .left-content-background {
            background-image: url('@/assets/images/left-content.webp');
            color: white;
        }

        .right-content-background {
            background-image: url('@/assets/images/groupe.webp');
            color: white;
            background-position: right;
        }
    }
}

.left-tarifs,
.right-tarifs {
    width: calc(50% - 2rem);

    .left-tarifs-content,
    .right-tarifs-content {
        width: calc(50% - 1rem);
        min-width: 310px;
    }
}

.right-tarifs {
    .tarifs {
        height: 100%;

        >div {
            display: flex;
            flex-direction: column;

            .text {
                margin-top: auto;

            }
        }
    }
}

.tarifs {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: space-around;
}

h3 {
    margin: 0 auto 2rem;
    text-align: center;
    text-transform: uppercase;
    font-weight: 700;
}

table {
    width: 100%;
    border-radius: 1rem;
}

table,
th,
td {
    border: 1px solid #cad3d0;
    text-align: left;
    padding: 10px;
}

thead {
    td {
        font-weight: 700;
    }
}

tbody {
    td {
        background-color: #ffffff;
        color: #ad550f;
        font-size: 15px;
    }
}

.text {
    margin: 2rem 0;
    text-align: center;
    font-size: 12px;
    line-height: 1.5;
}

.btn {
    margin: 0 auto;
}
</style>