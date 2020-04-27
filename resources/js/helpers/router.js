

import Vue from 'vue'
import VueRouter  from 'vue-router'

Vue.use(VueRouter)

import Home from '../components/pages/Home.vue';
import About from '../components/pages/About.vue';
import OurWork from '../components/pages/OurWork.vue';
import StartupFoundry from '../components/pages/StartupFoundry.vue';
import SeedCloud from '../components/pages/SeedCloud.vue';
import InnovationHub from '../components/pages/InnovationHub.vue';
import Blog from '../components/pages/Blog.vue';
import SingleBlog from '../components/pages/SingleBlog.vue';
import Resources from '../components/pages/Resources.vue';
import Experiments from '../components/pages/Experiments.vue';
import Subscribe from '../components/pages/Subscribe.vue';
import Contact from '../components/pages/Contact.vue';


//Admin Section
import Dashboard from '../components/admin/Dashboard.vue';

import AllPosts from '../components/admin/posts/AllPosts.vue';
import CreatePost from '../components/admin/posts/CreatePost.vue';
import EditPost from '../components/admin/posts/EditPost.vue';

import AllCategories from '../components/admin/category/posts/AllCategories.vue';
import CreateCategory from '../components/admin/category/posts/CreateCategory.vue';
import EditCategory from '../components/admin/category/posts/EditCategory.vue';


const routes = [

    { path : '/', name : "Home", components : { default : Home } },
    { path : '/about-us', name : "About", components : { default : About } },
    { path : '/our-work', name : "OurWork", components : { default : OurWork } },
    { path : '/startup-foundry', name : "StartupFoundry", components : { default : StartupFoundry } },
    { path : '/seed-cloud', name : "SeedCloud", components : { default : SeedCloud } },
    { path : '/innovation-hub', name : "InnovationHub", components : { default : InnovationHub } },
    { path : '/blog', name : "Blog", components : { default : Blog } },
    { path : '/blog/:slug', name : "SingleBlog", components : { default : SingleBlog } },
    { path : '/resources', name : "Resources", components : { default : Resources } },
    { path : '/experiments', name : "Experiments", components : { default : Experiments } },
    { path : '/subscribe', name : "Subscribe", components : { default : Subscribe } },
    { path : '/contact-us', name : "Contact", components : { default : Contact } },

    
    //admin
    { path : '/admin/dashboard', name : "Dashboard", components : { default : Dashboard } },
    
    { path : '/admin/categories', name : "AllCategories", components : { default : AllCategories } },
    { path : '/admin/categories/create', name : "CreateCategory", components : { default : CreateCategory } },
    { path : '/admin/categories/:slug/edit', name : "EditCategory", components : { default : EditCategory } },
    
    { path : '/admin/posts', name : "AllPosts", components : { default : AllPosts } },
    { path : '/admin/posts/create', name : "CreatePost", components : { default : CreatePost } },
    { path : '/admin/posts/:slug/edit', name : "EditPost", components : { default : EditPost } },


    { path : '*', redirect : { name: 'Home'} },

]


const router = new VueRouter({
    mode : 'history',
    routes,
    
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }
    }
})


export default router;