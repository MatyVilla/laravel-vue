<template>
    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <h1>Componente <span class="bg bg-primary">Contacto</span></h1>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        const nav = document.querySelector("nav");
        if (nav.classList.contains("active")) {
            nav.classList.remove("active");
        }
    },
};
</script>
