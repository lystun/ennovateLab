<template>
    
    <div class="row">
        <div class="col-md-12 mt-3 mb-5">
            <h1>Edit Category</h1>
        </div>
              
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <form @submit.prevent="update">
                    <div class="card-body">
                        <div class="col-md-12 mb-4">
                            <input type="text" class="form-control" placeholder="First Name"
                                v-model.trim="$v.name.$model"
                                :class="{ 'is-invalid' : $v.name.$error, 'is-valid' : !$v.name.$invalid }"
                            >
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">
                                <span class="error" v-if="!$v.name.required">Field is required</span>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn">Create Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>

import { required } from 'vuelidate/lib/validators'

export default {
    name : "CreateCategory",

    data(){
        return {
            name: '',
            error : null,
        }
    },

    validations: {

        name: {
            required,
        },

    },

    created(){
        this.getCategory();
    },

    methods : {

        getCategory(){
            axios.get(`/api/categories/${this.$route.params.slug}`)
                .then(res => {
                    this.name = res.data.name
                })
                .catch(err => {
                    console.log(err)
                })
        },

        update(){

            this.$Progress.start();
            this.$v.$touch()

            if (this.$v.$invalid) {
                
                this.error = true;
                this.$Progress.fail();

            }else {

                const form = {
                    name : this.name,
                }

                axios.patch(`/api/categories/${this.$route.params.slug}`, form)
                    .then(res => {

                        toast.fire({
                            icon: 'success',
                            title: 'Category Created Successfully'
                        })

                        this.$router.push({ name : 'AllCategories' })
                        this.$Progress.finish();
                    })
                    .catch(err => {

                        this.errors = err.response.data.errors
                        
                        this.$Progress.fail();

                        toast.fire({
                            icon: 'error',
                            title: 'Unable to create Category'
                        })
                        
                    })
            }
        }
    }
}
</script>


<style lang="scss" scoped>

    $primary : #ffcc03;
    $white : #fff;
    $black : #000;

    $teal : #28a745;
    $grey : #9E9E9E;
    $red : #dc3545;

    .btn {
        box-shadow : none;    
    }

    .card {

        box-shadow: none;

        .form-control{

            font-size: 1rem;
            padding: 1.5rem 1rem;
            border-radius: 2px;
            border: none;
            border-bottom: 3px solid transparent;
            display: block;

            border-bottom: 1px solid lightgray;
            background-color: $white;
            
            &.is-invalid{
                border-bottom: 3px solid $red;
            }

            &.is-valid {
                border-bottom: 3px solid $teal;
            }

            &:focus {
                outline: none;
                box-shadow: 0 1rem 2rem rgba(#333333, .1);
                border-bottom: 3px solid $primary;

                &.is-invalid{
                    border-bottom: 3px solid $red;
                }

                &.is-valid {
                    border-bottom: 3px solid $teal;
                }
            }
        
            &::-webkit-input-placeholder{
                color: $grey;
            }

        }

        .card-footer {
        
            border-top: none;

            .btn {
                background : $primary;
                color : #fff;
            }
        }
    }
</style>