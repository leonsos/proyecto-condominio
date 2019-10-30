@extends('layouts.master')

@section('title')
    Dashboard roles
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              
              <h4 class="card-title"> Roles</h4>

              
              
              @can('roles.create')
            <a href="{{route('roles.create')}}" class="btn btn-primary btn-round float-right">
                  <i class="now-ui-icons ui-1_simple-add "></i>  Crear
              </a>
              @endcan
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
                        Role
                      </th>
                  </tr>
                  </thead>
                  <tbody>
                   @foreach ($roles as $role)
                     <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td width="10px">@can('roles.show')
                        <a href="{{route('roles.show', $role->id) }}"
                           class="btn btn-default">Ver</a>
                          @endcan
                        </td>
                        <td width="10px">@can('roles.edit')
                            <a href="{{route('roles.edit', $role->id) }}"
                               class="btn btn-default">Editar</a>
                              @endcan
                          </td>
                          <td width="10px">
                            @can('roles.destroy')
                              {!! Form::open (['route'=>['roles.destroy',$role->id],
                              'method'=>'DELETE'])!!}
                                  <button class="btn btn-danger">Borrar</button>
                              {!!Form::close()!!}
                            @endcan
                          </td>
                    </tr>  
                    @endforeach                  
                  </tbody>
                </table>
                {{$roles->render()}}
              </div>
            </div>
          </div>
        </div>        
      </div>
@endsection

@section('scripts')
    
@endsection