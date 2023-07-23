<template>
            <div class="our_room">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>Our Room</h2>
                                <p class="margin_0">
                                    Lorem Ipsum available, but the majority have
                                    suffered
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6" v-for="(d ,i ) in room" :key="i">
                            <div id="serv_hover" class="room">
                                <div class="room_img">
                                    <figure>
                                        <img
                                            :src="`/uploads/${d.photo}`"
                                            alt="#"
                                        />
                                    </figure>
                                </div>
                                <div class="bed_room">
                                    <h3>{{ d.title }}</h3>
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
    name:"Room_Body",
    data(){
        return{
            room: [],
        };
    },
    methods:{
        getroom() {
            axios.get("/api/room").then((response) => {
                this.room = response.data.data;
                // console.log(response.data.data);
            });
        },
    },
    mounted(){
        this.getroom();
    }
}
</script>