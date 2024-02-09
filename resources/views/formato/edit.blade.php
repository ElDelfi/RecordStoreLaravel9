@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Formato
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
                        <span class="card-title">{{ __('Update') }} Formato</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('formatos.update', $formato->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('formato.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
