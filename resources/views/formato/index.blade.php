@extends('layouts.app')

@section('template_title')
    Formato
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Formato') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('formatos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formatos as $formato)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $formato->nombre }}</td>

                                            <td>
                                                <form action="{{ route('formatos.destroy',$formato->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('formatos.show',$formato->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('formatos.edit',$formato->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $formatos->links() !!}
            </div>
        </div>
    </div>
@endsection
