<template>
    <div class="container-fluid blog">
        <div class="row header">
            <div class="col-md-12">
                <h1>Blog</h1>
            </div>
        </div>

        <div class="row content">
            <div class="card-deck justify-content-center">
                <div class="col-md-6 col-lg-4 posts">
                    <div class="card shadow">
                        <img src="/img/postImage3.png" alt="Ennovate Lab Innovation Hub" class="img-fluid">
                    
                        <div class="card-body">
                            <div class="tags">
                                <small>Design</small>
                                <small>March 27, 2020</small>
                            </div>
                            <h4>The art of Desruptive Design</h4>
                            <p>Lorem  Beatae animi quaerat deleniti debitis porro tempora quam rem, optio nemo, quidem quo suscipit esse illo consequatur, consequuntur ratione obcaecati blanditiis repellendus. </p>
                            <router-link to="/">Continue Reading...</router-link>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 posts">
                    <div class="card shadow">
                        <img src="/img/postImage1.png" alt="Ennovate Lab Innovation Hub" class="img-fluid">
                    
                        <div class="card-body">
                            <div class="tags">
                                <small>Technology</small>
                                <small>March 27, 2020</small>
                            </div>
                            <h4>Ennovate Lab: The Innovation Hub</h4>
                            <p>Building resilient innovation ecosystems in underserved university communities.</p>
                            <router-link to="/">Continue Reading...</router-link>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 posts">
                    <div class="card shadow">
                        <img src="/img/postImage2.png" alt="Ennovate Lab Innovation Hub" class="img-fluid">
                    
                        <div class="card-body">
                            <div class="tags">
                                <small>Technology</small>
                                <small>March 27, 2020</small>
                            </div>
                            <h4>Deep Dive: Vulnerability and Human Connection</h4>
                            <p>Building resilient innovation ecosystems in underserved university communities.</p>
                            <router-link to="/">Continue Reading...</router-link>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>

    $primary : #ffcc03;
    $white : #fff;
    $black : #000;

    .blog {

        padding: 2rem 7rem;
        
        .header {
            
            h1 {
                font-size: 2.5rem;
                margin-bottom: 4rem;
                margin-top: 2rem;
                font-weight: bold;
            }
        }

        .content {

            .posts {
                .card {

                    border: none;
                    margin-bottom: 2rem;

                    .card-body {

                        padding: 1rem;

                        .tags{

                            margin-bottom: 1rem;

                            small {

                                padding: .3rem .5rem;

                                &:first-child {
                                    background: $primary;
                                }

                                &:last-child {
                                    float: right;
                                }
                            }
                        }

                        h4{
                            font-weight: 600;
                            margin-bottom: 1rem;
                            text-transform: capitalize;
                        }

                        p {
                            font-size: 1rem;
                        }

                        a {

                            color: $black;
                            font-size: 1rem;
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

    @media screen and (max-width: 576px) {
        .blog {

            padding: 1rem;
            
            .header {
                
                h1 {
                    font-size: 1.5rem;
                    margin-bottom: 2rem;
                    margin-top: 1rem;
                    font-weight: bold;
                }
            }

            .content {

                .posts {
                    .card {
                        
                        .card-body {

                            .tags{

                                margin-bottom: 1rem;

                                small {

                                    padding: .2rem .4rem;
                                }
                            }

                            h4{
                                font-weight: 600;
                                margin-bottom: 1rem;
                                text-transform: capitalize;
                                font-size: 1.2rem;
                            }

                            p {
                                font-size: .8rem;
                            }
                            
                        }
                    }
                }
            }
        }
    }

    @media screen and (min-width: 576px) and (max-width: 768px) {
        .blog {

            padding: 2rem;
            
            .header {
                
                h1 {
                    font-size: 2rem;
                    margin-bottom: 2rem;
                }
            }

            .content {

                .posts {
                    .card {                        

                        .card-body {

                            h4{
                                font-weight: 600;
                                margin-bottom: 1rem;
                                text-transform: capitalize;
                                font-size: 1.2rem;
                            }

                            p {
                                font-size: .9rem;
                            }
                            
                        }
                    }
                }
            }
        }
    }

    @media screen and (min-width: 768px) and (max-width: 992px) {
        .blog {

            padding: 2rem;
            
            .header {
                
                h1 {
                    font-size: 2rem;
                    margin-bottom: 2rem;
                }
            }

            .content {

                .posts {
                    .card {                        

                        .card-body {

                            h4{
                                font-weight: 600;
                                margin-bottom: 1rem;
                                text-transform: capitalize;
                                font-size: 1.2rem;
                            }

                            p {
                                font-size: .9rem;
                            }
                            
                        }
                    }
                }
            }
        }
    }

    @media screen and (min-width: 992px) and (max-width: 1200px) {
        .blog {

            padding: 2rem;
            
            .header {
                
                h1 {
                    font-size: 2rem;
                    margin-bottom: 2rem;
                }
            }

            .content {

                .posts {
                    .card {                        

                        .card-body {

                            h4{
                                font-weight: 600;
                                margin-bottom: 1rem;
                                text-transform: capitalize;
                                font-size: 1.2rem;
                            }

                            p {
                                font-size: .9rem;
                            }
                            
                        }
                    }
                }
            }
        }
    }

</style>