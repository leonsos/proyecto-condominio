@extends('layouts.master')

@section('title')
    Dashboard productos
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              
              <h4 class="card-title">Usuarios</h4>
            </div>
            @if(session('info'))
              <div class="container">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <div class="alert alert-success">
                              {{session('info') }}
                          </div>
                      </div>
                  </div>
              </div>
              @endif

            <div class="card-body">
              
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr>
                      <th>
                        ID
                      </th>
                      <th>
                        Nombre
                      </th>
                  </tr>
                  </thead>
                  <tbody>
                   @foreach ($users as $user)
                     <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td width="10px">
                          @can('users.show')
                        <a href="{{route('users.show', $user->id) }}"
                           class="btn btn-default">Ver</a>
                          @endcan
                        </td>
                        <td width="10px"> 
                          @can('users.edit')
                            <a href="{{route('users.edit', $user->id) }}"
                               class="btn btn-default">Editar</a>
                              @endcan
                          </td>
                          <td width="10px">
                            @can('users.destroy')
                              {!! Form::open (['route'=>['users.destroy',$user->id],
                              'method'=>'DELETE'])!!}
                                  <button class="btn btn-danger">Borrar</button>
                              {!!Form::close()!!}
                            @endcan
                          </td>
                    </tr>  
                    @endforeach                  
                  </tbody>
                </table>
                {{$users->render()}}
              </div>
            </div>
          </div>
        </div>        
      </div>
@endsection

@section('scripts')
    
@endsection