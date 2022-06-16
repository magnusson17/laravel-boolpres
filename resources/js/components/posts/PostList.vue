<template>
    <div>

        <ul v-if="posts.length">
            <li v-for="post in posts" :key="post.id">
                {{ post.title }}
            </li>
        </ul>
        <p v-else><Loader/></p>
    </div>
</template>

<script>
import axios from 'axios';
import Loader from '../Loader.vue';

export default {
    name: 'PostList',

    components: {
        Loader
    },

    data() {
        return {
            posts: [],
        }
    },
    methods: {
        getPosts() {
            axios.get("http://127.0.0.1:8000/api/posts")
                .then((res) => {
                    console.log(res.data);
                    this.posts = res.data.post;
                })
        }
    },
    mounted() {
        this.getPosts();
    }
}
</script>

<style scoped>
</style>