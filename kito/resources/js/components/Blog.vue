<template>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <!-- basic -->
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <!-- mobile metas -->
            <meta
                name="viewport"
                content="width=device-width, initial-scale=1"
            />
            <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
            <!-- site metas -->
            <title>keto</title>
            <meta name="keywords" content="" />
            <meta name="description" content="" />
            <meta name="author" content="" />
        </head>
        <!-- body -->

        <body class="main-layout inner_page">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section"
                            >
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo">
                                            <a href="index.html"
                                                ><img
                                                    src="template_assets/images/logo.png"
                                                    alt="#"
                                            /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <Tem_menu></Tem_menu>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header inner -->
            <!-- end header -->
            <div class="back_re">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog -->
           <Blog_Body></Blog_Body>
            <!-- end blog -->

            <!--  footer -->
            <Tem_footer></Tem_footer>
            <!-- end footer -->
        </body>
    </html>
</template>
<script>
import Tem_menu from "./template_layout/Tem_menu.vue";
import Blog_Body from "./template_layout/Blog_Body.vue";
import Tem_footer from "./template_layout/Tem_footer.vue";
export default {
    components: { Tem_menu, Blog_Body, Tem_footer },
    name: "Blog",
};
</script>
