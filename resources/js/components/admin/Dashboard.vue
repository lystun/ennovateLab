<template>
    <div class="row">

        <div class="col-md-12 my-3">
            <h1>Dashboard</h1>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Visitors</span>
                    <span class="info-box-number">
                        10 <small>%</small>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Blog Posts</span>
                    <span class="info-box-number">{{ posts }}</span>
                </div>
            </div>
        </div>

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">760</span>
                </div>
            </div>
        </div> -->

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-thumbs-up"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Subscribers</span>
                    <span class="info-box-number">2,000</span>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>
export default {
    data(){
        return {
            posts : ''
        }
    },

    created(){
        this.getPosts();
    },

    methods : {
        getPosts(){
            axios.get('/api/posts')
                .then(res =>{
                    this.posts = res.data.data.length
                    console.log(this.posts);
                })
                .catch(err => {

                })
        }
    }


}
</script>

<style>

</style>