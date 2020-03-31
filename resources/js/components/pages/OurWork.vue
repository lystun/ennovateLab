<template>
    <div class="container-fluid our-work">
        <div class="row header">
            <div class="col-md-12">
                <h1 >Our Work</h1>
            </div>
        </div>

        <div class="row content">
            <div class="card-deck justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <router-link to="/innovation-hub">
                            <img src="/img/InnovationHub.png" alt="Ennovate Lab Innovation Hub" class="img-fluid">
                        
                            <div class="card-body">
                                <h2>Ennovate Lab: The Innovation Hub</h2>
                                <p>Building resilient innovation ecosystems in underserved university communities.</p>
                            </div>
                        </router-link>
                    </div>
                </div>

                <div class="col-md-5 offset-md-2">
                    <div class="card">
                        <router-link to="/startup-foundry">
                            <img src="/img/StartupFoundry.png" alt="Ennovate Lab Startup Foundry" class="img-fluid">
                        
                            <div class="card-body">
                                <h2>The Lab: Our Startup Foundry</h2>
                                <p>Building borderless solutions for communities by communities</p>
                            </div>
                        </router-link>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <router-link to="/seed-fund">
                            <img src="/img/SeedFund.png" alt="Ennovate Lab Seed Fund" class="img-fluid">
                        
                            <div class="card-body">
                                <h2>Seed Cloud: Our Seed Fund (commencing soon)</h2>
                                <p>We are the first to write cheques for promising startups in our ecosystem. Purse size: $10-50k</p>
                            </div>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

    export default {
        name: "OurWork",

    }
</script>

<style lang="scss" scoped>

    $primary : #ffcc03;
    $white : #fff;
    $black : #000;

    .our-work {

        padding: 2rem 7rem;

        .header {

            margin-bottom: 3rem;

            h1 {
                font-weight: bold;
                font-size: 2.5rem;
                margin-bottom: 4rem;
                margin-top: 2rem;
            }
        }

        .content {

            .card {

                margin-bottom: 5rem;
                border: none;

                a{
                    color: $black;
                    text-decoration: none;

                    &:hover {
                        color: $primary;
                    }
                }

                .card-body{
                    padding-left: 0;
                }
            
                img {
                    width: 100%;
                    margin: 0 auto;
                    margin-bottom: 2rem;
                    text-align: right;
                }

                h2 {
                    font-size: 1.6rem;
                    margin-bottom: 1rem;
                    font-weight: bold;
                }

                p {
                    font-size: 1rem;
                    margin-bottom: 1rem;
                }


            }
        }


    }

    @media screen and (max-width: 576px) {
        .our-work {

            padding: 1rem;

            .header {

                margin-bottom: 1rem;

                h1 {
                    font-size: 1.5rem;
                    margin-bottom: 1rem;
                    margin-top: 1rem;
                }
            }

            .content {

                .card {

                    margin-bottom: 1.5rem;

                    a{
                        color: $black;
                        text-decoration: none;

                        &:hover {
                            color: $primary;
                        }
                    }

                    .card-body{
                        padding: .5rem 0rem;
                    }
                
                    img {
                        width: 100%;
                        margin: 0 auto;
                        margin-bottom: .5rem;
                    }

                    h2 {
                        font-size: 1.3rem;
                        margin-bottom: .7rem;
                        font-weight: bold;
                    }

                    p {
                        font-size: 1rem;
                        margin-bottom: 1rem;
                    }


                }
            }
        }
    }

    @media screen and (min-width: 576px) and (max-width: 768px) {
        .our-work {

            padding: 3rem;

            .header {

                margin-bottom: 1rem;

                h1 {
                    font-size: 1.5rem;
                    margin-bottom: 1rem;
                    margin-top: 1rem;
                }
            }

            .content {

                .card {

                    margin-bottom: 1.5rem;

                    a{
                        color: $black;
                        text-decoration: none;

                        &:hover {
                            color: $primary;
                        }
                    }

                    .card-body{
                        padding: .5rem 0rem;
                    }
                
                    img {
                        width: 100%;
                        margin: 0 auto;
                        margin-bottom: .5rem;
                    }

                    h2 {
                        font-size: 1.3rem;
                        margin-bottom: .7rem;
                        font-weight: bold;
                    }

                    p {
                        font-size: 1rem;
                        margin-bottom: 1rem;
                    }


                }
            }
        }
    }

    @media screen and (min-width: 768px) and (max-width: 992px) {
        .our-work {

            padding: 3rem;

            .header {

                margin-bottom: 1rem;

                h1 {
                    font-size: 1.5rem;
                    margin-bottom: 1rem;
                    margin-top: 1rem;
                }
            }

            .content {

                .card {

                    margin-bottom: 1.5rem;

                    a{
                        color: $black;
                        text-decoration: none;

                        &:hover {
                            color: $primary;
                        }
                    }

                    .card-body{
                        padding: .5rem 0rem;
                    }
                
                    img {
                        width: 100%;
                        margin: 0 auto;
                        margin-bottom: .5rem;
                    }

                    h2 {
                        font-size: 1.3rem;
                        margin-bottom: .7rem;
                        font-weight: bold;
                    }

                    p {
                        font-size: 1rem;
                        margin-bottom: 1rem;
                    }


                }
            }
        }
    }

    @media screen and (min-width: 992px) and (max-width: 1200px) {
        .our-work {

            padding: 3rem;

            .header {

                margin-bottom: 1rem;

                h1 {
                    font-size: 2rem;
                    margin-bottom: 2rem;
                    margin-top: 1rem;
                }
            }

            .content {

                .card {

                    margin-bottom: 1.5rem;

                    a{
                        color: $black;
                        text-decoration: none;

                        &:hover {
                            color: $primary;
                        }
                    }

                    .card-body{
                        padding: .5rem 0rem;
                    }
                
                    img {
                        width: 100%;
                        margin: 0 auto;
                        margin-bottom: .5rem;
                    }

                    h2 {
                        font-size: 1.3rem;
                        margin-bottom: .7rem;
                        font-weight: bold;
                    }

                    p {
                        font-size: 1rem;
                        margin-bottom: 1rem;
                    }


                }
            }
        }
    }

</style>