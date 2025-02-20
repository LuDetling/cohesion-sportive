<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Footer from './components/Footer.vue';
import { ref } from 'vue';

const toggleMenu = () => {
  const burger = document.querySelector('.burger-menu');
  const navMobile = document.querySelector('.nav-mobile');
  burger.classList.toggle('active');
  navMobile.classList.toggle('active');
}

const sections = ref([{
  id: 'who',
  title: 'A propos'
}, {
  id: 'whyme',
  title: 'Pourquoi moi ?'
}, {
  id: 'services',
  title: 'Services & tarifs'
}, {
  id: 'contact',
  title: 'Contact'
}])
const activeSection = ref('')

const checkActiveSection = () => {
  const scrollPosition = window.scrollY;
  const windowHeight = window.innerHeight;
  const sections = document.querySelectorAll('section');
  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if (scrollPosition > sectionTop - windowHeight / 2 && scrollPosition < sectionTop + sectionHeight - windowHeight / 2) {
      activeSection.value = section.id;
    }
  });
}

window.addEventListener('scroll', checkActiveSection);

// a changer en verifiant le token
const isConnected = ref(true);

</script>

<template>
  <header>
    <div class="wrapper">
      <nav class="nav">
        <div class="nav-content">
          <a href="#who" :class="{ 'active': activeSection === 'who' }">
            <p>A propos</p>
            <p>A propos</p>
          </a>
          <a href="#whyme" :class="{ 'active': activeSection === 'whyme' }">
            <p>Pourquoi moi ?</p>
            <p>Pourquoi moi ?</p>
          </a>
        </div>
        <a href="#" class="logo-menu"><img src="@/assets/images/cohésion+sportive+(1)-1920w.webp" alt="Logo menu"
            width="100" height="100"></a>
        <div class="nav-content">
          <a href="#services" :class="{ 'active': activeSection === 'services' }">
            <p>Services & tarifs</p>
            <p>Services & tarifs</p>
          </a>
          <!-- <a href="#contact" :class="{ 'active': activeSection === 'contact' }">
            <p>Contact</p>
            <p>Contact</p>
          </a> -->
          <RouterLink to="/#contact" :class="{ 'active': activeSection === 'contact' }">
            <p>Contact</p>
            <p>Contact</p>
          </RouterLink>
          <RouterLink to="/calendar" v-if="isConnected">
            <p>RDV</p>
            <p>RDV</p>
          </RouterLink>
        </div>
        <RouterLink to="/register" v-if="isConnected">
          <p>Inscription</p>
          <p>Inscription</p>
        </RouterLink>
        <RouterLink to="/login" v-if="isConnected">
          <p>Connexion</p>
          <p>Connexion</p>
        </RouterLink>

      </nav>
      <div class="nav-burger">
        <a href="#" class="logo-menu"><img src="@/assets/images/cohésion+sportive+(1)-1920w.webp" alt="Logo menu"
            width="100" height="100"></a>
        <button class="burger-menu" @click="toggleMenu" aria-label="burger menu">
          <div class="burger burger-top"></div>
          <div class="burger burger-bot"></div>
        </button>
      </div>
      <nav class="nav-mobile">
        <div class="mobile">
          <a href="#who" :class="{ 'active': activeSection === 'who' }">A propos</a>
          <a href="#whyme" :class="{ 'active': activeSection === 'whyme' }">Pourquoi moi ?</a>
          <a href="#services" :class="{ 'active': activeSection === 'services' }">Services & tarifs</a>
          <a href="#contact" :class="{ 'active': activeSection === 'contact' }">Contact</a>
          <RouterLink to="/calendar" v-if="isConnected">
            <p>RDV</p>
          </RouterLink>
        </div>
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
  background-color: rgba($color: #f8f6f6, $alpha: .9);
  backdrop-filter: blur(5px);

  @media all and (max-width: 900px) {
    background-color: #f8f6f6;
  }
}

.nav-mobile {
  position: fixed;
  right: 0;
  top: 119px;
  background-color: #f8f6f6;
  z-index: 12000;
  padding: 2rem;
  display: none;
  transform: translateX(101%);
  transition: .5s;
  border-bottom-left-radius: 20px;

  &::before {
    content: '';
    position: absolute;
    top: 0;
    left: -20px;
    width: 20px;
    height: 50px;
    background-color: transparent;
    border-top-right-radius: 25px;
    box-shadow: 1px -20px 0 0 #f8f6f6;
  }

  &.active {
    transform: translateX(0);
  }

  @media screen and (max-width: 900px) {
    display: block;
  }

  .mobile {
    display: flex;
    flex-direction: column;
    gap: 1rem;

    a {
      color: black;
      text-decoration: none;

      &.active {
        color: #ad550f;
      }

      &:hover {
        color: #ad550f;
      }
    }
  }
}

.nav-burger {
  display: none;
  padding: .5rem 2rem;

  @media screen and (max-width: 900px) {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .burger-menu {
    background-color: transparent;
    border: none;
    cursor: pointer;
    padding: 1rem;
    position: relative;
    z-index: 1000;
    align-items: center;
    justify-content: center;

    .burger {
      width: 30px;
      height: 3px;
      background-color: #ad550f;
      transition: .3s;
      border-radius: 8px;
      left: 0;
    }

    .burger-top {
      transform: translateY(5px);
      position: absolute;
    }

    .burger-bot {
      transform: translateY(-5px);
      position: absolute;
    }

    &.active {
      .burger-top {
        transform: rotate(135deg) translateY(0);
      }

      .burger-bot {
        transform: rotate(-135deg) translateY(0);
      }
    }
  }
}

img {
  width: 100px;
}

.nav {
  display: flex;
  justify-content: center;
  width: 100%;
  align-items: center;
  overflow: hidden;
  max-width: 1500px;
  margin: auto;
  flex-wrap: wrap;

  @media screen and (max-width: 900px) {
    display: none;
  }

  a {
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    padding: .5rem 1rem;
    transition: .3s;
    color: black;
    overflow: hidden;
    position: relative;

    &.active {
      color: #ad550f;
    }

    &:not(.logo-menu) {

      p {
        transition: transform .5s, opacity .3s, color .3s;
      }

      p:first-child {
        position: absolute;
        transform: translateY(-30px);
        opacity: 0;
      }

      p:last-child {
        transform: translateY(0);
        opacity: 1;
      }

      &:hover {
        p:first-child {
          transform: translateY(0);
          opacity: 1;
          color: #ad550f;
        }

        p:last-child {
          transform: translateY(30px);
          opacity: 0;
          color: #ad550f;
        }
      }
    }

  }


  .nav-content {
    display: flex;
    align-items: center;
    width: 270px;
    justify-content: space-between;

    @media (max-width: 900px) {
      width: auto;
      display: none;
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
