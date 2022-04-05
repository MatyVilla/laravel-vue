<template>
    <nav>
        <div class="nav-bar">
            <i class="bx bx-menu sidebarOpen"></i>
            <div class="container">
                <span class="logo1 logo"><a href="#">CupcakeToon</a></span>
            </div>
            <div class="menu">
                <div class="logo-toggle">
                    <div class="container">
                        <span class="logo2 logo"><a href="#">CupcakeToon</a></span>
                    </div>
                    <i class="bx bx-x sidebarClose"></i>
                </div>
                <ul class="nav-links">
                    <li>
                        <router-link
                            exact-active-class="active2"
                            @click="cambiar()"
                            to="/"
                            >Inicio</router-link
                        >
                    </li>
                    <li>
                        <router-link
                            exact-active-class="active2"
                            @click="cambiar()"
                            to="/contact"
                            >Contacto</router-link
                        >
                    </li>
                    <li>
                        <router-link
                            exact-active-class="active2"
                            @click="cambiar()"
                            to="/blogs"
                            >Datos</router-link
                        >
                    </li>
                    <li><a href="#">servicios</a></li>
                    <li><a href="#">contacto</a></li>
                </ul>
            </div>
            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class="bx bx-moon moon"></i>
                    <i class="bx bx-sun sun"></i>
                </div>

                <div class="searchBox">
                    <div class="searchToggle">
                        <i class="bx bx-x cancel"></i>
                        <i class="bx bx-search search"></i>
                    </div>
                    <div class="search-field">
                        <input type="text" placeholder="Buscar..." />
                        <i class="bx bx-search"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <router-view></router-view>
        </div>
    </nav>
</template>


