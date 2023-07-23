<template>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>AdminLTE</title>
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- header -->
            <Header></Header>
            <!-- /.endheader -->

            <!-- Main Sidebar Container -->
            <Menu></Menu>

            <!-- end menu -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Stater Page</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        About
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-primary card-outline">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2 class="card-title btn-success">
                                                Create General
                                            </h2>
                                        </div>
                                        <div class="col-md-6">
                                            <h2
                                                class="card-title"
                                                style="padding-left: 70%"
                                            >
                                                <router-link
                                                    to="/general_list"
                                                    class="btn btn-primary"
                                                    >General List</router-link
                                                >
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div action="">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label
                                                                for="exampleInputEmail1"
                                                                >Address</label
                                                            >
                                                            <input
                                                                type="text"
                                                                name="address"
                                                                class="form-control"
                                                                id="exampleInputEmail1"
                                                                placeholder="Address"
                                                                v-model="
                                                                    address
                                                                "
                                                            />
                                                        </div>
                                                        <div class="form-group">
                                                            <label
                                                                for="exampleInputEmail1"
                                                                >Phone</label
                                                            >
                                                            <input
                                                                type="text"
                                                                name="phone"
                                                                class="form-control"
                                                                id="exampleInputEmail1"
                                                                placeholder="Phone"
                                                                v-model="phone"
                                                            />
                                                        </div>
                                                        <div class="form-group">
                                                            <label
                                                                for="exampleInputEmail1"
                                                                >Email</label
                                                            >
                                                            <input
                                                                type="text"
                                                                name="email"
                                                                class="form-control"
                                                                id="exampleInputEmail1"
                                                                placeholder="Email"
                                                                v-model="email"
                                                            />
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label
                                                                for="exampleInputEmail1"
                                                                >Map</label
                                                            >
                                                            <input
                                                                type="text"
                                                                name="map"
                                                                class="form-control"
                                                                id="exampleInputEmail1"
                                                                placeholder="map"
                                                                v-model="map"
                                                            />
                                                        </div>
                                                        <div class="form-group">
                                                            <label
                                                                for="exampleInputFile"
                                                                >Logo</label
                                                            >
                                                            <div
                                                                class="input-group"
                                                            >
                                                                <div
                                                                    class="custom-file"
                                                                >
                                                                    <input
                                                                        type="file"
                                                                        name="photo"
                                                                        class="custom-file-input"
                                                                        id="exampleInputFile"
                                                                        @change="
                                                                            fileHandle(
                                                                                $event
                                                                            )
                                                                        "
                                                                    />
                                                                    <label
                                                                        class="custom-file-label"
                                                                        for="exampleInputFile"
                                                                        >Choose
                                                                        file</label
                                                                    >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label
                                                                for="exampleInputEmail1"
                                                                >.</label
                                                            >
                                                            <input
                                                                type="submit"
                                                                class="btn btn-primary btn-block"
                                                                value="Save"
                                                                @click="
                                                                    submitData
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                    </div>
                </div>
            </div>

            <Footer></Footer>
        </div>
    </body>
</template>
<script>
import axios from "axios";
import Header from "../dashboard_layout/Header.vue";
import Menu from "../dashboard_layout/Menu.vue";
import Footer from "../dashboard_layout/Footer.vue";
export default {
    components: { Menu, Header, Footer },
    name: "About_list",
    data() {
        return {
            file: "",
            address: "",
            phone: "",
            email: "",
            map: "",
        };
    },
    methods: {
        fileHandle(e) {
            this.file = e.target.files[0];
        },
        submitData() {
            let formData = new FormData();
            formData.append("address", this.address);
            formData.append("phone", this.phone);
            formData.append("email", this.email);
            formData.append("map", this.map);
            formData.append("file", this.file);

            axios
                .post("api/general_dashboard", formData, {
                    headers: {
                        "content-Type": "multipart/form-data",
                    },
                })
                .then((response) => {
                    this.$router.push("/general_list");
                });
        },
    },
};
</script>
