<template>
    <div class="container"><h1>home</h1></div>
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
