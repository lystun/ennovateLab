<template>
    <div class="container-fluid seed-cloud">
        <div class="row header">
            <div class="col-md-12 pl-0">
                <h1>Seed Cloud: Our Seed Fund (commencing soon) </h1>
            </div>
        </div>

        <div class="row content justify-content-center">
            <div class="col-md-10 text-center">
                <img src="/img/SeedFund.png" alt="" class="img-fluid">

                <p class="font-weight-bold">We are the first to write cheques for promising startups in our ecosystem.</p>
                <p>Purse size: $10-50k</p>
            </div>
        </div>

    </div>
</template>

<script>

    export default {
        name: "SeedCloud",

    }
</script>

<style lang="scss" scoped>

    $primary : #ffcc03;
    $white : #fff;
    $black : #000;

    .seed-cloud{
        
        padding: 2rem 7rem;

        .header {

            margin-bottom: 5rem;

            h1 {
                font-size: 2.5rem;
            }
        }

        .content {
            img {
                width: 50%;
                margin-bottom: 3rem;
            }

            p{
                font-size: 1.5rem;
            }
        }
    }

    @media screen and (max-width: 576px) {
        .seed-cloud{
        
            padding: 2rem;

            .header {

                margin-bottom: 1rem;

                h1 {
                    font-size: 1.5rem;
                }
            }

            .content {

                img {
                    width: 100%;
                    margin-bottom: 2rem;
                }

                p{
                    font-size: 1.2rem;
                }
            }
        }
    }

    @media screen and (min-width: 576px) and (max-width: 768px) {
        .seed-cloud{
        
            padding: 5rem;

            .header {

                margin-bottom: 3rem;

                h1 {
                    font-size: 2rem;
                }
            }

            .content {

                img {
                    width: 80%;
                    margin-bottom: 3rem;
                }

                p{
                    font-size: 1.2rem;
                }
            }
        }
    }

    @media screen and (min-width: 768px) and (max-width: 992px) {
        .seed-cloud{
        
            padding: 5rem;

            .header {

                margin-bottom: 3rem;

                h1 {
                    font-size: 2rem;
                }
            }

            .content {

                img {
                    width: 80%;
                    margin-bottom: 3rem;
                }

                p{
                    font-size: 1.2rem;
                }
            }
        }
    }

    @media screen and (min-width: 992px) and (max-width: 1200px) {
        .seed-cloud{
        
            padding: 5rem;

            .header {

                margin-bottom: 3rem;

                h1 {
                    font-size: 2rem;
                }
            }

            .content {

                img {
                    width: 80%;
                    margin-bottom: 3rem;
                }

                p{
                    font-size: 1.2rem;
                }
            }
        }
    }

</style>