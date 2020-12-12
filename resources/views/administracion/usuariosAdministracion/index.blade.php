@extends('administracion/paginaPrincipal/principalAdministracion')
@section('content')


<h1>Usuarios</h1>
<div class="jumbotron">
@if(auth()->user()->hasRole(['editingteacher','manager']))
<table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Role</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Aciones</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($todosUS as $U)
        <tr>
            <td>{{$U->firstname}}</td>
            <td>{{$U->lastname}}</td>
            <td>
                @foreach ($U->roles as $role)
{{$role->shortname}}
                @endforeach
            </td>
            <td>{{$U->email}}</td>
           <td> @if ($U->telefono == null)
            <p>no tiene numero</p>
            @else
           {{$U->telefono}}
             @endif</td>
             <td>  <a class="btn btn-info btn-xs" data-toggle="modal" data-target="#exampleModalCenter{{$U->id}}"   >
                Editar
               </a>

               <form  style="display: inline" >
                  <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModalCenterEliminar{{$U->id}}" > Eliminar</a>
               </form></td>
        </tr>
        <div class="modal fade" id="exampleModalCenterEliminar{{$U->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Estas apunto de eliminar a {{$U->nombre}} {{$U->apellido}} estas seguro</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    {{$U->nombre}} {{$U->apellido}}
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <form  style="display: inline" method="POST" action="{{route('usuarios.destroy',$U->id)}}">
                    {{csrf_field()}} {{method_field('DELETE')}}
                      <button class="btn btn-danger btn-xs" type="submit" > Eliminar</button>
                   </form>
                </div>
              </div>
            </div>
          </div>


        <div class="modal fade" id="exampleModalCenter{{$U->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Estas editando a {{$U->nombre}} {{$U->apellido}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    {{$U->nombre}} {{$U->apellido}}
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <a class="btn btn-primary" href="{{route('usuarios.edit',$U->id)}}">Actualizar</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </tbody>
    </table>



</div>
@endif
@stop
