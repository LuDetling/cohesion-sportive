<template>
    <section>
        <h2>Découvrez mes services & tarifs</h2>
        <div class="flex-content">
            <div class="left-content">
                <div class="content">
                    <h3>Coaching à domicile</h3>
                    <a href="#reserver" class="btn btn-border">Réserver</a>
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
                        <button @click="(isExpandedLeftBottom = !isExpandedLeftBottom) && (isExpandedLeftTop = false)"
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
            <div class="right-content">
                <div class="content">
                    <h3>Coaching à domicile</h3>
                    <a href="#reserver" class="btn btn-border">Réserver</a>
                    <div class="arrow">↓</div>
                    <div class="accordion">
                        <button @click="(isExpandedRightTop = !isExpandedRightTop) && (isExpandedRightBottom = false)"
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
    padding-bottom: 0;
    h2 {
        color: #C17C45;
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

        .left-content,
        .right-content {
            width: calc(50% - 2rem);
            min-width: 500px;
            margin-right: auto;
            margin-left: auto;



            padding: 200px 50px;
            position: relative;
            margin-bottom: 3rem;
            background-attachment: fixed;
            background-repeat: no-repeat;
            position: relative;

            &::after {
                content: '';
                width: 100%;
                height: 100%;
                background-color: rgba($color: #000000, $alpha: .5);
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

                            .plus,
                            .moins {
                                width: 14px;
                                height: 1px;
                                background-color: white;
                                position: absolute;
                                left: -14px;
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
                            list-style-type: circle;

                            li {
                                margin-bottom: 1.5rem;
                                line-height: 1.4;
                                list-style-position: inside;
                                font-size: 15px;
                            }
                        }
                    }
                }

            }

        }

        .left-content {
            background-image: url('@/assets/images/left-content.jpg');
            color: white;


        }

        .right-content {
            background-image: url('@/assets/images/right-content.jpg');
            color: white;
        }
    }

}
</style>