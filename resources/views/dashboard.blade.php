@extends('app')

@section('content')

<div class="row m-5" id="crud">
    <div class="col-md-12">
        <h1 class="page-header">Gestión de Sistemas</h1>
    </div>
    <hr>
    <div class="col-8">
            <a class="btn btn-outline-primary">Nuevo Sistema</a>
            <table class="table table-bordered table-hover">
                    <thead>
                      <tr class="table-active">
                        <th scope="col">Sistema</th>
                        <th scope="col">Nombre Breve</th>
                        <th scope="col">Fecha creación</th>
                        <th scope="col">Estado</th>
                        <th colspan="2" scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="sistema in sistemas">
                      <th scope="row">@{{ sistema.nombreSiste }}</th>
                      <td>@{{ sistema.nombreBreveSiste }}</td>
                      <td>@{{ sistema.fechaCreaSiste }}</td>
                      <td>@{{ sistema.estaSiste }}</td>
                        <td>
                          <a class="btn btn-outline-warning btn-sm">Editar</a>
                        </td>
                        <td>
                          <a class="btn btn-outline-danger btn-sm" v-on:click.prevent="deleteSistema(sistema)">Eliminar</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
    </div>
    <div class="col-4">
      <pre>
        @{{ $data }}
      </pre>
    </div>    
</div>


@endsection