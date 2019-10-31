@extends('layouts.master')

@section('title')
    Creacion de resindecia
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">residencias</h4>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>'buildings.store']) !!}
                    @include('buildings.partials.form')
                {!!Form::close()!!}
            </div>
          </div>
        </div>        
      </div>
@endsection

@section('scripts')
    
@endsection