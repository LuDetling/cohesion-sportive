<template>
    <footer>
        <div><img src="@/assets/images/logo-sans-texte.webp" alt="Logo Cohésion Sportive sans texte"></div>
        <div>
            <div>Le mans, France</div>
            <div>72000</div>
        </div>
        <div>
            <h2>Contactez-moi</h2>
            <a href="tel:+33674615790">06 74 61 57 90</a>
            <a href="mailto:douguedroit.chloe@outlook.fr">douguedroit.chloe@outlook.fr</a>
        </div>
        <div>
            <h2>Me retrouver</h2>
            <div class="social">
                <a href="#"><font-awesome-icon :icon="['fab', 'facebook-f']" /></a>
                <a href="https://www.linkedin.com/in/chloe-douguedroit-649896331/">
                    <font-awesome-icon :icon="['fab', 'linkedin-in']" />
                </a>
                <a href="https://www.instagram.com/cohesion.sportive/" target="_blank">
                    <font-awesome-icon :icon="['fab', 'instagram']" />
                </a>
                <a href="#"><font-awesome-icon :icon="['fab', 'whatsapp']" /></a>
            </div>
        </div>
    </footer>
</template>
<script setup>

</script>
<style lang="scss" scoped>
footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    max-width: 1500px;
    width: 100%;
    padding: 50px;
    margin: auto;

    >div {
        padding: .5rem 0;
        font-size: 15px;
        line-height: 1.5;

        @media screen and (max-width: 900px) {
            width: 50%;
            text-align: center;
        }

        &:not(:first-child) {
            padding-left: 1rem;
            border-left: 1px solid #cad3d0;

            @media screen and (max-width: 900px) {
                border: none;
                padding: 0;
            }
        }

        h2 {
            font-size: 15px;
            font-weight: bold;
            margin-bottom: .5rem;
        }

        a {
            display: block;
            color: #C17C45;
            text-decoration: none;
            transition: .3s;

            &:hover {
                color: black;
            }
        }

        .social {
            display: flex;
            gap: 1rem;

            a {
                padding: .3rem;
                font-size: 1.1rem;

            }
        }
    }
}

img {
    width: 70px;
}
</style>