<template>
    <div>
        <PostList/>
    </div>
</template>

<script>
import PostList from '../posts/PostList.vue';

export default {
    name: "HomePage",

    components: {
        PostList
    }
}


// 1) npm i vue-router@3 (su package.json installa una dipendenza utile per il routing)
// 2) creo la cartella pages (resources/js/components/pages)
// 3) creo in resources/js/components routes.js. Qua inserirò la gestione delle rotte
</script>
