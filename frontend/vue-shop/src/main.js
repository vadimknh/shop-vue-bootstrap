// import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
// import {swiper, swiperSlide} from 'swiper/vue';
// import function to register Swiper custom elements
// import { register } from 'swiper/element/bundle';
// register Swiper custom elements
// register();
// import swiperCore, (/* { default global options } */) from "swiper";

// import "swiper/swiper.min.css";
// import "swiper/css/ (/*{ default global options }*/)

// swiperCore.use([/* default global options */])

const app = createApp(App)

app.use(router)

app.mount('#app')
