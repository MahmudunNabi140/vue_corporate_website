<template>
 <div class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>Blog</h2>
                                <p class="margin_0">
                                    Lorem Ipsum available, but the majority have
                                    suffered
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" v-for="(d ,i ) in blog" :key="i">
                            <div class="blog_box">
                                <div class="blog_img">
                                    <figure>
                                        <img
                                            :src="`/uploads/${d.photo}`"
                                            alt="#"
                                        />
                                    </figure>
                                </div>
                                <div class="blog_room">
                                    <h3>Bed Room</h3>
                                    <span>{{ d.title }}</span>
                                    <p>
                                        {{ d.details }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</template>
<script>
export default{
    name:"Blog_Body",
    data() {
        return {
            blog: [],
        };
    },
    methods: {
        getblog() {
            axios.get("/api/blog").then((response) => {
                this.blog = response.data.data;
                // console.log(response.data.data);
            });
        },
    },
    mounted() {
        this.getblog();
    },
}
</script>