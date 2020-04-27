<template>
    <div class="container single_blog">
        <div class="row post">
            <div class="col-md-12">
                <div class="tags">
                    <span>Technology</span>
                </div>
                <h1>The story of a good design</h1>
                <div class="info">
                    <span>By Olajide Ajibade</span>
                    <span>March 27, 2020</span>
                </div>
                
                <img src="/img/startupFoundry/startupFoundryBanner.jpg" alt="Ennovate Lab startup foundry Page" class="img-fluid">
            
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum possimus temporibus neque aspernatur sint alias odio pariatur! Quam repellat minima ad quos temporibus quis rem. Sunt consequuntur laborum eum iusto.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum possimus temporibus neque aspernatur sint alias odio pariatur! Quam repellat minima ad quos temporibus quis rem. Sunt consequuntur laborum eum iusto.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum possimus temporibus neque aspernatur sint alias odio pariatur! Quam repellat minima ad quos temporibus quis rem. Sunt consequuntur laborum eum iusto.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum possimus temporibus neque aspernatur sint alias odio pariatur! Quam repellat minima ad quos temporibus quis rem. Sunt consequuntur laborum eum iusto.</p>
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

    .single_blog {

        padding: 2rem 7rem;
        
        .post {

            h1 {
                font-size: 2.5rem;
                margin-bottom: 1rem;
                font-weight: bold;
            }

            .tags{

                margin-bottom: 1rem;

                span {
                    padding: .3rem .5rem;
                    font-size: 1rem;
                    background: $primary;
                }
            }

            .info {
                span {
                    padding: .3rem .5rem;
                    font-size: 1rem;

                    &:last-child {
                        float:right;
                    }
                }
            }

            .text {
                margin-top: 1rem;

                p{
                    font-size: 1rem;
                }
            }
        }
    }

    @media screen and (max-width: 576px) {
        .single_blog {

            padding: 2rem 1rem;
            
            .post {

                h1 {
                    font-size: 2rem;
                    margin-bottom: 1rem;
                }

                .tags{

                    margin-bottom: 1rem;

                    span {
                        padding: .3rem .5rem;
                        font-size: .75rem;
                        background: $primary;
                    }
                }

                .info {
                    span {
                        padding: .3rem .5rem;
                        font-size: .75rem;

                        &:last-child {
                            float:right;
                        }
                    }
                }

                .text {
                    margin-top: 1rem;

                    p{
                        font-size: 1rem;
                    }
                }
            }
        }
    }

    @media screen and (min-width: 576px) and (max-width: 768px) {
        .single_blog {

            padding: 2rem;
            
            .post {

                h1 {
                    font-size: 2rem;
                    margin-bottom: 1rem;
                }

                .tags{

                    margin-bottom: 1rem;

                    span {
                        padding: .3rem .5rem;
                        font-size: .8rem;
                        background: $primary;
                    }
                }

                .info {
                    span {
                        padding: .3rem .5rem;
                        font-size: .8rem;

                        &:last-child {
                            float:right;
                        }
                    }
                }

                .text {
                    margin-top: 1rem;

                    p{
                        font-size: 1rem;
                    }
                }
            }
        }
    }

    @media screen and (min-width: 768px) and (max-width: 992px) {
         .single_blog {

            padding: 2rem;
            
            .post {

                h1 {
                    font-size: 2rem;
                    margin-bottom: 1rem;
                }

                .tags{

                    margin-bottom: 1rem;

                    span {
                        padding: .3rem .5rem;
                        font-size: .8rem;
                        background: $primary;
                    }
                }

                .info {
                    span {
                        padding: .3rem .5rem;
                        font-size: .8rem;

                        &:last-child {
                            float:right;
                        }
                    }
                }

                .text {
                    margin-top: 1rem;

                    p{
                        font-size: 1rem;
                    }
                }
            }
        }
    }

    @media screen and (min-width: 992px) and (max-width: 1200px) {
         .single_blog {

            padding: 2rem;
            
            .post {

                h1 {
                    font-size: 2.5rem;
                    margin-bottom: 1rem;
                }

                .tags{

                    margin-bottom: 1rem;

                    span {
                        padding: .3rem .5rem;
                        font-size: 1rem;
                        background: $primary;
                    }
                }

                .info {
                    span {
                        padding: .3rem .5rem;
                        font-size: 1rem;

                        &:last-child {
                            float:right;
                        }
                    }
                }

                .text {
                    margin-top: 1rem;

                    p{
                        font-size: 1rem;
                    }
                }
            }
        }
    }
</style>