<div class="form-group">
        {{Form::label('name','Nombre de la Residencia')}}
        {{Form::text('name',null,['class'=>'form-control'])}}
      </div>
      <div class="form-group">
          {{Form::label('address','direccion')}}
          {{Form::text('address',null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('phone','telefono')}}
            {{Form::text('phone',null,['class'=>'form-control'])}}
          </div>
          <div class="form-group">
              {{Form::label('city','ciudad')}}
              {{Form::text('city',null,['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('president','Presidente de junta de condominio')}}
                {{Form::text('president',null,['class'=>'form-control'])}}
              </div>
              <div class="form-group">
                  {{Form::label('president_phone','telefono del presidente')}}
                  {{Form::text('president_phone',null,['class'=>'form-control'])}}
                </div>
        <div class="form-group">
          {{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
        </div>