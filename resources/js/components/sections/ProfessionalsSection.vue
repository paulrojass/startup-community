<template>
    <div class="row px-5">
        <carousel :items-to-show="items">
          <slide v-for="professional in professionals" :key="professional">
              <div class="card comming-card">
                <div class="d-flex justify-content-center">
                  <img :src="professional.avatar" class="rounded-circle" alt="">
                </div>
                <div class="comming-text p-4">
                  <h4 class="text-center">{{ professional.name }}</h4>
                  <h4 class="text-center">{{ professional.job }}</h4>
                </div>
              </div>
          </slide>
          <template #addons>
            <navigation />
          </template>
        </carousel>
    </div>
</template>

<script>
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
export default {
  name: 'App',
  components: {
    Carousel,
    Slide,
    Pagination,
    Navigation,
  },
  data() {
    return {
      items: 0,
      window: {
        width: 0,
      },
      professionals: [
        {
          avatar: 'img/avatars/avatar.jpg',
          name: 'Evans Caimacol',
          job: 'CEO'
        },
        {
          avatar: 'img/avatars/avatar.jpg',
          name: 'Carol Caimacol',
          job: 'Cto'
        },
        {
          avatar: 'img/avatars/avatar.jpg',
          name: 'Evans Caimacol',
          job: 'Cfo'
        },
        {
          avatar: 'img/avatars/avatar.jpg',
          name: 'Roxi Caimacol',
          job: 'Cfo'
        },
      ]
    }
  },
  created() {
      window.addEventListener('resize', this.handleResize);
      this.handleResize();
  },
  destroyed() {
      window.removeEventListener('resize', this.handleResize);
  },
  methods: {
    handleResize() {
        this.window.width = window.innerWidth;
        if(this.window.width < 768) {
          this.items = 1
        } else if(this.window.width < 992) {
          this.items = 2
        } else {
          this.items = 4
        }
    }
  }
}
</script>

<style lang="scss" scoped>

</style>