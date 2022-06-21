<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- se vai su inspector noterai che router link inserisce nel tag delle classi dinamiche -->
            <router-link class="navbar-brand" :to="{ name: 'home' }">Navbar</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!-- posso usare questo metodo :to richiamando il name -->
                    <li class="nav-item active">
                        <router-link class="nav-link" :to="{ name: 'home' }">Home</router-link>
                    </li>
                    <!-- o posso usare questo metodo to richiamando la rotta -->
                    <li class="nav-item">
                        <router-link class="nav-link" to="/contacts">Contacts</router-link>
                    </li>
                    <!-- qua non posso usare router-link perchè admin è gestito da laravel non da vue -->
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/admin">Admin</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <router-link class="nav-link dropdown-toggle" :to="{ name: 'contacts' }" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contacts
                        </router-link>
                        
                    </li>
    
                </ul>
                
            </div>
        </nav>
    </header>
</template>

<script>
export default {
    name: "header"
}
</script>