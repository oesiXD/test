@extends('administracion/paginaPrincipal/principalAdministracion')
@section('content')
<h1>Curso</h1>
<div class="jumbotron">
<table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Visible</th>
                <th>Aciones</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($todosCC as $U)
        <tr>
            <td>{{$U->name}}</td>
            <td>{{$U->description}}</td>
            <td>{{$U->visible}} </td>
            <td>{{$U->id}} </td>

             <td>  <a class="btn btn-info btn-xs"  data-toggle="modal"  data-target="#exampleModalCenter{{$U->id}}" href="{{route('cursocategoria.edit',$U->id)}}"  >
                VER Cursos Asociados
               </a>

             </td>
             <div class="modal fade" id="exampleModalCenter{{$U->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
              <div class="modal-content ">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle"> {{$U->name}} </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
              @if(session()->has('todosC'))
              @foreach ($todosC as $C)
                 {{$C->fullname}}
                 @endforeach
              @else
              <h1>nada</h1>
              @endif
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <a class="btn btn-primary" >Actualizar</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </tbody>
    </table>
</div>
@stop
