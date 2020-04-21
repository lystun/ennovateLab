<template>
    <div class="row">
        <div class="col-md-12 my-3">
            <h1>All Categories</h1>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <router-link to="/admin/categories/create">
                            <button class="btn">Create New Category </button>
                        </router-link>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            <tr v-for="(category, index) in categories" :key="index">
                                <td>{{ index+1 }}</td>
                                <td>{{ category.name }}</td>
                                <td>
                                    <router-link 
                                        :to="'/admin/categories/'+category.slug+'/edit'" 
                                        class="btn btn-sm btn-primary mx-1">
                                        <i class="fa fa-edit"></i>
                                    </router-link>
                                    <button class="btn btn-sm btn-danger mx-1" @click="destroy(category.slug)">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    
</template>

<script>
    export default {
        name : "AllCategories",

        data (){
            return {
                no : 1,
                categories : {},
            }
        },

        created (){
            this.$Progress.start()
            this.allCategories();
        },

        methods :{
            
            allCategories(){
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

            destroy(slug){
            
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ffcc03',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                    if (result.value) {
                        axios.delete('/api/categories/'+slug)
                            .then( (res) => {

                                toast.fire({
                                    icon: 'success',
                                    title: 'Category Deleted'
                                })

                                this.allCategories();
                            })
                            .catch( err => {
                                console.log(err)
                                toast.fire({
                                    icon: 'error',
                                    title: 'Failed to Delete Category'
                                })
                            })
                    }
                        
                })
                
            },
        },




    
    
    }
</script>

<style lang="scss" scoped>

    $primary : #ffcc03;
    $white : #fff;
    $black : #000;

    .btn {
        box-shadow : none;    
    }

    .card {

        box-shadow: none;
        border: none;

        .card-header {
        
            background: transparent;

            .card-tools .btn {
                background : $primary;
                color : #fff;
            }
        }
    }

    
    

</style>