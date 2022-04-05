<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Crear Blog</h4>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="update">
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <div class="form-control">
                                        <label>Titulo</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            v-model="blog.titulo"
                                        />
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="form-control">
                                        <label>Contenido</label>
                                        <textarea
                                            type="text"
                                            id="floatingTextarea2"
                                            class="form-control"
                                            v-model="blog.contenido"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "updateBlogs",
    data() {
        return {
            blog: {
                titulo: "",
                contenido: "",
            },
        };
    },
    mounted() {
        this.showBlog();
    },
    methods: {
        async showBlog() {
            await this.axios
                .get(`/api/blog/${this.$route.params.id}`)
                .then((result) => {
                    const { titulo, contenido } = result.data;
                    this.blog.titulo = titulo,
                        this.blog.contenido = contenido;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
        async update() {
           await this.axios
                .put(`/api/blog/${this.$route.params.id}`, this.blog)
                .then((result) => {
                    this.$router.push({
                        name: "ShowBlogs",
                    });
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
};
</script>
