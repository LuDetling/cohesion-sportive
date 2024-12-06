<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Footer from './components/Footer.vue';

</script>

<template>
  <header>
    <div class="wrapper">
      <nav>
        <a href="#who">Qui suis-je ?</a>
        <a href="#services">Mes services & tarifs</a>
        <a href="#"><img src="@/assets/images/cohésion+sportive+(1)-1920w.webp" alt="Logo menu"></a>
        <a href="#confiance">Pourquoi me faire confiance ?</a>
        <a href="#contact">Me contacter</a>
      </nav>
    </div>
  </header>

  <RouterView />
  <Footer />
</template>

<style scoped lang="scss">
.wrapper {
  position: fixed;
  width: 100%;
  z-index: 1000;
  background-color: rgba($color: #f8f6f6, $alpha: .8);
  backdrop-filter: blur(5px);
}

nav {
  display: flex;
  row-gap: 1rem;
  justify-content: center;
  width: 100%;
  align-items: center;
  overflow: hidden;
  max-width: 1500px;
  margin: auto;

  a {
    display: block;
    text-decoration: none;
    padding: 1rem;
    transition: .3s;
    color: black;

    img {
      width: 100px;
    }
  }
}

main {
  margin-top: 5rem;
}

footer {
  margin-top: auto;
}
</style>
