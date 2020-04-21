<template>
    <div class="container-fluid about-us">
        <div class="row header">
            <div class="col-md-12">
                <h1>About Us</h1>
                <div class="banner">
                    <vue-typed-js :strings="values" :loop="true" :typeSpeed="100" :backSpeed="30">
                        <h1>We are <span class="typing"></span></h1>
                    </vue-typed-js>
                </div>
            </div>
        </div>

        <div class="row content justify-content-center">
            <div class="col-md-11 col-lg-10">
                <div class="row intro">
                    <div class="col-12">
                        <p>Founded in November 2017 by four friends, JD, Chima, Pelumi and Ijeoma, Ennovate Lab is an innovation hub that seeks to promote innovation and enterprise thinking and success in underserved university communities beginning from our host community - Ogbomoso.</p>
                        <p>Our vision is captured within these three prongs: <b>Innovation Hub</b>, <b>Startup Foundry </b> and <b>Seed Fund </b></p>
                    </div>
                </div>

                <div class="row vision">
                    
                    <div class="col-md-4 image">
                        <img src="/img/about/aboutUsVision.png" class="img-fluid" alt="About Us Vision Image">
                    </div>

                    <div class="col-md-7 offset-md-1 text">
                        <h4>As an Innovation Hub</h4>
                        <p>We are committed to building resilient innovation ecosystems in underserved university communities</p>

                        <h4>As a Startup Foundry</h4>
                        <p>We build borderless solutions for communities by communities.</p>

                        <h4>As a Seed Fund</h4>
                        <p>We reach beyond our portcos to become the first to write cheques for promising startups in our host communities.</p>
                    </div>
                
                </div>

                <div class="row goal">
                    <div class="col-md-12 intro">
                        <p> <b>Our goal</b> is to decentralize and democratize access to opportunity and resources in underserved communities <b>by</b> leveraging on assets within those communities especially their human capital and the presence of university institutions. These values we hold to be self-evident:</p>
                    </div>

                    <div class="col-md-4 title">
                        <img src="/img/about/creativity.png" class="img-fluid" alt="">
                        <h4>Creativity</h4>
                    </div>
                    <div class="col-md-8 details">
                        <p>Our culture ensures that we always have a thick broth of creativity sizzling in doing everything we do.</p>
                    </div>

                    <div class="col-md-4 title">
                        <img src="/img/about/empathy.png" class="img-fluid" alt="">
                        <h4>Empathy</h4>
                    </div>
                    <div class="col-md-8 details">
                        <p>Empathy is non-negotiable. It is what allows us to understand non-consumption and build for market-creating innovations. A mix of empathy with creativity gives us creative empathy which we, at eLab, call the new innovation.</p>
                    </div>

                    <div class="col-md-4 title">
                        <img src="/img/about/camaraderie.png" class="img-fluid" alt="">
                        <h4>Camaraderie</h4>
                    </div>
                    <div class="col-md-8 details">
                        <p> We hold dearly the pervading atmosphere of familyhood and friendship both in the workplace and in our relationship with other stakeholders. Ask any team member what word most defines the Lab and you will have your ears ringing with: Home!</p>
                    </div>

                    <div class="col-md-4 title">
                        <img src="/img/about/creativity.png" class="img-fluid" alt="">
                        <h4>Integrity</h4>
                    </div>
                    <div class="col-md-8 details">
                        <p>Integrity isn’t a cliche or a buzzword for us; it defines us. It is what knit the hearts of our 4 co-founders across the distance and different time zones and it is what makes us give our word to clients and stick to it.</p>
                    </div>

                    <div class="col-md-4 title">
                        <img src="/img/about/camaraderie.png" class="img-fluid" alt="">
                        <h4>Inclusiveness</h4>
                    </div>
                    <div class="col-md-8 details">
                        <p>Every person is as important as the other, so our initiatives span the range of the lowliest to the most privileged; no one is left out.</p>
                    </div>

                    <div class="col-md-4 title">
                        <img src="/img/about/creativity.png" class="img-fluid" alt="">
                        <h4>Grit</h4>
                    </div>
                    <div class="col-md-8 details">
                        <p>We do not give up before obstacles rather obstacles give way before us. Ask us what people told us about our choice of our host community at the beginning and ask us what they are saying now; the feeling is priceless.</p>
                    </div>
                    

                </div>

                <div class="row humans">
                    <div class="col-md-12 header">
                        <h4>Humans Of Elab</h4>
                    </div>

                    <div class="col-md-5 image">
                        <div class="card">
                            <img src="/img/about/humans6.jpg" class="card-img-top" alt="...">
                            <div class="info">
                                <p>“Ennovate Lab to me is an Oasis! It's also a refinery, a city, a culture, a shining light... And as I engage with all of this, I become Ennovate Lab. A city on a hill that can never be hidden.” </p>
                                <p class="name">Motoni Olodun</p>
                                <small>Digital Strategist, Ennovate Lab</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2 image">
                        <div class="card">
                            <img src="/img/about/humans2.jpg" class="card-img-top" alt="...">
                            <div class="info">
                                <p>“Ennovate Lab to me is like a bakehouse, building me and in it, I have been exposed to light. And I love the ambience of love in it, it has a warmness you can't find anywhere else.”</p>
                                <p class="name">Silas Bamgbola</p>
                                <small>Coordinator, CTCTW Radio broadcast</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 image">
                        <div class="card">
                            <img src="/img/about/humans3.jpg" class="card-img-top" alt="...">
                            <div class="info">
                                <p>“Ennovate Lab to me is a body that houses love (at it's truest form) and business without losing the distinctive essence of both.”</p>
                                <p class="name">Praise Ajayi</p>
                                <small>Team Lead, Agrivate</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2 image">
                        <div class="card">
                            <img src="/img/about/humans5.jpg" class="card-img-top" alt="...">
                            <div class="info">
                                <p>“Ennovate Lab to me is like a bakehouse, building me and in it, I have been exposed to light. And I love the ambience of love in it, it has a warmness you can't find anywhere else.”</p>
                                <p class="name">Silas Bamgbola</p>
                                <small>Coordinator, CTCTW Radio broadcast</small>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row join">
                    <div class="col-md-12 header">
                        <h4> Careers - Be a Part of Our community </h4>
                    </div>
                    <div class="col-md-4 positions">
                        <router-link to="/" class="link">Volunteers</router-link>
                        
                        <span>Developer</span>
                        <span>Storyteller</span>
                        <span>Creative Designer</span>
                        <span>Urban Agriculturist</span>
                        <span>Online Community Manager</span>
                    
                    </div>
                    <div class="col-md-4 positions">
                        <router-link to="/" class="link">Intern</router-link>
                        
                        <span>Developer</span>
                        <span>Storyteller</span>
                        <span>Creative Designer</span>
                        <span>Urban Agriculturist</span>
                        <span>Online Community Manager</span>
                    
                    </div>
                    <div class="col-md-4 positions">
                        <router-link to="/" class="link">Work</router-link>
                        
                        <span>Developer</span>
                        <span>Storyteller</span>
                        <span>Creative Designer</span>
                        <span>Social Media Manager</span>
                    
                    </div>
                </div>

                <div class="row founders">
                    <div class="col-md-12 header">
                        <h4>Meet the Founding Team</h4>
                    </div>

                    <div class="col-md-3 image">
                        <div class="card">
                            <img src="/img/about/founder1.jpg" class="card-img-top" alt="">
                            <div class="info">
                                <p class="name">Jesudamilare <br> Adesegun-David</p>
                                <p> CEO </p>
                                <a href="" class="link"><span class="fab fa-linkedin"></span></a>
                                <a href="" class="link"><span class="fab fa-twitter"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 image">
                        <div class="card">
                            <img src="/img/about/founder2.png" class="card-img-top" alt="">
                            <div class="info">
                                <p class="name">Pelumi <br> Igunnubole</p>
                                <p> UK Operations </p>
                                <a href="" class="link"><span class="fab fa-linkedin"></span></a>
                                <a href="" class="link"><span class="fab fa-twitter"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 image">
                        <div class="card">
                            <img src="/img/about/founder3.jpg" class="card-img-top" alt="">
                            <div class="info">
                                <p class="name">Ijeoma <br> Nwawka</p>
                                <p> US Operations </p>
                                <a href="" class="link"><span class="fab fa-linkedin"></span></a>
                                <a href="" class="link"><span class="fab fa-twitter"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 image">
                        <div class="card">
                            <img src="/img/about/founder4.jpg" class="card-img-top" alt="">
                            <div class="info">
                                <p class="name">Chima <br> Omike</p>
                                <p> US Operations </p>
                                <a href="" class="link"><span class="fab fa-linkedin"></span></a>
                                <a href="" class="link"><span class="fab fa-twitter"></span></a>
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
    name : "About",

    data(){
        return {
            values : ['Creators.', 'Family.','alive to others’ needs.', 'Honest.', 'not Bigoted.', 'not Quitters.' ],

            
        }
    }

}
</script>

