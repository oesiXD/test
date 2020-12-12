<template>
    <div class="container">
               <Login></Login>
        </div>
</template>

<script>

    import Login from  "../components/Login";

    export default {
        components() {
            Login
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
