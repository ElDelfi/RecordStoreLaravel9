<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('genero_id') }}
            {{ Form::select('genero_id', $generos, ['class' => 'form-control' . ($errors->has('genero_id') ? ' is-invalid' : ''), 'placeholder' => 'Genero Id']) }}
            {!! $errors->first('genero_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('formato_id') }}
            {{ Form::select('formato_id', $formatos, ['class' => 'form-control' . ($errors->has('formato_id') ? ' is-invalid' : ''), 'placeholder' => 'Formato Id']) }}
            {!! $errors->first('formato_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $disco->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('artista') }}
            {{ Form::text('artista', $disco->artista, ['class' => 'form-control' . ($errors->has('artista') ? ' is-invalid' : ''), 'placeholder' => 'Artista']) }}
            {!! $errors->first('artista', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('album', $disco->album, ['class' => 'form-control' . ($errors->has('album') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('album', '<div class="invalid-feedback">:message</div>') !!}
            {{-- si da error cambiar donde pone estado por album otra vez --}}
        </div>
        <div class="form-group">
            {{ Form::label('year') }}
            {{ Form::text('year', $disco->year, ['class' => 'form-control' . ($errors->has('year') ? ' is-invalid' : ''), 'placeholder' => 'Year']) }}
            {!! $errors->first('year', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
