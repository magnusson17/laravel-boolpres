<template>
    <div>
        <h2>Pagina singola del post: {{ post.title }}</h2>
        <Alert 
        v-if="isError" 
        message="il post non esiste" 
        type="danger"
        />
        <span>{{ post.content }}</span> 
    </div>
</template>

<script>
import axios from 'axios';
import Alert from '../Alert.vue';

export default {
    name: "PostDeteilPage",
    data() {
        return {
            post: [],
            isError: false,
        };
    },
    components: {
        Alert
    },
        
    methods: {
        getPosts() {
            // il routing mi permette di usare $route che mi da determinate info (this.$route è parte di vue)
            axios.get(`http://127.0.0.1:8000/api/posts/${this.$route.params.slug}`)
                .then((res) => {
                console.log(res.data);
                this.post = res.data;
            }).catch((err) => {
                console.log(err);
                this.isError = true;
            });
            // .catch salva eventuali errori che possono nascere
        }
    },
    mounted() {
        this.getPosts();
        console.log(this.$route);
    },
}
</script>