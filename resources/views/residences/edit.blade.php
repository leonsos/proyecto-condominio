@extends('layouts.master')

@section('title')
    Dashboard  
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">residencias</h4>
            </div>
            <div class="card-body">
                {!! Form::model($residence, ['route' => ['residences.update', $residence->id], 'method'=>'PUT']) !!}
                    @include('residences.partials.form')
                {!! Form::close() !!}
            </div>
          </div>
        </div>        
      </div>
@endsection

@section('scripts')
    
@endsection