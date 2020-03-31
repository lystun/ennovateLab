

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
import Contact from '../components/pages/Contact.vue';

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
    { path : '/contact', name : "Contact", components : { default : Contact } },

    { path : '*', redirect : { name: 'Home'} },

]


const router = new VueRouter({
    mode : 'history',
    routes,
})


export default router;