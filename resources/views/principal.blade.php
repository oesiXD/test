<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Gestion</title>
</head>
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
        margin-top: -48px;
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


<body>
<div class="container-fluid">
<div class="extra">
<video autoplay muted id="video1" class="video1">
        <source src="https://player.vimeo.com/external/451754254.sd.mp4?s=d91618dfbf25e5b5ebedcc5b6c23d33ac5f5478e&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
    </video>
    <video autoplay muted id="video2" class="video2">
        <source src="https://player.vimeo.com/external/451834055.sd.mp4?s=b395f49a0ac32ec44af2ef2ad307b7149b26ae89&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
    </video>
    <video autoplay muted id="video3" class="video3">
        <source src="https://player.vimeo.com/external/371853906.sd.mp4?s=fbde7b607df84867c1dc8741fc74b9d6433cef9f&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
    </video>
</div>

     <div class="container-fluid" id="app">
       <app-component></app-component>
    </div>
</div>
<script>
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
</script>
    <script src="/js/app.js"></script>
    <script src="/js/all.js"></script>
</body>

</html>
