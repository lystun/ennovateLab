<template>
    <header class="header">
        <div class="logo-box">
            <router-link to="/" active-class="active">
                <img src="/img/full_logo.png" alt="Ennovate lab's logo" class="logo">
            </router-link>
        </div>

        <div class="navigation">

            <input type="checkbox" id="navi-toggle" class="navigation__checkbox">
            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
                <span class="navigation__text">menu</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item">
                        <a href="/about-us" class="navigation__link">About Us</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/startup-foundry" class="navigation__link">Foundry</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/experiments" class="navigation__link">eXperiments</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/resources" class="navigation__link">Resources</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/blog" class="navigation__link">Blog</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</template>

<script>
    export default {
        name : "Header",

        created(){

        },

        methods : {
            
        }

    }
</script>

<style lang="scss" scoped>
    $primary : #ffcc03;
    $white : #fff;
    $black : #000;

    .header {

        height: 5.5rem;
        background: $primary;
        position: relative;
        // width: 100%;

        .logo-box{

            position : absolute;
            top : 1rem;
            left: 5rem;

            .logo {
                height: 4rem;
            }
        }

        .navigation {
            &__checkbox {
                display: none;
            }

            &__button {

                background-color: transparent;
                height: 3rem;
                width: 8rem;
                // position: fixed;
                position: absolute;
                top: 2rem;
                right: 7rem;
                z-index: 2000;
                text-align: center;
                cursor: pointer;
            }

            &__background {
                height: 3rem;
                width: 8rem;
                background: $primary;
                // position: fixed;
                position: absolute;
                top: 2rem;
                right: 7rem;
                z-index: 1000;
                transition: transform 1s cubic-bezier(0.76, 0, 0.24, 1);
            }

            &__nav {
                height: 100vh;
                position: fixed;
                top: 0;
                left: 0;
                z-index: 1500;
                opacity : 0;
                width: 0;
                // opacity : 1;
                // width: 100%;
                background: $primary;
            	transition: all 1s cubic-bezier(0.68, -0.6, 0.32, 1.6);
            }

            &__list {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                list-style: none;
                text-align: center;
                width: 100%;
            }

            &__item {
                margin-bottom: 1.2rem;
            }

            &__link {

                &:link,
                &:visited {
                    font-size: 3rem;
                    font-weight: bold;
                    color: $black;
                    text-transform: uppercase;
                    text-decoration: none;

                    background-image: linear-gradient( transparent 0%, transparent calc(50% - 2rem), $white calc(50% - 2rem) , $white 100%  );
                    background-size: 100% 200%;
                    background-position: 0 0;
                    transition: background-position 120ms ease-in-out;
                
                }
                
                &:active,
                &:hover {
                    background-image: linear-gradient( transparent 0%, transparent calc(50% - 2rem), $white calc(50% - 2rem), $white 100% );
                    background-position: 0 100%;
                }

            }

            &__checkbox {
                
                &:checked ~ .navigation__background  {
                    transform: scale(100);
                }

                &:checked ~ .navigation__nav  {
                    opacity : 1;
                    width: 100%;
                }
            }

            &__icon {

                position : relative;

                &,
                &::before,
                &::after {
                    width: 1.7rem;
                    height: 2.5px;
                    background-color: $black;
                    display: inline-block;
                }

                &::before,
                &::after {
                    content: "";
                    position: absolute;
                    left : 0;
                    transition: all .2s;
                }

                &::before {
                    top : -.5rem;
                }

                &::after {
                    top: .5rem;
                }
            }

            &__text {
                font-weight: bold;
                font-size: 1.5rem;
                position: relative;
                top: -.5rem;
            }

            &__button:hover .navigation__icon::before {
                top: -.6rem;
            }

            &__button:hover .navigation__icon::after {
                top: .6rem;
            }

            &__checkbox:checked + .navigation__button .navigation__icon {
                background-color: transparent;
            }

            &__checkbox:checked + .navigation__button .navigation__icon::before {
                top : 0;
                transform: rotate(135deg);
            }

            &__checkbox:checked + .navigation__button .navigation__icon::after {
                top : 0;
                transform: rotate(-135deg);
            }
         


        }

    }

</style>