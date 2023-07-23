<template>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            <Header></Header>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
           <Menu></Menu>

            <!-- Content Wrapper. Contains page content -->
            <Body></Body>
        </div>
    </body>
</template>
<script>
import axios from "axios";
import { mapActions } from "vuex";
import Header from "./Header.vue";
import Menu from "./Menu.vue";
import Body from "./Body.vue";
export default {
    components: { Menu, Header,Body },
    name: "Dashboard",
    data() {
        return {
            users: [],
        };
    },
    methods: {
        // ...mapActions({
        //     signout: "auth/logout",
        // }),
    },
    mounted() {
        // axios.get('/api/list')
        // .then(({data})=>{
        //     this.users=data
        // })
    },
};
</script>
