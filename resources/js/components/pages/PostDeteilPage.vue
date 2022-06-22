<template>
    <div>
        <p>Pagina singola del post: {{ post.title }}</p>
        <span>{{ post.content }}</span> 
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: "PostDeteilPage",

    data() {
        return {
            post: [],
        }
    },
    methods: {
        getPosts() {
            // il routing mi permette di usare $route che mi da determinate info (this.$route è parte di vue)
            axios.get(`http://127.0.0.1:8000/api/posts/${ this.$route.params.id }`)
                .then((res) => {
                    console.log(res.data);

                    this.post = res.data;
                })
        }
    },
    mounted() {
        this.getPosts();
        console.log( this.$route );
    }
}
</script>