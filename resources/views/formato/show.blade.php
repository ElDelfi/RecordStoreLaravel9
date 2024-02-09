@extends('layouts.app')

@section('template_title')
    {{ $formato->name ?? "{{ __('Show') Formato" }}
@endsection

@section('content')
    <style>
        body {
            background-image: url('/logo-white.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
    </style>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Formato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('formatos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $formato->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
