@extends('layouts.master')

@section('title')
    Dashboard  
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">edificios</h4>
            </div>
            <div class="card-body">
                {!! Form::model($building, ['route' => ['buildings.update', $building->id], 'method'=>'PUT']) !!}
                    @include('buildings.partials.form')
                {!! Form::close() !!}
            </div>
          </div>
        </div>        
      </div>
@endsection

@section('scripts')
    
@endsection