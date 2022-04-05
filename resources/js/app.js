import vue from "vue";
window.Vue = vue;

import App from "./components/App.vue";

//importamos Axios
import VueAxios from "vue-axios";
import axios from "axios";

//Importamos y configuramos el Vue-router
import VueRouter from "vue-router";
import { routes } from "./routes";

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const router = new VueRouter({
    mode: "history",
    routes: routes,
});

//finalmente, definimos nuestra app de Vue
const app = new Vue({
    el: "#app",
    router: router,
    render: (h) => h(App),
});

const body = document.querySelector("body"),
    nav = document.querySelector("nav"),
    modeToggle = document.querySelector(".dark-light"),
    searchTogle = document.querySelector(".searchToggle"),
    sidebarClose = document.querySelector(".sidebarClose"),
    sidebarOpen = document.querySelector(".sidebarOpen");

    let getMode = localStorage.getItem('mode')
        if(getMode && getMode === 'dark-mode'){
            body.classList.toggle("dark");
        }
/* js toggle modo noche */
modeToggle.addEventListener("click", () => {
    modeToggle.classList.toggle("active");
    body.classList.toggle("dark");

    if (!body.classList.contains("dark")) {
        localStorage.setItem("mode", "light-mode");
    } else {
        localStorage.setItem("mode", "dark-mode");
    }
});

/* js toggle search */
searchTogle.addEventListener("click", () => {
    searchTogle.classList.toggle("active");
});

sidebarOpen.addEventListener("click", () => {
    nav.classList.add("active");
});
sidebarClose.addEventListener("click", (e) => {
    let clickedElm = e.target;
    if (
        !clickedElm.classList.contains("sidebarOpen") &&
        !clickedElm.classList.contains("menu")
    ) {
        nav.classList.remove("active");
    }
});
