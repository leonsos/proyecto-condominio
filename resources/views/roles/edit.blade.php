@extends('layouts.master')

@section('title')
    Dashboard  prodsd
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Roles</h4>
            </div>
            <div class="card-body">
                {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method'=>'PUT']) !!}
                    @include('roles.partials.form')
                {!! Form::close() !!}
            </div>
          </div>
        </div>        
      </div>
@endsection

@section('scripts')
    
@endsection