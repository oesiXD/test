<template>
    <body data-sidebar="dark">
        <div id="layout-wrapper">

            <header id="page-topbar">
                <header-component></header-component>
            </header>

            <!-- ========== Left Sidebar Start ========== -->

            <sidebar-component></sidebar-component>

            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <!-- end main content-->
            <footer-component></footer-component>
        </div>
    </body>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted yes')
        }
    }
</script>

