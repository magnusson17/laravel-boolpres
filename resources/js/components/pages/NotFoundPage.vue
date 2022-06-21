<template>
    <div>
        <h2>404</h2> 
        <!-- grazie alla dipendenza routing posso scrivere questa fun. attivata al click -->
        <button class="btn btn-primary" @click="$router.back()">Indietro</button>
    </div>
</template>

<script>

export default {
    name: "NotFoundPage",
}

</script>