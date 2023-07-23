<template>
  <div class="about">
                <div class="container-fluid">
                    <div class="row" v-for="(d, i) in about" :key="i">
                        <div class="col-md-5">
                            <div class="titlepage">
                                <h2>About Us</h2>
                                <p class="margin_0">
                                    {{ d.title }}
                                </p>
                                <a class="read_more" href="Javascript:void(0)">
                                    Read More</a
                                >
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="about_img">
                                <figure>
                                    <img :src="`/uploads/${d.photo}`" alt="#" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</template>
<script>
export default{
    name:"About_Body",
    data() {
        return {
            about: [],
            // title: "",
            // file: "",
        };
    },
    methods: {
        getabout() {
            axios.get("api/about_list").then((response) => {
                this.about = response.data.data;
                // console.log(response.data.data);
            });
        },
    },
    mounted() {
        this.getabout();
    },
}
</script>
