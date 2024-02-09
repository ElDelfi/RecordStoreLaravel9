@extends('layouts.app')

@section('template_title')
    {{ $disco->name ?? "{{ __('Show') Disco" }}
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
                            <span class="card-title">{{ __('Show') }} Disco</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('discos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Genero Id:</strong>
                            {{ $disco->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Formato Id:</strong>
                            {{ $disco->formato_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $disco->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Artista:</strong>
                            {{ $disco->artista }}
                        </div>
                        <div class="form-group">
                            <strong>Album:</strong>
                            {{ $disco->album }}
                        </div>
                        <div class="form-group">
                            <strong>Year:</strong>
                            {{ $disco->year }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
