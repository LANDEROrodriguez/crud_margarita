<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tareas') }}
            {{ Form::text('tareas', $tarea->tareas, ['class' => 'form-control' . ($errors->has('tareas') ? ' is-invalid' : ''), 'placeholder' => 'Tareas']) }}
            {!! $errors->first('tareas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alumno_id') }}
            {{ Form::text('alumno_id', $tarea->alumno_id, ['class' => 'form-control' . ($errors->has('alumno_id') ? ' is-invalid' : ''), 'placeholder' => 'Alumno Id']) }}
            {!! $errors->first('alumno_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>