@extends('layouts.master')

@section('title')
    Dashboard  roles
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Rol</h4>
            </div>
            <div class="card-body">
            <p><strong>Nombre: <strong>{{$role->name}}</p>
                <p><strong>Slug: <strong>{{$role->slug}}</p>
                    <p><strong>Descripcion: <strong>{{$role->description}}</p>
            </div>
          </div>
        </div>        
      </div>
@endsection

@section('scripts')
    
@endsection