<style lang="scss" scoped>

    $primary : #ffcc03;
    $white : #fff;
    $black : #000;

    .about-us {

        padding: 2rem 7rem;

        .header {

            margin-bottom: 3rem;

            h1 {
                font-weight: bold;
                font-size: 2.5rem;
                margin-bottom: 4rem;
                margin-top: 2rem;
            }

            .banner {
                background: linear-gradient( rgba(0,0,0, 0.6), rgba(0,0,0, 0.6)), url('/img/about/aboutUsBanner.jpg');
                background-size: cover ;
                height: 90vh;

                h1 {
                    color: $white;
                    position: absolute;
                    bottom: 3rem;
                    left: 3rem;
                    font-size: 2.5rem;
                }
            }
        }

        .content {
            .intro {

                margin-bottom: 2rem;

                p {
                    font-size: 1rem;
                    line-height: 1.8rem;
                }   
            }

            .vision {
                
                align-items: center;
                margin: 4rem 0; 

                .text {
                    h4 {
                        font-weight: bold;
                        font-size: 1.2rem;
                    }

                    p{
                        font-size: 1rem;
                        margin-bottom: 2.5rem;
                    }
                }
            }

            .goal {

                align-items: center;
                margin-bottom: 2rem;

                .intro {
                    font-size: 1rem
                }

                .title{

                    text-align: center;
                    margin-bottom: 3rem;

                    img{
                        width: 30%;
                        margin-bottom: 1rem;
                    }

                    h4 {
                        font-weight: bold;
                        font-size: 1.2rem;
                    }
                }

                .details {

                    margin-bottom: 3rem;
                    
                    p {
                        font-size: 1rem;
                    }
                }
            }

            .humans {

                align-items: center;
                margin-bottom: 3rem;

                .header {

                    margin-bottom: 2rem;
                
                    h4 {
                        font-weight: bold;
                        font-size: 1.5rem;
                    }

                } 

                .image {

                    .card {
                        border: none;
                        box-shadow: none;

                        .info {
                            padding: 1.25rem 0;

                            .name {
                                margin-bottom:0;
                                font-weight: bold;
                            }
                        }
                    }
                }
            }

            .join {

                margin-bottom: 4rem;
                
                .header {

                    margin-bottom: 2rem;

                    h4 {

                        font-weight: bold;
                        font-size: 1.5rem;
                    }

                }

                .positions {

                    .link{
                        color: $black;
                        font-size: 1.2rem;
                        font-weight: bold;
                        text-decoration: none;
                        margin-bottom: 2rem;

                        background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                        background-size: 100% 200%;
                        background-position: 0 0;
                        transition: background-position 120ms ease-in-out;

                        &:hover {
                            background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                            background-position: 0 100%;
                        }
                    }

                    span{
                        display: block;
                        margin-bottom: .5rem;
                    }
                }
            }

            .founders {

                margin-bottom: 4rem;

                .header {

                    margin-bottom: 2rem;

                    h4 {
                        font-weight: bold;
                        font-size: 1.5rem;
                    }
                }

                .image {

                    .card {
                        border: none;
                        box-shadow: none;

                        .info {
                            padding: 1.25rem 0;
                            text-align: center;

                            .name {
                                margin-bottom:0;
                                font-weight: bold;
                            }

                            .link {
                                color: $black;
                                
                                margin-right: .7rem;
                                width:3.5rem;
                                height: 1rem;
                                padding: .2rem .4rem;
                                border-radius: 50%;
                                border: 2px solid $black;

                                &:hover {
                                    color: $primary;
                                    border: 2px solid $primary;
                                }
                                
                            }
                        }

                        
                    }
                }
                
            }

        }
    }

    @media screen and (max-width: 576px) {
        .about-us {

            padding: 1rem;

            .header {

                margin-bottom: 1rem;

                h1 {
                    font-size: 1.5rem;
                    margin-top: 1rem;
                    margin-bottom: 1rem;
                }

                .banner {
                    background: linear-gradient( rgba(0,0,0, 0.6), rgba(0,0,0, 0.6)), url('/img/aboutUsBanner.jpg') center;
                    background-size: cover ;
                    height: 60vh;

                    h1 {
                        color: $white;
                        position: absolute;
                        bottom: 2rem;
                        left: 2rem;
                        font-size: 1.5rem;
                    }
                }
            }

            .content {
                .intro {
                    margin-bottom: 1rem;

                    p {
                        font-size: 1rem;
                    }   
                }

                .vision, .goal {

                    margin-bottom: 2rem;
                    
                    p {
                        font-size: 1rem;
                    }

                    div {
                        margin-bottom: 0rem;
                    }

                    .intro {
                        margin-bottom: 2rem;
                    }

                    .title {
                        
                        h4 {
                            font-weight: bold;
                            font-size: 1rem;
                        }

                        p {
                            font-size: 1rem;
                        }
                    }

                    .details {
                        margin-bottom: 1rem;
                    }
                }

                .humans {

                    align-items: center;
                    margin-bottom: 2rem;

                    .header {

                        margin-bottom: 1rem;
                    
                        h4 {
                            font-weight: bold;
                            font-size: 1.3rem;
                        }

                    } 

                    .image {

                        .card {
                            border: none;
                            box-shadow: none;

                            .info {
                                padding: 1.25rem 0;

                                .name {
                                    margin-bottom:0;
                                    font-weight: bold;
                                }
                            }
                        }
                    }
                }

                .join {

                    margin-bottom: 2rem;
                    
                    .header {

                        margin-bottom: 1rem;

                        h4 {
                            font-size: 1.3rem;
                        }

                    }

                    .positions {

                        margin-bottom: 1rem;;

                        .link{
                            color: $black;
                            font-size: 1.2rem;
                            font-weight: bold;
                            text-decoration: none;
                            margin-bottom: 2rem;

                            background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                            background-size: 100% 200%;
                            background-position: 0 0;
                            transition: background-position 120ms ease-in-out;

                            &:hover {
                                background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                                background-position: 0 100%;
                            }
                        }

                        span{
                            display: block;
                            margin-bottom: .5rem;
                        }
                    }
                }

                .founders {

                    margin-bottom: 3rem;

                    .header {

                        margin-bottom: 1rem;

                        h4 {
                            font-weight: bold;
                            font-size: 1.3rem;
                        }
                    }

                    .image {

                        margin-bottom: 1rem;;

                        .card {
                            border: none;
                            box-shadow: none;
                            padding: 0 2rem;

                            .info {
                                padding: 1.25rem 0;
                                text-align: center;

                                .name {
                                    margin-bottom:0;
                                    font-weight: bold;
                                }

                                .link {
                                    color: $black;
                                    
                                    margin-right: .7rem;
                                    width:3.5rem;
                                    height: 1rem;
                                    padding: .2rem .4rem;
                                    border-radius: 50%;
                                    border: 2px solid $black;

                                    &:hover {
                                        color: $primary;
                                        border: 2px solid $primary;
                                    }
                                    
                                }
                            }

                            
                        }
                    }
                    
                }

            }
        }
    }

    @media screen and (min-width: 576px) and (max-width: 768px) {
        .about-us {

            padding: 2rem;

            .header {

                margin-bottom: 1rem;

                h1 {
                    font-size: 1.5rem;
                    margin-top: 1rem;
                    margin-bottom: 1rem;
                }

                .banner {
                    background: linear-gradient( rgba(0,0,0, 0.6), rgba(0,0,0, 0.6)), url('/img/aboutUsBanner.jpg') center;
                    background-size: cover ;
                    height: 60vh;

                    h1 {
                        color: $white;
                        position: absolute;
                        bottom: 4rem;
                        left: 2rem;
                        font-size: 1.5rem;
                    }
                }
            }

            .content {
                .intro {
                    margin-bottom: 1rem;

                    p {
                        font-size: 1rem;
                    }   
                }

                .vision, .goal {

                    margin-bottom: 2rem;
                    
                    p {
                        font-size: 1rem;
                    }

                    div {
                        margin-bottom: 0rem;
                    }

                    .intro {
                        margin-bottom: 2rem;
                    }

                    .title {
                        
                        h4 {
                            font-weight: bold;
                            font-size: 1rem;
                        }

                        p {
                            font-size: 1rem;
                        }
                    }

                    .details {
                        margin-bottom: 1rem;
                    }
                }

                .humans {

                    align-items: center;
                    margin-bottom: 2rem;

                    .header {

                        margin-bottom: 1rem;
                    
                        h4 {
                            font-weight: bold;
                            font-size: 1.3rem;
                        }

                    } 

                    .image {

                        .card {
                            border: none;
                            box-shadow: none;

                            .info {
                                padding: 1.25rem 0;

                                .name {
                                    margin-bottom:0;
                                    font-weight: bold;
                                }
                            }
                        }
                    }
                }

                .join {

                    margin-bottom: 2rem;
                    
                    .header {

                        margin-bottom: 1rem;

                        h4 {
                            font-size: 1.3rem;
                        }

                    }

                    .positions {

                        margin-bottom: 1rem;;

                        .link{
                            color: $black;
                            font-size: 1.2rem;
                            font-weight: bold;
                            text-decoration: none;
                            margin-bottom: 2rem;

                            background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                            background-size: 100% 200%;
                            background-position: 0 0;
                            transition: background-position 120ms ease-in-out;

                            &:hover {
                                background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                                background-position: 0 100%;
                            }
                        }

                        span{
                            display: block;
                            margin-bottom: .5rem;
                        }
                    }
                }

                .founders {

                    margin-bottom: 3rem;

                    .header {

                        margin-bottom: 1rem;

                        h4 {
                            font-weight: bold;
                            font-size: 1.3rem;
                        }
                    }

                    .image {

                        margin-bottom: 1rem;

                        .card {
                            border: none;
                            box-shadow: none;

                            .info {
                                padding: 1.25rem 0;
                                text-align: center;

                                .name {
                                    margin-bottom:0;
                                    font-weight: bold;
                                }

                                .link {
                                    color: $black;
                                    
                                    margin-right: .7rem;
                                    width:3.5rem;
                                    height: 1rem;
                                    padding: .2rem .4rem;
                                    border-radius: 50%;
                                    border: 2px solid $black;

                                    &:hover {
                                        color: $primary;
                                        border: 2px solid $primary;
                                    }
                                    
                                }
                            }

                            
                        }
                    }
                    
                }

            }
        }
    }

    @media screen and (min-width: 768px) and (max-width: 992px) {
        .about-us {

            padding: 2rem;

            .header {

                margin-bottom: 2rem;

                h1 {
                    font-size: 1.5rem;
                    margin-top: 1rem;
                    margin-bottom: 1rem;
                }

                .banner {
                    background: linear-gradient( rgba(0,0,0, 0.6), rgba(0,0,0, 0.6)), url('/img/aboutUsBanner.jpg') center;
                    background-size: cover ;
                    height: 60vh;

                    h1 {
                        color: $white;
                        position: absolute;
                        bottom: 4rem;
                        left: 2rem;
                        font-size: 1.5rem;
                    }
                }
            }

            .content {
                .intro {
                    margin-bottom: 1rem;

                    p {
                        font-size: 1rem;
                    }   
                }

                .vision, .goal {

                    margin-bottom: 2rem;
                    
                    p {
                        font-size: 1rem;
                    }

                    div {
                        margin-bottom: 0rem;
                    }

                    .intro {
                        margin-bottom: 2rem;
                    }

                    .title {
                        
                        h4 {
                            font-weight: bold;
                            font-size: 1rem;
                        }

                        p {
                            font-size: 1rem;
                        }
                    }

                    .details {
                        margin-bottom: 1rem;
                    }
                }

                .humans {

                    align-items: center;
                    margin-bottom: 2rem;

                    .header {

                        margin-bottom: 1rem;
                    
                        h4 {
                            font-weight: bold;
                            font-size: 1.3rem;
                        }

                    } 

                    .image {

                        .card {
                            border: none;
                            box-shadow: none;

                            .info {
                                padding: 1.25rem 0;

                                .name {
                                    margin-bottom:0;
                                    font-weight: bold;
                                }
                            }
                        }
                    }
                }

                .join {

                    margin-bottom: 2rem;
                    
                    .header {

                        margin-bottom: 1rem;

                        h4 {
                            font-size: 1.3rem;
                        }

                    }

                    .positions {

                        margin-bottom: 1rem;;

                        .link{
                            color: $black;
                            font-size: 1.2rem;
                            font-weight: bold;
                            text-decoration: none;
                            margin-bottom: 2rem;

                            background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                            background-size: 100% 200%;
                            background-position: 0 0;
                            transition: background-position 120ms ease-in-out;

                            &:hover {
                                background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                                background-position: 0 100%;
                            }
                        }

                        span{
                            display: block;
                            margin-bottom: .5rem;
                        }
                    }
                }

                .founders {

                    margin-bottom: 3rem;

                    .header {

                        margin-bottom: 1rem;

                        h4 {
                            font-weight: bold;
                            font-size: 1.3rem;
                        }
                    }

                    .image {

                        margin-bottom: 1rem;

                        .card {
                            border: none;
                            box-shadow: none;

                            .info {
                                padding: 1.25rem 0;
                                text-align: center;

                                .name {
                                    margin-bottom:0;
                                    font-weight: bold;
                                }

                                .link {
                                    color: $black;
                                    
                                    margin-right: .7rem;
                                    width:3.5rem;
                                    height: 1rem;
                                    padding: .2rem .4rem;
                                    border-radius: 50%;
                                    border: 2px solid $black;

                                    &:hover {
                                        color: $primary;
                                        border: 2px solid $primary;
                                    }
                                    
                                }
                            }

                            
                        }
                    }
                    
                }

            }
        }
    }

    @media screen and (min-width: 992px) and (max-width: 1200px) {
        .about-us {

            padding: 4rem;

            .header {

                margin-bottom: 3rem;

                h1 {
                    font-size: 2rem;
                    margin-top: 1rem;
                    margin-bottom: 1rem;
                }

                .banner {
                    background: linear-gradient( rgba(0,0,0, 0.6), rgba(0,0,0, 0.6)), url('/img/aboutUsBanner.jpg') center;
                    background-size: cover ;
                    height: 60vh;

                    h1 {
                        color: $white;
                        position: absolute;
                        bottom: 4rem;
                        left: 2rem;
                        font-size: 2rem;
                    }
                }
            }

            .content {
                .intro {
                    margin-bottom: 1rem;

                    p {
                        font-size: 1rem;
                    }   
                }

                .vision, .goal {

                    margin-bottom: 2rem;
                    
                    p {
                        font-size: 1rem;
                    }

                    div {
                        margin-bottom: 0rem;
                    }

                    .intro {
                        margin-bottom: 2rem;
                    }

                    .title {
                        
                        h4 {
                            font-weight: bold;
                            font-size: 1rem;
                        }

                        p {
                            font-size: 1rem;
                        }
                    }

                    .details {
                        margin-bottom: 1rem;
                    }
                }

                .humans {

                    align-items: center;
                    margin-bottom: 2rem;

                    .header {

                        margin-bottom: 1rem;
                    
                        h4 {
                            font-weight: bold;
                            font-size: 1.3rem;
                        }

                    } 

                    .image {

                        .card {
                            border: none;
                            box-shadow: none;

                            .info {
                                padding: 1.25rem 0;

                                .name {
                                    margin-bottom:0;
                                    font-weight: bold;
                                }
                            }
                        }
                    }
                }

                .join {

                    margin-bottom: 2rem;
                    
                    .header {

                        margin-bottom: 1rem;

                        h4 {
                            font-size: 1.3rem;
                        }

                    }

                    .positions {

                        margin-bottom: 1rem;;

                        .link{
                            color: $black;
                            font-size: 1.2rem;
                            font-weight: bold;
                            text-decoration: none;
                            margin-bottom: 2rem;

                            background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                            background-size: 100% 200%;
                            background-position: 0 0;
                            transition: background-position 120ms ease-in-out;

                            &:hover {
                                background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                                background-position: 0 100%;
                            }
                        }

                        span{
                            display: block;
                            margin-bottom: .5rem;
                        }
                    }
                }

                .founders {

                    margin-bottom: 3rem;

                    .header {

                        margin-bottom: 1rem;

                        h4 {
                            font-weight: bold;
                            font-size: 1.3rem;
                        }
                    }

                    .image {

                        margin-bottom: 1rem;

                        .card {
                            border: none;
                            box-shadow: none;

                            .info {
                                padding: 1.25rem 0;
                                text-align: center;

                                .name {
                                    margin-bottom:0;
                                    font-weight: bold;
                                }

                                .link {
                                    color: $black;
                                    
                                    margin-right: .7rem;
                                    width:3.5rem;
                                    height: 1rem;
                                    padding: .2rem .4rem;
                                    border-radius: 50%;
                                    border: 2px solid $black;

                                    &:hover {
                                        color: $primary;
                                        border: 2px solid $primary;
                                    }
                                    
                                }
                            }

                            
                        }
                    }
                    
                }

            }
        }
    }

</style>