<template>
    <footer>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h3>Contact US</h3>
                                <ul class="conta">
                                    <li>
                                        <i
                                            class="fa fa-map-marker"
                                            aria-hidden="true"
                                        ></i>
                                        Dhaka
                                    </li>
                                    <li>
                                        <i
                                            class="fa fa-mobile"
                                            aria-hidden="true"
                                        ></i>
                                        +01 1234569540
                                    </li>
                                    <li>
                                        <i
                                            class="fa fa-envelope"
                                            aria-hidden="true"
                                        ></i
                                        ><a href="#"> demo@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h3>Menu Link</h3>
                                <ul class="link_menu">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">
                                        <a href="about.html"> about</a>
                                    </li>
                                    <li><a href="room.html">Our Room</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li>
                                        <a href="contact.html">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h3>News letter</h3>
                                <form class="bottom_form">
                                    <input
                                        class="enter"
                                        placeholder="Enter your email"
                                        type="text"
                                        name="Enter your email"
                                    />
                                    <button class="sub_btn">subscribe</button>
                                </form>
                                <ul class="social_icon">
                                    <li>
                                        <a href="#"
                                            ><i
                                                class="fa fa-facebook"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i
                                                class="fa fa-twitter"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i
                                                class="fa fa-linkedin"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i
                                                class="fa fa-youtube-play"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <p>
                                        © 2019 All Rights Reserved. Design by
                                        <a href="https://html.design/">
                                            Free Html Templates</a
                                        >
                                        <br /><br />
                                        Distributed by
                                        <a
                                            href="https://themewagon.com/"
                                            target="_blank"
                                            >ThemeWagon</a
                                        >
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
</template>
<script>
export default{
    name:"Tem_footer",
    data() {
        return {
            general: [],
        };
    },
    methods: {
        getgeneral() {
            axios.get("api/general_dashboard").then((response) => {
                this.general = response.data.data;
                // console.log(response.data.data);
            });
        },
    },
    mounted() {
        this.getgeneral();
    },
}
</script>