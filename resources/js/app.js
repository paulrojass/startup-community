/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';
import '../css/style.css';
import '../css/custom.css';

// import '../assets/vendor/aos/aos.css';
// import '../assets/vendor/glightbox/css/glightbox.min.css';
// import '../assets/vendor/remixicon/remixicon.css';
// import '../assets/vendor/swiper/swiper-bundle.min.css';

// import '../assets/vendor/purecounter/purecounter_vanilla';
// import '../assets/vendor/aos/aos';
// import '../assets/vendor/bootstrap/js/bootstrap.bundle.min';
// import '../assets/vendor/glightbox/js/glightbox.min';
// import '../assets/vendor/isotope-layout/isotope.pkgd.min';
// import '../assets/vendor/swiper/swiper-bundle.min';
// import '../assets/vendor/php-email-form/validate';

//import aos from 'aos';
//import PureCounter from '@srexi/purecounterjs';
//import '../assets/js/main';

//aos.init();

import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});
import ExampleComponent from './components/ExampleComponent.vue';
import StartupsComponent from './components/StartupsComponent.vue';
import InformationComponent from './components/InformationComponent.vue';
import SingleComponent from './components/SingleComponent.vue';
import StartupCreateComponent from './components/forms/StartupCreateComponent.vue';
import { Bootstrap5Pagination } from 'laravel-vue-pagination';

app.component('example-component', ExampleComponent);
app.component('startups-component', StartupsComponent);
app.component('startup-create-component', StartupCreateComponent);
app.component('information-component', InformationComponent);
app.component('single-component', SingleComponent);
app.component('Pagination', Bootstrap5Pagination);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
