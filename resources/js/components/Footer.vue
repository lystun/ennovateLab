<template>
    <div class="container-fluid footer">
        <div class="row">
            
            <div class="col-lg-3 col-md-6 about-us">
                <h4>About Us</h4>

                <div class="links">
                    <router-link to="/">Innovation Hub</router-link>
                    <router-link to="/">Startup Foundry</router-link>
                    <router-link to="/">Seed Fund</router-link>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 our-work">
                <h4>Our Work</h4>

                <div class="links">
                    <router-link to="/">Ennovate Lab</router-link>
                    <router-link to="/">The Lab</router-link>
                    <router-link to="/">Seed Cloud</router-link>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 quick-links">
                <h4>Quick Links</h4>

                <div class="links">
                    <router-link to="/">Resources</router-link>
                    <router-link to="/">Blog</router-link>
                    <router-link to="/">eXperimennts</router-link>
                    <router-link to="/">Contact Us</router-link>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 elab">
                <img src="/img/full_logo2.png" alt="Ennovate lab's logo" class="img-fluid">

                <div class="subscribe">
                    <label for="subscribe">Subscribe to our weekly newsletter</label>
                    <div class="input-group">
                        <input type="email" class="" id="subscribe">
                        <div class="input-group-append">
                            <button class="btn" type="button">Subscribe</button>
                        </div>
                    </div>
                </div>

                <div class="socials">
                    <a href=""><span class="fab fa-facebook"></span></a>
                    <a href=""><span class="fab fa-linkedin-in"></span></a>
                    <a href=""><span class="fab fa-instagram"></span></a>
                    <a href=""><span class="fab fa-twitter"></span></a>
                    <a href=""><span class="fab fa-medium-m"></span></a>
                </div>
            </div>

            <div class="col-12 footnote">
                <hr>
                <div>
                    <span class="year">&copy; {{ year }} Ennovate Lab  </span>
                    <span class="privacy">Privacy Policy</span>
                    <span class="legal">Legal</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name : "Footer",

        data(){
            return {
                year : ''
            }
        },


        created(){
            this.getYear();
        },
        
        mounted(){

        },

        methods: {
            getYear(){
                this.year = new Date().getFullYear();
            }
        },

    }
</script>

