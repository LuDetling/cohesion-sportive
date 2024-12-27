<template>
    <section>
        <div class="on-who-i-am">
            <div class="left-content">
                <p>Depuis l’enfance, le sport fait partie intégrante de ma vie : danse, équitation, natation, basket…
                    C’est au lycée que j'ai découvert à travers la musculation, les bénéfices du dépassement de soi et
                    les bonnes habitudes à adopter menant au bien-être. A partir de là, je n’ai jamais pu m’en passer.
                </p>
                <p>Mon intérêt ne s’est pas limité à la pratique sportive. Je me suis également intéressée à de nombreux
                    domaines, comme l’anatomie et la physiologie, la nutrition, les différentes disciplines sportives
                    existantes, etc.

                    Pendant ces dix années de pratique, j’ai pu expérimenter beaucoup de méthodes d’entraînement. J’ai
                    ainsi acquis un corps musclé et équilibré. Evidemment, comme tout sportif, je me suis blessée. Mes
                    erreurs de parcours m’ont permis de revoir ma pratique, en perfectionnant mes exécutions de
                    mouvements et en limitant mes risques de blessure.</p>
                <p>Mon expérience m’a permis d’encadrer aussi bien des personnes s’entraînant en salle de sport ou à
                    domicile. Au fil des années, j’ai commencé à diversifier davantage ma façon de m’entraîner, en
                    travaillant mes mouvements dans une amplitude plus complète.</p>
            </div>
            <div class="right-content">
                <h2>Qui suis-je ?</h2>
                <img src="@/assets/images/moi.webp" alt="Photo de moi" width="300">
            </div>
        </div>
    </section>
</template>
<script setup>

</script>
<style lang="scss" scoped>
section {
    max-width: 1500px;
    margin: auto;

    .on-who-i-am {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        row-gap: 3rem;

        .left-content {
            padding: .5rem 2rem .5rem 0;
            border-right: 1px solid #cad3d0;
            width: 60%;

            @media screen and (max-width: 900px) {
                order: 1;
                width: 100%;
                border: none;
                padding: 0;
                min-width: 0;
            }

            p {
                text-align: right;
                line-height: 1.5;
                @media screen and (max-width: 900px) {
                    text-align: left;
                }
            }

            p:not(:last-child) {
                margin-bottom: 1.5rem;
            }
        }

        .right-content {
            width: 40%;

            @media screen and (max-width: 900px) {
                width: 100%;
                order: 0;
            }

            h2 {
                color: #ad550f;
                padding: .5rem 0 .5rem 2rem;
                text-transform: uppercase;
                font-size: 1.5rem;
                line-height: 2rem;
                @media screen and (max-width: 900px) {
                    padding: 0;
                    text-align: center;
                    margin-bottom: 2rem;
                }
            }

            img {
                border-radius: 50%;
                height: 300px;
                object-fit: cover;
                object-position: top;
                align-self: center;
                aspect-ratio: 1;
                display: block;
                margin-left: auto;

                @media screen and (max-width: 900px) {
                    margin: auto;
                }
            }
        }
    }
}
</style>