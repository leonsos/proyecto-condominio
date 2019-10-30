@extends('layouts.master')

@section('title')
    Dashboard Residencias
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              
            <h4 class="card-title">Edificios del conjunto  {{$residence->name}}</h4>

              
              
              @can('buildings.create')
            <a href="{{route('buildings.create')}}" class="btn btn-primary btn-round float-right">
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
                            Id
                        </th>
                      <th>
                        Nombre
                      </th>                     
                  </tr>
                  </thead>
                  <tbody>
                   @foreach ($residence->buildings as $building)
                     <tr>    
                        <td>{{$building->id}}</td>                    
                        <td>{{$building->name}}</td> 
                        <td width="10px">                          
                            @can('buildings.show')
                            <a href="{{route('buildings.show', $residence->id) }}"
                               class="btn btn-default btn-sm">Ver</a>
                              @endcan
                          </td> 
                          <td width="10px">@can('buildings.edit')
                              <a href="{{route('buildings.edit', $building->id) }}"
                                 class="btn btn-default btn-sm">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                              @can('buildings.destroy')
                                {!! Form::open (['route'=>['buildings.destroy',$building->id],
                                'method'=>'DELETE'])!!}
                                    <button class="btn btn-danger btn-sm">Borrar</button>
                                {!!Form::close()!!}
                              @endcan
                            </td>                     
                      </tr>  
                    @endforeach                  
                  </tbody>
                </table>                
              </div>
            </div>
          </div>
        </div>        
      </div>
@endsection

@section('scripts')
    
@endsection