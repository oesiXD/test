<template>
    <div>
     <Admin></Admin>
    </div>
</template>

<script>
import Admin from "./pages/AdminComponent";

    export default {
        components:{
            Admin
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
