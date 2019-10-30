@extends('layouts.master')

@section('title')
    Dashboard Residencias
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              
              <h4 class="card-title">Residencias</h4>

              
              
              @can('residences.create')
            <a href="{{route('residences.create')}}" class="btn btn-primary btn-round float-right">
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
                        Nombre
                      </th>
                      <th>
                          Direccion
                       </th>
                       <th>
                          telefono
                       </th>
                      <th>
                         city
                      </th>
                      <th>
                          presidente
                       </th>
                       <th>
                          telefono de presidente
                       </th>
                  </tr>
                  </thead>
                  <tbody>
                   @foreach ($residences as $residence)
                     <tr>
                        <td>{{$residence->id}}</td>
                        <td>{{$residence->name}}</td>
                        <td>{{$residence->address}}</td>
                        <td>{{$residence->phone}}</td>
                        <td>{{$residence->city}}</td>
                        <td>{{$residence->president}}</td>
                        <td>{{$residence->president_phone}}</td>
                        <td width="10px">                          
                            @can('residences.show')
                            <a href="{{route('residences.show', $residence->id) }}"
                               class="btn btn-default btn-sm">Ver</a>
                              @endcan
                          </td>
                          <td width="10px">@can('residences.edit')
                              <a href="{{route('residences.edit', $residence->id) }}"
                                 class="btn btn-default btn-sm">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                              @can('residences.destroy')
                                {!! Form::open (['route'=>['residences.destroy',$residence->id],
                                'method'=>'DELETE'])!!}
                                    <button class="btn btn-danger btn-sm">Borrar</button>
                                {!!Form::close()!!}
                              @endcan
                            </td>
                    </tr>  
                    @endforeach                  
                  </tbody>
                </table>
                {{$residences->render()}}
              </div>
            </div>
          </div>
        </div>        
      </div>
@endsection

@section('scripts')
    
@endsection