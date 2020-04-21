<template>
    <div class="container-fluid contact">
        <div class="row header">
            <div class="col-md-12">
                <h1>Want to Get In Touch?</h1>
            </div>
        </div>

        <div class="row content">
            <div class="col-md-6 info">
                <p class="font-weight-bold">We'd love to hear from you.</p>

                <p>
                    You can email us at <span> hello@ennovatelab.com,</span>
                    call the lab on <span> +234 1234567, </span>
                    or visit us at <span>50, Ogbomoso-ilorin Road, Ogbomoso, Oyo State </span>
                </p>
            </div>
            <div class="col-md-6 form">
                <form method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control"  placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="9"></textarea>
                    </div>

                    <a href="#" type="submit">Send Message</a>
                    
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {    
    name: "Contact",
}
</script>

<style lang="scss" scoped>

    $primary : #ffcc03;
    $white : #fff;
    $black : #000;

    .contact {

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

            .info {

                padding: 2rem;
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
                padding: 2rem;

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
        .contact {
            padding: 2rem 1rem;

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
                        font-size: 1.2rem;
                        line-height: 2.5rem;

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
    }

    @media screen and (min-width: 576px) and (max-width: 768px) {
        .contact {

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
        
        .contact {
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
        .contact {

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