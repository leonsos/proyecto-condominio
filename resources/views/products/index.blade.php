@extends('layouts.master')

@section('title')
    Dashboard productos
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              
              <h4 class="card-title"> Productos</h4>

              
              
              @can('products.create')
            <a href="{{route('products.create')}}" class="btn btn-primary btn-round float-right">
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
                  </tr>
                  </thead>
                  <tbody>
                   @foreach ($products as $product)
                     <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td width="10px">
                          @can('products.show')
                        <a href="{{route('products.show', $product->id) }}"
                           class="btn btn-default">Ver</a>
                          @endcan
                        </td>
                        <td width="10px">@can('products.edit')
                            <a href="{{route('products.edit', $product->id) }}"
                               class="btn btn-default">Editar</a>
                              @endcan
                          </td>
                          <td width="10px">
                            @can('products.destroy')
                              {!! Form::open (['route'=>['products.destroy',$product->id],
                              'method'=>'DELETE'])!!}
                                  <button class="btn btn-danger">Borrar</button>
                              {!!Form::close()!!}
                            @endcan
                          </td>
                    </tr>  
                    @endforeach                  
                  </tbody>
                </table>
                {{$products->render()}}
              </div>
            </div>
          </div>
        </div>        
      </div>
@endsection

@section('scripts')
    
@endsection