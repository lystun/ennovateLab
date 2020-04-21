<template>
    <div>
        <Header />
        <router-view></router-view>
        <vue-progress-bar></vue-progress-bar>
        <Footer />
    </div>
</template>

<script>
    
    import Header from './Header'
    import Footer from './Footer'

    export default {
        name: "AppHome",

        components : {
            Header, Footer
        },

        mounted() {

        }
    }
</script>

<style lang="scss" scoped>

    $primary : #ffcc03;
    $white : #fff;
    $black : #000;

    // .navigation {
    //         &__checkbox {
    //             display: none;
    //         }

    //         &__button {
    //             background-color: $white;
    //             height: 4rem;
    //             width: 4rem;
    //             position: fixed;
    //             top: 2rem;
    //             right: 5rem;
    //             border-radius: 50%;
    //             z-index: 2000;
    //             box-shadow: 0 1rem 3rem rgba($black, .1);
    //             text-align: center;
    //             cursor: pointer;
    //         }

    //         &__background {
    //             height: 3.5rem;
    //             width: 3.5rem;
    //             border-radius: 50%;
    //             position: fixed;
    //             top: 2rem;
    //             right: 5rem;
    //             background: $primary;
    //             z-index: 1000;
    //             transition: transform .8s cubic-bezier(0.76, 0, 0.24, 1);
    //         }

    //         &__nav {
    //             height: 100vh;
    //             position: fixed;
    //             top: 0;
    //             left: 0;
    //             z-index: 1500;
    //             opacity : 0;
    //             width: 0;
    //         	transition: all .8s cubic-bezier(0.68, -0.6, 0.32, 1.6);
    //         }

    //         &__list {
    //             position: absolute;
    //             top: 50%;
    //             left: 50%;
    //             transform: translate(-50%, -50%);
    //             list-style: none;
    //             text-align: center;
    //             width: 100%;

    //         }

    //         &__item {
    //             margin-bottom: 1.2rem;
    //         }

    //         &__link {

    //             &:link,
    //             &:visited {
    //                 font-size: 3rem;
    //                 font-weight: bold;
    //                 color: $black;
    //                 text-transform: uppercase;
    //             }
                
    //             &:active,
    //             &:hover {
    //                 color: $white;
    //             }

    //         }

    //         &__checkbox {
                
    //             &:checked ~ .navigation__background  {
    //                 transform: scale(80);
    //             }

    //             &:checked ~ .navigation__nav  {
    //                 opacity : 1;
    //                 width: 100%;
    //             }
    //         }

    //         &__icon {

    //             position : relative;
    //             margin-top: 1.7rem;

    //             &,
    //             &::before,
    //             &::after {
    //                 width: 1.7rem;
    //                 height: 2px;
    //                 background-color: $black;
    //                 display: inline-block;
    //             }

    //             &::before,
    //             &::after {
    //                 content: "";
    //                 position: absolute;
    //                 left : 0;
    //                 transition: all .2s;
    //             }

    //             &::before {
    //                 top : -.5rem;
    //             }

    //             &::after {
    //                 top: .5rem;
    //             }
    //         }

    //         &__button:hover .navigation__icon::before {
    //             top: -.7rem;
    //         }

    //         &__button:hover .navigation__icon::after {
    //             top: .7rem;
    //         }

    //         &__checkbox:checked + .navigation__button .navigation__icon {
    //             background-color: transparent;
    //         }

    //         &__checkbox:checked + .navigation__button .navigation__icon::before {
    //             top : 0;
    //             transform: rotate(135deg);
    //         }

    //         &__checkbox:checked + .navigation__button .navigation__icon::after {
    //             top : 0;
    //             transform: rotate(-135deg);
    //         }
         


    //     }

    @media screen and (max-width: 576px) {
        
    }

    @media screen and (min-width: 576px) and (max-width: 768px) {
        
    }

    @media screen and (min-width: 768px) and (max-width: 992px) {
        
    }

    @media screen and (min-width: 992px) and (max-width: 1200px) {
        
    }


</style>