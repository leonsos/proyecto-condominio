@extends('layouts.master')

@section('title')
    Dashboard  prodsd
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Productos</h4>
            </div>
            <div class="card-body">
            <p><strong>nombre: <strong>{{$product->name}}</p>
                <p><strong>descripcion: <strong>{{$product->description}}</p>
            </div>
          </div>
        </div>        
      </div>
@endsection

@section('scripts')
    
@endsection