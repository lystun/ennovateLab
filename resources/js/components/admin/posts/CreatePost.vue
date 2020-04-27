<template>
    <div class="row">
        <div class="col-md-12 mt-3 mb-5">
            <h1>Create New Post</h1>
        </div>
              
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <form @submit.prevent="create">
                    <div class="card-body">

                        <div class="col-md-12 mb-4">
                            <input type="text" class="form-control" placeholder="Name"
                                v-model.trim="$v.form.title.$model"
                                :class="{ 'is-invalid' : $v.form.title.$error, 'is-valid' : !$v.form.title.$invalid }"
                            >
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">
                                <span class="error" v-if="!$v.form.title.required">Field is required</span>
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <input type="text" class="form-control" placeholder="Written By"
                                v-model.trim="$v.form.user.$model"
                                :class="{ 'is-invalid' : $v.form.title.$error, 'is-valid' : !$v.form.user.$invalid }"
                            >
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">
                                <span class="error" v-if="!$v.form.user.required">Field is required</span>
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <select class="custom-select" 
                                v-model="$v.form.category_id.$model" 
                                :class="{ 'is-invalid' : $v.form.category_id.$error, 'is-valid' : !$v.form.category_id.$invalid }"
                                >
                                <option value="" disabled selected>Select Category</option> 
                                <option
                                    v-for="(category, index) in categories" 
                                    :key="index" 
                                    :value="category.id">
                                    {{category.name}}
                                </option>
                            </select>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">
                                <span class="error" v-if="!$v.form.category_id.required">Please select Category</span>
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <input type="file" 
                                class="form-control" id="screenshot"
                                :class="{ 'is-invalid' : photoStatus == false, 'is-valid' : photoStatus == true }"
                                @change="uploadImage"
                            > 
                            <div class="invalid-feedback">
                                <span>File Size Must be less than 5mb and in either (png, jpg, jpeg) format </span>
                            </div>
                            <small v-if="photoMsg" class="text-danger">Field is required</small>
                        </div>

                        <div class="col-md-12 mb-4">
                            <label for="screenshot">Post Article</label>
                            <ckeditor :editor="editor" v-model="this.form.article" :config="config" tag-name="textarea"></ckeditor>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn">Create Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>

    import { required } from 'vuelidate/lib/validators';
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export default {
    name : "CreatePost",

    data(){
        return {

            form : {
                title :  null,
                category_id : null,
                photo : null,
                user : null,
                article : null,
            },

            photoStatus : null,
            photoMsg : '',
            error : null,
            categories: {},

            editor : ClassicEditor,
            config : {

            },

        }
    },

    validations: {

        form : {
            title: {
                required,
            },
            category_id: {
                required,
            },
            photo : {
                required
            },            
            user : {
                required
            },
            article : {
                required
            }
        }

    },

    created(){
        this.getCategories();

    },

    methods : {

        getCategories(){
            axios.get('/api/categories')
                .then( res => {

                    this.categories = res.data
                    this.$Progress.finish()
                })
                .catch(err => {
                    this.$Progress.fail()

                    toast.fire({
                        type: 'error',
                        title: 'Unable to load Categories, Try Reloading'
                    })
                })
        },

        uploadImage(e){

            const photo = e.target.files[0];
            this.photoMsg = '';

            if( photo['size'] < 5000000 ){
                let reader = new FileReader();
            
                reader.onloadend = (photo) =>{
                    this.form.photo = reader.result
                }

                reader.readAsDataURL(photo);

                this.photoMsg = '';
                this.photoStatus = true;

            }else {
                this.photoStatus = false;
            }

        },

        create(){

            this.$Progress.start();

            this.photoMsg  = (this.photoStatus) ? '' : "Field is Required"
            this.$v.$touch()

            if (this.$v.$invalid || !this.photoStatus) {
                
                this.error = true;
                this.$Progress.fail();

            }else {

                console.log(this.form);

                axios.post('/api/posts', this.form)
                    .then(res => {

                        toast.fire({
                            icon: 'success',
                            title: 'Post Created Successfully'
                        })

                        this.$router.push({ name : 'AllPosts' })
                        this.$Progress.finish();
                    })
                    .catch(err => {
                        
                        this.$Progress.fail();

                        toast.fire({
                            icon: 'error',
                            title: 'Unable to create Post'
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
    $orange : #FF9800;
    $grey : #9E9E9E;
    $red : #dc3545;
    $secondary : #333333;
    $background : #f1f1f1;

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

        select {

            font-size: 1rem;
            border-radius: 2px;
            background-color : $background;
            border-bottom: 3px solid transparent;
            border: none;
            display: block;
            height: 3rem;
            outline: none;

            background-color: #fff;
            border-bottom: 1px solid lightgray;
            border-top: 0px!important;

            box-shadow: none;

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