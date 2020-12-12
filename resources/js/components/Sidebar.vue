<template>
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>
                            <li>
                                <router-link to="/" class="nav-link waves-effect">
                                    <i class="bx bx-bar-chart-alt-2"></i>
                                    <span key="t-starter-page">Inicio</span>
                                </router-link>
                            </li>

                            <li>
                                <router-link to="/cursos" class="nav-link waves-effect" exact>
                                    <i class="bx bx-clinic"></i>
                                    <span key="t-horizontal">Cursos</span>
                                </router-link>
                            </li>
                             <li>
                                <router-link to="/usuarios" class="nav-link waves-effect">
                                    <i class="bx bx-user-circle"></i>
                                    <span key="t-starter-page">Usuarios</span>
                                </router-link>
                                <router-link to="/asig" class="nav-link waves-effect" >
                                    <i class="bx bx-clinic"></i>
                                    <span key="t-horizontal">Asignatura</span>
                                </router-link>
                            </li>

                            <li class="menu-title" key="t-pages">Pages</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-user-circle"></i>
                                    <span key="t-authentication">Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html" key="t-login">Login</a></li>
                                    <li><a href="auth-register.html" key="t-register">Register</a></li>
                                    <li><a href="auth-recoverpw.html" key="t-recover-password">Recover Password</a></li>
                                    <li><a href="auth-lock-screen.html" key="t-lock-screen">Lock Screen</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-share-alt"></i>
                                    <span key="t-multi-level">Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);" key="t-level-1-1">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);" key="t-level-2-1">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);" key="t-level-2-2">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
</template>
<script>
export default {

}
</script>
