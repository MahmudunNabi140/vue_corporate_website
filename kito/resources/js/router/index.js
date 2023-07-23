import { createRouter,createWebHistory } from "vue-router";
import Dashboard from "../components/dashboard_layout/Dashboard.vue";
import Login from '../components/Login.vue';
import Home from '../components/Home.vue';
import About from '../components/About.vue';
import Our_room from '../components/Our_room.vue';
import Gallery from '../components/Gallery.vue';
import Blog from '../components/Blog.vue';
import Contact_us from '../components/Contact_us.vue';
import store from "../store";
//dashboard
import About_list from '../components/dashboard/About_list.vue';
import D_About from '../components/dashboard/D_About.vue';
import Edit_D_About from '../components/dashboard/Edit_D_About.vue';
import Blog_list from '../components/dashboard/Blog_list.vue';
import D_Blog from '../components/dashboard/D_Blog.vue';
import Edit_Blog from '../components/dashboard/Edit_Blog.vue';
import Room_list from '../components/dashboard/Room_list.vue';
import D_Room from '../components/dashboard/D_Room.vue';
import Edit_Room from '../components/dashboard/Edit_Room.vue';
import Contact_list from '../components/dashboard/Contact_list.vue';
import General_list from '../components/dashboard/General_list.vue';
import General from '../components/dashboard/General.vue';
import Edit_general from '../components/dashboard/Edit_general.vue';


const routes=[
    {
        name:'home',
        path:'/',
        component:Home,
        meta:{
            middleware:'guest'
        }
    },
    {
        name:'about',
        path:'/about',
        component:About,
        meta:{
            middleware:'guest'
        }
    },
    {
        name:'our_room',
        path:'/our_room',
        component:Our_room,
        meta:{
            middleware:'guest'
        }
    },
    {
        name:'gallery',
        path:'/gallery',
        component:Gallery,
        meta:{
            middleware:'guest'
        }
    },
    {
        name:'blog',
        path:'/blog',
        component:Blog,
        meta:{
            middleware:'guest'
        }
    },
    {
        name:'contact',
        path:'/contact',
        component:Contact_us,
        meta:{
            middleware:'guest'
        }
    },
    {
        name:'login',
        path:'/login',
        component:Login,
        meta:{
            middleware:'guest'
        }
    },
    {
        name:'dashboard',
        path:'/dashboard',
        component:Dashboard,
        meta:{
            middleware:'auth'
        }
    },
    //dashboard
    {
        name:'about_list',
        path:'/about_list',
        component:About_list,
        meta:{
            middleware:'auth'
        }
    },
    {
        name:'d_about',
        path:'/d_about',
        component:D_About,
        meta:{
            middleware:'auth'
        }
    },
    {
        name:'edit_d_about',
        path:'/edit_about/:id',
        component:Edit_D_About,
        meta:{
            middleware:'auth'
        }
    },
    {
        name:'blog_list',
        path:'/blog_list',
        component:Blog_list,
        meta:{
            middleware:'auth'
        }
    },
    {
        name:'d_blog',
        path:'/d_blog',
        component:D_Blog,
        meta:{
            middleware:'auth'
        }
    },
    {
        name:'edit_blog',
        path:'/edit_blog/:id',
        component:Edit_Blog,
        meta:{
            middleware:'auth'
        }
    },
    {
        name:'room_list',
        path:'/room_list',
        component:Room_list,
        meta:{
            middleware:'auth'
        }
    },
    {
        name:'d_room',
        path:'/d_room',
        component:D_Room,
        meta:{
            middleware:'auth'
        }
    },
    {
        name:'edit_room',
        path:'/edit_room/:id',
        component:Edit_Room,
        meta:{
            middleware:'auth'
        }
    },
    {
        name:'contact_list',
        path:'/contact_list',
        component:Contact_list,
        meta:{
            middleware:'auth'
        }
    },
    {
        name:'general_list',
        path:'/general_list',
        component:General_list,
        meta:{
            middleware:'auth'
        }
    },
    {
        name:'general',
        path:'/general',
        component:General,
        meta:{
            middleware:'auth'
        }
    },
    {
        name:'edit_general',
        path:'/edit_general/:id',
        component:Edit_general,
        meta:{
            middleware:'auth'
        }
    },

]
const router=createRouter({
    history:createWebHistory(),
    routes
})

router.beforeEach((to,from,next)=>{
    if(to.meta.middleware=='guest'){
        if(store.state.auth.auth){
            next({name:'dashboard'})
        }
        next()
    }else{
        if(store.state.auth.auth){
            next()
        }
        next({name:'login'})
    }
})
export default router;
