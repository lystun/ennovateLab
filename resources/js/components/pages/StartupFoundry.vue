<template>
    <div class="container-fluid startup-foundry">
        <div class="row header">
            <div class="col-md-12 pl-0">
                <h1>The Lab: Our Startup Foundry</h1>
                <img src="/img/startupFoundryBanner.JPG" alt="Ennovate Lab startup foundry Page" class="img-fluid">
            </div>
        </div>

        <div class="row content justify-content-center">
            <div class="col-lg-10 wrapper">
                <div class="info">
                    <h3>Building borderless solutions for communities by communities</h3>
                    <p>The Lab is where our amazing team comes up with ideas ranging from the good to the smart to the outright absurd; sorts through all of them dispassionately to identify the most promising and then doubles down as one man to build winning startups.</p>
                </div>

                <div class="row startups">
                    <div class="col-12">
                        <h4 class="intro">Startups in Our Portfolio:</h4>
                    </div>

                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4 logo">
                                <img src="/img/QeolaLogo.png" alt="Qeola Logo" class="img-fluid">
                            </div>
                            <div class="col-md-8 details">
                                <div class="card-body">
                                    <p class="card-text">Our desire to see stronger and successful brands built with a clear and consistent message facilitated the need for Qeola. </p>
                                    <p class="card-text"> Voices are meant to be heard, values are made to be shared. We walk with you through every stage of communicating your purpose through your <b>websites</b>, identity through your <b>brand image</b> and promises through your <b>marketing</b>, to your clients. </p>
                                    
                                    <a href="https://qeola.com" target="_blank" class="link">Take the Leap</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4 logo">
                                <img src="/img/cogneasyLogo.png" alt="Qeola Logo" class="img-fluid">
                            </div>
                            <div class="col-md-8 details">
                                <div class="card-body">
                                    <p class="card-text">The best way to predict the future is to create it, said Abraham Lincoln. However, the teeming mass of African youth lack the tools to create the future. Here is where Cogneasy comes in </p>
                                     <p class="card-text">Through contextualized and carefully curated online and offline courses that teach the higher-order thinking skills of creative and critical thinking, as well as complex problem-solving, Cogneasy is helping Africans unlock African solutions to African and global problems. </p>
                                    
                                    <a href="https://coqneasy.com" target="_blank" class="link">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4 logo">
                                <img src="/img/GradePlusLogo.png" alt="Gradeplus Africa Logo" class="img-fluid">
                            </div>
                            <div class="col-md-8 details">
                                <div class="card-body">
                                    <p class="card-text">The potentials of Africa’s human capital can be unlocked through improved academic performance and increased career satisfaction. But only with improved metacognitive abilities and a 99.9% personality to career match. </p>
                                    <p class="card-text">GradePlus Africa as an EdTech startup increasingly achieves these by, first, recommending possible career choices through an innovative and proprietary diagnostic algorithm. And secondly, by increasing metacognitive abilities through dedicated courses delivered both online and offline.</p>
                                    
                                    <a href="https://gradeplusafrica.com" target="_blank" class="link">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4 logo">
                                <!-- <img src="" alt="" class="img-fluid"> -->
                                <h3 class="font-weight-bold">Virtually</h3>
                            </div>
                            <div class="col-md-8 details">
                                <div class="card-body">
                                    <p class="card-text">Do less and achieve more with Virtually.work</p>
                                    <p class="card-text"> Busy professionals and execs can hit their goals without working round the clock, incurring zero operational costs and still having a great work-life balance with capable virtual assistants.</p>
                                    
                                    <a href="https://virtually.com" target="_blank" class="link">Book a VA</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4 logo">
                                <h3 class="font-weight-bold">GreenGirly</h3>
                            </div>
                            <div class="col-md-8 details">
                                <div class="card-body">
                                    <p class="card-text">Every woman has the right to live and thrive in clean communities. GreenGirly is a block-chain powered women-in-recycling programme promoting cleaner societies by empowering women with relevant educational and trading resources to learn and earn.</p>
                                    
                                    <a href="https://greengirly.com" target="_blank" class="link">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4 logo">
                                <h3 class="font-weight-bold">Commugrid</h3>
                            </div>
                            <div class="col-md-8 details">
                                <div class="card-body">
                                    <p class="card-text">Democratizing Energy Access To Communities</p>
                                    <p class="card-text">Every woman has the right to live and thrive in clean communities. GreenGirly is a block-chain powered women-in-recycling programme promoting cleaner societies by empowering women with relevant educational and trading resources to learn and earn.</p>
                                    
                                    <a href="https://greengirly.com" target="_blank" class="link">Visit Website</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        
    </div>
</template>

<script>
    export default {

        name: "StartupFoundry",
        

    }
</script>

