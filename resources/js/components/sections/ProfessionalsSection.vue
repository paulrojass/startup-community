<template>
    <div class="row px-5">
        <carousel :items-to-show="items">
          <slide v-for="professional in professionals" :key="professional">
              <div class="card comming-card">
                <div class="d-flex justify-content-center">
                  <img :src="professional.avatar" class="rounded-circle avatar-img">
                </div>
                <div class="comming-text p-2">
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
          avatar: 'img/general/avatar-4.png',
          name: 'Evans Caimacol',
          job: 'CEO'
        },
        {
          avatar: 'img/general/avatar-3.png',
          name: 'Carol Caimacol',
          job: 'Cto'
        },
        {
          avatar: 'img/general/avatar-5.png',
          name: 'Evans Caimacol',
          job: 'Cfo'
        },
        {
          avatar: 'img/general/avatar-6.png',
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