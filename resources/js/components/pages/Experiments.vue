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

                <p class="sandbox">Sandbox</p>
                <p>SandBox Creativity is a shared practice and the connection of dots is the magic that leads to Eureka! moments. 
                    Our Experiments SandBox is a virtual playground for crowdsourced solutions born out of the shared discovery of insights that matter. 
                    We value interdisciplinarity and multidisciplinarity which are simply other ways of describing how communities build solutions for communities. 
                    But much more importantly, we cherish the creativity of play. 
                    Of laughter and adventure and the wildest surprises in the meekest of places and that’s why we have chosen SandBox as a worthy description of the shared space within which our experiments are carried out. 
                </p>
                    
                <p>Our modesty restrains us from saying more. We will rather do! Be the first to know when we launch.</p>

                <a href="">Be the first to know when we launch.</a>
            </div>
        </div>

    </div>
</template>

<script>

    export default {
        name: "Experiments",

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
                margin-top: 2rem;
                margin-bottom: 1rem;
            }
        }

        .content {

            background: url('/img/experiments/background.jpg') center no-repeat;
            background-size: cover;
            padding: 6rem 2rem; 

            h1 {
                font-size: 4rem;
                font-weight: bold;
                margin-bottom: 3rem; 
            }

            p {
                font-size: 1rem;
                
                &.sandbox {
                    font-weight: bold;
                }
            }

            a {
                color: $black;
                font-size: 1rem;
                font-weight: bold;
                text-decoration: none;

                background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $white calc(50% - .7rem), $white 100% );
                background-size: 100% 200%;
                background-position: 0 0;
                transition: background-position 120ms ease-in-out;

                &:hover {
                    background-image: linear-gradient( transparent 0%, transparent calc(50% - .7rem), $white calc(50% - .7rem), $white 100% );
                    background-position: 0 100%;
                }
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
                    font-weight: bold;
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