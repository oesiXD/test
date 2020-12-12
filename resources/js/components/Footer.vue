<template>
         <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                {{date}} © Citizen.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Desarrollado por Citizen
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
</template>
<script>
export default {
data() {
    return {
        date:new Date().getFullYear()
    }
},
}
</script>
