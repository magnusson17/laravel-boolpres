<template>
    <div>

        <Header/>
        <main>
            <div class="container">
                <!-- <PostList/> -->

                <!-- va a pescare dentro routes.js il percorso del file e se è coerente con quanto scritto in route.js carica per es HomePage -->
                <router-view></router-view>
            </div>
        </main>
    </div>
</template>

<script>
import Header from './Header.vue'
import PostList from './posts/PostList.vue'

export default {
    name: "App",
    components: {
        Header,
        PostList
    }
}

</script>
