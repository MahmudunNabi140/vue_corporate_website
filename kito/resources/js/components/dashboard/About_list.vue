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
                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="card-title btn-success">
                                        About List
                                    </h2>
                                </div>
                                <div class="col-md-6">
                                    <h2
                                        class="card-title"
                                        style="padding-left: 70%"
                                    >
                                        <router-link
                                            to="/d_about"
                                            class="btn btn-primary"
                                            >Create About+</router-link
                                        >
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                                <tr v-for="(d, i) in about" :key="i">
                                    <td>{{ ++i }}</td>
                                    <td>{{ d.title }}</td>
                                    <td>
                                        <img
                                            :src="`uploads/${d.photo}`"
                                            alt=""
                                            height="100"
                                            width="100"
                                        />
                                    </td>
                                    <td>
                                        <!-- <a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a> -->
                                        <router-link
                                            :to="`/edit_about/${d.id}`"
                                            class="btn btn-primary"
                                            ><i class="fa fa-edit"></i
                                        ></router-link>
                                        <button
                                            type="submit"
                                            class="btn btn-danger"
                                            @click="delete_about(d.id)"
                                        >
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
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
            about: [],
        };
    },
    methods: {
        getabout() {
            axios.get("api/about_list").then((response) => {
                this.about = response.data.data;
                // console.log(response.data.data);
            });
        },
        delete_about(id) {
            axios.delete(`/api/about_list/${id}`).then((response) => {
                this.about = response.data.data;
                // console.log(response.data.data);
                this.getabout();
            });
        },
    },
    mounted() {
        this.getabout();
    },
};
</script>
