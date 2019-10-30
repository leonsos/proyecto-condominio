<div class="form-group">
        {{Form::label('name','Nombre del edificio')}}
        {{Form::text('name',null,['class'=>'form-control'])}}
      </div>      
        <div class="form-group">
          {{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
        </div>