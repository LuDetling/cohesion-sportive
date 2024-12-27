<template>
    <footer>
        <a href="#" aria-label="Logo Cohésion Sportive" class="logo-footer">
            <img src="@/assets/images/logo-sans-texte.webp" alt="Logo Cohésion Sportive sans texte" width="70">
        </a>
        <div>
            <div>Le mans, France</div>
            <div>72000</div>
        </div>
        <div>
            <h2>Contactez-moi</h2>
            <a href="tel:+33674615790">06 74 61 57 90</a>
            <a href="mailto:cohesion.sportive@outlook.com">cohesion.sportive@outlook.com</a>
        </div>
        <div>
            <h2>Me retrouver</h2>
            <div class="social">
                <!-- <a href="#"><font-awesome-icon :icon="['fab', 'facebook-f']" /></a> -->
                <a href="https://www.linkedin.com/in/chloe-douguedroit-649896331/" target="_blank"
                    aria-label="Icone linkedin">
                    <font-awesome-icon :icon="['fab', 'linkedin-in']" />
                </a>
                <a href="https://www.instagram.com/cohesion.sportive/" target="_blank" aria-label="Icone instagram">
                    <font-awesome-icon :icon="['fab', 'instagram']" />
                </a>
                <!-- <a href="#"><font-awesome-icon :icon="['fab', 'whatsapp']" /></a> -->
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
    gap: 2rem;

    .logo-footer {
        @media screen and (max-width: 550px) {
            margin: auto;
        }
    }

    >div {
        padding: .5rem 0;
        line-height: 1.5;

        @media screen and (max-width: 900px) {
            width: calc(50% - 1rem);
        }

        @media screen and (max-width: 550px) {
            width: 100%;
            text-align: center;

            a {
                margin: auto;
            }
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
            color: #ad550f;
            text-decoration: none;
            transition: .3s;
            width: fit-content;
            word-break: break-word;

            &:hover {
                color: black;
            }
        }

        .social {
            display: flex;
            gap: 1rem;

            @media screen and (max-width: 550px) {
                justify-content: center;
            }

            a {
                font-size: 1.1rem;
                margin: 0;
            }
        }
    }
}

img {
    width: 70px;
}
</style>