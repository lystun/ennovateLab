<template>
    <div class="container-fluid home">
        <div class="row banner">
            <div class="col-md-12">
                <p class="banner__text">
                    We are <br>
                    an <router-link to="/innovation-hub">Innovation Hub,</router-link> <br>
                    a <router-link to="/innovation-hub">Startup Foundry,</router-link> and<br>
                    a <router-link to="/innovation-hub">Seed Fund. </router-link>
                </p>

                <router-link to="/about-us" class="banner__link">Learn More</router-link>
            </div>
        </div>

        <div class="row slider">
            <div class="col-md-12 line">
                <hr>
            </div>

            <div class="col-md-4 number">
                <h1>1750+</h1>
                <span class="arrow pr-3">&#8592;</span>
                <span class="arrow pl-3">&#8594;</span>
            </div>
            <div class="col-md-8 description">
                <p>Clients trained on Critical, Creative thinking, and Complex problem solving by Cogneasy.</p>
            </div>
        </div>

        <div class="row wwd">
            <div class="col-12">
                <p class="wwd__text"> We create effective, borderless solutions for communities by communities. </p>
            </div>
        </div>

        <div class="row hwd">
            <div class="col-md-6">
                <h3 class="hwd__title">How We Do This?</h3>
            </div>
            <div class="col-md-6">
                <p class="hwd__text">We appreciate growth and sustainability. So we keep building resilient innovation ecosystems in underserved university communities.</p>
            </div>

            <div class="col-md-6">
                <h3 class="actions__title">Action!</h3>
            </div>

            <div class="col-md-6">
                <p class="actions__text">
                    <span>People -</span>
                     We connect with grassroots talent and provide the support they need to sharpen their skills and know-how Project.
                </p>
                <p class="actions__text">
                    <span>Project -</span>
                     To us causes are projects and projects are causes. So we create atmospheres and processes that support noteworthy ideation and enterprise.
                </p>
                <p class="actions__text">
                    <span>Value -</span> 
                     Success is not only financial prosperity, or sustainability but the measurable impact on communities.
                </p>

                <p class="actions__text">
                    <span>Common goods -</span> 
                    We create a resource bank of common goods in cities to ensure cohesion and development of the ecosystem.
                </p>
            </div>

            <div class="col-12">
                <router-link to="/about" class="hwd__link">Learn More</router-link>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name : "Home",

        mounted(){
            console.log("Home Component");
        }

        
    }
</script>

