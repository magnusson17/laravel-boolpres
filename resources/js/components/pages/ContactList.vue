<template>
    <div>
        contact

        <Alert
        type="sucsess"
        message="alertMessage"
        />

        <div class="form-group">
            <label for="email">Mail</label>

            <input 
            type="text" 
            class="form-control" 
            id="mail" 
            v-model="form.email"
            >
            
            <div class="form-group">
                <label for="message">Message</label>

                <textarea 
                class="form-control" 
                id="message" 
                rows="3"
                v-model="form.message"
                >
                </textarea>
            </div>
        </div>

        <button class="btn btn-primary" @click="sendForm">Invia</button>

    </div>
</template>

<script>
import PostList from '../posts/PostList.vue';
import axios from 'axios';
import Alert from '../Alert.vue';

export default {
    name: "ContactList",

    components: {
        PostList,
        Alert
    },

    data() {
        return {
            form: {
                email: '',
                message: ''
            },
            alertMessage: ''
        }
    },

    methods: {
        sendForm() {
            axios.post('http://127.0.0.1:8000/api/messages', this.form)
            .then((res) => {
                this.form.mail = '',
                this.form.message = '',
                this.alertMessage = 'Messaggio inviato'
            })
        }
    },

    mounted() {
        
    },

}

</script>