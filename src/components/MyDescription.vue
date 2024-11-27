<template>
    <section>
        <div class="on-description">
            <img src="@/assets/images/moi.png" alt="Photo de moi">
            <div class="me">
                Passionnée par mon métier, j’accompagne les personnes qui souhaitent améliorer leur condition physique, gagner en confiance en elles et se sentir bien dans leur corps et leur esprit durablement. Ensemble, nous allons atteindre vos objectifs. Ensemble, nous trouverons des créneaux adaptés à votre rythme de vie. Prêt à transformer votre corps et votre esprit ?
            </div>
        </div>
    </section>
</template>
<script setup>

</script>
<style lang="scss">
.on-description {
    max-width: 1200px;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    gap: 3rem;
    .me {
        line-height: 1.5rem;
        width: 700px;
    }
}
</style>