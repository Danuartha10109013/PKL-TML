<template>
    <div>
        <h1>HOME test second commit, ke tiga</h1>
        <router-link to="/test"> Take me to Test page </router-link>
        <br />
        <router-link to="/pengecekan/create"> Cek </router-link>
        <br />
        <button @click.prevent="triggerEndpoint">Trigger Endpoint</button>
        <p v-if="response">{{ response.data }}</p>
    </div>
</template>

<script>
import axios from "axios";
import { ref } from "vue";

export default {
    setup() {
        const response = ref(null);

        const triggerEndpoint = async () => {
            try {
                const res = await axios.get("/api/test-me");
                response.value = res;
            } catch (error) {
                // Handle the error here
                console.error(error);
            }
        };

        return {
            response,
            triggerEndpoint,
        };
    },
};
</script>
