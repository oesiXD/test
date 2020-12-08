
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="/css/app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mi sitio</title>

    <style>

    </style>
</head>
<header>

    <main>
        <?php function LugarActual($url){
            return request()->is($url) ? 'nav-item active':'';

           }?>

       <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <a class="navbar-brand" href="#">
               <img src="https://educacion.citizenapp.cl/pluginfile.php/1/theme_edumy/headerlogo_mobile/1606679948/citizen.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
               Gestion
             </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>

           <div class=" collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">

                   <li class="{{LugarActual('/')}}">
                       <a  class="nav-link" href="{{route('home')}}">Inicio</a>
                   </li>




            <li>

            </li>


                 </ul>
                 <form class="form-inline my-2 my-lg-0">
  @if(auth()->check())
  @if (auth()->user()->hasRole(['editingteacher','manager']))
      <li><a href="{{route('administracion')}}"><i class="fa fa-users"></i><span>Admimnistracion</span></a></li>
      @else
      @endif
      @else
  @endif
                   <form class="form-inline">
                       @if (auth()->check())
                 <ul class="navbar-nav mr-auto">
                   <li class="nav-item dropdown " >
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                         {{substr (strip_tags (auth()->user()->username ), 0, 10)}}
                       </a>

                       <div class="dropdown-menu " style="  left: -100px;" aria-labelledby="navbarDropdown">

                         <a class="dropdown-item" href="/logout">Cerrar secion</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="#">Something else here</a>
                       </div>
                     </li>
                 </ul>

                  @else



                       @if (auth()->guest())
                        <a  class="{{LugarActual('login')}}" href="/login">
                           <button type="button" class="btn btn-primary btn-sm mr-2">Login</button>
                          </a>


                       @endif
                       @endif
                     </form>
                 </form>

           </div>
         </nav>

    </main>


</header>
<body>
   <div class="container-fluid">
    @yield('contenido')
   </div>
   <br>
    <div >
        <p>&copy 2020 - Organisation {{date('Y')}}</p>
      </div>

    <script src="/js/all.js"></script>
    <script >


    </script>
</body>

</html>
