<template>
    <section>
        <div class="left-tarifs">
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
        <div class="right-tarifs">
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
    </section>
</template>
<script setup>

</script>
<style lang="scss" scoped>
section {
    padding-top: 0;
    max-width: 1500px;
    width: 100%;
    margin: auto;
}

#tarifs {
    display: flex;
    justify-content: space-around;
    gap: 4rem;

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
}
</style>