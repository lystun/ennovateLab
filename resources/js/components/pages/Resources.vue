<template>
    <div class="container-fluid resources">
        <div class="row header">
            <div class="col-md-12">
                <h1>Resources</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga nihil vel maiores, debitis rerum eveniet. Quas est saepe, aut illo tempora sit voluptatum animi aspernatur voluptatibus repudiandae soluta debitis temporibus?</p>
            </div>
        </div>

        <div class="row content">
            <div class="card-deck justify-content-center">
                <div class="col-lg-6 resource">
                    <div class="card shadow">
                        <div class="row">
                            <div class="col-md-4 cover">
                                <img src="/img/importantQuestions.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-8 description">
                                <h4>The Most important question in the 21st century</h4>
                                <p>One of the greatest leverages in elevating your thinking is the ability to ask the right question.</p>
                                <a href="" >Download</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 resource">
                    <div class="card shadow">
                        <div class="row">
                            <div class="col-md-4 cover">
                                <img src="/img/artOfNarrative.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-8 description">
                                <h4>The art of the narrative</h4>
                                <p>Crafting The Right Story About Yourself And Your Business.</p>
                                <a href="" >Download</a>
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

    }
</script>

<style lang="scss" scoped>

    $primary : #ffcc03;
    $white : #fff;
    $black : #000;

    .resources {

        padding: 2rem 7rem;

        .header {

            margin-bottom: 3rem;
            
            h1 {
                font-size: 2.5rem;
                font-weight: bold;
                margin-bottom: 1rem;
                margin-top: 2rem;
            }

            p {
                font-size: 1rem;
            }
        }

        .content {
            .resource {

                .card .row {

                    padding: 1rem;
                    align-items: flex-end;

                    .description{
                        h4 {
                            font-weight: bold;
                            font-size: 1.3rem;
                            text-transform: capitalize;
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
        .resources {

            padding: 2rem;

            .header {

                margin-bottom: 2rem;
                
                h1 {
                    font-size: 1.5rem;
                    margin-top: 1rem;
                    margin-top: 1rem;
                }

                p {
                    font-size: 1rem;
                }
            }

            .content {
                .resource {

                    .card .row {

                        .description{
                            h4 {
                                font-weight: bold;
                                font-size: 1.3rem;
                                text-transform: capitalize;
                                margin-top: 1rem;
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
    }

    @media screen and (min-width: 576px) and (max-width: 768px) {
        .resources {

            padding: 2rem 4rem;

            .header {

                margin-bottom: 2rem;
                
                h1 {
                    font-size: 2rem;
                    margin-top: 1rem;
                    margin-top: 1rem;
                }

                p {
                    font-size: 1rem;
                }
            }

            .content {
                .resource {

                    .card {

                        margin-bottom: 2rem;

                        .description{
                            h4 {
                                font-weight: bold;
                                font-size: 1.3rem;
                                text-transform: capitalize;
                                margin-top: 1rem;
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
    }

    @media screen and (min-width: 768px) and (max-width: 992px) {
        .resources {

            padding: 2rem 7rem;

            .header {

                margin-bottom: 2rem;
                
                h1 {
                    font-size: 2rem;
                    margin-top: 1rem;
                    margin-top: 1rem;
                }

                p {
                    font-size: 1rem;
                }
            }

            .content {
                .resource {

                    .card {

                        margin-bottom: 2rem;

                        .description{
                            h4 {
                                font-weight: bold;
                                font-size: 1.3rem;
                                text-transform: capitalize;
                                margin-top: 1rem;
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
    }

    @media screen and (min-width: 992px) and (max-width: 1200px) {
        .resources {

            padding: 2rem 3rem;

            .header {

                margin-bottom: 2rem;
                
                h1 {
                    font-size: 2rem;
                    margin-top: 1rem;
                    margin-top: 1rem;
                }

                p {
                    font-size: 1rem;
                }
            }

            .content {
                .resource {

                    .card {

                        margin-bottom: 2rem;

                        .description{
                            h4 {
                                font-weight: bold;
                                font-size: 1.3rem;
                                text-transform: capitalize;
                                margin-top: 1rem;
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
    }
</style>