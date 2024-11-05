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
.wrapper {
  position: fixed;
  width: 100%;
}

nav {
  display: flex;
  row-gap: 1rem;
  width: fit-content;
  margin: .3rem auto 0;
  border-radius: 10px;
  overflow: hidden;
  background-color: rgba($color: blue, $alpha: .8);

  a {
    display: block;
    color: white;
    text-decoration: none;
    padding: 1rem;
    transition: .3s;

    &:hover {
      background-color: darkcyan;
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
