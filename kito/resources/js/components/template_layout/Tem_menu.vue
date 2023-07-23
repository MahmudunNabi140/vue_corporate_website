<template>
    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
        <nav class="navigation navbar navbar-expand-md navbar-dark">
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarsExample04"
                aria-controls="navbarsExample04"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <router-link to="/" class="nav-link">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/about" class="nav-link"
                            >About</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <router-link to="/our_room" class="nav-link"
                            >Our room</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <router-link to="/gallery" class="nav-link"
                            >Gallery</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <router-link to="/blog" class="nav-link"
                            >Blog</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <router-link to="/contact" class="nav-link"
                            >Contact Us</router-link
                        >
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>
<script>
export default {
    name: "Tem_menu",
};
</script>
