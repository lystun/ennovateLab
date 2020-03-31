<template>
    <div class="container-fluid experiments">
        <div class="row header">
            <div class="col-md-12 pl-0">
                <h1 >Experiments</h1>
            </div>
        </div>

        <div class="row content">
            <div class="col-md-12">
                <h1>Commencing Soon</h1>
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

    .experiments {

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

            background: $primary;
            padding: 6rem 2rem; 

            h1 {
                font-size: 4rem;
            }
        }


    }

    @media screen and (max-width: 576px) {
        .experiments {

            padding: 2rem;

            .header {

                margin-bottom: 3rem;

                h1 {
                    font-size: 1.5rem;
                    margin-bottom: 1rem;
                    margin-top: 1rem;
                }
            }

            .content {

                background: $primary;
                padding: 3rem 1rem; 

                h1 {
                    font-size: 2rem;
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