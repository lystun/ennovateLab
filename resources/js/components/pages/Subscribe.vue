<template>
    <div class="container-fluid subscribe">
        <div class="row header">
            <div class="col-md-12">
                <h1>Subscribe to Our Mailing List</h1>
            </div>
        </div>

        <div class="row content">
            <div class="col-md-10 info">
                <p>To receive sporadic updates, occasional discount codes, and early access to new product releases.</p>
            </div>
            <div class="col-md-10 form">
                <form method="POST">
                    <div class="form-row">
                        <div class="form-group mb-lg-5 mb-4 col-md-10 col-lg-8">
                            <input type="text" class="form-control form-control-lg"  placeholder="Name">
                        </div>
                        
                        <div class="form-group mb-lg-5 mb-4 col-md-10 col-lg-8">
                            <input type="email" class="form-control form-control-lg" placeholder="Email">
                        </div>
                    </div>

                    <a href="#" type="submit">Subscribe</a>
                </form>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "Subscribe",

}
</script>

<style lang="scss" scoped>

    $primary : #ffcc03;
    $white : #fff;
    $black : #000;

    .subscribe {

        padding: 2rem 7rem;
        background: url('/img/subscribeBckg.png');

        .header {

            margin-bottom: 1rem;

            h1 {
                font-weight: bold;
                font-size: 2.5rem;
                margin-top: 2rem;
                margin-bottom: 1rem;
            }
        }

        .content {

            margin-bottom: 3rem;

            .info {

                padding: 1rem;
                padding-left: 1rem;

                p{
                    font-size: 1.2rem;
                    line-height: 2.5rem;

                    span {
                        font-weight: bold;
                    }
                }
            }

            .form {
                padding: 2rem 1rem;

                .form-control {
                    box-shadow: none;

                    &:focus {
                        border: 1px solid $primary;
                    }
                }

                a {
                    color: $black;
                    font-size: 1.5rem;
                    font-weight: bold;
                    text-decoration: none;

                    background-image: linear-gradient( transparent 0%, transparent calc(50% - 1rem), $primary calc(50% - 1rem), $primary 100% );
                    background-size: 100% 200%;
                    background-position: 0 0;
                    transition: background-position 120ms ease-in-out;

                    &:hover {
                        background-image: linear-gradient( transparent 0%, transparent calc(50% - 1rem), $primary calc(50% - 1rem), $primary 100% );
                        background-position: 0 100%;
                    }
                }
            }
        }


    }

    @media screen and (max-width: 576px) {

        .subscribe {
            padding: 2rem 1rem;

            .header {

                margin-bottom: 1rem;

                h1 {
                    font-size: 1.3rem;
                    margin-bottom: 1rem;
                    margin-top: 2rem;
                }
            }

            .content {

                .info {

                    padding: 1rem;

                    p{
                        font-size: 1rem;
                        line-height: 2rem;

                        span {
                            color: $primary;
                            font-weight: 200;
                        }
                    }
                }

                .form {
                    padding: 1rem;

                    .form-control {
                        box-shadow: none;

                        &:focus {
                            border: 1px solid $primary;
                        }
                    }

                    a {
                        color: $black;
                        font-size: 1.3rem;
                        font-weight: bold;
                        text-decoration: none;

                        background-image: linear-gradient( transparent 0%, transparent calc(50% - 1rem), $primary calc(50% - 1rem), $primary 100% );
                        background-size: 100% 200%;
                        background-position: 0 0;
                        transition: background-position 120ms ease-in-out;

                        &:hover {
                            background-image: linear-gradient( transparent 0%, transparent calc(50% - 1rem), $primary calc(50% - 1rem), $primary 100% );
                            background-position: 0 100%;
                        }
                    }
                }
            }


        }
    }

    @media screen and (min-width: 576px) and (max-width: 768px) {
        .subscribe {

            padding: 2rem;

            .header {

                margin-bottom: 1rem;

                h1 {
                    font-weight: bold;
                    font-size: 1.5rem;
                    margin-bottom: 1rem;
                    margin-top: 2rem;
                }
            }

            .content {

                .info {

                    padding: 1rem;

                    p{
                        font-size: 1rem;
                        line-height: 2rem;

                        span {
                            color: $primary;
                            font-weight: 200;
                        }
                    }
                }

                .form {
                    padding: 1rem;

                    .form-control {
                        box-shadow: none;

                        &:focus {
                            border: 1px solid $primary;
                        }
                    }

                    a {
                        color: $black;
                        font-size: 1.2rem;
                        font-weight: bold;
                        text-decoration: none;

                        background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                        background-size: 100% 200%;
                        background-position: 0 0;
                        transition: background-position 120ms ease-in-out;

                        &:hover {
                            background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% -.7rem), $primary 100% );
                            background-position: 0 100%;
                        }
                    }
                }
            }
        }
    }

    @media screen and (min-width: 768px) and (max-width: 992px) {
        
        .subscribe {
            padding: 3rem;

            .header {

                margin-bottom: 1rem;

                h1 {
                    font-weight: bold;
                    font-size: 2rem;
                    margin-bottom: 1rem;
                    margin-top: 2rem;
                }
            }

            .content {

                .info {

                    padding: 1rem;

                    p{
                        font-size: 1.1rem;
                        line-height: 2rem;

                        span {
                            color: $primary;
                            font-weight: 200;
                        }
                    }
                }

                .form {
                    padding: 1rem;

                    .form-control {
                        box-shadow: none;

                        &:focus {
                            border: 1px solid $primary;
                        }
                    }

                    a {
                        color: $black;
                        font-size: 1.2rem;
                        font-weight: bold;
                        text-decoration: none;

                        background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                        background-size: 100% 200%;
                        background-position: 0 0;
                        transition: background-position 120ms ease-in-out;

                        &:hover {
                            background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% -.7rem), $primary 100% );
                            background-position: 0 100%;
                        }
                    }
                }
            }
        }
    }

    @media screen and (min-width: 992px) and (max-width: 1200px) {
        .subscribe {

            padding: 4rem;

            .header {

                margin-bottom: 1rem;

                h1 {
                    font-weight: bold;
                    font-size: 2rem;
                    margin-bottom: 1rem;
                    margin-top: 2rem;
                }
            }

            .content {

                .info {

                    padding: 1rem;

                    p{
                        font-size: 1.2rem;
                        line-height: 2rem;

                        span {
                            color: $primary;
                            font-weight: 200;
                        }
                    }
                }

                .form {
                    padding: 1rem;

                    .form-control {
                        box-shadow: none;

                        &:focus {
                            border: 1px solid $primary;
                        }
                    }

                    a {
                        color: $black;
                        font-size: 1.2rem;
                        font-weight: bold;
                        text-decoration: none;

                        background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% - .7rem), $primary 100% );
                        background-size: 100% 200%;
                        background-position: 0 0;
                        transition: background-position 120ms ease-in-out;

                        &:hover {
                            background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $primary calc(50% -.7rem), $primary 100% );
                            background-position: 0 100%;
                        }
                    }
                }
            }
        }
    }
</style>