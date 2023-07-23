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
                                    <li class="breadcrumb-item active">Blog</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="card-title btn-success">
                                    Blog List
                                </h2>
                            </div>
                            <div class="col-md-6">
                                <h2
                                    class="card-title"
                                    style="padding-left: 70%"
                                >
                                    <router-link
                                        to="/d_blog"
                                        class="btn btn-primary"
                                        >Create Blog+</router-link
                                    >
                                </h2>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Details</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                                <tr v-for="(d, i) in blog" :key="i">
                                    <td>{{ ++i }}</td>
                                    <td>{{ d.title }}</td>
                                    <td>{{ d.details }}</td>
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
                                            :to="`/edit_blog/${d.id}`"
                                            class="btn btn-primary"
                                            ><i class="fa fa-edit"></i
                                        ></router-link>
                                        <button
                                            type="submit"
                                            class="btn btn-danger"
                                            @click="delete_blog(d.id)"
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
    components: {
        Menu,
        Header,
        Footer,
    },
    name: "Blog_list",
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
        delete_blog(id) {
            axios.delete(`/api/blog/${id}`).then((response) => {
                this.blog = response.data.data;
                // console.log(response.data.data);
                this.getblog();
            });
        },
    },
    mounted() {
        this.getblog();
    },
};
</script>
