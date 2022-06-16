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
                <PostList/>
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
