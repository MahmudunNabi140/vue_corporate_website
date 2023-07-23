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

        <body class="main-layout">
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
                            <!-- menu -->
                            <Tem_menu></Tem_menu>
                            <!-- end menu -->
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">
                <div
                    id="myCarousel"
                    class="carousel slide banner"
                    data-ride="carousel"
                >
                    <ol class="carousel-indicators">
                        <li
                            data-target="#myCarousel"
                            data-slide-to="0"
                            class="active"
                        ></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img
                                class="first-slide"
                                src="template_assets/images/banner1.jpg"
                                alt="First slide"
                            />
                            <div class="container"></div>
                        </div>
                        <div class="carousel-item">
                            <img
                                class="second-slide"
                                src="template_assets/images/banner2.jpg"
                                alt="Second slide"
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                                class="third-slide"
                                src="template_assets/images/banner3.jpg"
                                alt="Third slide"
                            />
                        </div>
                    </div>
                    <a
                        class="carousel-control-prev"
                        href="#myCarousel"
                        role="button"
                        data-slide="prev"
                    >
                        <span
                            class="carousel-control-prev-icon"
                            aria-hidden="true"
                        ></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a
                        class="carousel-control-next"
                        href="#myCarousel"
                        role="button"
                        data-slide="next"
                    >
                        <span
                            class="carousel-control-next-icon"
                            aria-hidden="true"
                        ></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="booking_ocline">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="book_room">
                                    <h1>Book a Room Online</h1>
                                    <form class="book_now">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span>Arrival</span>
                                                <img
                                                    class="date_cua"
                                                    src="template_assets/images/date.png"
                                                />
                                                <input
                                                    class="online_book"
                                                    placeholder="dd/mm/yyyy"
                                                    type="date"
                                                    name="dd/mm/yyyy"
                                                />
                                            </div>
                                            <div class="col-md-12">
                                                <span>Departure</span>
                                                <img
                                                    class="date_cua"
                                                    src="template_assets/images/date.png"
                                                />
                                                <input
                                                    class="online_book"
                                                    placeholder="dd/mm/yyyy"
                                                    type="date"
                                                    name="dd/mm/yyyy"
                                                />
                                            </div>
                                            <div class="col-md-12">
                                                <button class="book_btn">
                                                    Book Now
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end banner -->
            <!-- about -->
            <About_Body></About_Body>
            <!-- end about -->
            <!-- our_room -->
            <Room_Body></Room_Body>
            <!-- end our_room -->
            <!-- gallery -->
            <Gallery_Body></Gallery_Body>
            <!-- end gallery -->
            <!-- blog -->
            <Blog_Body></Blog_Body>
            <!-- end blog -->
            <!--  contact -->
           <Contact_body></Contact_body>
            <!-- end contact -->
            <!--  footer -->
            <Tem_footer></Tem_footer>
            <!-- end footer -->
        </body>
    </html>
</template>
<script>
import Tem_menu from "./template_layout/Tem_menu.vue";
import About_Body from "./template_layout/About_Body.vue";
import Room_Body from "./template_layout/Room_Body.vue";
import Gallery_Body from "./template_layout/Gallery_Body.vue";
import Blog_Body from "./template_layout/Blog_Body.vue";
import Contact_body from "./template_layout/Contact_body.vue";
import Tem_footer from "./template_layout/Tem_footer.vue";
export default {
    components: { Tem_menu,About_Body, Room_Body, Gallery_Body,Blog_Body,Contact_body, Tem_footer },
    name: "Home",
};
</script>
