@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Disco
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
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Disco</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('discos.update', $disco->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('disco.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
