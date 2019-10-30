@extends('layouts.master')

@section('title')
    Dashboard  Usuarios
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Usuario</h4>
            </div>
            <div class="card-body">
                {!! Form::model($user, ['route' => ['users.update', $user->id], 'method'=>'PUT']) !!}
                    @include('users.partials.form')
                {!! Form::close() !!}
            </div>
          </div>
        </div>        
      </div>
@endsection

@section('scripts')
    
@endsection