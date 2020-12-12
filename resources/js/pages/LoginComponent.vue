<template>
           <div class="account-pages">
            <div class="container-fluid">
              <div class="extra">
                    <video autoplay muted id="video1" class="video1">
                    <source :src="video1" type="video/mp4">
                    </video>
                    <video autoplay muted id="video2" class="video2">
                        <source :src="video2" type="video/mp4">
                    </video>
                    <video autoplay muted id="video3" class="video3">
                        <source :src="video3" type="video/mp4">
                    </video>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-md-8 col-lg-6 col-xl-4 mt-5">
                        <div class="card overflow-hidden mt-5">
                            <div class="bg-soft-primary ">
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
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Ingresar</button>
                                        </div>
                                    <div class="mt-5 text-center">
                            <div>
                                <p>© 2020 Citizen. Creado con  <i class="mdi mdi-heart text-danger"></i> por sus Desarrolladores</p>
                            </div>
                        </div>
                                    </form>
                                </div>

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
        video1:"https://player.vimeo.com/external/451754254.sd.mp4?s=d91618dfbf25e5b5ebedcc5b6c23d33ac5f5478e&profile_id=139&oauth2_token_id=57447761",
        video2:"https://player.vimeo.com/external/451834055.sd.mp4?s=b395f49a0ac32ec44af2ef2ad307b7149b26ae89&profile_id=139&oauth2_token_id=57447761",
        video3:"https://player.vimeo.com/external/371853906.sd.mp4?s=fbde7b607df84867c1dc8741fc74b9d6433cef9f&profile_id=139&oauth2_token_id=57447761",
    }
},
    methods: {
            loadVideos(){
                var video1 = document.getElementById('video1');
                var video2 = document.getElementById('video2');
                var video3 = document.getElementById('video3');


                    video1.onended = function(){
                    video2.play();
                    video1.style.opacity=0;
                    video3.style.opacity=0;
                    video2.style.opacity=1;
                    }
                    video2.onended = function(){
                        video3.play();
                        video2.style.opacity=0;
                        video1.style.opacity=0;
                        video3.style.opacity=1;
                    }
                    video3.onended = function(){
                        video1.play();
                        video2.style.opacity=0;
                        video3.style.opacity=0;
                        video1.style.opacity=1;
                    }
            }
        },
    created() {
        this.loadVideos();
    },
}

</script>



<style>
    *{
        padding: 0;
        margin: 0;
    }
    video{
        width: 100%;
        height: 100%;
        position: absolute;
        object-fit: cover;
        transition: all 1.2s linear;
        margin-top: 0;
        margin-left: -12px;
        z-index: -10;
    }
    .video1{
     opacity: 1;
    }
    .video2{
     opacity: 0;
    }
    .video3{
     opacity: 0;
    }
    .extra{
        background-color: rgb(0, 0, 0,0.5);
    }
</style>

