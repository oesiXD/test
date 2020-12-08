<template>
           <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Bienvenido</h5>
                                            <p>Inicia sesión con tu correo electronico</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="images/books.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div>
                                    <a href="http://www.citizenapp.cl/">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="images/Isotipo.png" alt="" class="rounded-circle" height="64">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="form-horizontal" action="index.html">

                                        <div class="form-group">
                                            <label for="username">Correo electronico</label>
                                            <input type="text" class="form-control" id="username" placeholder="Ingrese su correo">
                                        </div>

                                        <div class="form-group">
                                            <label for="userpassword">Contraseña</label>
                                            <input type="password" class="form-control" id="userpassword" placeholder="Ingrese su contraseña">
                                        </div>

                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center">

                            <div>
                                <p>© 2020 Citizen. Creado con <i class="mdi mdi-heart text-danger"></i> por sus Desarrolladores</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    data() {
        return {

        }
    },
    methods: {

    },
    created() {

    },
}
</script>