<style lang="scss" scoped>

    $primary : #ffcc03;
    $white : #fff;
    $black : #000;

    .startup-foundry {

        padding: 2rem 7rem;

        .header {

            margin-bottom: 3rem;
            
            h1 {
                font-size: 2.5rem;
                margin-bottom: 4rem;
                margin-top: 2rem;
            }
        }

        .content {

            .info {

                margin-bottom: 3rem;

                h3{
                    font-size: 1.5rem;
                    font-weight: bold;
                    margin-bottom: 1rem;
                }

                p{
                    font-size: 1.2rem;
                }
            }

            .startups {
                .intro {
                    margin-bottom: 3rem;
                    font-weight: bold;
                }

                .card {

                    margin-bottom: 2rem;
                    border:none;
            
                    .logo {
                        padding: 1rem;

                        img{
                            width: 60%;
                        }
                    }

                    .details {

                        padding: 1rem;

                        .card-body{

                            padding: 0 ;

                            .card-text {
                                font-size: 1rem;
                            }

                            .card-text:last-child{
                                margin-bottom: 2rem;
                            }

                            .link{
                                color: $black;
                                font-size: 1.2rem;
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
            }
        }


    }

    @media screen and (max-width: 576px) {
        .startup-foundry {

            padding: 2rem;

            .header {

                margin-bottom: 2rem;
               
                h1 {
                    font-size: 1.5rem;
                    margin-top: 1rem;
                    margin-bottom: 1rem;
                }
            }

            .content {

                .wrapper {
                    padding: 0rem ;
                }
                
                .info {

                    margin-bottom: 3rem;

                    h3{
                        font-size: 1.5rem;
                        font-weight: bold;
                        margin-bottom: 1rem;
                    }

                    p{
                        font-size: 1.1rem;
                    }
                }

                .startups {
                    .intro {
                        margin-bottom: 2rem;
                        font-weight: bold;
                    }

                    .card {

                        margin-bottom: 2rem;
                        border:none;
                
                        .logo {

                            padding: 0 1rem;

                            img{
                                width: 60%;
                            }
                        }

                    }
                }
            }
        }
    }

    @media screen and (min-width: 576px) and (max-width: 768px) {

        .startup-foundry {

            padding: 2rem;

            .header {

                margin-bottom: 3rem;
               
                h1 {
                    font-size: 2rem;
                    margin-top: 1rem;
                    margin-bottom: 2rem;
                }
            }

            .content {
                
                .info {

                    margin-bottom: 3rem;

                    h3{
                        font-size: 1.5rem;
                        font-weight: bold;
                        margin-bottom: 1rem;
                    }

                    p{
                        font-size: 1.1rem;
                    }
                }

                .startups {
                    .intro {
                        margin-bottom: 2rem;
                        font-weight: bold;
                    }

                    .card {

                        margin-bottom: 2rem;
                        border:none;
                
                        .logo {

                            padding: 1rem;

                            img{
                                width: 70%;
                            }
                        }

                    }
                }
            }
        }
    }

    @media screen and (min-width: 768px) and (max-width: 992px) {

        .startup-foundry {

            padding: 2rem 4rem;

            .header {

                margin-bottom: 3rem;
               
                h1 {
                    font-size: 2rem;
                    margin-top: 1rem;
                    margin-bottom: 2rem;
                }
            }

            .content {
                
                .info {

                    margin-bottom: 3rem;

                    h3{
                        font-size: 1.5rem;
                        font-weight: bold;
                        margin-bottom: 1rem;
                    }

                    p{
                        font-size: 1.1rem;
                    }
                }

                .startups {
                    .intro {
                        margin-bottom: 2rem;
                        font-weight: bold;
                    }

                    .card {

                        margin-bottom: 2rem;
                        border:none;
                
                        .logo {

                            padding: 1rem;

                            img{
                                width: 70%;
                            }
                        }

                    }
                }
            }
        }
    }

    @media screen and (min-width: 992px) and (max-width: 1200px) {
        .startup-foundry {

            padding: 2rem 4rem;

            .header {

                margin-bottom: 3rem;
               
                h1 {
                    font-size: 2rem;
                    margin-top: 1rem;
                    margin-bottom: 2rem;
                }
            }

            .content {
                
                .info {

                    margin-bottom: 3rem;

                    h3{
                        font-size: 1.5rem;
                        font-weight: bold;
                        margin-bottom: 1rem;
                    }

                    p{
                        font-size: 1.1rem;
                    }
                }

                .startups {
                    .intro {
                        margin-bottom: 2rem;
                        font-weight: bold;
                    }

                    .card {

                        margin-bottom: 2rem;
                        border:none;
                
                        .logo {

                            padding: 1rem;

                            img{
                                width: 70%;
                            }
                        }

                    }
                }
            }
        }
    }

</style>