<template>
    <div class="row">
        <div class="col-md-12 my-3">
            <h1>All Posts</h1>
        </div>

        <div class="col-md-12">            
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <router-link to="/admin/posts/create">
                            <button class="btn">Create New Post </button>
                        </router-link>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Written By</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            <tr v-for="(post, index) in posts" :key="index">
                                <td>{{ index+1 }}</td>
                                <td>{{ post.title }}</td>
                                <td>{{ post.category }}</td>
                                <td>{{ post.user }}</td>
                                <td>{{ post.created_at }}</td>
                                <td>
                                    <router-link 
                                        :to="'/admin/posts/'+post.path+'/edit'" 
                                        class="btn btn-sm btn-primary mx-1">
                                        <i class="fa fa-edit"></i>
                                    </router-link>
                                    <button class="btn btn-sm btn-danger mx-1" @click="destroy(post.path)">
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
        name : "AllPosts",

        data (){
            return {
                no : 1,
                posts : {},
            }
        },

        created (){
            this.$Progress.start()

            this.allPosts();
        },

        methods :{
            
            allPosts(){
                axios.get('/api/posts')
                    .then( res => {
                        this.posts = res.data.data
                        this.$Progress.finish()
                    })
                    .catch(err => {
                        this.$Progress.fail()

                        toast.fire({
                            type: 'error',
                            title: 'Unable to load Posts, Try Reloading'
                        })
                    })
            },

            edit(){

            },

            destroy(slug){
            
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                    if (result.value) {
                        axios.delete('/api/post/'+slug)
                            .then( (res) => {

                                toast.fire({
                                    type: 'success',
                                    title: 'Post Deleted'
                                })

                                this.allPosts();
                            })
                            .catch( err => {
                                toast.fire({
                                    type: 'error',
                                    title: 'Failed to Delete Post'
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