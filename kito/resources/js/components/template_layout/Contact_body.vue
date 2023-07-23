<template>
   <div class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="request" class="main_form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input
                                            class="contactus"
                                            placeholder="Name"
                                            type="type"
                                            name="Name"
                                            v-model="name"
                                        />
                                    </div>
                                    <div class="col-md-12">
                                        <input
                                            class="contactus"
                                            placeholder="Email"
                                            type="type"
                                            name="Email"
                                            v-model="email"
                                        />
                                    </div>
                                    <div class="col-md-12">
                                        <input
                                            class="contactus"
                                            placeholder="Phone Number"
                                            type="type"
                                            name="Phone Number"
                                            v-model="phone"
                                        />
                                    </div>
                                    <div class="col-md-12">
                                        <textarea
                                            class="textarea"
                                            placeholder="Message"
                                            type="type"
                                            Message="Name"
                                            v-model="message"
                                        >
Message</textarea
                                        >
                                    </div>
                                    <div class="col-md-12">
                                        <button
                                            class="send_btn"
                                            @click="SendData"
                                        >
                                            Send
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="map_main">
                                <div class="map-responsive">
                                    <iframe
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                        width="600"
                                        height="400"
                                        frameborder="0"
                                        style="border: 0; width: 100%"
                                        allowfullscreen=""
                                    ></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</template>
<script>
export default{
    name:"Contact_Body",
    data() {
        return {
            name: "",
            email: "",
            phone: "",
            message: "",
        };
    },
    methods: {
        SendData() {
            let formData = new FormData();
            formData.append("name", this.name);
            formData.append("email", this.email);
            formData.append("phone", this.phone);
            formData.append("message", this.message);
            axios
                .post("api/contact", formData, {
                    headers: {
                        "Content-Type": "miltipart/from-data",
                    },
                })
                .then((response) => {
                    // console.log(response.data.data);
                    this.$router.push("/");
                });
        },
    },
}
</script>