<style lang="scss" scoped>

    $primary : #ffcc03;
    $white : #fff;
    $black : #000;

    .home {

        padding-left : 0px;

        .banner {

            background: $primary;
            padding: 5rem 7rem;

            &__text {
                color : $black;
                font-size: 4rem;
                font-weight: bold;
                margin-bottom: 5rem;

                a {

                    color: $black;
                    text-decoration: none;
                    background-image: linear-gradient( transparent 0%, transparent calc(50% - 2rem), $white calc(50% - 2rem), $white 100% );
                    background-size: 100% 200%;
                    background-position: 0 0;
                    transition: background-position 120ms ease-in-out;

                    &:hover {
                        background-image: linear-gradient( transparent 0%, transparent calc(50% - 2rem), $white calc(50% - 2rem), $white 100% );
                        background-position: 0 100%;
                    }
                }
            }

            &__link {
                color: $black;
                font-size: 2rem;
                font-weight: bold;
                text-decoration: none;
                line-height: 1px;

                background-image: linear-gradient( transparent 0%, transparent calc(50% - 1rem), $white calc(50% - 1rem), $white 100% );
                background-size: 100% 200%;
                background-position: 0 0;
                transition: background-position 120ms ease-in-out;

                &:hover {
                    background-image: linear-gradient( transparent 0%, transparent calc(50% - 1rem), $white calc(50% - 1rem), $white 100% );
                    background-position: 0 100%;
                }
                
            }
        }

        .slider {

            padding: 7rem;
            background: $black;

            .line {

                margin-bottom: 5rem;

                hr {
                    border: none;
                    overflow: visible;
                    text-align: center;
                    height: 3px;
                    background: #333;
                }
            }

            .number {

                text-align: center;
                
                h1 {
                    color: $white;
                    font-size: 4rem;
                }

                .arrow {
                    font-size: 3rem;
                    cursor: pointer;
                }
            }

            .description {
                p {
                    font-size: 2rem;
                    color: $white;
                }
            }

        }

        .wwd {
            background:  linear-gradient(rgba($black, 0.6), rgba($black, 0.6) ), url('/img/about.jpg') no-repeat center fixed;
            background-size: cover;
            height : 100vh;
            padding: 15rem;
            align-items: center;
            margin-bottom: 2rem;
            font-weight: 500;

            &__text {
                color: $white;
                font-size: 3rem;
                text-align: center;
            }

        }

        .hwd {

            padding: 0 15rem;
            margin-bottom: 2rem;
        
            div {
                padding: 2rem;
            }

            .hwd {
                &__title {
                    font-weight: bold;
                    font-size: 2rem;
                    color: $black;
                }

                &__text {
                    font-size: 1.5rem;
                    color: $black;
                }
            }

            .actions {

                &__title {
                    font-weight: bold;
                    font-size: 1.5rem;
                }

                &__text {
                    font-size: 1rem;
                    margin-bottom: 1.5rem;

                    span{
                        font-weight: bold;
                    }
                }

            }

            &__link {
                color:$black;
                font-size: 1.5rem;
                font-weight: bold;
                
                text-decoration: none;
                background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                background-size: 100% 200%;
                background-position: 0 0;
                transition: background-position 120ms ease-in-out;

                &:hover {
                    background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                    background-position: 0 100%;
                }
                
            }

        }



    }

    @media screen and (max-width: 576px) {
        .home {

            .banner {

                padding: 3rem 2rem;

                &__text {
                    color : $black;
                    font-size: 1.5rem;
                    font-weight: bold;
                    margin-bottom: 5rem;

                    a {
                        background-image: linear-gradient( transparent 0%, transparent calc(50% - .75rem), $white calc(50% - .75rem), $white 100% );
                       
                        &:hover {
                            background-image: linear-gradient( transparent 0%, transparent calc(50% - .75rem), $white calc(50% - .75rem), $white 100% );
                            background-position: 0 100%;
                        }
                    }
                }

                &__link {
                    font-size: 1.5rem;

                    background-image: linear-gradient( transparent 0%, transparent calc(50% - .75rem), $white calc(50% - .75rem), $white 100% );
                    
                    &:hover {
                        background-image: linear-gradient( transparent 0%, transparent calc(50% - .75rem), $white calc(50% - .75rem), $white 100% );
                        background-position: 0 100%;
                    }
                    
                }
            }

            .slider {

                padding: 2rem;

                .line {

                    margin-bottom: 2rem;

                    hr {
                        border: none;
                        height: 3px;
                        background: #333;
                    }
                }

                .number {

                    text-align: center;
                    margin-bottom: 2rem;;
                    
                    h1 {
                        font-size: 3rem;
                        margin-bottom: 0rem
                    }

                    .arrow {
                        font-size: 2rem;
                    }

                }

                .description {
                    p {
                        font-size: 1rem;
                    }
                }

            }

            .wwd {

                background:  linear-gradient(rgba($black, 0.6), rgba($black, 0.6) ), url('/img/about.jpg') no-repeat center fixed;
                background-size: cover;
                height : 70vh;
                padding: 3rem 1rem;
                align-items: center;
                margin-bottom: 2rem;

                &__text {
                    font-size: 1.5rem;
                    text-align: center;
                }

            }

            .hwd {

                padding: 0rem;
                margin-bottom: 2rem;
            
                div {
                    padding: .5rem 2rem;
                }

                .hwd {
                    &__title {
                        font-weight: bold;
                        font-size: 1.5rem;
                        color: $black;
                    }

                    &__text {
                        font-size: 1.2rem;
                    }
                }

                .actions {

                    &__title {
                        font-weight: bold;
                        font-size: 1.3rem;
                    }

                    &__text {
                        font-size: 1rem;
                        margin-bottom: 1.5rem;

                        span{
                            font-weight: bold;
                        }
                    }

                }

                &__link {
                    color:$black;
                    font-size: 1.5rem;
                    font-weight: bold;
                    
                    text-decoration: none;
                    background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                    background-size: 100% 200%;
                    background-position: 0 0;
                    transition: background-position 120ms ease-in-out;

                    &:hover {
                        background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                        background-position: 0 100%;
                    }
                    
                }

            }
        }
    }

    @media screen and (min-width: 576px) and (max-width: 768px) {
        
    }

    @media screen and (min-width: 768px) and (max-width: 992px) {
        
    }

    @media screen and (min-width: 992px) and (max-width: 1200px) {
        
    }



</style>