<style lang="scss" scoped>
    $primary : #ffcc03;
    $white : #fff;
    $black : #000;
    $dark: #2f2f2f;

    .footer {

        padding: 5rem 7rem;
        background: $dark;
        color: $white;

        .elab {
            img {
                height: 3rem;
                margin-bottom: 2rem;
            }

            .subscribe {
                margin-bottom: 2.5rem;

                input {
                    background: transparent;
                    border: 2px solid $white;
                    border-right: none;
                    color: $white;
                    padding-left: .5rem;
                    height: 2.5rem;
                }

                .btn {
                    background: $white;
                    color: $black;
                }
            }

            .socials {
                margin-bottom: 2rem;

                a {
                    color: $white;
                    background: transparent;
                    
                    margin-right: .7rem;
                    width:3.5rem;
                    height: 1rem;
                    padding: .2rem .4rem;
                    border-radius: 50%;
                    border: 2px solid $white;

                    &:hover {
                        color: $primary;
                        // border: 2px solid $primary;
                    }
                    
                }

            }
        }

        .about-us, .our-work, .quick-links {

            h4 {
                font-weight: bold;
                margin-bottom: 3rem;
                font-size: 1.2rem;
            }

            .links {
                a{
                    display: block;
                    font-size: 1rem;
                    margin-bottom: .7rem;
                    color: $white;
                    text-decoration: none;

                    &:hover {
                        color: $primary;
                    }
                }
            }
        }

        .footnote {

            margin-top: 3rem;

            hr{
                background: $white;
            }

            .privacy, .legal {
                float: right;
                margin-left: 2rem;        
            }
        }

    }

    @media screen and (max-width: 576px) {
        .footer {

            padding: 5rem 2rem;

            .elab {
                img {
                    height: 3rem;
                    margin-bottom: 1rem;
                }

                .subscribe {
                    margin-bottom: 2.5rem;

                    input {
                        background: transparent;
                        border: 2px solid $white;
                        
                    }

                    .btn {
                        background: $white;
                        color: $black;
                    }
                }

                .socials {
                    margin-bottom: 2rem;

                    a {
                        color: $black;
                        background: $white;
                        
                        margin-right: .7rem;
                        width:3rem;
                        height: 1rem;
                        padding: .2rem .4rem;
                        border-radius: 50%;
                    }

                }
            }

            .about-us, .our-work, .quick-links {

                margin-bottom: 3rem;

                h4 {
                    margin-bottom: 1.2rem;
                    font-size: 1.2rem;
                }

                .links {
                    a{
                        display: block;
                        font-size: 1rem;
                        margin-bottom: .7rem;
                        color: $white;
                        text-decoration: none;

                        &:hover {
                            color: $primary;
                        }
                    }
                }
            }

            .footnote {

                margin-top: 2rem;

                .privacy, .legal {
                    float: right;
                    margin-left: .5rem;
                    display: block;
                    font-size: .7rem;

                }
            }
        }
    }

    @media screen and (min-width: 576px) and (max-width: 768px) {
        .footer {

            padding: 5rem 3rem;

            .elab {
                img {
                    height: 3rem;
                    margin-bottom: 1rem;
                }

                .subscribe {
                    margin-bottom: 2.5rem;

                    input {
                        background: transparent;
                        border: 2px solid $white;
                        border-right: none;
                    }

                    .btn {
                        background: $white;
                        color: $black;
                    }
                }

                .socials {
                    margin-bottom: 2rem;

                    a {
                        color: $black;
                        background: $white;
                        
                        margin-right: .7rem;
                        width:3rem;
                        height: 1rem;
                        padding: .2rem .4rem;
                        border-radius: 50%;
                    }

                }
            }

            .about-us, .our-work, .quick-links {

                margin-bottom: 3rem;

                h4 {
                    margin-bottom: 1.2rem;
                    font-size: 1.2rem;
                }

                .links {
                    a{
                        display: block;
                        font-size: 1rem;
                        margin-bottom: .7rem;
                        color: $white;
                        text-decoration: none;

                        &:hover {
                            color: $primary;
                        }
                    }
                }
            }

            .footnote {

                margin-top: 2rem;

                .privacy, .legal {
                    float: right;
                    margin-left: .5rem;
                    display: block;
                    font-size: .7rem;

                }
            }
        }
    }

    @media screen and (min-width: 768px) and (max-width: 992px) {
        .footer {

            padding: 5rem 3rem;

            .elab {
                img {
                    height: 3rem;
                    margin-bottom: 1rem;
                }

                .subscribe {
                    margin-bottom: 2.5rem;

                    input {
                        background: transparent;
                        border: 2px solid $white;
                        border-right: none;
                    }

                    .btn {
                        background: $white;
                        color: $black;
                    }
                }

                .socials {
                    margin-bottom: 2rem;

                    a {
                        color: $black;
                        background: $white;
                        
                        margin-right: .7rem;
                        width:3rem;
                        height: 1rem;
                        padding: .2rem .4rem;
                        border-radius: 50%;
                    }

                }
            }

            .about-us, .our-work, .quick-links {

                margin-bottom: 3rem;

                h4 {
                    margin-bottom: 1.2rem;
                    font-size: 1.2rem;
                }

                .links {
                    a{
                        display: block;
                        font-size: 1rem;
                        margin-bottom: .7rem;
                        color: $white;
                        text-decoration: none;

                        &:hover {
                            color: $primary;
                        }
                    }
                }
            }

            .footnote {

                margin-top: 2rem;

                .privacy, .legal {
                    float: right;
                    margin-left: .5rem;
                    display: block;
                    font-size: .7rem;

                }
            }
        }
    }

    @media screen and (min-width: 992px) and (max-width: 1200px) {
        .footer {

            padding: 5rem 3rem;

            .elab {
                img {
                    height: 3rem;
                    margin-bottom: 1rem;
                }

                .subscribe {
                    margin-bottom: 2.5rem;

                    input {
                        background: transparent;
                        border: 2px solid $white;
                        height: 2rem;
                        width: 100%;
                    }

                    .btn {
                        background: $white;
                        color: $black;
                        padding: .3rem 1rem;
                        margin-top: .5rem;
                    }
                }

                .socials {
                    margin-bottom: 2rem;

                    a {
                        color: $black;
                        background: $white;
                        
                        margin-right: .5rem;
                        width: 3rem;
                        height: 1rem;
                        padding: .2rem .4rem;
                        border-radius: 50%;
                    }

                }
            }

            .about-us, .our-work, .quick-links {

                margin-bottom: 3rem;

                h4 {
                    margin-bottom: 1.2rem;
                    font-size: 1.2rem;
                }

                .links {
                    a{
                        display: block;
                        font-size: 1rem;
                        margin-bottom: .7rem;
                        color: $white;
                        text-decoration: none;

                        &:hover {
                            color: $primary;
                        }
                    }
                }
            }

            .footnote {

                margin-top: 2rem;

                hr{
                    background: $white;
                }

                .privacy, .legal {
                    float: right;
                    margin-left: .5rem;
                    display: block;
                    font-size: .7rem;

                }
            }
        }
    }

    @media screen and (min-width: 1200px) and (max-width: 1450px){
        .subscribe {

            margin-bottom: 2.5rem;
            
            input {
                background: transparent;
                border-right: 2px solid $white!important;
                border: 2px solid $white;
                height: 2rem;
                width: 100%;
            }

            .btn {
                background: $white;
                color: $black;
                padding: .3rem 1rem;
                margin-top: .5rem;
            }
        }
    }
    
</style>