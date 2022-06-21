<template>
    <div>
        <Loader v-if="isLoading" />

        <!-- faccio un props per recuperare i dati del componente -->
        <Pagination :pagination="pagination"/>

        <div v-if="posts.length">
            <!-- post as posts in php -->
            <div class="card text-center" v-for="post in posts" :key="post.id">
                <div class="card-header">
                    {{ post.title }} - {{ post.category.label }}
                </div>
                <div class="card-body">
                    <p class="card-title">
                        <span v-for="tag in post.tags" :key="tag.id" class="badge"
                            :style="`background-color: ${tag.color}`">{{ tag.label }}</span>
                    </p>
                    <p class="card-text">{{ post.content }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
        </div>
        <p v-else>Non ci sono post</p>
    </div>
</template>

<script>
// importo axios
import axios from 'axios';
import Loader from '../Loader.vue';
import Pagination from '../Pagination.vue';

export default {
    name: 'PostList',

    components: {
        Loader,
        Pagination
    },

    data() {
        return {
            posts: [],
            pagination: {},
            isLoading: true,
        }
    },
    methods: {
        getPosts() {
            axios.get("http://127.0.0.1:8000/api/posts")
                .then((res) => {
                    console.log(res.data);

                    // destrutturazione. Entro denntro un og e al suo interno recupero info come se fossero i parametri e i loro valori che sto cercando di mettere al interno
                    // sto rendendo variabili i parametri che mi servono
                    const { data, current_page, last_page } = res.data.post;

                    this.posts = data;

                    // Sto inserendo questo og {...} dentro l'og pagination: {}
                    this.pagination = {
                        lastPage: last_page,
                        currentpage: current_page
                    }
                    //ora gli dico: dopo che hai chiamato axios, fammi partire una arrow fun. che mi trasformi isLoading in false.
                }).then(() => {
                    this.isLoading = false;
                })
        }
    },
    // vado a richiamare axios
    mounted() {
        this.getPosts();
    }
}
</script>

<style scoped>
</style>