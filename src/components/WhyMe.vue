<template>
    <section>
        <div class="content-why-me">
            <h2>Pourquoi moi ?</h2>
            <div class="why-me-cards">
                <div class="card-me">
                    <div class="content-cards">
                        <h3>Ma passion, mon métier</h3>
                        <p>Je suis passionnée par le sport et j’ai transformé cette passion en métier pour vous aider
                            à
                            adopter un mode de vie plus sain.</p>
                        <p>Que ce soit pour sculpter votre silhouette, renforcer votre corps, ou améliorer votre
                            mobilité, je propose des programmes personnalisés adaptés à vos
                            besoins et objectifs, tout en vous guidant avec bienveillance.</p>
                    </div>
                </div>
                <div class="card-me">
                    <div class="content-cards">
                        <h3>Devenir autonome</h3>
                        <p>Mon rôle de coach est de vous enseigner les exercices de manière sécurisée pour vous rendre
                            autonome et confiant dans votre pratique. </p>
                        <p>Je suis disponible au quotidien pour ajuster votre
                            programme, corriger vos mouvements, et répondre à toutes vos questions.</p>
                        <p>
                            N’hésitez pas à me contacter pour démarrer votre transformation !
                        </p>
                        <a href="#contact" class="btn">Me contacter</a>
                    </div>
                </div>
                <div class="card-me">
                    <div class="content-cards">
                        <h3>Dépasser vos limites</h3>
                        <p>Commencer ou maintenir une routine sportive peut être intimidant, surtout seul.</p>
                        <p>Avec un suivi sur mesure, je vous aide à progresser en toute sécurité, avec des séances
                            adaptées, complètes, et conçues pour éviter les blessures.</p>
                        <p>Mon objectif est de rendre votre parcours sportif accessible et efficace.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>

</script>
<style lang="scss">
.content-why-me {
    max-width: 1200px;
    margin: auto;

    h2 {
        margin-bottom: 4rem;
    }

    .why-me-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: flex-start;
        gap: 2rem;


        .card-me {
            width: 30%;
            min-width: 300px;
            background-color: #05152e;
            border-radius: 16px;
            
            .content-cards {
                padding: 1rem;
                color: white;
                border: 8px solid #2462C5;
                border-radius: 16px;
                min-height: 376px;

                h3 {
                    margin-bottom: 1.5rem;
                    text-align: center;
                    font-weight: bold;
                }

                p {
                    margin-bottom: .5rem;
                    line-height: 1.5rem;
                }

                a {
                    margin: auto;
                    margin-top: 2rem;
                }
            }

            &:nth-child(2) {
                margin-top: 12rem;
            }

            &:nth-child(3) {
                margin-top: 5rem;
            }
        }
    }
}
</style>