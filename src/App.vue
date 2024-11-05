<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <header>
    <div class="wrapper">
      <nav>
        <a href="#">Top</a>
        <a href="#description">Description</a>
        <a href="#tarifs">Tarifs</a>
        <a href="#contact">Contact</a>
      </nav>
    </div>
  </header>

  <RouterView />
  <footer>
    credit
  </footer>
</template>

<style scoped lang="scss">
nav {
  display: flex;
  gap: 1rem;
  background-color: rgba($color: blue, $alpha: .8);
  width: fit-content;
  padding: 1rem;
  margin: .3rem auto 0;
  border-radius: 10px;

  a {
    display: flex;
    color: white;
    text-decoration: none;
  }
}

footer {
  margin-top: auto;
}
</style>
