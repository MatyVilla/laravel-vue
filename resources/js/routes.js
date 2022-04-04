const Home = () => import("./components/Home.vue");
const Contact = () => import("./components/Contact.vue");

const Show = () => import("./components/blog/Show.vue");
const Create = () => import("./components/blog/Create.vue");
const Update = () => import("./components/blog/Update.vue");

export const routes = [
    {
        name: "home",
        path: "/",
        component: Home,
    },
    {
        name: "contact",
        path: "/contact",
        component: Contact,
    },
    {
        name: "ShowBlogs",
        path: "/blogs",
        component: Show,
    },
    {
        name: "CreateBlogs",
        path: "/create",
        component: Create,
    },
    {
        name: "UpdateBlogs",
        path: "/update/:id",
        component: Update,
    },
];
