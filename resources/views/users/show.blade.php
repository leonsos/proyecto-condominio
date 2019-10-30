@extends('layouts.master')

@section('title')
    Dashboard  prodsd
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Usuarios</h4>
            </div>
            <div class="card-body">
            <p><strong>Nombre: <strong>{{$user->name}}</p>
                <p><strong>Email: <strong>{{$user->email}}</p>
            </div>
          </div>
        </div>        
      </div>
@endsection

@section('scripts')
    
@endsection