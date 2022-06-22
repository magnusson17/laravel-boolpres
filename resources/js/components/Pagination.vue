<template>
    <div>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <!-- col click la pagination manda info. Da figlio a padre, quindi uso Emit -->
                <li v-if="pagination.currentPage > 1" class="page-item">
                    <a class="page-link" href="#" @click="$emit( 'on-page-change', pagination.currentPage - 1 )">Previous</a>
                </li>

                <li v-for="page in pagination.lastPage" :key="page" class="page-item" @click="$emit( 'on-page-change', page )">
                    <a class="page-link" href="#">{{ page }}</a>
                </li>

                <li v-if="pagination.lastPage > pagination.currentPage" class="page-item">
                    <a class="page-link" href="#" @click="$emit( 'on-page-change', pagination.currentPage + 1 )">Next</a>
                </li>
            </ul>
        </nav>


    </div>
</template>

<script>
export default {
    name: 'Pagination',
    props: [
        'pagination'
    ]
}
</script>

<style scoped>
</style>