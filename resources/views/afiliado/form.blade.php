<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $afiliado->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $afiliado->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha de nacimiento') }}
            {{ Form::text('fecha de nacimiento', $afiliado->fecha de nacimiento, ['class' => 'form-control' . ($errors->has('fecha de nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Nacimiento']) }}
            {!! $errors->first('fecha de nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso') }}
            {{ Form::text('peso', $afiliado->peso, ['class' => 'form-control' . ($errors->has('peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('suscripcion') }}
            {{ Form::text('suscripcion', $afiliado->suscripcion, ['class' => 'form-control' . ($errors->has('suscripcion') ? ' is-invalid' : ''), 'placeholder' => 'Suscripcion']) }}
            {!! $errors->first('suscripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('objetivo') }}
            {{ Form::text('objetivo', $afiliado->objetivo, ['class' => 'form-control' . ($errors->has('objetivo') ? ' is-invalid' : ''), 'placeholder' => 'Objetivo']) }}
            {!! $errors->first('objetivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $afiliado->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

        <div class="form-group">
            {{ Form::label('sede_id') }}
            {{ Form::select('sede_id', $sede , $afiliado->sede_id, ['class' => 'form-control' . ($errors->has('sede_id') ? ' is-invalid' : ''), 'placeholder' => 'Sede Id']) }}
            {!! $errors->first('sede_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('entrenador_id') }}
            {{ Form::select('entrenador_id', $entrenadore , $afiliado->entrenador_id, ['class' => 'form-control' . ($errors->has('entrenador_id') ? ' is-invalid' : ''), 'placeholder' => 'Entrenador Id']) }}
            {!! $errors->first('entrenador_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>