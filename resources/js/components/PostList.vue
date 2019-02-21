<template>
    <div class="row">
        <div v-for="post in posts" class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 v-text="post.title"></h4>
                </div>
                <div class="card-body">
                    <p v-text="post.body"></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
        created() {
            axios.get('/posts') .then(response => (this.posts = response.data));

            Echo.channel('posts')
                .listen('NewPostCreated', ({post}) => {
                    this.posts.splice(0, 0, (post))
                })
        },
    }
</script>
