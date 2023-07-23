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
                                        Contact
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
                            <h3 class="card-title">Contact List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>SL</th>
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                                <tr v-for="(d, i) in contact" :key="i">
                                    <td>{{ ++i }}</td>
                                    <td>{{ d.name }}</td>
                                    <td>{{ d.email }}</td>
                                    <td>{{ d.phone }}</td>
                                    <td>{{ d.message }}</td>
                                    <td>
                                        <!-- <a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a> -->
                                        <!-- <router-link
                                            :to="`/edit_contact/${d.id}`"
                                            class="btn btn-primary"
                                            ><i class="fa fa-edit"></i
                                        ></router-link> -->
                                        <button
                                            type="submit"
                                            class="btn btn-danger"
                                            @click="delete_contact(d.id)"
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
    name: "Contact_list",
    data() {
        return {
            contact: [],
        };
    },
    methods: {
        getcontact() {
            axios.get("api/contact").then((response) => {
                this.contact = response.data.data;
                // console.log(response.data.data);
            });
        },
        delete_contact(id) {
            axios.delete(`/api/contact/${id}`).then((response) => {
                this.contact = response.data.data;
                // console.log(response.data.data);
                this.getcontact();
            });
        },
    },
    mounted() {
        this.getcontact();
    },
};
</script>
