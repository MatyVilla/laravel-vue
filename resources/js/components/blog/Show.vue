<template>
    <div class="row">
        <div class="col-12 mb-4">
            <router-link :to="{ name: 'CreateBlogs' }" class="btn btn-success"
                >Nuevo</router-link
            >
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Contenido</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <tr v-for="blog in blogs" :key="blog.id">
                            <td>{{ blog.id }}</td>
                            <td>{{ blog.titulo }}</td>
                            <td>{{ blog.contenido }}</td>
                            <td>
                                <router-link
                                    :to='{name:"UpdateBlogs",params:{id:blog.id}}'
                                    class="btn btn-info"
                                ><i class="fa-solid fa-pen-to-square"></i></router-link>
                                <a style="cursor:pointer;"
                                    type="button"
                                    @click="deleteBlog(blog.id)"
                                    class="btn btn-danger"
                                ><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "blogs",
    data() {
        return {
            blogs: [],
        };
    },
    mounted() {
        this.showBlog();
            const nav = document.querySelector("nav");
            if(nav.classList.contains("active")){
                nav.classList.remove("active");
            }
    },
    methods: {
        async showBlog() {
            await this.axios
                .get("/api/blog")
                .then((response) => {
                    this.blogs = response.data;
                })
                .catch((err) => {
                    this.blog = [];
                });
        },
        deleteBlog(id) {
            if (confirm("desea eliminar el registro?")) {
                this.axios
                    .delete(`/api/blog/${id}`)
                    .then((response) => {
                        this.showBlog();
                    })
                    .catch((err) => {
                        this.blog = [];
                    });
            }
        },
    },
};
</script>
