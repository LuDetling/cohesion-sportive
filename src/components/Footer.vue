<template>
    <footer>
        <div><img src="@/assets/images/logo-sans-texte.webp" alt="Logo Cohésion Sportive sans texte"></div>
        <div>
            <div>Rue</div>
            <div>Le mans, France</div>
            <div>Code postal</div>
        </div>
        <div>
            <h2>Contactez-moi</h2>
            <a href="tel:+33668372876">06 68 37 28 76</a>
            <a href="mailto:lucas.detling@gmail.com">lucas.detling@gmail.com</a>
        </div>
        <div>
            <h2>Me retrouver</h2>
            <div class="social">
                <a href="#">F</a>
                <a href="#">L</a>
                <a href="#">I</a>
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
    max-width: 1500px;
    width: 100%;
    padding: 50px;
    margin: auto;

    >div {
        width: 20%;
        padding: .5rem 0;
        font-size: 15px;
        line-height: 1.5;

        &:not(:first-child) {
            padding-left: 1rem;
            border-left: 1px solid #cad3d0;
        }

        h2 {
            font-size: 15px;
            font-weight: bold;
            margin-bottom: .5rem;
        }

        a {
            display: block;
        }

        .social {
            display: flex;
            gap: 1rem;

            a {
                color: #C17C45;
                text-decoration: none;
                padding: .3rem;
            }
        }
    }
}

img {
    width: 70px;
}
</style>