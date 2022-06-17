<template>
    <div>

        <Header/>
        <main>
        <!-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <Header></Header>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div> -->

            <div class="container">
                <!-- <PostList/> -->
                <!-- va a pescare dentro routes.js il percorso del file e se è coerente con quanto scritto in route.js carica per es HoePage -->
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
