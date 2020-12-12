<template>
    <body data-sidebar="dark">
        <div id="layout-wrapper">

            <header id="page-topbar">
               <Header></Header>
            </header>

            <!-- ========== Left Sidebar Start ========== -->

          <Sidebar></Sidebar>

            <!-- Left Sidebar End -->
          <router-view/>

            <!-- end main content-->
           <Footer></Footer>
        </div>
    </body>

</template>


<script>
    import Header from  "../components/Header";
    import Sidebar from  "../components/Sidebar";
    import Footer from  "../components/Footer";

    export default {
        components: {
		Header,
		Sidebar,
		Footer
	},
        mounted() {
            console.log('Component mounted yes')
        }
    }
</script>

